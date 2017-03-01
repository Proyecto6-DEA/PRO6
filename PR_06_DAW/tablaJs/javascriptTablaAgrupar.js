/**
 * @author: Yura Knoxville
 * @version: v1.0.0
 */
!function ($) {
    'use strict';
    
    var initBodyCaller,
        tableGroups;
    
    // it only does '%s', and return '' when arguments are undefined
    var sprintf = function (str) {
        var args = arguments,
            flag = true,
            i = 1;
        str = str.replace(/%s/g, function () {
            var arg = args[i++];
            if (typeof arg === 'undefined') {
                flag = false;
                return '';
            }
            return arg;
        });
        return flag ? str : '';
    };
    var groupBy = function (array , f) {
        var groups = {};
        array.forEach(function(o) {
            var group = f(o);
            groups[group] = groups[group] || [];
            groups[group].push(o);
        });
        
        return groups;
    };
    $.extend($.fn.bootstrapTable.defaults, {
        groupBy: false,
        groupByField: ''
    });
    var BootstrapTable = $.fn.bootstrapTable.Constructor,
        _initSort = BootstrapTable.prototype.initSort,
        _initBody = BootstrapTable.prototype.initBody,
        _updateSelected = BootstrapTable.prototype.updateSelected;
    
    BootstrapTable.prototype.initSort = function () {
        _initSort.apply(this, Array.prototype.slice.apply(arguments));
        
        var that = this;
        tableGroups = [];
        
        if ((this.options.groupBy) && (this.options.groupByField !== '')) {
            
            if ((this.options.sortName != this.options.groupByField)) {
                this.data.sort(function(a, b) {
                    return a[that.options.groupByField].localeCompare(b[that.options.groupByField]);
                });
            }
            
            var that = this;
            var groups = groupBy(that.data, function (item) {
                return [item[that.options.groupByField]];
            });
            var index = 0;
            $.each(groups, function(key, value) {
                tableGroups.push({
                    id: index,
                    name: key,
                    estat:value[0].current_state,
                    total:0    //Totals
                });
                value.forEach(function(item) {
                    if (!item._data) {
                        item._data = {};
                    }
                    item._data['parent-index'] = index;
                });
                index++;
            });
            
            that.data.forEach(function(item){
                var idx=-1;
                idx=$.map(tableGroups, function(itemTotal,ele){
                    if(itemTotal.name==item.reference){
                        return ele;
                    };
                });
                tableGroups[idx[0]].total+=parseFloat(item.TOTAL);
            });
            /* Totales  FIN */
        }  
    }
    
    BootstrapTable.prototype.initBody = function () {             
        initBodyCaller = true;
        
        _initBody.apply(this, Array.prototype.slice.apply(arguments));
        
        if ((this.options.groupBy) && (this.options.groupByField !== '')) {
            var that = this,
                checkBox = false,
                visibleColumns = 0;
            
            this.columns.forEach(function(column) {
                if (column.checkbox) {
                    checkBox = true;
                } else {
                    if (column.visible) {
                        visibleColumns++;
                    }
                }
            });
            
            tableGroups.forEach(function(item){
                var html = [];
                
                html.push(sprintf('<tr class="info groupBy" data-group-index="%s">', item.id));
                if (checkBox) {
                    html.push('<td class="bs-checkbox">',                      
                        '<input name="btSelectGroup" type="checkbox" />',
                        '</td>'
                    );
                }
                
                
                html.push('<td',      
                    sprintf(' colspan="%s"', visibleColumns-2),
                    '><b>COMANDA:</b> ', item.name, '</td>'
                );                
                /* Totales  */
                html.push('<td>', item.total, ' €</td>');
                /* Totales  FIN */
                /* Controles  */
                html.push('<td><div id="TRAMITAR"><div class="col-md-2 col-md-offset-4"><a class="text-success" href="javascript:void(0);" onclick="updateReg(\''+item.name+'\',\''+4+'\',\''+item.id+'\')" title="TRAMITAR"><i class="glyphicon glyphicon-ok"></i></a></div><div class="col-md-5 col-md-offset-1"><a class="editG text-danger" href="javascript:void(0);" onclick="updateReg(\''+item.name+'\',\''+6+'\')" title="DENEGAR" data-toggle="modal"><i class="glyphicon glyphicon-remove"></i></a></div></div></td>');
                /* Totales  FIN */
                
                html.push('</tr>');
                
                that.$body.find('tr[data-parent-index='+item.id+']:first').before($(html.join('')));
            });
            
            this.$selectGroup = [];
            this.$body.find('[name="btSelectGroup"]').each(function() {
                var self = $(this);
                
                that.$selectGroup.push({
                    group: self,
                    item: that.$selectItem.filter(function () {
                        return ($(this).closest('tr').data('parent-index') === 
                                self.closest('tr').data('group-index'));
                    })
                });
            });
            
            this.$container.off('click', '.groupBy')
                .on('click', '.groupBy', function() {
                    $(this).toggleClass('expanded');
                    that.$body.find('tr[data-parent-index='+$(this).closest('tr').data('group-index')+']').toggleClass('hidden');
                });
            this.$container.off('click', '#TRAMITAR')
                .on('click', '#TRAMITAR', function(event) {
                    alert("enviar");
                    event.stopImmediatePropagation();
                })
            
            this.$container.off('click', '[name="btSelectGroup"]')
                .on('click', '[name="btSelectGroup"]', function (event) {
                    event.stopImmediatePropagation();
                
                    var self = $(this);
                    var checked = self.prop('checked');
                    that[checked ? 'checkGroup' : 'uncheckGroup']($(this).closest('tr').data('group-index'));
                });
        }
        
        initBodyCaller = false;
        this.updateSelected();
    };
    
    BootstrapTable.prototype.updateSelected = function () {
        if (!initBodyCaller) {
            _updateSelected.apply(this, Array.prototype.slice.apply(arguments));
            
            this.$selectGroup.forEach(function(item) {
                var checkGroup = item.item.filter(':enabled').length === 
                    item.item.filter(':enabled').filter(':checked').length;
                item.group.prop('checked', checkGroup);
            });  
        }     
    };
    
    BootstrapTable.prototype.getGroupSelections = function (index) {
        var that = this;
        return $.grep(this.data, function (row) {
            return (row[that.header.stateField] && (row._data['parent-index'] === index));
        });
    };
    
    BootstrapTable.prototype.checkGroup = function (index) {
        this.checkGroup_(index, true);
    };
    BootstrapTable.prototype.uncheckGroup = function (index) {
        this.checkGroup_(index, false);
    };
    
    BootstrapTable.prototype.checkGroup_ = function (index, checked) {
        var rows;
        var filter = function() {
            return ($(this).closest('tr').data('parent-index') === index);
        };
        
        if (!checked) {
            rows = this.getGroupSelections(index);
        }
        
        this.$selectItem.filter(filter).prop('checked', checked);
        
        
        this.updateRows();
        this.updateSelected();
        if (checked) {
            rows = this.getGroupSelections(index);
        }
        this.trigger(checked ? 'check-all' : 'uncheck-all', rows);
    };
    
}(jQuery);
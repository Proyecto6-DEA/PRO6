$('#tblproyectos').bootstrapTable({
                        method: 'get',
                        url: 'select_proyecto.proc.php',
                        cache: false,
                        striped: true,
                        pagination: false,
                        search: true,
                        showColumns: true,
                        showRefresh: true,
                        showToggle: true,
                        minimumCountColumns: 4,
                        height: 450,
                        clickToSelect: false,
                        columns: [{
                            field: 'proy_nom',
                            title: 'PROJECTE',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'proy_curso',
                            title: 'CURS',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'proy_fecha',
                            title: 'DATA',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'proy_pin',
                            title: 'PIN',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'proy_estado',
                            title: 'ESTAT',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        }]
                    });
                   
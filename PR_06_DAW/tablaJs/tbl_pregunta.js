$('#tblpregunta').bootstrapTable({
                        method: 'get',
                        url: 'select_pregunta.proc.php',
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
                            field: 'preg_txt',
                            title: 'PREGUNTA',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'preg_tipo',
                            title: 'TIPO',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'preg_categoria',
                            title: 'CATEGORÍA',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        }]
                    });
                   
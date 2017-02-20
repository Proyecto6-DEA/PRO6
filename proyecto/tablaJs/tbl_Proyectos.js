$('#tabla1').bootstrapTable({
                        method: 'get',
                        url: 'proyectoSql.php',
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
                            field: 'tri_jurado',
                            title: 'PROYECTO',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'tri_nombre',
                            title: 'NOTA JURADO',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'username',
                            title: 'NOTA PUBLICO',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        }]
                    });
                   
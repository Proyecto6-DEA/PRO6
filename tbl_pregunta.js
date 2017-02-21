$('#tblpregunta').bootstrapTable({
                        method: 'get',
                        url: 'select_usuario.proc.php',
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
                            field: 'usu_nombre',
                            title: 'PREGUNTAS',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'usu_apellido',
                            title: 'TIPO',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'usu_usuario',
                            title: 'NICKNAME',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        }]
                    });
                   
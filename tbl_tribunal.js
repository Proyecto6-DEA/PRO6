$('#tbltribunal').bootstrapTable({
                        method: 'get',
                        url: 'select_tribunal.proc.php',
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
                            field: 'tri_nombre',
                            title: 'PROYECTO',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'tri_jurado',
                            title: 'MIEMBROS DEL JURADO',
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
                   
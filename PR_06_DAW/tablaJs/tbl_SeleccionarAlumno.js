$('#tblTribunalGestion').on('dbl-click-row.bs.table', function (e, row, $element) {
    var id= row.proy_id;
    $('#verIntegrantes').modal('show');
    $('#tblSeleccionarAlumnos').bootstrapTable({
                        method: 'get',
                        url: 'select_alumnos.proc.php',
                        queryParams: function (p) {
                            return { id: id };
                        },
                        cache: false,
                        striped: true,
                        pagination: false,
                        search: true,
                        showColumns: true,
                        showRefresh: true,
                        showToggle: true,
                        minimumCountColumns: 4,
                        height: 250,
                        clickToSelect: false,
                        columns: 
                        [{
                            field: 'alu_nom',
                            title: 'NOMBRE',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'alu_apellido',
                            title: 'APELLIDOS',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'alu_nfpublico',
                            title: 'NOTA PUBLICO',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'alu_nftribunal',
                            title: 'NOTA TRIBUNAL',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        }]
                    });


});
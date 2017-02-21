$('#tblTribunalGestion').bootstrapTable({
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
                            title: 'PROYECTO',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'proy_curso',
                            title: 'CURSO',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'proy_fecha',
                            title: 'FECHA ENTREGA',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'proy_estado',
                            title: 'ESTADO',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        }, {
                            field: '',
                            title: 'OPCIONS',
                            align: 'center',
                            valign: 'middle',
                            width: '180',
                            formatter:"actionFormatter",
                            events:"actionEvents"
                        }]
                    });
                    window.actionEvents = {
                            'click .verG': function (e, value, row, index) {
                                        //console.log(value, row, index);
                                        $("#verGrup").attr('id_grup',row.id_grup);
                                        $("#verGrup").attr('codi_grup',row.codi_grup);
                                        var valueId =row.id_grup;
                                        var valueGrup =row.codi_grup;
                                            document.getElementById("campoOcultoId").value = valueId;
                                            document.getElementById("campoOcultoGrup").value = valueGrup;
                                            document.getElementById("formAfaUsuGrups").reset();
                                            $("#UsuGrupTitulo").html("Usuaris del Grup: "+row.codi_grup);
                                            $('#taulaUsuaris').bootstrapTable('resetSearch');
                                            // $('#taulaUsuaris').bootstrapTable('refresh');
                                            // $('#taulaAdmDeGrups').bootstrapTable('refresh');
                                        setTimeout(function () {
                                                
                                                $('#taulaUsuaris').bootstrapTable('refresh');
                                                $('#taulaAdmDeGrups').bootstrapTable('refresh');
                                        }, 150);
                                        // $('#taulaUsuaris').bootstrapTable('refresh');
                                        // $('#taulaAdmDeGrups').bootstrapTable('refresh');
                            },
                            'click .editG': function (e, value, row, index) {
                                            console.log(row);
                                          //alert(row.idgrup);
                                            var valueId =row.id_grup;
                                            var valueGrup =row.codi_grup;
                                            document.getElementById("campoOcultoId").value = valueId;
                                            document.getElementById("campoOcultoGrup").value = valueGrup;
                                            document.getElementById("formAfaUsuGrups").reset();
                                            $("#alertUsuarisTrue").css('display', 'none');
                                            $("#alertUsuarisFalse").css('display', 'none');
                            },
                                        
                            'click .removeG': function (e, value, row, index) {
                                        console.log(value, row, index);
                                        var url = "delete_grups.php";
                                        var id= "#taulaGrups";
                                        llamadaBbdd(row,url,id);
                            },
                    };  



                    function actionFormatter(value, row, index) {
                    return [
                            '<a class="verG col-md-1 col-md-offset-2" href="javascript:void(0)" title="Votar" data-toggle="modal" data-target="#verGrup">',
                                '<i class="glyphicon glyphicon-pencil"></i>',
                            '</a>',
                            '<a class="editG col-md-1 col-md-offset-1" href="javascript:void(0)" title="ABRIR PROYECTO" data-toggle="modal" data-target="#administrarGrup">',
                                '<i class="glyphicon glyphicon-ok" style="color:green"></i>',
                            '</a>',
                            '<a class="removeG col-md-1 col-md-offset-1" href="javascript:void(0)" title="Tancar Projecte">',
                                '<i class="glyphicon glyphicon-remove" style="color:red"></i>',
                            '</a>'
                    ].join('');
            }




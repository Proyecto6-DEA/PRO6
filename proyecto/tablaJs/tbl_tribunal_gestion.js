



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
                        columns: 
                        [{
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
                        },{
                            field: 'proy_nota',
                            title: 'NOTA',
                            align: '',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        }, {
                            field: '',
                            title: 'OPCIONS',
                            align: 'center',
                            valign: 'middle',
                            width: '220',
                            formatter:"actionFormatter",
                            events:"actionEvents"
                        }]
                    });
                    window.actionEvents = {
                            'click .votar': function (e, value, row, index) {

                                            //rellenar();
                                            idAl2=$('#proy_id').val(row.proy_id);
                                            pintarAlumnos(row.proy_id);
                                        
                            },
                            'click .activar': function (e, value, row, index) {
                                            
                                            updateActivar(row.proy_id);
                                          
                            },
                                        
                            'click .desactivar': function (e, value, row, index) {

                                            updateDesactivar(row.proy_id);
                            },
                    };  



                    function actionFormatter(value, row, index) {
                        if(row.proy_estado!='activo'){
                            return [
                                '<a class="activar col-md-1 col-md-offset-2" href="javascript:void(0)" title="Activar" )">',
                                    '<i class="glyphicon glyphicon-ok" style="color:green"></i>',
                                '</a>',
                                '<a class="removeG col-md-1 col-md-offset-2" href="javascript:void(0)" title="Finalitzar Projecte">',
                                    '<i class="glyphicon glyphicon-off" style="color:red"></i>',
                                '</a>'
                            ].join('');
                        }else{
                            return [
                                '<a class="votar col-md-1 col-md-offset-1"  href="javascript:void(0)" title="Votar" data-toggle="modal" data-target="#verPreguntas">',
                                '<i class="glyphicon glyphicon-pencil" style="dsiplay:none;"></i>',
                                '</a>',
                                '<a class="desactivar col-md-1 col-md-offset-1" href="javascript:void(0)" title="Tancar Projecte">',
                                    '<i class="glyphicon glyphicon-remove" style="color:red"></i>',
                                '</a>',
                                '<a class="removeG col-md-1 col-md-offset-1" href="javascript:void(0)" title="Finalitzar Projecte">',
                                    '<i class="glyphicon glyphicon-off" style="color:red"></i>',
                                '</a>'
                            ].join('');

                        }
                    
            }

function pintarAlumnos(id){

        $.ajax({
                    url: "select_alumnos.proc.php",
                    data: {"id" : id},
                    dataType: "json",
                    method: "post", 
                    success: function(data){
                            $('#alumnos').empty();
                            $('#id0').empty();
                            $('#id1').empty();
                            $('#id2').empty();

                            var numero=data.length;
                            pintarPreguntas(numero);
                            for (i in data) {
                                var nombre=data[i]['alu_nom'];
                                var apellidos=data[i]['alu_apellido'];
                                //alert(data[i]['alu_nom']);
                                $('#alumnos').append('<div class="col-lg-4">'+nombre+' '+apellidos+'</div>');
                                $('#id'+i).val(data[i]['alu_id']);
                    }
                            
                            }
                                
            });

};

function pintarPreguntas(numero){

        $.ajax({
                    url: "select_preguntas.proc.php",
                    data: {"numero" : numero},
                    dataType: "json",
                    method: "post", 
                    success: function(data){
                            $('#oral').empty();
                            $('#contenido').empty();

                            numero=data['numero'];
                            idAl1=$('#id0').val();
                            idAl2=$('#id1').val();
                            idAl3=$('#id2').val();
                            
                            for ( i in data) {
                                var pregunta=data[i]['preg_txt'];
                                var titPreg='<div class="col-md-7">'+pregunta+'</div>';
                                var id=data[i]['preg_id'];
                                var pregTipo=data[i]['preg_tipo'];

                                if(pregTipo!='Contenido'){
                                    if(numero<2){
                                        var cajas='<div class="col-md-5"><div class="col-md-4"><input type="number" class="form-control" name="'+id+'_'+idAl1+'" placeholder="Código postal" required></div></div>';
                                    }else if(numero<3){
                                        var cajas='<div class="col-md-5"><div class="col-md-4"><input type="number" class="form-control" name="'+id+'_'+idAl1+'" placeholder="Código postal" required></div><div class="col-md-4"><input type="number" class="form-control" name="'+id+'_'+idAl2+'" placeholder="Código postal" required></div></div>';
                                    }else{
                                        var cajas='<div class="col-md-5"><div class="col-md-4"><input type="number" class="form-control" name="'+id+'_'+idAl1+'" placeholder="Código postal" required></div><div class="col-md-4"><input type="number" class="form-control" name="'+id+'_'+idAl2+'" placeholder="Código postal" required></div><div class="col-md-4"><input type="number" class="form-control" name="'+id+'_'+idAl3+'" placeholder="Código postal" required></div></div>';
                                    }

                                    if(pregunta!=null){
                                        
                                        
                                        $('#oral').append(titPreg);
                                        $('#oral').append(cajas);
                                    }

                                }else{

                                    if(numero<2){
                                        var cajas='<div class="col-md-5"><div class="col-md-4"><input type="number" class="form-control" name="'+id+'_'+idAl1+'_'+idAl2+'_'+idAl3+'" placeholder="Código postal" required></div></div>';
                                    }else if(numero<3){
                                        var cajas='<div class="col-md-5"><div class="col-md-8"><input type="number" class="form-control" name="'+id+'_'+idAl1+'_'+idAl2+'_'+idAl3+'" placeholder="Código postal" required></div></div>';
                                    }else{
                                        var cajas='<div class="col-md-5"><div class="col-md-12"><input type="number" class="form-control" name="'+id+'_'+idAl1+'_'+idAl2+'_'+idAl3+'" placeholder="Código postal" required></div></div>';
                                    }

                                        // var cajas='<div class="col-md-4"><div class="col-md-12"><input type="number" class="form-control" name="'+id+'_'+idAl1+'_'+idAl2+'_'+idAl3+'" placeholder="Código postal"></div></div>';
                                    
                                    if(pregunta!=null){
                                                                                
                                        $('#contenido').append(titPreg);
                                        $('#contenido').append(cajas);
                                    }

                                }

                                
                                
                            }
                                
                    }
            });
                                    
        //return false; // Evitar ejecutar el submit del formulario.
                       
};

function updateActivar(id){
        //alert("update");

            $.ajax({
                    url: "update_proyecto_activar.proc.php",
                    data: {"id" : id},
                    dataType: "json",
                    method: "post", 
                    success: function(data){
                            
                            $('#tblTribunalGestion').bootstrapTable('refresh');
                    }
            });
                       
};

function updateDesactivar(id){
        //alert("updateDesactivar");

            $.ajax({
                    url: "update_proyecto_desactivar.proc.php",
                    data: {"id" : id},
                    dataType: "json",
                    method: "post", 
                    success: function(data){
                            
                            $('#tblTribunalGestion').bootstrapTable('refresh');
                    }
            });
                       
};

function updateCerrar(id){
        //alert("updateDesactivar");

            $.ajax({
                    url: "update_proyecto_cerrar.proc.php",
                    data: {"id" : id},
                    dataType: "json",
                    method: "post", 
                    success: function(data){
                            
                            $('#tblTribunalGestion').bootstrapTable('refresh');
                    }
            });
                       
};




<?php
session_start();
// echo $_SESSION['user_tipo'];
// echo $_SESSION['tri_id'];
if ($_SESSION['user_tipo'] !='tribunal') {
    header("location:index.php");
}



  ?>

 
<!DOCTYPE html>
<html>
    <head>
        <!-- PROPIEDADES META WEB -->
        <meta http-equiv="Content-Type" content="text/html">
        <meta name="description" content="Gestio de Grups no Academics">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- TITULO DE LA PAGINA -->
        <title>Gestio Tribunal</title>
        <!-- FAVICON DE LA PAGINA -->
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <!-- JQUERY -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <!-- BOOTSTRAP -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <!-- BOOTSTRAP TABLE -->
        <link rel="stylesheet" href="css/bootstrap-table.css">
        <script type="text/javascript" src="js/bootstrap-table.js"></script>
        <script type="text/javascript" src="js/bootstrap-table-ca-ES.js"></script>
        <!-- BOOTSTRAP TABLE COOKIE -->
        <script type="text/javascript" src="js/bootstrap-table-cookie.js"></script>
        <!-- BOOTSTRAP TABLE EXPORT -->
        <script type="text/javascript" src="js/bootstrap-table-export.js"></script>
        <script type="text/javascript" src="js/tableExport.min.js"></script>
        <script src="//oss.maxcdn.com/bootbox/4.2.0/bootbox.min.js"></script>
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
        <!-- LIBRO DE ESTILOS CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">

        
    </head>
    <body>




        <div class="page-header" style="margin: 10px 0 20px; overflow: hidden; border-bottom: 5px solid #4394d0;box-sizing: border-box;">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <img id="img-logoJE" src="img/logo_JE.jpg" alt="Logotip Jesuïtes Educació">
            </div>
            <div class="text-center col-md-6 col-sm-12 col-xs-12" style="vertical-align:top;">
                <h1> <font face="Helvetica" COLOR="#0079BA">Gestió Tribunal</font></h1>
            </div>
        </div>
        
        <!-- <div class="page-header ">
            CONTENIDO DEL HEADER
            
        </div> -->

        <div class="container">
            <div class="col-md-12">
                <div role="tabpanel" class="row">
                    <table id="tblTribunalGestion" data-group-by-field="proy_id" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar2"></table>

                </div>
            </div>
        </div>




        <script type="text/javascript" src="tablaJs/tbl_tribunal_gestion.js"></script>
        <script type="text/javascript" src="tablaJs/tbl_SeleccionarAlumno.js"></script>





        <!-- MODAL DIALOG para CUESTIONARIO del TRIBUNAL -->
        <div class="modal fade " id="verPreguntas" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" >
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="UsuGrupTitulo">PREGUNTAS: </h4>
                    </div>
                    <div id="pregTrib" class="modal-body">
                        <div class="row">
                            <div class="col-lg-7">
                                    <!-- Espacio libre -->
                            </div>
                            <div class="col-lg-5" id="alumnos">
                                
                            </div>
                        </div>
                        <div class="row">
                            <form id="formulario" method="post" onsubmit="mandarFormulario()">
                               <div class="form-group col-lg-12">
                                  <label for="formulario">PRESENTACIÓ ORAL:</label>
                                  <div class="row" id="oral">
                                        
                                  </div>
                                  <hr>
                                  <label for="formulario">CONTINGUT DEL PROJECTE:</label>
                                  <div class="row" id="contenido">
                                        
                                  </div>
                                  <hr>
                                  
                                </div>
                                <button type="submit" name="">ENVIAR</button>
                                <input type="hidden" id="id0" name="id0">
                                <input type="hidden" id="id1" name="id1">
                                <input type="hidden" id="id2" name="id2"> 
                                <input type="hidden" id="proy_id" name="proyId">
                            </form>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tanca</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal --> 


        <!-- MODAL DIALOG para MIEMBROS DEL GRUPO -->
        <div class="modal fade" id="verIntegrantes" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" >
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">ALUMNOS: </h4>
                    </div>
                    <div class="modal-body">
                        <table id="tblSeleccionarAlumnos" data-group-by-field="proy_id" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar2"></table>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tanca</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal --> 



    </body>

    <script type="text/javascript">


function mandarFormulario(){
    $.ajax({
           type: "POST",
           url: 'votacion_tribunal.proc.php',
           data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
               //$("#respuesta").html(data); // Mostrar la respuestas del script PHP.
           }
    });

}



// function seleccionarAlumnos(){
//     $.ajax({
//            type: "POST",
//            url: 'votacion_tribunal.proc.php',
//            data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
//            success: function(data)
//            {
//                //$("#respuesta").html(data); // Mostrar la respuestas del script PHP.
//            }
//     });

// }



// $('tr').on('dblclick', function(row.proy_id) {

//     alert('abro ventana');
//     
// });

        
    </script>


</html>
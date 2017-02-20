<?php




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
        <title>Gestio Grups 2.5</title>
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
        
        <div class="page-header ">
            
        </div>

        <div class="container">
          <div role="tabpanel" class="row">
            <ul class="nav nav-tabs nav-justified">
              <li class="active"><a href="#contAlerta1">Inicio</a></li>
              <li><a href="#contAlerta2">Perfil</a></li>
              <li><a href="#contAlerta3">Mensajes</a></li>
            </ul>
          
           
          <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="contAlerta1" style="height: 600px;">
                  <div class="col-md-12">
                      <table id="taulaAlerta1" data-height="600" data-cookie="true" data-height="600" data-cookie-id-table="idgrup" data-copy-w-hidden-btn="true" data-copy-delemeter=", " data-click-to-select="true" data-toolbar="#toolbar" ></table>
                  </div>
              </div>
              <div role="tabpane2" class="tab-pane active" id="contAlerta1" style="height: 600px;">
                  <div class="col-md-12">
                      <table id="taulaAlerta1" data-height="600" data-cookie="true" data-height="600" data-cookie-id-table="idgrup" data-copy-w-hidden-btn="true" data-copy-delemeter=", " data-click-to-select="true" data-toolbar="#toolbar" ></table>
                  </div>
              </div>
              <div role="tabpane3" class="tab-pane active" id="contAlerta1" style="height: 600px;">
                  <div class="col-md-12">
                      <table id="taulaAlerta1" data-height="600" data-cookie="true" data-height="600" data-cookie-id-table="idgrup" data-copy-w-hidden-btn="true" data-copy-delemeter=", " data-click-to-select="true" data-toolbar="#toolbar" ></table>
                  </div>
              </div>
          </div>
          </div>
          <ul class="nav nav-pills nav-justified">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Mensajes</a></li>
          </ul>
        </div>
        <div class="col-md-10 col-md-offset-1">
                <div id="toolbar" class="btn-group">
                    <button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#inserProyecto">INSERTAR PROYECTO</button>
                    <button type="button" name="afegirAdmGrups" class="btn btn-primary" role="button" data-toggle="modal" data-target="#insertarTribunal">TRIBUNAL</button>
                    <button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#administradorsGrups">BOTON2</button>
                </div>
                <table id="tabla1" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar"></table>

                
        </div>
<!-- TABLA  PROYECTOS -->
        <script type="text/javascript" src="tablaJs/tbl_Proyectos.js"></script>
        


        <!-- MODAL DIALOG para USUARISGRUPS de ADMINISTRACIÓ DE GRUPS NO ACADEMICS -->
        <div class="modal fade " id="inserProyecto" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" style="width: 90% !important;">
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="UsuGrupTitulo">Usuaris del Grup: </h4>
                    </div>
                    <div class="modal-body" >
                        <div class="row">
                           FORMULARIO
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tanca</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal --> 

        <!-- MODAL DIALOG para USUARISGRUPS de ADMINISTRACIÓ DE GRUPS NO ACADEMICS -->
        <div class="modal fade " id="insertarTribunal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" style="width: 90% !important;">
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="UsuGrupTitulo">Usuaris del Grup: </h4>
                    </div>
                    <div class="modal-body" >
                        <div class="row">
                           TRIBUNAL
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tanca</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal --> 
    
     
    </body>
</html>
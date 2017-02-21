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
            CONTENIDO DEL HEADER
            
        </div>

        <div class="container">
          <div class="col-md-12">
                <div role="tabpanel" class="row">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active">
                            <a href="#contAlerta1" aria-controls="profile" role="tab" data-toggle="tab" ><div id="Alerta1"></div>USUARIOS </a>
                        </li>
                        <li role="presentation">
                            <a href="#contAlerta2" aria-controls="profile" role="tab" data-toggle="tab"><div id="Alerta2"></div>PROYECTOS</a>
                        </li>
                        <li role="presentation">
                            <a href="#contAlerta3" aria-controls="profile" role="tab" data-toggle="tab" ><div id="Alerta3"></div>TRIBUNAL</a>
                        </li>
                        <li role="presentation">
                            <a href="#contAlerta4" aria-controls="profile" role="tab" data-toggle="tab" ><div id="Alerta3"></div>PREGUNTAS</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="contAlerta1" style="height: 600px;">
                            <div class="col-md-12">
                                <div id="toolbar" class="btn-group">
                                    <button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#inserUsuario">AÑADIR USUARIO</button>
                                </div>
                                <table id="tblusuarios" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar"></table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="contAlerta2" style="height:600px; ">
                            <div class="col-md-12">
                                <div id="toolbar1" class="btn-group">
                                    <button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#inserProyecto">AÑADIR PROYECTO</button>
                                    <button type="button" name="afegirAdmGrups" class="btn btn-primary" role="button" data-toggle="modal" data-target="#insertarTribunal">TRIBUNAL</button>
                                    <button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#administradorsGrups">BOTON2</button>
                                </div>
                                <table id="tblproyectos" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar1"></table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="contAlerta3" style="height: 600px;">
                            <div class="col-md-12">
                                <div id="toolbar2" class="btn-group">
                                    <button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#inserProyecto">AÑADIR TRIBUNAL</button>
                                    <button type="button" name="afegirAdmGrups" class="btn btn-primary" role="button" data-toggle="modal" data-target="#insertarTribunal">TRIBUNAL</button>
                                    <button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#administradorsGrups">BOTON2</button>
                                </div>
                                <table id="tbltribunal" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar2"></table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="contAlerta4" style="height: 600px;">
                            <div class="col-md-12">
                                <div id="toolbar4" class="btn-group">
                                    <button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#inserProyecto">AÑADIR PREGUNTA</button>
                                    <button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#administradorsGrups">BOTON2</button>
                                </div>
                                <table id="tblpregunta" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar4"></table>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div id="loading">
                    <img id="loading-image" src="img/loader.gif" alt="Carregant dades..." />
                </div>
            </div>




    <!-- TABLAS JS -->
        
        <script type="text/javascript" src="tablaJs/tbl_usuarios.js"></script>
        <script type="text/javascript" src="tablaJs/tbl_proyectos.js"></script>
        <script type="text/javascript" src="tablaJs/tbl_tribunal.js"></script>
        <script type="text/javascript" src="tablaJs/tbl_pregunta.js"></script>

    <!-- FIN TABLA JS -->
        


        <!-- MODAL DIALOG para INSERTAR USUARIOS -->
        <div class="modal fade " id="inserUsuario" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" >
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="UsuGrupTitulo">Crear Usuario: </h4>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="row">
                            <div class="form-group col-lg-6">
                              <label for="ejemplo_email_1">Nombre:</label>
                              <input type="text" id="per_cp1" class="form-control col-lg-6" name="per_cp1"
                                     placeholder="Código postal">
                            </div>
                            <div class="form-group col-lg-6">
                              <label for="ejemplo_email_1">Apellidos:</label>
                              <input type="text" id="per_cp1" class="form-control col-lg-6" name="per_cp1"
                                     placeholder="Código postal">
                            </div>
                            <div class="form-group col-lg-6">
                              <label for="ejemplo_email_1">Usuario:</label>
                              <input type="text" id="per_cp1" class="form-control col-lg-6" name="per_cp1"
                                     placeholder="Código postal">
                            </div>
                            <div class="form-group col-lg-6">
                              <label for="ejemplo_email_1">Contraseña:</label>
                              <input type="text" id="per_cp1" class="form-control col-lg-6" name="per_cp1"
                                     placeholder="Código postal">
                            </div>
                            <div class="form-group col-lg-12">
                              <input type="submit" id="btnAfegirUsu" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" value="Afegir">
                            </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tanca</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal --> 


        <!-- MODAL DIALOG para INSERTAR PROYECTOS -->
        <div class="modal fade " id="inserProyecto" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" >
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="UsuGrupTitulo">Crear Proyecto: </h4>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="row">
                            <div class="form-group col-lg-8">
                              <label for="ejemplo_email_1">Título del Proyecto:</label>
                              <input type="text" id="per_cp1" class="form-control col-lg-6" name="per_cp1"
                                     placeholder="Código postal">
                            </div>
                            <div class="form-group col-lg-4">
                              <label for="ejemplo_email_1">Curso:</label>
                              <input type="text" id="per_cp1" class="form-control col-lg-6" name="per_cp1"
                                     placeholder="Código postal">
                            </div>
                            <div class="form-group col-lg-4">
                              <label for="ejemplo_email_1">Año Curso:</label>
                              <input type="text" id="per_cp1" class="form-control col-lg-6" name="per_cp1"
                                     placeholder="Código postal">
                            </div>
                            <div class="form-group col-lg-4">
                              <label for="ejemplo_email_1">Pin Web:</label>
                              <input type="text" id="per_cp1" class="form-control col-lg-6" name="per_cp1"
                                     placeholder="Código postal">
                            </div>
                            <div class="form-group col-lg-4">
                              <label for="ejemplo_email_1">Estado:</label>
                                <select class="form-control">
                                  <option value="abierto">Abierto</option>
                                  <option value="cerrado">Cerrado</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-12">
                              <input type="submit" id="btnAfegirUsu" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" value="AÑADIR PROYECTO">
                            </div>
                        </div>
                      </form>
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
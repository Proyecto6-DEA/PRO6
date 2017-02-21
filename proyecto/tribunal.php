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
                    <table id="tblTribunalGestion" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar2"></table>
                </div>
            </div>
        </div>




        <script type="text/javascript" src="tablaJs/tbl_tribunal_gestion.js"></script>





        <!-- MODAL DIALOG para USUARISGRUPS de ADMINISTRACIÓ DE GRUPS NO ACADEMICS -->
        <div class="modal fade " id="verPreguntas" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" style="width: 90% !important;">
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="UsuGrupTitulo">PREGUNTAS: </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" id="preguntas">
                                <div class="col-lg-8">
                                    
                                </div>
                                <div class="col-lg-4">
                                    <div class="col-lg-4">
                                        ALUMNO 1 APELLIDO APELLIDO
                                    </div>
                                    <div class="col-lg-4">
                                        ALFREDO FERNANDEZ SUAREZ
                                    </div>
                                    <div class="col-lg-4">
                                        ALUMNO 3 APELLIDO APELLIDO
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-lg-12">
                              <label for="ejemplo_email_1">Título del Proyecto:</label>
                              <div class="row">
                                    <div class="col-md-8">Pregunta 1</div>
                                    <div class="col-md-4">
                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>

                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>

                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>
                                    </div>
                              </div>
                              <hr>
                              <div class="row">
                                    <div class="col-md-8">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias</div>
                                    <div class="col-md-4">
                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>

                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>

                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control col-lg-6" name="per_cp1" placeholder="Código postal"></div>
                                    </div>
                              </div>
                              <hr>
                              <div class="row">

                                    <div class="col-md-8">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</div>
                                    <div class="col-md-4">
                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>
                                        
                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>

                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control col-lg-6" name="per_cp1" placeholder="Código postal"></div>
                                    </div>

                              </div>
                              <hr>
                              <div class="row">
                                    <div class="col-md-8">Pregunta 1</div>
                                    <div class="col-md-4">
                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>
                                        
                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>

                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control col-lg-6" name="per_cp1" placeholder="Código postal"></div>
                                    </div>

                              </div>
                              <hr>
                              <div class="row">

                                    <div class="col-md-8">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</div>
                                    <div class="col-md-4">
                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>
                                        
                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>

                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control col-lg-6" name="per_cp1" placeholder="Código postal"></div>
                                    </div>

                              </div>
                              <hr>
                              <div class="row">
                                    <div class="col-md-8">Pregunta 1</div>
                                    <div class="col-md-4">
                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>
                                        
                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control" name="per_cp1" placeholder="Código postal"></div>

                                        <div class="col-md-4"><input type="number" id="per_cp1" class="form-control col-lg-6" name="per_cp1" placeholder="Código postal"></div>
                                    </div>

                              </div>
                            </div>
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
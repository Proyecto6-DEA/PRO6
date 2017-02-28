<?php 
    $conexion = mysqli_connect('localhost', 'root', '', 'bd_proyecto6');
    $acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

    extract($_REQUEST);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EncuStar</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Steps jquery para "slider" -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/steps/jquery.steps.js"></script>

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <style type="text/css">
        html, body { height: 100%; width: 100%; margin: 0; }
        .centrar {
            text-align: center;
            position: relative;
            top: 50%;
            -ms-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        #form {
          width: 250px;
          margin: 0 auto;
          height: 50px;
        }

        #form p {
          text-align: center;
        }

        #form label {
          font-size: 20px;
        }

       input[type="radio"] {
          display: none;
        }

       label {
          background-image: url(img/star.png);
          
        }

        .clasificacion {
          direction: rtl;
          unicode-bidi: bidi-override;
        }

        label:hover,
        label:hover ~ label {
          background-image: url(img/star_punto.png);
        
        }

        input[type="radio"]:checked ~ label {
          background-image: url(img/star_punto.png);
         
        }
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
            text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
        header {
    width: 100%;
    height: 12%;
    top: 0;
    position: fixed ;
    z-index: 1000;
}
    </style>

    <script type="text/javascript">
    
function llamardiv(){

   $(".nomape").css("display","block");

}


</script>
</head>

<body>
<?php  
    $sql1 = "SELECT * FROM tbl_proyecto WHERE proy_pin = $proy_pin";
    $proyectos = mysqli_query($conexion, $sql1);
    if (mysqli_num_rows($proyectos)>0){
        while ($proyecto=mysqli_fetch_array($proyectos)) {
            $nomproy = $proyecto['proy_nom'];
            $proyid = $proyecto['proy_id'];
echo "<header>";
echo "<div style='width:100%; height: 100%;background-color: #ffcc00'>";
        echo "<div class='centrar'>";
            echo "<div class='container'>";
                 echo "<span style='font-size: 20px'>$nomproy</span>";
            echo "</div>  ";        
        echo "</div>  ";              
    echo "</div>  ";
echo "</header>"; 


  


    $sql = "SELECT * FROM tbl_pregunta WHERE preg_tipo='Presentación Oral'";
    $preuntas = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($preuntas)>0){
    while ($preg=mysqli_fetch_array($preuntas)) {

        $tipo = $preg[preg_tipo];
        $txt = $preg[preg_txt];
        $id = $preg[preg_id];
        $aid = $id + 1 ;


    echo "<a name='$id' id='a'></a>";

    echo "<div style='height:12%'>";
echo "</div>";
    



echo "<div style='width:100%; height: 7%;border-bottom:  2px solid #ffcc00;background-color:white'>";
        echo "<div class='centrar'>";
            echo "<span >Presentació Oral</span>";
            echo "<br>";
        echo "</div>";
    echo "</div>";

     echo "<div style='width:100%; height: 10%;'>";
        echo "<div class='centrar'>";    
            echo "<div class='col-sm-offset-11 col-sm-1 col-xs-offset-9 col-xs-3'>";
                if ($id == 3) {
            //     echo "<form id='form1' method='get' action='preguntas_alu1.php'>";
                    echo "<a href='#4'><img src='img/siguiente.png'></a>";
                 }else{
                     echo "<a href='#$aid'><img src='img/siguiente.png'></a>";
                 }
            echo "</div>";
        echo "</div>";
    echo "</div>";  

    echo "<div style='width:100%; height: 71%;'>";     
    echo "<div style='width:100%; height: 30%;'>";
        echo "<div class='centrar' >";
            echo "<div class='container'>";
                echo "<span style='font-size: 15px'><b>$txt</b></span>";
            echo "</div>";
        echo "</div>";
    echo "</div>";

    echo "<div style='width:100%; height: 70%; display: block;'>";
        echo "<div class='centrar'>";
            echo "<div class='container'>";
                echo "<table width='100%''>";
                    echo "<form id='form1' method='get' action='preguntas_alu1.php'>";


                        $sql_Alu = "SELECT * FROM tbl_alumno WHERE proy_id = $proyid";
                        $alumnos = mysqli_query($conexion, $sql_Alu);
                        if (mysqli_num_rows($alumnos)>0){
                            while ($alumno=mysqli_fetch_array($alumnos)) {
                                $idalu = $alumno['alu_id'];
                                $nomalu = $alumno['alu_nom'];
                                $apealu = $alumno['alu_apellido'];

                               
                                echo "<tr>";
                                echo "<td width='40%'>";
                                echo $nomalu." ".$apealu;
                                echo "</td>";
                                

                            echo"<td>";
                                echo "<p class='clasificacion'>";

$z = 5;

for ($i=1; $i < 6; $i++) {
            $numradio = $idalu."".$id."".$i;
         echo "<input id='radio$numradio' type='radio' name='estrellas_".$id."_".$idalu."' value='$z'>";
         echo "<label for='radio$numradio'><img src='img/star.png' width='40'></label>";
         echo "<input type='hidden' name='alu' value='$idalu'>";
         $z=$z-1;

}

                              echo "<input type='hidden' name='proy_id' value='$proyid'>";  
                              echo "</p>";
                              echo "</td>";
                              echo "</tr>";
                            
}
                        }
                        
                echo "</table>";
            echo "</div>"; 
         echo "</div>";
     echo "</div>";  
     echo "</div>";

    }
}

echo "<a name='4' id='a'></a>";

    echo "<div style='height:12%'>";
echo "</div>";
    



echo "<div style='width:100%; height: 7%;border-bottom:  2px solid #ffcc00;background-color:white'>";
        echo "<div class='centrar'>";
            echo "<span >Continguts</span>";
            echo "<br>";
        echo "</div>";
    echo "</div>";



    $sql = "SELECT * FROM tbl_pregunta WHERE preg_tipo='Contenido'";
    $preuntas = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($preuntas)>0){
    while ($preg=mysqli_fetch_array($preuntas)) {

        $tipo = $preg[preg_tipo];
        $txt = $preg[preg_txt];
        $id = $preg[preg_id];
        $aid = $id + 1 ;
 
    echo "<div style='width:100%; height: 20%;'>";     
    echo "<div style='width:100%; height: 50%;'>";
        echo "<div class='centrar' >";
            echo "<div class='container'>";
                echo "<span style='font-size: 15px'><b>$txt</b></span>";
            echo "</div>";
        echo "</div>";
    echo "</div>";

    echo "<div style='width:100%; height: 50%; display: block;'>";
        echo "<div class='centrar'>";
            echo "<div class='container'>";
                echo "<table width='100%''>";
                     

                               
                                echo "<tr>";
                               
                                echo"<td>";

                                echo "<p class='clasificacion'>";

$z = 5;

for ($i=1; $i < 6; $i++) {
            $numradio = $id."".$i;
         echo "<input id='radio$numradio' type='radio' name='estrellas_$id' value='$z'>";
         echo "<label for='radio$numradio'><img src='img/star.png' width='40'></label>";
         $z=$z-1;

}

                            
                              echo "</p>";
                              echo "</td>";
                              echo "</tr>";
                                             
                echo "</table>";
            echo "</div>"; 
         echo "</div>";
     echo "</div>";  
     echo "</div>";

    }
}

echo "<div style='height:20%'>";
echo "<div class='centrar'>";
echo "<a href='#nomyape' onclick='llamardiv();'><img src='img/btnguardar.png'></a>";
echo "</div>";
echo "</div>";


echo "<div class='nomape' style='display:none; width:100%; height:80%;'>";
echo "<a name='nomyape' id='a'></a> ";

?>
<div style="height: 23%;">
<div class="centrar">
<p style="font-size: 20px;">Moltes Gràcies!!</p>

<p><input type="text" name="nompub" placeholder="Nom i cognom" style=" font-size: 20px; text-align: center; border-color: black; cursor: text; color: black; width: 250px;"/></p>
<p><input type="text" name="nomcur" placeholder="Curs" style=" font-size: 20px; text-align: center; border-color: black; cursor: text; color: black; width: 250px;"/></p>     
</div>
</div>

<?php

echo "<div style='height:7%'>";
echo "<div class='centrar'>";
echo "<button style='background-color:white;border:none'><img src='img/btnguardar.png'></button>";
echo "</form>";
echo "</div>";   
echo "</div>";

    ?>
<br><br>
<div style="height: 70%;">
<div class="centrar">
        <img src="img/hecho.png">
</div>
</div>

</div>
</body>
</html>
<?php }}?>
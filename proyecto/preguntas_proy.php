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
</head>

<body>
<?php 
echo $proy_pin;
echo "hola"; 
?>

</body>
</html>

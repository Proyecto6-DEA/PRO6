<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EncuStar</title>

    <!-- Bootstrap Core CSS -->
    <link href="proyecto/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="proyecto/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="proyecto/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

	<script>
    //Funcion para validar  el formulario
    function validar()
    {
      var error ="";

      if(document.getElementById("name").value=="")
      {
        error+="Error, el nombre no puede estar vacio \n";
        document.getElementById("name").style.borderColor="red";
      }
       if(document.getElementById("pass").value=="")
      {
        error+="Error, la contraseña no puede estar vacio \n";
        document.getElementById("pass").style.borderColor="red";
      }
      if(error!="")
      {
        alert(error);
        return false;
      }
      else{
        return true;
      }
    }
    //END VALIDAR()

    </script>

<body id="page-top" class="index" style="background-color: #ffff33;">

	<header style="background-color: #ffff33; text-align: center; height: 100%;">

	<?php
	extract($_GET);
		//En caso que exista la variable nolog, significa que ha habido un error de login o el usuario ha intentado entrar en una página directamente
		if (isset($nolog))
		{
			switch ($nolog) {
				case '1':
					?>
					<div class="login_failed">
						<p class="user_failed">
							Upps! parece que tu usuario y/o contraseña no son correctos
						</p>
					</div>
				<?php
					break;
				case '2':
				?>
				<div class="login_failed">
						<p class="user_failed">
							¡Necesita estar registrado!
						</p>
					</div>
				<?php
				default:
					//En caso que el usuario envie cualquier variable por URL, que salga del Switch sin que haga nada
					break;
			}
		}
	?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" class="logo">
                    <img class="img-responsive" src="img/logo.png" alt="" width="600">
                    <div class="intro-text">
                        <form form name="login" action="login.proc.php" method="POST" onsubmit="return validar();">
                        <div class="col-sm-12">
                            <input type="text" name="name" id="name" placeholder="Usuari" style=" font-size: 25px; text-align: center; border-color: black; cursor: text; color: black; width: 250px;"  >
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="pass" id="pass" placeholder="Password" style=" font-size: 25px; text-align: center; border-color: black; cursor: text; color: black; width: 250px;"  maxlength="4">
                        </div>
                        
                        <div class="col-sm-12">  
                            <button type="submit" style=" font-size: 20px; text-align: center; border-color: black; cursor: pointer; color: white; background-color: black; width: 250px;">Enviar</button>
                        </div>
                            
                        </form>
                    </div>         
                </div>
            </div>
            <div class="row">
                <p></p>
            </div>
            <!-- <div class="row">
                <div class="col-sm-12">
                    <div class="intro-text" style="color: black; ">
                        <p style="font-size: 15px">Si ets professor o jurat, <a href="#" style="color: #ff9900"><b>clica aquí</b></a></p>
                    </div>
                </div>
            </div> -->
        </div>
        
    </header>

	<div class="login_general">
		<p class="titulo_mc"></p>
	<div class="login_marco">
	<div class="login_logo">
	</div>

	
	<!-- <form name="login" action="login.proc.php" method="POST" onsubmit="return validar();" >
		<div class="login">
			<p class="nickname">
				Nombre de usuario:
				<input type="text" class="name" name="name" id="name" maxlength="15" />
			</p>
			<p class="password">
				Contraseña:
				<input type="password" class="pass" name="pass" id="pass" />
			</p>
			<input class="send" id="send" type="submit" value="Acceder" />
		</div>
	</form> -->
</div>
</div>
</body>
</html>


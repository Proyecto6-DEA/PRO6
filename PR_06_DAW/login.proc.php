<?php
extract($_POST);
session_start();
//Realizamos la conexión a la BD
$mysqli = new mysqli("localhost", "root", "", "bd_proyecto6");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
//Consulta de busqueda del usuario
	$con =	"SELECT * FROM `tbl_usuario` WHERE `usu_usuario` = '". $name ."' AND `usu_pass` = '" . $pass . "'";	
	//Lanzamos la consulta a la BD
	$result	=	mysqli_query($mysqli,$con);
	//Contamos los resultados que nos devuelve
	$total  = mysqli_num_rows($result); 
	//Ponemos el condicional según el nombre de registros que nos devuelva
	if($total>=1){
		//Iniciamos sessión para las variables de sesion
		
		while ($fila = mysqli_fetch_row($result)){


			
			$_SESSION['usu_usuario'] = $fila[3];
			$tipoUsu =$fila[5];
			$_SESSION['tri_id']	=	$fila[6];
			
			session_start();

			if($tipoUsu=='professor'){
				$_SESSION['user_tipo'] ='professor';
				header("location:admin.php");
				
			}

			if($tipoUsu=='tribunal'){
				
				echo $_SESSION['user_tipo'] ='tribunal';
				header("location:tribunal.php");

			}else{
				
				$_SESSION['user_tipo'] ='admin';
				header("location:admin.php?id=".$fila[6]);

			}				
			
		}
	}
	//Si no nos devuelve registros significa que el usuario o contraseña han sido incorrectos.
	else{		
		header("location: login.php?nolog=1");
	}
?>
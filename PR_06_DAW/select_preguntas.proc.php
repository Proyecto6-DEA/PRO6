<?php

include_once "includes/conexion_bd.php";

$numero=$_REQUEST['numero'];


$selectPregunta = $databaseConnection->prepare('SELECT * FROM tbl_pregunta WHERE preg_categoria=\'Professor\'');
 				
 									
 									
 									$selectPregunta->execute();	



 						$rows = $selectPregunta->fetchAll(PDO::FETCH_ASSOC);

 						$rows['numero']=$numero;
						
						echo json_encode($rows);

?>


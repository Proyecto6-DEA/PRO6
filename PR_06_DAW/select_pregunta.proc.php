<?php

include_once "includes/conexion_bd.php";

$selectPregunta = $databaseConnection->prepare('SELECT * FROM tbl_pregunta');
 				
 											
 											$selectPregunta->execute();	



 						$rows = $selectPregunta->fetchAll(PDO::FETCH_ASSOC);
						
						echo json_encode($rows);

?>


<?php

include_once "includes/conexion_bd.php";

$selectProyecto = $databaseConnection->prepare('SELECT * FROM tbl_tribunal');
 				
 											
 											$selectProyecto->execute();	



 						$rows = $selectProyecto->fetchAll(PDO::FETCH_ASSOC);
						
						echo json_encode($rows);

?>


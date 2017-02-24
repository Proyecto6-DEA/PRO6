<?php

include_once "includes/conexion_bd.php";

$selectProyecto = $databaseConnection->prepare('SELECT * FROM tbl_proyecto, tbl_tribunal WHERE tbl_proyecto.tri_id=tbl_tribunal.tri_id');
 				
 											
 											$selectProyecto->execute();	



 						$rows = $selectProyecto->fetchAll(PDO::FETCH_ASSOC);
						
						echo json_encode($rows);


?>


<?php

include_once "includes/conexion_bd.php";

$selectUsuario = $databaseConnection->prepare('SELECT * FROM tbl_tribunal  WHERE `tri_id` != 0');
 				
 											
 											$selectUsuario->execute();	



 						$rows = $selectUsuario->fetchAll(PDO::FETCH_ASSOC);
						
						echo json_encode($rows);

?>


<?php

include_once "includes/conexion_bd.php";

$selectUsuario = $databaseConnection->prepare('SELECT * FROM tbl_usuario, tbl_tribunal WHERE tbl_usuario.tri_id=tbl_tribunal.tri_id');
 				
 											
 											$selectUsuario->execute();	



 						$rows = $selectUsuario->fetchAll(PDO::FETCH_ASSOC);
						
						echo json_encode($rows);

?>


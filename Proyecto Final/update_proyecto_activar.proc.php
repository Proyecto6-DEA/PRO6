<?php

include_once "includes/conexion_bd.php";


$proy_id=$_REQUEST['id'];


$updateProyecto = $databaseConnection->prepare('UPDATE tbl_proyecto SET proy_estado= \'activo\' WHERE proy_id =:proy_id');
 				
 					$updateProyecto->bindParam(':proy_id', $proy_id);						
 					$updateProyecto->execute();	



 						// 	$rows = $selectUsuario->fetchAll(PDO::FETCH_ASSOC);

 						$rows="ok";
						
						echo json_encode($rows);

?>


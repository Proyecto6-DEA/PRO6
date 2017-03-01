<?php

include_once "includes/conexion_bd.php";


$proy_id=$_REQUEST['id'];


$updateProyecto = $databaseConnection->prepare('UPDATE tbl_proyecto SET proy_estado= \'inactivo\' WHERE proy_id =:proy_id');
 				
 					$updateProyecto->bindParam(':proy_id', $proy_id);						
 					$updateProyecto->execute();	



 						$rows="ok";
						
						echo json_encode($rows);
?>


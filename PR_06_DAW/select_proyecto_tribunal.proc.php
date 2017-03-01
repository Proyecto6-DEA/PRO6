<?php
session_start();
$id=$_SESSION['tri_id'];

include_once "includes/conexion_bd.php";

$selectProyecto = $databaseConnection->prepare('SELECT * FROM tbl_proyecto WHERE tri_id=:id');
 				
 											$selectProyecto->bindParam(':id', $id);
 											$selectProyecto->execute();	



 						$rows = $selectProyecto->fetchAll(PDO::FETCH_ASSOC);
						
						echo json_encode($rows);


?>


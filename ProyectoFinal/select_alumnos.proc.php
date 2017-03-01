<?php
include_once "includes/conexion_bd.php";

$proy_id=$_REQUEST['id'];


$selectAlumnos = $databaseConnection->prepare('SELECT * FROM tbl_alumno WHERE proy_id = :proy_id ');

			
 									$selectAlumnos->bindParam(':proy_id', $proy_id);
									
 									$selectAlumnos->execute();	



 						$rows = $selectAlumnos->fetchAll(PDO::FETCH_ASSOC);
						
						echo json_encode($rows);

?>


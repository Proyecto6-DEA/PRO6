<?php

include_once "includes/conexion_bd.php";

$selectAlumno = $databaseConnection->prepare('SELECT * FROM tbl_alumno');
 				
 											
 											$selectAlumno->execute();	



 						$rows = $selectAlumno->fetchAll(PDO::FETCH_ASSOC);
						
						echo json_encode($rows);

?>


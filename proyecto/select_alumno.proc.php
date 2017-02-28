<?php

include_once "includes/conexion_bd.php";

$selectAlumno = $databaseConnection->prepare('SELECT * FROM tbl_alumno, tbl_proyecto WHERE tbl_alumno.proy_id=tbl_proyecto.proy_id');
 				
 											
 											$selectAlumno->execute();	



 						$rows = $selectAlumno->fetchAll(PDO::FETCH_ASSOC);
						
						echo json_encode($rows);

?>


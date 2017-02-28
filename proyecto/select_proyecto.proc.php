<?php

include_once "includes/conexion_bd.php";



$selectUsuario = $databaseConnection->prepare('SELECT * FROM tbl_proyecto');

// $selectUsuario = $databaseConnection->prepare('SELECT `tbl_alumno`.`alu_id`, `tbl_alumno`.`alu_nom`, `tbl_alumno`.`alu_apellido`, `tbl_alumno`.`alu_nfpublico`, `tbl_alumno`.`alu_nftribunal`, `tbl_alumno`.`proy_id`, `tbl_proyecto`.`proy_nom`, `tbl_proyecto`.`proy_curso`, `tbl_proyecto`.`proy_fecha`, `tbl_proyecto`.`proy_estado`, `tbl_proyecto`.`proy_nota`, `tbl_proyecto`.`tri_id` FROM tbl_alumno, tbl_proyecto WHERE `tbl_proyecto`.`proy_id` = `tbl_alumno`.`proy_id` and `tbl_proyecto`.`tri_id` = 0 GROUP BY `tbl_proyecto`.`pro_id`');
 				
 											
 											$selectUsuario->execute();	



 						$rows = $selectUsuario->fetchAll(PDO::FETCH_ASSOC);
						
						echo json_encode($rows);

?>


<?php

include_once "includes/conexion_bd.php";
extract($_REQUEST);

$insertProyecto = $databaseConnection->prepare("INSERT INTO tbl_proyecto (proy_nom, proy_curso, proy_fecha, proy_pin, proy_estado) VALUES (:nom, :curso, :fecha, :pin, :estado);");
                  $insertProyecto->bindParam(':nom', $nom);
                  $insertProyecto->bindParam(':curso', $curso); 
                  $insertProyecto->bindParam(':fecha', $fecha);
                  $insertProyecto->bindParam(':pin', $pin);
                  $insertProyecto->bindParam(':estado', $estado);

                $insertProyecto->execute();

?>
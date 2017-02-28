<?php

include_once "includes/conexion_bd.php";
extract($_REQUEST);

$insertProyecto = $databaseConnection->prepare("INSERT INTO tbl_proyecto (proy_nom, proy_curso, proy_fecha, proy_pin, proy_estado, tri_id) VALUES (:nom, :curso, :fecha, :pin, :estado, :tribunal);");
                  $insertProyecto->bindParam(':nom', $nom);
                  $insertProyecto->bindParam(':curso', $curso); 
                  $insertProyecto->bindParam(':fecha', $fecha);
                  $insertProyecto->bindParam(':pin', $pin);
                  $insertProyecto->bindParam(':estado', $estado);
                  $insertProyecto->bindParam(':tribunal', $tribunal);

                $insertProyecto->execute();


$id=$databaseConnection->lastInsertId();

$insertAlumno = $databaseConnection->prepare("INSERT INTO tbl_alumno (alu_nom, alu_apellido, proy_id) VALUES (:nombre, :apellido,:proyecto);");
                 $insertAlumno->bindParam(':nombre', $nombre);
                 $insertAlumno->bindParam(':apellido', $apellido);
                 $insertAlumno->bindParam(':proyecto', $id);  
                 

                //$insertAlumno->execute();

$nombre=$nombre1;
$apellido=$apellido1;
$insertAlumno->execute();

$nombre=$nombre2;
$apellido=$apellido2;
$insertAlumno->execute();

$nombre=$nombre3;
$apellido=$apellido3;
$insertAlumno->execute();





?>
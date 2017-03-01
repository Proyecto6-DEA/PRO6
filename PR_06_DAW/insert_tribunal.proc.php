<?php

include_once "includes/conexion_bd.php";
extract($_REQUEST);

$insertTribunal = $databaseConnection->prepare("INSERT INTO tbl_tribunal (tri_jurado, tri_nombre) VALUES (:jurado, :nombre);");
                  $insertTribunal->bindParam(':jurado', $jurado);
                  $insertTribunal->bindParam(':nombre', $nombre); 
                  
                $insertTribunal->execute();

?>
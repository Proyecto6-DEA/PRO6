<?php

include_once "includes/conexion_bd.php";
extract($_REQUEST);

$insertPregunta = $databaseConnection->prepare("INSERT INTO tbl_pregunta (preg_txt, preg_tipo, preg_categoria) VALUES (:txt, :tipo, :categoria);");
                  $insertPregunta->bindParam(':txt', $txt);
                  $insertPregunta->bindParam(':tipo', $tipo); 
                  $insertPregunta->bindParam(':categoria', $categoria);
                  
                $insertPregunta->execute();

?>
<?php

include_once "includes/conexion_bd.php";
extract($_REQUEST);

$insertUsuario = $databaseConnection->prepare("INSERT INTO tbl_usuario (usu_nombre, usu_apellido, usu_usuario, usu_pass) VALUES (:nombre, :apellido, :usuario, :pass);");
                  $insertUsuario->bindParam(':nombre', $nombre);
                  $insertUsuario->bindParam(':apellido', $apellido); 
                  $insertUsuario->bindParam(':usuario', $usuario);
                  $insertUsuario->bindParam(':pass', $pass);

                $insertUsuario->execute();

?>
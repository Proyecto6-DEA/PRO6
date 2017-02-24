<?php

include_once "includes/conexion_bd.php";
extract($_REQUEST);

$insertUsuario = $databaseConnection->prepare("INSERT INTO tbl_usuario (usu_nombre, usu_apellido, usu_usuario, usu_pass, tri_id) VALUES (:nombre, :apellido, :usuario, :pass, :tribunal);");
                  $insertUsuario->bindParam(':nombre', $nombre);
                  $insertUsuario->bindParam(':apellido', $apellido); 
                  $insertUsuario->bindParam(':usuario', $usuario);
                  $insertUsuario->bindParam(':pass', $pass);
                  $insertUsuario->bindParam(':tribunal', $tribunal);

                $insertUsuario->execute();

?>
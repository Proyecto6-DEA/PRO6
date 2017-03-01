<?php
$conexion = mysqli_connect('localhost', 'root', '', 'bd_proyecto6');
$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

extract($_REQUEST);

$sql = "SELECT * FROM tbl_proyecto WHERE proy_pin = $code";
$preuntas = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($preuntas)>0){
    	header("location:preguntas_alu.php?proy_pin=$code");
    } else {
    	header("location:../index.php");
    }
?>
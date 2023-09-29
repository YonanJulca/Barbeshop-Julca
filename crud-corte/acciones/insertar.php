<?php
include "../config/bd.php";

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$ubicacion=$_POST['ubicacion'];
$foto=$_FILES['foto'];

$foto=addslashes(file_get_contents($foto['tmp_name']));


$query=insertar($nombre,$precio,$ubicacion,$foto);

header('location:../index.php');
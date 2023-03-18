<?php

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$ubicacion=$_POST['ubicacion'];
$foto=$_FILES['foto'];

include "../config/bd.php";
if($foto['size']==0) {
    $query=actualizarSinFoto($id,$nombre,$precio,$ubicacion);
}else {
    $foto=addslashes(file_get_contents($foto['tmp_name']));
    $query=actualizar($id,$nombre,$precio,$ubicacion,$foto);
}

header("location:../editar.php?id=$id");



?>
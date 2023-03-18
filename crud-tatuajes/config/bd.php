<?php

function conexion() {
    $conexion=mysqli_connect('localhost','root','','crud');
    return $conexion;
}

function listar(){
    $sql="SELECT * FROM tatuajes";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function insertar($nombre,$precio,$ubicacion,$foto){
    $sql="INSERT INTO tatuajes(nombre,precio,ubicacion,foto) values('$nombre','$precio','$ubicacion','$foto')";

    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function eliminar($id) {
    $sql="DELETE from tatuajes WHERE id=$id";

    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function Listarcorte($id) {
    $sql="SELECT * FROM tatuajes WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return mysqli_fetch_assoc($query);
}

function actualizar($id,$nombre,$precio,$ubicacion,$foto){
    $sql="UPDATE  tatuajes SET nombre='$nombre',precio='$precio',ubicacion='$ubicacion',foto='$foto' WHERE id=$id";

    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function actualizarSinFoto($id,$nombre,$precio,$ubicacion){
    $sql="UPDATE  tatuajes SET nombre='$nombre',precio='$precio',ubicacion='$ubicacion', WHERE id=$id";

    $query=mysqli_query(conexion(),$sql);
    return $query;
}
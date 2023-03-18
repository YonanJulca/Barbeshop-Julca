<?php
$id=$_GET['id'];
include "config/bd.php";
$datos=Listarcorte($id);
$nombre=$datos['nombre'];
$precio=$datos['precio'];
$ubicacion=$datos['ubicacion'];
$foto=$datos['foto'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class ="container">
    <div class="bg-light w-50 m-auto p-3">
        <div class="bg-primary p-2">
        <a class="btn btn-warning btn-sm" href="index.php">Inicio</a>
        <a class="btn btn-secondary btn-sm" href="editar.php?id=<?php echo $id?>">Editar</a>
        <a class="btn btn-danger btn-sm" href="acciones/eliminar.php?id=<?php echo $id?>">Eliminar</a>
        </div>
       <h3 class="text-center"><?=$nombre?></h3>
       <p><strong>precio: </strong> <?=$precio?></p>
       <p><strong>ubicacion: </strong> <?=$ubicacion?></p>
       <center><img style= "height:400px;" src="data:image/jpg;base64,<?=base64_encode($foto)?>"></center>
    </div>
</div>
    
</body>
</html>
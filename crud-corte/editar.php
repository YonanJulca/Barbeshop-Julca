<?php
$id = $_GET['id'];
include "config/bd.php";
$datos = Listarcorte($id);
$nombre = $datos['nombre'];
$precio = $datos['precio'];
$ubicacion = $datos['ubicacion'];
$foto = $datos['foto'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <!-- Enlace al CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="w-50 bg.light p-3 m-auto">
            <form action="acciones/actualizar.php" method="POST" enctype="multipart/form-data">
                <div class="bg-primary p-2">
                    <!-- Botones de navegación -->
                    <a class="btn btn-warning btn-sm" href="index.php">Inicio</a>
                    <a class="btn btn-info btn-sm" href="ver.php?id=<?php echo $id?>">Ver</a>
                    <a class="btn btn-danger btn-sm" href="acciones/eliminar.php?id=<?php echo $id?>">Eliminar</a>
                </div>
                <!-- Campo oculto para enviar el ID -->
                <input type="hidden" name="id" value="<?=$id?>">
                <H3 class="text-center"><?=$nombre ?></H3>
                
                <!-- Campos para editar los detalles del corte -->
                <label >Nombre del corte</label>
                <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">

                <label >Precio Del corte</label>
                <input class="form-control" type="text" name="precio" value="<?=$precio?>">

                <label >Ubicacion Del Local</label>
                <input class="form-control" type="text" name="ubicacion" value="<?=$ubicacion?>">

                <label >Foto del corte</label>
                <input class="form-control" type="file" name="foto" >
                <center><img class="mt-2" style= "height:200px;" src="data:image/jpg;base64, <?=base64_encode($foto)?>"></center>
                <br>
                <button class="btn btn-primary mt-2" type="submit">Actualizar</button>
            </form>
        </div>
    </div>
    
    <!-- Scripts de Bootstrap al final del cuerpo del documento -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

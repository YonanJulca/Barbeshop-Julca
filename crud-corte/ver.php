<?php
// Obtener el ID del corte de la URL
$id = $_GET['id'];

// Incluir el archivo de configuración de la base de datos
include "config/bd.php";

// Obtener los detalles del corte con el ID proporcionado
$datos = Listarcorte($id);

// Extraer información del corte
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
    <title>Ver Corte</title>

    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class ="container">
        <div class="bg-light w-50 m-auto p-3">
            <div class="bg-primary p-2">
                <!-- Enlaces de navegación -->
                <a class="btn btn-warning btn-sm" href="index.php">Inicio</a>
                <a class="btn btn-secondary btn-sm" href="editar.php?id=<?php echo $id?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="acciones/eliminar.php?id=<?php echo $id?>">Eliminar</a>
            </div>

            <!-- Mostrar detalles del corte -->
            <h3 class="text-center"><?=$nombre?></h3>
            <p><strong>Precio:</strong> <?=$precio?></p>
            <p><strong>Ubicación:</strong> <?=$ubicacion?></p>
            <center><img style= "height:400px;" src="data:image/jpg;base64,<?=base64_encode($foto)?>"></center>
        </div>
    </div>

    <!-- Incluir Bootstrap JS (al final del cuerpo del documento) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

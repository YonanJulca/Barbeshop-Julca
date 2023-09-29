<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Enlaces a archivos CSS -->
    <link rel="stylesheet" href="estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
    <title>Crud corte</title>
</head>
<body>
    <div class="container">
        <div class="row p-2">
            <!-- Columna de formulario para registrar un corte -->
            <div class="col-3">
                <form action="acciones/insertar.php"  method="POST" enctype="multipart/form-data">
                    <h3 class="text-center">Registrar un corte</h3>
                    <label>Nombre del corte</label>
                    <input class="form-control mb-3" type="text" name="nombre">
                    <label>Precio Del corte</label>
                    <input class="form-control mb-3" type="text" name="precio">
                    <label>Ubicacion Del Local</label>
                    <input class="form-control mb-3" type="text" name="ubicacion">
                    <label>Foto del corte</label>
                    <input class="form-control mb-3" type="file" name="foto">
                    <button class="btn btn-primary mt-2" type="submit">Registrar</button>
                    <a class="btn btn-info" href="../index.php">Regresar</a>
                </form>
            </div>

            <!-- Columna para listar los cortes -->
            <div class="col-9">
                <h3>Lista de cortes</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Ubicacion</th>
                            <th>Foto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "config/bd.php";
                        $query = listar();
                        $enumeracion = 0;
                        while($datos = mysqli_fetch_assoc($query)){
                            $enumeracion++;
                            $id = $datos['id'];
                            $nombre = $datos['nombre'];
                            $precio = $datos['precio'];
                            $ubicacion = $datos['ubicacion'];
                            $foto = $datos['foto'];
                        ?>
                        <tr>
                            <td><?= $enumeracion?></td>
                            <td><?= $nombre?></td>
                            <td><?= $precio?></td>
                            <td><?= $ubicacion?></td>
                            <td><img style="max-height:50px;" src="data:image/jpg;base64,<?= base64_encode($foto)?>"></td>
                            <td>
                                <a class="btn btn-info" href="ver.php?id=<?=$id?>">Ver</a>
                                <a class="btn btn-warning" href="editar.php?id=<?=$id?>">Actualizar</a>
                                <a class="btn btn-danger" href="acciones/eliminar.php?id=<?=$id?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

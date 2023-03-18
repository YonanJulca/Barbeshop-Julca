<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud corte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row p-2">

  <div class="col-3">

    <form action="acciones/insertar.php"  method="POST" enctype="multipart/form-data">
         
         <H3 class="text-center">Regristra un Tatuaje</H3>
        
          <label >Nombre del Tatuaje</label>
          <input class="form-control" type="text" name="nombre">

          <label >Precio Del Tatuaje</label>
          <input class="form-control" type="text" name="precio">

          <label >Ubicacion Del Local</label>
          <input class="form-control" type="text" name="ubicacion">

          <label >foto del corte</label>
          <input class="form-control" type="file" name="foto">
   
          <button class="btn btn-primary mt-2" type="submit">Registar</button>
          <a class="btn btn-info" href="../index.php">Regresar </a>
        </form>
  </div>

  <div class="col-9">
    Lista de Tatuajes

    <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>ubicacion</th>
            <th>foto</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>

            <?php
            
              include "config/bd.php";
               $query=listar();
               $enumeracion=0;
               while($datos=mysqli_fetch_assoc($query)){
                $enumeracion++;
                $id=$datos['id'];
                $nombre=$datos['nombre'];
                $precio=$datos['precio'];
                $ubicacion=$datos['ubicacion'];
                $foto=$datos['foto'];
             
            ?>

           <tr>
            <td><?= $enumeracion?></td>
            <td><?= $nombre?></td>
            <td><?= $precio?></td>
            <td><?= $ubicacion?></td>
            <td><img style= "max-height:50px;" src="data:image/jpg;base64,<?= base64_encode($foto)?>"></td>
            <td>
                <a class="btn btn-info" href="ver.php?id=<?=$id?>">Ver</a>
                <a class="btn btn-warning" href="editar.php?id=<?=$id?>">actualizar</a>
                <a class="btn btn-danger" href="acciones/eliminar.php?id=<?=$id?>">eliminar</a>
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
    
</body>
</html>
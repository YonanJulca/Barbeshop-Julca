<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Meta etiquetas requeridas -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css" /> <!-- CSS personalizado -->

  <title>Barbeshop</title>
</head>

<body data-spy="scroll" data-target="#navbar-controls" data-offset="56">

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <!-- Logotipo y nombre de la marca -->
        <div class="plat-logs mr-1">
          <div class="logo-top"></div>
          <div class="logo-bottom"></div>
        </div>
        Barbeshop Julca
      </a>

      <div class="collapse navbar-collapse" id="navbar">
        <div class="navbar-nav ml-auto" id="navbar-controls">
          <a class="nav-item nav-link" href="#Inicio">Inicio</a>
          <a class="nav-item nav-link" href="#Cortes">Cortes</a>
          <a class="nav-item nav-link" href="#Hubicacion">Ubicacion</a>
          <a class="nav-item nav-link" href="#Comentarios">Comentarios</a>
          <a class="nav-item nav-link text-platzi" href="./login/index.html">Registro</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Sección de inicio (Hero) -->
  <div id="Inicio" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./images/pon.png" alt="First slide" />
      </div>
      <!-- Más elementos del carrusel aquí -->
    </div>
    <div class="capa-hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 offset-md-6 text-center text-md-right">
            <h1>¿ Quienes Somos ?</h1>
            <p class="d-none d-md-block">
              Fuimos impulsados por un concepto simple: crear un espacio en
              donde tengas una experiencia de buenas conversaciones, excelente
              servicio, bebidas, buena música y cortes A1. Relájate y deja que
              la magia fluya de nuestras manos
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sección de Cortes -->
  <section id="Cortes">
    <div class="container">
      <div class="row">
        <div class="col text-uppercase text-center mt-4">
          <h2 id="Cortes-1"> Galeria de Cortes</h2>
        </div>
      </div>

      <div class="row">
        <!-- PHP para obtener y mostrar información de cortes de cabello -->
        <?php
          include "./crud-corte/config/bd.php";

          $query = listar();
          $enumeracion = 0;
          while ($datos = mysqli_fetch_assoc($query)) {
            $enumeracion++;
            $id = $datos['id'];
            $nombre = $datos['nombre'];
            $precio = $datos['precio'];
            $ubicacion = $datos['ubicacion'];
            $foto = $datos['foto'];
        ?>

          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
              <img src="data:image/jpg;base64,<?= base64_encode($foto) ?>" class="card-img-top" alt="Imagen de Leonidas Esteban" />
              <div class="card-body">
                <span class="badge badge-warning"><?= $ubicacion ?></span>
                <span class="badge badge-warning"><?= $precio ?></span>
                <a class="badge badge-info" href="tarjeta/tarjeta.html">Reservar</a>
                <h5 class="card-title"><?= $nombre ?></h5>
              </div>
            </div>
          </div>
        <?php
          }
        ?>
      </div>
    </div>
  </section>

  <!-- Sección de Lugar y Fecha -->
  <section id="Hubicacion">
    <div id="" class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-6 mt-4 mb-4">
          <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.7310471161945!2d-77.21164611923663!3d-11.499315112847988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91068a0d6a4261d9%3A0x7a09c3b429dda1c6!2sBarber%20Shop%20Percy%20Alexander&#39;s!5e0!3m2!1ses!2spe!4v1677200454684!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
        <div class="col-12 col-lg-6 mt-4 mb-4">
          <h2>Huaral-Lima</h2>
          <p>
            Macho que se respeta con un excelente barbero cuenta.
            Ningún hombre se siente completo si no cuenta con un buen barbero.
            Tu vida puede cambiar en la barbería porque renovar tu estilo también es renovar tu vida.
            Renueva tu estilo. Siempre es un excelente momento para dejar de ser aburrido.
            Si te miras al espejo y no te gusta lo que ves en el reflejo es momento de que conozcas a un buen barbero.
          </p>
        </div>
      </div>
    </div>
  </section

  <!-- Sección de Comentarios -->
  <section id="Comentarios">
    <div class="container">
      <div class="row">
        <div class="col mt-4 text-center text-uppercase">
          <h3>Comentarios</h3>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p>No tengas miedo al exito Comenta tienes alguna duda</p>
        </div>
      </div>
      <div class="row">
        <form class="col col-lg-8 offset-lg-2 pt-2">
          <div class="form-row">
            <div class="form-group col">
              <input type="text" class="form-control" id="name" placeholder="Nombre" />
            </div>
            <div class="form-group col">
              <input type="text" class="form-control" id="apellido" placeholder="Apellido" />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <textarea class="form-control" placeholder="Sobre que quieres hablar?" id="tema" rows="3"></textarea>
              <small class="form-text text-muted">Recuerda llenar todas las casillas</small>
            </div>
          </div>
          <button type="submit" class="btn btn-platzi btn-block mb-4">
            Enviar
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Pie de Página -->
  <footer id="footer" class="pt-4 pb-4">
    <div class="container">
      <div class="row text-center">
        <div class="col-12 col-md">
          <a href="#">Contactanos :</a>
        </div>
        <div class="col-12 col-md">
          <button type="button" class="btn btn-light">Facebook</button>
        </div>
        <div class="col-12 col-md">
          <button type="button" class="btn btn-light">Whatsapp</button>
        </div>
        <div class="col-12 col-md">
          <button type="button" class="btn btn-light">Instagram</button>
        </div>
        <div class="col-12 col-md">
          <button type="button" class="btn btn-light">Youtube</button>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">
            Comprar Tickets
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Grupo de entradas -->
          <form>
            <div class="form-row">
              <div class="form-group col">
                <div class="input-group flex-nowrap">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" />
                </div>
              </div>
            </div>
          </form>
          <!-- Alerta -->
          <div class="alert alert-warning" role="alert">
            Recibirás un correo de confirmación si sales sorteado
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Cancelar
          </button>
          <button type="button" class="btn btn-primary">Comprar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript Opcional -->
  <!-- jQuery, Popper.js, Bootstrap JS, y Script Personalizado -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="./scripts/index.js"></script>

</body>

</html>


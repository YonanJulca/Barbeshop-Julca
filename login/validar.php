<?php
// Incluyendo el archivo de conexión a la base de datos
include('db.php');

// Obteniendo el nombre de usuario y contraseña del formulario de inicio de sesión
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Consulta SQL para verificar si las credenciales son válidas
$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado = mysqli_query($conexion, $consulta);

// Contando el número de filas devueltas por la consulta
$filas = mysqli_num_rows($resultado);

if($filas){
    // Si las credenciales son válidas, redirige a otra página (en este caso, a ../crud-corte/index.php)
    header("location:../crud-corte/index.php");
    exit();
} else {
    // Si las credenciales no son válidas, muestra un mensaje de error
    include("index.html");
    echo '<h1 class="bad">ERROR DE AUTENTIFICACION</h1>';
}

// Liberando el resultado y cerrando la conexión a la base de datos
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

<?php
include('config/db.php');
$usuario = $_POST['user'];
$password = $_POST['pswd'];

$consulta = "SELECT * FROM usuarios where usuario = '$usuario' and password = '$password'";
$resultado = pg_query($conexion, $consulta);

$filas = pg_num_rows($resultado);

if ($filas) {

  header("location:home.php");
} else {
  include("index.php");
  header("location:error.php");
}

pg_free_result($resultado);
pg_close($conexion);

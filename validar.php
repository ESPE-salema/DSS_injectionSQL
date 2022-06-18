<?php
include('db.php');
$usuario = $_POST['usuario'];
$password = $_POST['password'];



$consulta = "SELECT * FROM usuarios where usuario = '$usuario' and password = '$password'";
$resultado = pg_query($conexion, $consulta);

$filas = pg_num_rows($resultado);

if ($filas) {

  header("location:home.php");
} else {
?>
  <?php
  include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}
pg_free_result($resultado);
pg_close($conexion);

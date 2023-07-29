<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$contacto=$_POST['contacto'];

$direccion=$_POST['direccion'];
$estado=$_POST['estado'];

$consulta="INSERT INTO `cliente` (`Nombre`, `Apellido`, `Contacto`, `Dirección`, `Estado`)
VALUES ('$nombre', '$apellido', '$contacto', '$direccion', '$estado');";


$resultado=mysqli_query($conexion, $consulta) or die("error de registro");
echo "registro exito";

echo '<a class="btn_a"  href="../Controlador/mostrar.php">Mostrar</a>';

mysqli_close($conexion);
?>
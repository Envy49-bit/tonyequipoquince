<?php
$servidor = "localhost";
$usuario = "dev_user";
$password = "Dev*2026";
$bd = "tonyequipoquince";

$conexion = new mysqli($servidor, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

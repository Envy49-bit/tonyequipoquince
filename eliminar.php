<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM articulos WHERE id=$id";

$conexion->query($sql);

header("Location: admin.php");
?>

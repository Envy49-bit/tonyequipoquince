<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Agregar Producto</title>
</head>
<body>

<h2>Agregar Producto</h2>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre"><br><br>
    <input type="number" name="precio" placeholder="Precio"><br><br>
    <button>Guardar</button>
</form>

</body>
</html>

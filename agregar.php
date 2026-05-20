<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if ($_POST) {

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO articulos(nombre, descripcion, precio, stock)
            VALUES('$nombre','$descripcion','$precio','$stock')";

    $conexion->query($sql);

    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Agregar Producto</title>

<style>
:root {
    --bg: #0d0d0d;
    --card: rgba(20,20,20,0.8);
    --accent: #3498db;
    --text: #fff;
    --gray: #888;
}

body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial;
    background: url('fondo.jpg') center/cover no-repeat;
}

body::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
    backdrop-filter: blur(8px);
}

.box {
    position: relative;
    width: 400px;
    padding: 40px;
    background: var(--card);
    border-radius: 15px;
    backdrop-filter: blur(20px);
}

h2 {
    margin-bottom: 30px;
    color: white;
}

.input-group {
    margin-bottom: 20px;
}

input,
textarea {
    width: 100%;
    padding: 12px;
    background: transparent;
    border: none;
    border-bottom: 1px solid #555;
    color: white;
    outline: none;
    font-size: 14px;
}

textarea {
    resize: none;
    height: 80px;
}

input:focus,
textarea:focus {
    border-bottom-color: var(--accent);
}

.btn {
    width: 100%;
    padding: 12px;
    background: var(--accent);
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
}

.back {
    display: block;
    margin-top: 20px;
    color: var(--gray);
    text-decoration: none;
}
</style>
</head>

<body>

<div class="box">

    <h2>Agregar Producto</h2>

    <form method="POST">

        <div class="input-group">
            <input
                type="text"
                name="nombre"
                placeholder="Nombre del producto"
                required
            >
        </div>

        <div class="input-group">
            <textarea
                name="descripcion"
                placeholder="Descripción"
                required
            ></textarea>
        </div>

        <div class="input-group">
            <input
                type="number"
                name="precio"
                placeholder="Precio"
                required
            >
        </div>

        <div class="input-group">
            <input
                type="number"
                name="stock"
                placeholder="Stock"
                required
            >
        </div>

        <button class="btn">Guardar producto</button>

    </form>

    <a href="admin.php" class="back">← Volver</a>

</div>

</body>
</html>

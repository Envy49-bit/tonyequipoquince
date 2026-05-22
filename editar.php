<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];

/* Obtener datos actuales */
$sql = "SELECT * FROM articulos WHERE id=$id";
$resultado = $conexion->query($sql);
$producto = $resultado->fetch_assoc();

/* Actualizar */
if ($_POST) {

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $update = "UPDATE articulos
               SET nombre='$nombre',
                   descripcion='$descripcion',
                   precio='$precio',
                   stock='$stock'
               WHERE id=$id";

    $conexion->query($update);

    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Producto</title>

<style>

:root {
    --bg: #0d0d0d;
    --card: #141414;
    --accent: #3498db;
    --gray: #888;
}

body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: var(--bg);
    font-family: Arial;
}

.box {
    background: var(--card);
    padding: 40px;
    width: 350px;
    border-radius: 10px;
}

h2 {
    margin-bottom: 30px;
    color: white;
}

/* Inputs */

.input-group {
    margin-bottom: 25px;
}

input,
textarea {
    width: 100%;
    padding: 10px;
    background: transparent;
    border: none;
    border-bottom: 1px solid #555;
    color: white;
    resize: none;
}

input:focus,
textarea:focus {
    border-color: var(--accent);
    outline: none;
}

/* Buttons */

.btn {
    width: 100%;
    padding: 10px;
    background: var(--accent);
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 5px;
}

.back {
    display: block;
    margin-top: 20px;
    text-align: center;
    color: var(--gray);
    text-decoration: none;
}

</style>
</head>

<body>

<div class="box">

    <h2>Editar Producto</h2>

    <form method="POST">

        <!-- Nombre -->

        <div class="input-group">
            <input
                type="text"
                name="nombre"
                value="<?= $producto['nombre'] ?>"
                placeholder="Nombre"
                required
            >
        </div>

        <!-- Descripción -->

        <div class="input-group">
            <textarea
                name="descripcion"
                placeholder="Descripción"
                required
            ><?= $producto['descripcion'] ?></textarea>
        </div>

        <!-- Precio -->

        <div class="input-group">
            <input
                type="number"
                step="0.01"
                name="precio"
                value="<?= $producto['precio'] ?>"
                placeholder="Precio"
                required
            >
        </div>

        <!-- Stock -->

        <div class="input-group">
            <input
                type="number"
                name="stock"
                value="<?= $producto['stock'] ?>"
                placeholder="Stock"
                required
            >
        </div>

        <button class="btn">
            Guardar cambios
        </button>

    </form>

    <a href="admin.php" class="back">
        Cancelar
    </a>

</div>

</body>
</html>

<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM articulos";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Admin — Papelería Tony</title>

<style>
:root {
    --bg: #0d0d0d;
    --card: #141414;
    --accent: #3498db;
    --text: #fff;
    --gray: #888;
}

body {
    margin: 0;
    background: var(--bg);
    color: var(--text);
    font-family: Arial;
}

.header {
    padding: 20px 40px;
    background: #000;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header a {
    color: var(--accent);
    text-decoration: none;
}

.container {
    padding: 40px;
}

.btn {
    padding: 8px 15px;
    background: var(--accent);
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 0.8rem;
}

.btn-danger {
    background: #e74c3c;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th,
td {
    padding: 15px;
    text-align: left;
}

th {
    color: var(--gray);
    text-transform: uppercase;
    font-size: 0.8rem;
}

tr {
    border-bottom: 1px solid #222;
}

tr:hover {
    background: #1a1a1a;
}
</style>
</head>

<body>

<div class="header">
    <h2>Panel Admin</h2>
    <a href="logout.php">Cerrar sesión</a>
</div>

<div class="container">

    <h3>Productos</h3>

    <a href="agregar.php" class="btn">
        + Nuevo producto
    </a>

    <table>

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>

        <?php while($fila = $resultado->fetch_assoc()) { ?>

        <tr>

            <td><?= $fila['id'] ?></td>

            <td><?= $fila['nombre'] ?></td>

            <td><?= $fila['descripcion'] ?></td>

            <td>$<?= $fila['precio'] ?></td>

            <td><?= $fila['stock'] ?></td>

            <td>

                <a
                    href="editar.php?id=<?= $fila['id'] ?>"
                    class="btn"
                >
                    Editar
                </a>

                <a
                    href="eliminar.php?id=<?= $fila['id'] ?>"
                    class="btn btn-danger"
                >
                    Eliminar
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>

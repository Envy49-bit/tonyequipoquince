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
    font-family: Arial, sans-serif;
    background: var(--bg);
    color: var(--text);
}

/* Header */
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

/* Container */
.container {
    padding: 40px;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 15px;
    text-align: left;
}

th {
    color: var(--gray);
    font-size: 0.8rem;
    text-transform: uppercase;
}

tr {
    border-bottom: 1px solid #222;
    transition: 0.3s;
}

tr:hover {
    background: #1a1a1a;
}

/* Buttons */
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
</style>
</head>

<body>

<div class="header">
    <h2>Panel Admin</h2>
    <a href="logout.php">Cerrar sesión</a>
</div>

<div class="container">

<h3>Productos</h3>

<a href="agregar.php" class="btn">+ Nuevo producto</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>

    <!-- EJEMPLO -->
    <tr>
        <td>1</td>
        <td>Cuaderno</td>
        <td>$50</td>
        <td>
            <a href="editar.php?id=1" class="btn">Editar</a>
            <a href="eliminar.php?id=1" class="btn btn-danger">Eliminar</a>
        </td>
    </tr>

</table>

</div>

</body>
</html>

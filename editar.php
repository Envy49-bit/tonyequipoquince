<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Aquí normalmente cargas datos por ID
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
}

h2 {
    margin-bottom: 30px;
}

/* Inputs */
.input-group {
    position: relative;
    margin-bottom: 25px;
}

input {
    width: 100%;
    padding: 10px;
    background: transparent;
    border: none;
    border-bottom: 1px solid #555;
    color: white;
}

input:focus {
    border-color: var(--accent);
    outline: none;
}

/* Button */
.btn {
    width: 100%;
    padding: 10px;
    background: var(--accent);
    border: none;
    color: white;
    cursor: pointer;
}
</style>
</head>

<body>

<div class="box">
    <h2>Editar Producto</h2>

    <form method="POST">
        <div class="input-group">
            <input type="text" name="nombre" placeholder="Nombre">
        </div>

        <div class="input-group">
            <input type="number" name="precio" placeholder="Precio">
        </div>

        <button class="btn">Guardar cambios</button>
    </form>
</div>

</body>
</html>

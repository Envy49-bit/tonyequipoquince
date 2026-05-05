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
    font-family: 'Inter', sans-serif;
    background: url('fondo.jpg') center/cover no-repeat;
}

/* Overlay */
body::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
    backdrop-filter: blur(8px);
}

/* Card */
.box {
    position: relative;
    width: 350px;
    padding: 40px;
    background: var(--card);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 15px;
    animation: fadeIn 0.8s ease;
}

@keyframes fadeIn {
    from {opacity:0; transform: translateY(20px);}
    to {opacity:1; transform: translateY(0);}
}

h2 {
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* Inputs */
.input-group {
    position: relative;
    margin-bottom: 25px;
}

input {
    width: 100%;
    padding: 10px 0;
    border: none;
    border-bottom: 1px solid #555;
    background: transparent;
    color: white;
    outline: none;
    transition: 0.3s;
}

input:focus {
    border-bottom-color: var(--accent);
    transform: scale(1.02);
}

/* Button */
.btn {
    width: 100%;
    padding: 12px;
    border: none;
    background: var(--accent);
    color: white;
    font-weight: bold;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.btn:hover {
    transform: scale(1.05);
}

/* Back */
.back {
    display: block;
    margin-top: 20px;
    font-size: 0.75rem;
    color: var(--gray);
    text-decoration: none;
}
</style>
</head>

<body>

<div class="box">
    <h2>Agregar</h2>

    <form method="POST">
        <div class="input-group">
            <input type="text" name="nombre" required>
        </div>

        <div class="input-group">
            <input type="number" name="precio" required>
        </div>

        <button class="btn">Guardar producto</button>
    </form>

    <a href="admin.php" class="back">← Volver</a>
</div>

</body>
</html>

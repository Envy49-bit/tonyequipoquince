<?php
session_start();

if ($_POST) {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($usuario === "24160753@itoaxaca.edu.mx" && $password === "24160753") {
        $_SESSION['user'] = $usuario;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Acceso — Papelería Tony</title>

<style>
:root {
    --bg: #0d0d0d;
    --glass: rgba(255,255,255,0.05);
    --accent: #3498db;
    --error: #e74c3c;
}

body {
    margin: 0;
    height: 100vh;
    font-family: 'Inter', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
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
.login-box {
    position: relative;
    width: 350px;
    padding: 40px;
    background: var(--glass);
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
.form-group {
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
}

label {
    position: absolute;
    top: 10px;
    left: 0;
    color: #aaa;
    font-size: 0.8rem;
    transition: 0.3s;
}

input:focus + label,
input:valid + label {
    top: -10px;
    font-size: 0.65rem;
    color: var(--accent);
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

/* Error */
.error {
    color: var(--error);
    margin-top: 15px;
    font-size: 0.8rem;
}

/* Back */
.back {
    display: block;
    margin-top: 20px;
    font-size: 0.7rem;
    color: #aaa;
    text-decoration: none;
}
</style>
</head>

<body>

<div class="login-box">
    <h2>Acceso</h2>

    <form method="POST">
        <div class="form-group">
            <input type="text" name="usuario" required>
            <label>Usuario</label>
        </div>

        <div class="form-group">
            <input type="password" name="password" required>
            <label>Contraseña</label>
        </div>

        <button class="btn">Entrar</button>
    </form>

    <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>

    <a href="index.php" class="back">← Volver</a>
</div>

</body>
</html>

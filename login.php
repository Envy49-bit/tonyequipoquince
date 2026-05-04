<?php
// Lógica de autenticación se mantiene igual
if ($_POST) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if ($usuario == "24160753@itoaxaca.edu.mx" && $password == "24160753") {
        header("Location: admin.php");
        exit();
    } else {
        $error = "El usuario o contraseña son incorrectos.";
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
            --bg-color: #0d0d0d;
            --text-color: #ffffff;
            --accent-color: #3498db;
            --error-color: #e74c3c;
        }

        body, html {
            margin: 0;
            height: 100%;
            background-color: var(--bg-color);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Inter', sans-serif;
            overflow: hidden;
        }

        /* --- CONTENEDOR DE FONDO --- */
        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            /* Usamos una imagen de Unsplash optimizada para carga rápida */
            background: linear-gradient(rgba(13, 13, 13, 0.8), rgba(13, 13, 13, 0.8)), 
                        url('https://images.unsplash.com/photo-1516962215378-7fa2e137ae93?auto=format&fit=crop&q=80&w=1920');
            background-size: cover;
            background-position: center;
            filter: blur(10px);
            transform: scale(1.1); /* Evita bordes blancos por el desenfoque */
        }

        .login-box {
            width: 90%;
            max-width: 400px;
            padding: 50px;
            background: rgba(20, 20, 20, 0.7);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            font-size: 3rem;
            line-height: 0.9;
            text-transform: uppercase;
            margin-bottom: 40px;
            letter-spacing: -2px;
        }

        .form-group { margin-bottom: 25px; }

        label {
            display: block;
            font-size: 0.7rem;
            text-transform: uppercase;
            color: #777;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        input {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid #333;
            padding: 10px 0;
            color: white;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus { border-bottom-color: var(--accent-color); }

        .btn-submit {
            width: 100%;
            padding: 15px;
            background: white;
            color: black;
            border: none;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .btn-submit:hover { background: var(--accent-color); color: white; }

        .error-msg { color: var(--error-color); font-size: 0.8rem; margin-top: 15px; }

        .back-link {
            display: block;
            margin-top: 30px;
            text-decoration: none;
            color: #555;
            font-size: 0.75rem;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <div class="background-overlay"></div>

    <div class="login-box">
        <h2>PORTAL<br>LOGISTICA</h2>
        
        <form method="POST">
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="usuario" required autofocus>
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="password" required>
            </div>
            <input type="submit" value="Iniciar Sesión" class="btn-submit">
        </form>

        <?php if(isset($error)) echo "<p class='error-msg'>$error</p>"; ?>
        
        <a href="index.php" class="back-link">← Volver al inicio[cite: 2]</a>
    </div>

</body>
</html>

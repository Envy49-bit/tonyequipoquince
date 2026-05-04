<?php
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
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* --- FONDO CON IMAGEN Y DESENFOQUE --- */
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            /* Imagen temática de papelería técnica/oficina */
            background-image: url('https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?q=80&w=2048&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            filter: blur(8px) brightness(0.3); /* Aquí ajustas el desenfoque y oscuridad */
            transform: scale(1.1); /* Evita bordes blancos por el blur */
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-box {
            width: 100%;
            max-width: 420px;
            padding: 50px;
            background: rgba(20, 20, 20, 0.6); /* Fondo semi-transparente */
            backdrop-filter: blur(20px); /* Efecto Glassmorphism */
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 2px;
            animation: slideUp 1.2s cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        h2 {
            font-size: 3rem;
            line-height: 0.85;
            letter-spacing: -0.05em;
            margin-bottom: 40px;
            text-transform: uppercase;
            font-weight: 800;
        }

        .form-group {
            margin-bottom: 30px;
        }

        label {
            display: block;
            text-transform: uppercase;
            font-size: 0.65rem;
            letter-spacing: 0.2em;
            margin-bottom: 8px;
            color: #aaa;
        }

        input {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid #444;
            padding: 12px 0;
            color: white;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.4s;
        }

        input:focus {
            border-bottom-color: var(--accent-color);
        }

        .btn-submit {
            margin-top: 30px;
            background: #fff;
            color: #000;
            border: none;
            padding: 18px 0;
            width: 100%;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-submit:hover {
            background: var(--accent-color);
            color: #fff;
        }

        .error-msg {
            color: var(--error-color);
            font-size: 0.75rem;
            margin-top: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .back-link {
            display: inline-block;
            margin-top: 40px;
            color: #888;
            text-decoration: none;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s;
        }

        .back-link:hover { color: #fff; }
    </style>
</head>
<body>

    <div class="background-container"></div>

    <div class="login-box">
        <h2>PORTAL<br>INTERNO</h2>
        
        <form method="POST">
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="usuario" required autofocus placeholder="correo@ejemplo.com">
            </div>

            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="password" required placeholder="••••••••">
            </div>

            <input type="submit" value="Acceder al sistema" class="btn-submit">
        </form>

        <?php if(isset($error)): ?>
            <p class="error-msg"><?php echo $error; ?></p>
        <?php endif; ?>

        <a href="index.php" class="back-link">← Volver al inicio</a>
    </div>

</body>
</html>

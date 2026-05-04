<?php
if ($_POST) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Validación de credenciales según requerimientos
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
            --card-bg: #111111;
            --text-color: #ffffff;
            --accent-color: #3498db;
            --error-color: #e74c3c;
            --input-border: #222;
        }

        /* --- ANIMACIONES --- */
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        body {
            margin: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
            padding: 40px;
            animation: slideIn 1s cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        h2 {
            font-size: 3.5rem;
            line-height: 0.85;
            letter-spacing: -0.05em;
            margin-bottom: 50px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 30px;
            position: relative;
        }

        label {
            display: block;
            text-transform: uppercase;
            font-size: 0.65rem;
            letter-spacing: 0.2em;
            margin-bottom: 10px;
            color: #666;
            transition: color 0.3s;
        }

        input {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid var(--input-border);
            padding: 12px 0;
            color: white;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        /* Efecto de línea al enfocar */
        input:focus {
            border-bottom-color: var(--accent-color);
        }

        input:focus + label {
            color: var(--accent-color);
        }

        .btn-submit {
            margin-top: 40px;
            background: var(--text-color);
            color: var(--bg-color);
            border: none;
            padding: 18px 0;
            width: 100%;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            font-size: 0.8rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background: var(--accent-color);
            color: white;
            transform: scale(1.02);
        }

        .error-msg {
            color: var(--error-color);
            font-size: 0.7rem;
            margin-top: 25px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-left: 2px solid var(--error-color);
            padding-left: 15px;
        }

        .back-link {
            display: inline-block;
            margin-top: 40px;
            color: #444;
            text-decoration: none;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: var(--text-color);
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>SISTEMA<br>DE ACCESO</h2>
        
        <form method="POST">
            <div class="form-group">
                <label>Usuario Corporativo</label>
                <input type="text" name="usuario" required autofocus placeholder="ejemplo@itoaxaca.edu.mx">
            </div>

            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="password" required placeholder="••••••••">
            </div>

            <input type="submit" value="Entrar al Dashboard" class="btn-submit">
        </form>

        <?php if(isset($error)): ?>
            <div class="error-msg"><?php echo $error; ?></div>
        <?php endif; ?>

        <a href="index.php" class="back-link">← Volver al portal</a>
    </div>

</body>
</html>

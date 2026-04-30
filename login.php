<?php
if ($_POST) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if ($usuario == "24160753@itoaxaca.edu.mx" && $password == "24160753") {
        header("Location: admin.php");
        exit();
    } else {
        $error = "Acceso denegado. Verifica tus credenciales.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login — Papelería Tony</title>
    <style>
        :root {
            --bg-color: #0d0d0d;
            --card-bg: #1a1a1a;
            --text-color: #ffffff;
            --accent-color: #3498db;
            --error-color: #e74c3c;
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
        }

        .login-box {
            width: 100%;
            max-width: 400px;
            padding: 40px;
            box-sizing: border-box;
        }

        h2 {
            font-size: 3.5rem;
            line-height: 0.9;
            letter-spacing: -0.05em;
            margin-bottom: 40px;
            text-transform: uppercase;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.1em;
            margin-bottom: 8px;
            color: #888;
        }

        input {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 2px solid #333;
            padding: 10px 0;
            color: white;
            font-size: 1.1rem;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: var(--accent-color);
        }

        .btn-submit {
            margin-top: 30px;
            background: var(--text-color);
            color: var(--bg-color);
            border: none;
            padding: 15px 0;
            width: 100%;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .btn-submit:hover {
            opacity: 0.8;
        }

        .error-msg {
            color: var(--error-color);
            font-size: 0.9rem;
            margin-top: 20px;
            text-transform: uppercase;
        }

        .back-link {
            display: block;
            margin-top: 30px;
            color: #555;
            text-decoration: none;
            font-size: 0.8rem;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>IDENTIFÍCATE.</h2>
        
        <form method="POST">
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="usuario" required autofocus>
            </div>

            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="password" required>
            </div>

            <input type="submit" value="Entrar al sistema" class="btn-submit">
        </form>

        <?php if(isset($error)) echo "<p class='error-msg'>$error</p>"; ?>

        <a href="index.php" class="back-link">← Volver al inicio</a>
    </div>

</body>
</html>

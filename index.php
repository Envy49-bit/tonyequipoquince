<?php
// Incluimos la lógica de conexión y login al inicio del archivo
include("conexion.php");[cite: 4]

if ($_POST) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if ($usuario == "24160753@itoaxaca.edu.mx" && $password == "24160753") {
        header("Location: admin.php");[cite: 1]
        exit();
    } else {
        $error = "Acceso denegado. Verifique sus credenciales.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papelería Tony — Minimal Office</title>
    <style>
        :root {
            --bg-color: #0d0d0d;
            --text-color: #ffffff;
            --accent-color: #3498db;
            --gray-text: #888888;
        }

        * { scroll-behavior: smooth; box-sizing: border-box; }

        body {
            margin: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* --- ANIMACIONES --- */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- NAVEGACIÓN --- */
        nav {
            position: fixed;
            top: 0; width: 100%;
            padding: 25px 50px;
            display: flex;
            justify-content: space-between;
            background: rgba(13, 13, 13, 0.9);
            backdrop-filter: blur(10px);
            z-index: 1000;
        }
        nav a { color: #fff; text-decoration: none; margin-left: 25px; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; }

        /* --- SECCIONES --- */
        section { min-height: 100vh; padding: 100px 50px; display: flex; flex-direction: column; justify-content: center; }

        #inicio h1 { font-size: clamp(3rem, 12vw, 8rem); line-height: 0.9; margin: 20px 0; font-weight: 800; }

        /* --- SECCIÓN LOGIN CON FONDO --- */
        #login-section {
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bg-blurred {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('fondo.jpg');
            background-size: cover;
            background-position: center;
            filter: blur(10px);
            transform: scale(1.1);
            z-index: 1;
        }

        .login-card {
            position: relative;
            z-index: 2;
            background: rgba(20, 20, 20, 0.8);
            padding: 50px;
            width: 100%;
            max-width: 450px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .login-card h2 { font-size: 2.5rem; margin-bottom: 30px; text-transform: uppercase; }
        
        input {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid #444;
            padding: 15px 0;
            color: #fff;
            margin-bottom: 20px;
            outline: none;
        }
        input:focus { border-bottom-color: var(--accent-color); }

        .btn-login {
            width: 100%;
            padding: 15px;
            background: #fff;
            color: #000;
            border: none;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
        }
        .btn-login:hover { background: var(--accent-color); color: #fff; }

        footer { padding: 50px; background: #000; text-align: center; color: var(--gray-text); font-size: 0.8rem; }
    </style>
</head>
<body>

    <nav>
        <div style="font-weight: bold; letter-spacing: 2px;">TONY / EQ 15</div>
        <div>
            <a href="#inicio">Inicio</a>
            <a href="#productos">Productos</a>
            <a href="#login-section" style="color: var(--accent-color);">Admin</a>
        </div>
    </nav>

    <section id="inicio">
        <span class="reveal">SUMINISTROS PREMIUM / 2026</span>
        <h1 class="reveal">PAPELERÍA<br>TONY</h1>
        <a href="#productos" style="color: var(--accent-color); text-decoration: none;" class="reveal">VER CATÁLOGO ↓</a>
    </section>

    <section id="productos">
        <h2 class="reveal">Nuestros Artículos</h2>
        <p class="reveal">Equipamiento técnico y de oficina diseñado para la máxima productividad[cite: 2].</p>
    </section>

    <!-- Sección de Login integrada -->
    <section id="login-section">
        <div class="bg-blurred"></div>
        <div class="login-card reveal">
            <h2>ACCESO</h2>
            <form method="POST">
                <label style="font-size: 0.7rem; color: #888; text-transform: uppercase;">Usuario</label>
                <input type="text" name="usuario" required>
                
                <label style="font-size: 0.7rem; color: #888; text-transform: uppercase;">Contraseña</label>
                <input type="password" name="password" required>
                
                <button type="submit" class="btn-login">Entrar al Sistema</button>
            </form>
            <?php if(isset($error)) echo "<p style='color:red; font-size:0.8rem; margin-top:20px;'>$error</p>"; ?>
        </div>
    </section>

    <footer>
        © 2026 Papelería Tony — Gestión de Inventario[cite: 2]
    </footer>

    <script>
        // Animación al hacer scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('active');
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>

</body>
</html>

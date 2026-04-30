<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papelería Tony — Minimal Office</title>
    <style>
        /* Paleta Dark Premium */
        :root {
            --bg-color: #0d0d0d;
            --text-color: #ffffff;
            --accent-color: #3498db;
            --gray-text: #888888;
        }

        * { scroll-behavior: smooth; }

        body {
            margin: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
        }

        /* Navegación Fija */
        nav {
            position: fixed;
            top: 0; width: 100%;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            background: rgba(13, 13, 13, 0.8);
            backdrop-filter: blur(10px);
            z-index: 1000;
            box-sizing: border-box;
        }

        nav a {
            color: var(--text-color);
            text-decoration: none;
            margin-left: 20px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Secciones */
        section {
            min-height: 100vh;
            padding: 100px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-sizing: border-box;
            border-bottom: 1px solid #222;
        }

        /* Sección INICIO */
        #inicio h1 {
            font-size: clamp(3.5rem, 12vw, 9rem);
            line-height: 0.85;
            letter-spacing: -0.05em;
            margin: 0;
            font-weight: 600;
        }

        .cta-link {
            margin-top: 50px;
            font-size: 1.5rem;
            color: var(--accent-color);
            text-decoration: none;
            border-bottom: 2px solid var(--accent-color);
            width: fit-content;
        }

        /* Sección PRODUCTOS */
        .grid-productos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .card {
            background: #1a1a1a;
            padding: 30px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .card:hover { background: #222; }

        /* Sección MISIÓN/VISIÓN */
        .mv-container {
            max-width: 800px;
        }

        .mv-container h2 { font-size: 3rem; margin-bottom: 10px; color: var(--accent-color); }
        .mv-container p { font-size: 1.2rem; color: var(--gray-text); margin-bottom: 40px; }

        /* FOOTER */
        footer {
            padding: 60px 40px;
            background: #000;
            display: flex;
            justify-content: space-between;
            color: var(--gray-text);
            font-size: 0.8rem;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <nav>
        <div style="font-weight: bold;">TONY EQUIPO 15</div>
        <div>
            <a href="#inicio">Inicio</a>
            <a href="#productos">Productos</a>
            <a href="#mision">Nosotros</a>
            <a href="login.php" style="color: var(--accent-color);">Login</a>
        </div>
    </nav>

    <section id="inicio">
        <span style="color: var(--gray-text); text-transform: uppercase;">Papelería Tony / 2026</span>
        <h1>EQUIPANDO<br>TU ESPACIO<br>CREATIVO.</h1>
        <a href="#productos" class="cta-link">Explorar Catálogo ↓</a>
    </section>

    <section id="productos">
        <h2>Productos Destacados</h2>
        <div class="grid-productos">
            <div class="card"><h3>Papelería Técnica</h3><p>Escuadras, compases y estilógrafos de precisión.</p></div>
            <div class="card"><h3>Escritura Premium</h3><p>Bolígrafos y plumas de las mejores marcas.</p></div>
            <div class="card"><h3>Organización</h3><p>Agendas y archivos para máxima productividad.</p></div>
        </div>
    </section>

    <section id="mision">
        <div class="mv-container">
            <h2>Misión</h2>
            <p>Ofrecer productos de calidad al mejor precio para nuestros clientes creativos.</p>
            
            <h2>Visión</h2>
            <p>Ser líderes en la distribución de artículos de oficina en todo el estado de Oaxaca[cite: 3].</p>
        </div>
    </section>

    <footer>
        <div>© 2026 Papelería Tony</div>
        <div>Diseñado para Evaluación TSO</div>
    </footer>

</body>
</html>

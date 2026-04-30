<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeleria Tony</title>
    <style>
        /* Estilo inspirado en Parallel Society */
        :root {
            --bg-color: #f8f8f8;
            --text-color: #1a1a1a;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        header {
            padding: 40px;
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }

        .logo {
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            text-transform: uppercase;
        }

        main {
            flex: 1;
            padding: 0 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1 {
            font-size: clamp(3rem, 10vw, 8rem);
            line-height: 0.9;
            margin: 0;
            letter-spacing: -0.04em;
            font-weight: 500;
        }

        .description {
            margin-top: 40px;
            max-width: 400px;
            font-size: 1.1rem;
            line-height: 1.5;
        }

        .nav-link {
            margin-top: 60px;
        }

        .nav-link a {
            color: var(--text-color);
            text-decoration: none;
            font-size: 1.5rem;
            border-bottom: 2px solid var(--text-color);
            padding-bottom: 5px;
            transition: opacity 0.3s;
        }

        .nav-link a:hover {
            opacity: 0.6;
        }

        footer {
            padding: 40px;
            font-size: 0.8rem;
            display: flex;
            justify-content: space-between;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">Papelería Tony</div>
        <div>Oaxaca, MX.</div>
    </header>

    <main>
        <h1>VENTA DE<br>ARTÍCULOS<br>DE OFICINA.</h1>
        
        <div class="description">
           [cite: 3] Ofrecer productos de calidad al mejor precio. 
            Distribución líder en artículos para profesionales y creativos.
        </div>

        <div class="nav-link">
            <a href="login.php">Ingresar al sistema →</a>[cite: 3]
        </div>
    </main>

    <footer>
        <div>© 2026 TONY EQUIPO 15</div>
        <div>Misión & Visión[cite: 3]</div>
    </footer>

</body>
</html>

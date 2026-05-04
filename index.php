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

        * { 
            scroll-behavior: smooth; 
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* --- ANIMACIONES --- */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- NAVEGACIÓN --- */
        nav {
            position: fixed;
            top: 0; width: 100%;
            padding: 30px 50px;
            display: flex;
            justify-content: space-between;
            background: rgba(13, 13, 13, 0.9);
            backdrop-filter: blur(15px);
            z-index: 1000;
        }

        nav a {
            color: var(--text-color);
            text-decoration: none;
            margin-left: 30px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: color 0.3s;
        }

        nav a:hover { color: var(--accent-color); }

        /* --- SECCIONES --- */
        section {
            min-height: 100vh;
            padding: 120px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Hero Section */
        #inicio h1 {
            font-size: clamp(4rem, 15vw, 10rem);
            line-height: 0.8;
            letter-spacing: -0.06em;
            margin: 20px 0;
            font-weight: 700;
            text-transform: uppercase;
        }

        .cta-link {
            margin-top: 40px;
            font-size: 1.2rem;
            color: var(--accent-color);
            text-decoration: none;
            border-bottom: 1px solid var(--accent-color);
            width: fit-content;
            padding-bottom: 5px;
            transition: padding-left 0.3s;
        }

        .cta-link:hover { padding-left: 15px; }

        /* Productos Grid */
        .grid-productos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .card {
            background: #141414;
            padding: 40px;
            border: 1px solid #222;
            transition: all 0.4s ease;
        }

        .card:hover {
            background: #1a1a1a;
            border-color: var(--accent-color);
            transform: translateY(-10px);
        }

        .card h3 { 
            margin-top: 0; 
            text-transform: uppercase; 
            letter-spacing: 1px;
        }

        /* --- FOOTER --- */
        footer {
            padding: 80px 50px;
            background: #000;
            border-top: 1px solid #222;
            display: flex;
            justify-content: space-between;
            color: var(--gray-text);
            font-size: 0.7rem;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

    <nav>
        <div style="font-weight: 900; letter-spacing: 3px;">TONY / EQ 15</div>
        <div>
            <a href="#inicio">Inicio</a>
            <a href="#productos">Catálogo</a>
            <a href="#nosotros">Nosotros</a>
            <a href="login.php" style="color: var(--accent-color); font-weight: bold;">Acceso</a>
        </div>
    </nav>

    <section id="inicio">
        <span class="reveal" style="color: var(--gray-text); text-transform: uppercase; letter-spacing: 3px;">
            High-End Office Supplies / 2026
        </span>
        <h1 class="reveal" style="transition-delay: 0.2s;">PAPELERIA<br>TONY</h1>
        <a href="#productos" class="cta-link reveal" style="transition-delay: 0.4s;">Explorar Catálogo ↓</a>
    </section>

    <section id="productos">
        <h2 class="reveal" style="font-size: 0.8rem; text-transform: uppercase; color: var(--gray-text); letter-spacing: 5px; margin-bottom: 40px;">
            Selección Curada
        </h2>
        <div class="grid-productos">
            <div class="card reveal" style="transition-delay: 0.1s;">
                <h3>Papelería Técnica</h3>
                <p>Instrumentos de precisión para arquitectura e ingeniería con estándares internacionales[cite: 2].</p>
            </div>
            <div class="card reveal" style="transition-delay: 0.2s;">
                <h3>Escritura Premium</h3>
                <p>Curaduría de bolígrafos y estilógrafos diseñados para la durabilidad y el confort[cite: 2].</p>
            </div>
            <div class="card reveal" style="transition-delay: 0.3s;">
                <h3>Organización</h3>
                <p>Sistemas de archivo y agendas minimalistas para potenciar la productividad diaria[cite: 2].</p>
            </div>
        </div>
    </section>

    <section id="nosotros">
        <div style="max-width: 800px;">
            <h2 class="reveal" style="color: var(--accent-color); font-size: 3rem; margin-bottom: 20px;">Misión</h2>
            <p class="reveal" style="font-size: 1.5rem; color: var(--gray-text); margin-bottom: 60px;">
                Brindar soluciones rápidas y de alta calidad que potencien la creatividad de nuestros clientes[cite: 2].
            </p>
            
            <h2 class="reveal" style="color: var(--accent-color); font-size: 3rem; margin-bottom: 20px;">Visión</h2>
            <p class="reveal" style="font-size: 1.5rem; color: var(--gray-text);">
                Ser el referente regional en innovación de artículos de oficina, siempre a la vanguardia del éxito[cite: 2].
            </p>
        </div>
    </section>

    <footer>
        <div>© 2026 Papelería Tony — Oaxaca, México</div>
        <div>Desarrollo: TSO / Equipo 15[cite: 2]</div>
    </footer>

    <script>
        // Lógica de Scroll Reveal
        const observerOptions = { threshold: 0.15 };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => {
            observer.observe(el);
        });
    </script>

</body>
</html>

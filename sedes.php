<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestras Sedes | FACIAS - UNCo</title>
    <link rel="stylesheet" href="styles.css?v=3.1">
    <style>
        .page-container {
            max-width: 960px;
            margin: 3.5rem auto 5rem;
            padding: 0 1.5rem;
            min-height: 60vh;
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--color-primary);
            text-decoration: none;
            font-weight: 700;
            margin-bottom: 2rem;
            transition: var(--transition-smooth);
        }

        .btn-back:hover {
            color: var(--color-secondary);
            transform: translateX(-5px);
        }

        .page-header {
            margin-bottom: 2.5rem;
            border-bottom: 2px solid var(--color-border);
            padding-bottom: 1.5rem;
        }

        .page-title {
            font-size: 2.3rem;
            font-weight: 800;
            color: var(--color-primary);
            line-height: 1.2;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .page-badge-sedes {
            background-color: var(--color-secondary-light);
            color: var(--color-secondary);
            font-size: 0.95rem;
            font-weight: 700;
            padding: 0.35rem 0.85rem;
            border-radius: var(--border-radius-pill);
            border: 1px solid rgba(0, 143, 156, 0.25);
        }

        .page-subtitle {
            font-size: 1.1rem;
            color: var(--color-text-muted);
            font-weight: 500;
            margin: 0;
        }

        .placeholder-box {
            background-color: #ffffff;
            border: 2px dashed var(--color-border);
            border-radius: var(--border-radius-lg);
            padding: 4rem 2rem;
            text-align: center;
            box-shadow: var(--shadow-subtle);
            margin-top: 2rem;
        }

        .placeholder-icon {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            display: block;
        }

        .placeholder-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--color-primary);
            margin-bottom: 0.5rem;
        }

        .placeholder-text {
            font-size: 1.05rem;
            color: var(--color-text-muted);
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 1.85rem;
            }
        }
    </style>
</head>
<body style="background-color: var(--color-bg-light);">

    <!-- Header simple / Navegación -->
    <header class="header" style="position: static; box-shadow: var(--shadow-subtle); background: white;">
        <div class="container header-container" style="justify-content: center; padding: 1rem 0;">
            <a href="index.php" class="logo" style="display: flex; gap: 1rem;">
                <img src="assets/logo_facias.png" alt="Logo FACIAS" class="logo-img" style="height: 45px;">
                <img src="assets/logo_unco.png" alt="Logo UNCo" class="logo-img" style="height: 45px;">
            </a>
        </div>
    </header>

    <main class="page-container">
        <!-- Botón Volver -->
        <a href="index.php" class="btn-back">
            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Volver al Inicio
        </a>

        <!-- Encabezado de la página -->
        <div class="page-header">
            <h1 class="page-title">
                Nuestras Sedes
                <span class="page-badge-sedes">FACIAS Regional</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- Contenedor listo para cargar contenido -->
        <div class="placeholder-box" id="contenido-sedes">
            <span class="placeholder-icon">📍</span>
            <h3 class="placeholder-title">Información de Nuestras Sedes</h3>
            <p class="placeholder-text">
                Página en blanco lista para cargar la información correspondiente a las sedes.
            </p>
        </div>
    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2.5rem 0; text-align: center; margin-top: 5rem;">
        <div class="container">
            <p style="font-size: 0.95rem; opacity: 0.9; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>
    </footer>

</body>
</html>

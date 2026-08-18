<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaría Académica | FACIAS</title>
    <link rel="stylesheet" href="styles.css?v=1.1">
    <style>
        .page-container {
            max-width: 800px;
            margin: 4rem auto;
            padding: 0 1.5rem;
            min-height: 50vh;
        }
        .page-header {
            margin-bottom: 2rem;
            border-bottom: 2px solid var(--color-border);
            padding-bottom: 1.5rem;
        }
        .page-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--color-primary);
            line-height: 1.2;
            margin-bottom: 0.5rem;
        }
        .page-subtitle {
            font-size: 1.1rem;
            color: var(--color-text-muted);
            font-weight: 600;
        }
        .placeholder-box {
            background-color: var(--color-bg-light);
            border: 2px dashed var(--color-border);
            border-radius: var(--border-radius-lg);
            padding: 3rem 2rem;
            text-align: center;
            margin-top: 2rem;
            box-shadow: var(--shadow-subtle);
        }
        .placeholder-icon {
            font-size: 3.5rem;
            color: var(--color-text-muted);
            margin-bottom: 1.5rem;
            display: block;
        }
        .placeholder-text {
            font-size: 1.2rem;
            color: var(--color-text-dark);
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--color-primary);
            text-decoration: none;
            font-weight: 700;
            margin-bottom: 3rem;
            transition: var(--transition-smooth);
        }
        .btn-back:hover {
            color: var(--color-secondary);
            transform: translateX(-5px);
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
        <a href="index.php" class="btn-back">
            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Volver al Inicio
        </a>

        <div class="page-header">
            <h1 class="page-title">Secretaría Académica</h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <div class="placeholder-box">
            <span class="placeholder-icon">📂</span>
            <p class="placeholder-text">
                Sección en desarrollo. Próximamente se cargará en esta página toda la información respecto a la Secretaría Académica de la FACIAS.
            </p>
            <a href="index.php" class="btn btn-primary" style="text-decoration: none;">Volver a la Home</a>
        </div>
    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2rem 0; text-align: center; margin-top: 5rem;">
        <p style="font-size: 0.9rem; opacity: 0.8; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
    </footer>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaría de Ciencia, Técnica y Posgrado | FACIAS - UNCo</title>
    <!-- Meta tags SEO -->
    <meta name="description" content="Secretaría de Ciencia, Técnica y Posgrado de la Facultad de Ciencias del Ambiente y la Salud (FACIAS) - Universidad Nacional del Comahue. Proyectos de investigación, carreras de posgrado, doctorados, becas científicas y publicaciones.">
    <meta name="keywords" content="Ciencia y Técnica, Posgrado, Investigación, Doctorados, Maestrías, Especializaciones, FACIAS, UNCo, Neuquén">
    <meta name="author" content="Universidad Nacional del Comahue">
    
    <link rel="stylesheet" href="styles.css?v=3.2">
    <style>
        .page-container {
            max-width: 1040px;
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
            font-size: 0.95rem;
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

        .page-badge {
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

        .content-card-placeholder {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.5rem 2rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            border-left: 5px solid var(--color-secondary);
            margin-top: 2rem;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .placeholder-title {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--color-primary);
            margin: 0;
        }

        .placeholder-text {
            font-size: 1.05rem;
            color: #475569;
            line-height: 1.6;
            margin: 0;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <main class="page-container">
        <!-- Botón de retorno -->
        <a href="index.php#secretarias" class="btn-back">
            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Volver a Secretarías
        </a>

        <!-- Encabezado de página -->
        <div class="page-header">
            <h1 class="page-title">
                Secretaría de Ciencia, Técnica y Posgrado
                <span class="page-badge">Secretaría</span>
            </h1>
            <p class="page-subtitle">Gestión de proyectos de investigación científica, vinculación técnica, desarrollo académico y carreras de posgrado.</p>
        </div>

        <!-- Espacio contenedor para el contenido a publicar -->
        <div class="content-card-placeholder">
            <h2 class="placeholder-title">Información de la Secretaría</h2>
            <p class="placeholder-text">Espacio en preparación para la carga de información académica, programas, convocatorias y vías de contacto de la Secretaría de Ciencia, Técnica y Posgrado.</p>
        </div>
    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2rem 0; text-align: center; margin-top: 5rem;">
        <p style="font-size: 0.9rem; opacity: 0.8; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
    </footer>

</body>
</html>

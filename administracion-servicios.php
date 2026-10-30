<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaría de Administración y Servicios | FACIAS - UNCo</title>
    <!-- Meta tags SEO -->
    <meta name="description" content="Secretaría de Administración y Servicios de la Facultad de Ciencias del Ambiente y la Salud (FACIAS) - Universidad Nacional del Comahue.">
    <meta name="keywords" content="Administración, Servicios Generales, FACIAS, UNCo, Presupuesto, Mantenimiento, Neuquén">
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
            font-size: 2.35rem;
            font-weight: 800;
            color: var(--color-primary);
            line-height: 1.2;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.85rem;
            flex-wrap: wrap;
        }

        .page-badge-admin {
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

        .hero-guide-card {
            background: linear-gradient(135deg, #f0f7ff 0%, #e6f4f6 100%);
            border: 1px solid #bfdbfe;
            border-left: 5px solid var(--color-primary);
            border-radius: 12px;
            padding: 1.5rem 1.85rem;
            margin-bottom: 3rem;
            box-shadow: var(--shadow-subtle);
        }

        .hero-guide-card h2 {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--color-primary);
            margin: 0 0 0.5rem 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .hero-guide-card p {
            font-size: 0.98rem;
            line-height: 1.6;
            color: #1e3a8a;
            margin: 0;
        }

        .content-placeholder-box {
            background: var(--color-bg-white);
            border: 1px solid var(--color-border);
            border-radius: var(--border-radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-subtle);
            text-align: center;
            color: var(--color-text-muted);
        }
    </style>
</head>
<body style="background-color: var(--color-bg-light);">

    <!-- ENCABEZADO INSTITUCIONAL -->
    <?php include 'header.php'; ?>

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
                Administración y Servicios
                <span class="page-badge-admin">Gestión Institucional</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- Tarjeta descriptiva de la sección -->
        <div class="hero-guide-card">
            <h2>
                <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                Gestión Administrativa, Recursos y Logística
            </h2>
            <p>
                Área encargada de la coordinación presupuestaria, mantenimiento edilicio, suministros generales, compras y soporte operativo de las dependencias de la facultad.
            </p>
        </div>

        <!-- Contenedor para el contenido específico -->
        <div id="seccion-contenido">
            <!-- Aquí se incorporará la información detallada enviada por el usuario -->
        </div>
    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2rem 0; text-align: center; margin-top: 5rem;">
        <p style="font-size: 0.9rem; opacity: 0.8; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
    </footer>

</body>
</html>

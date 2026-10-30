<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesas de Examen | FACIAS - UNCo</title>
    <link rel="stylesheet" href="styles.css?v=3.0">
    <style>
        .page-container {
            max-width: 900px;
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

        .page-badge-mesas {
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
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.25rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            border-left: 5px solid var(--color-secondary);
            margin-bottom: 2.5rem;
        }

        .hero-guide-card h2 {
            color: var(--color-primary);
            font-size: 1.4rem;
            font-weight: 800;
            margin-bottom: 0.75rem;
        }

        .hero-guide-card p {
            color: #334155;
            font-size: 1.05rem;
            line-height: 1.7;
            margin: 0;
        }

        .placeholder-box {
            background-color: #ffffff;
            border: 2px dashed var(--color-border);
            border-radius: var(--border-radius-lg);
            padding: 3rem 2rem;
            text-align: center;
            box-shadow: var(--shadow-subtle);
        }

        .placeholder-icon {
            font-size: 3.25rem;
            margin-bottom: 1rem;
            display: block;
        }

        .placeholder-title {
            font-size: 1.35rem;
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
            .hero-guide-card {
                padding: 1.5rem;
            }
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
                Mesas de Examen
                <span class="page-badge-mesas">Estudiantes</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- Tarjeta descriptiva -->
        <div class="hero-guide-card">
            <h2>Turnos y llamados de examen</h2>
            <p>
                Consultá las fechas de inscripción, tribunales docentes y cronogramas de mesas de examen finales correspondientes a cada turno de las distintas carreras de la facultad.
            </p>
        </div>

        <!-- Contenedor listo para cargar el contenido -->
        <div class="placeholder-box" id="contenido-mesas">
            <span class="placeholder-icon">📅</span>
            <h3 class="placeholder-title">Cronogramas de Mesas de Examen</h3>
            <p class="placeholder-text">
                En esta sección publicaremos los calendarios de exámenes finales, fechas límite de inscripción por SIU Guaraní y distribución de aulas por sede y carrera.
            </p>
        </div>
    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2rem 0; text-align: center; margin-top: 5rem;">
        <p style="font-size: 0.9rem; opacity: 0.8; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
    </footer>

</body>
</html>

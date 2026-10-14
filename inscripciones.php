<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripciones 2027 | FACIAS - UNCo</title>
    <!-- Favicon / Estilos -->
    <link rel="stylesheet" href="styles.css?v=1.4">
    <style>
        .page-container {
            max-width: 960px;
            margin: 2.5rem auto 5rem;
            padding: 0 1.5rem;
            min-height: 60vh;
        }

        .btn-back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--color-primary);
            text-decoration: none;
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 2rem;
            transition: var(--transition-smooth);
        }

        .btn-back-link:hover {
            color: var(--color-secondary);
            transform: translateX(-4px);
        }

        /* Hero / Banner Principal de Inscripciones */
        .inscripciones-hero {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 3.5rem 3rem;
            box-shadow: var(--shadow-medium);
            border: 1px solid var(--color-border);
            margin-bottom: 2.5rem;
            position: relative;
            overflow: hidden;
        }

        .inscripciones-hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 7px;
            height: 100%;
            background: linear-gradient(180deg, #008f9c 0%, var(--color-primary) 100%);
        }

        /* Título Principal */
        .inscripciones-main-title {
            font-size: 3.75rem;
            font-weight: 300;
            font-style: italic;
            color: #1e293b;
            line-height: 1.1;
            margin: 0 0 2rem 0;
            letter-spacing: -1px;
            display: flex;
            align-items: baseline;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .inscripciones-main-title .year-badge {
            font-weight: 900;
            font-style: normal;
            color: #008f9c;
            letter-spacing: -0.5px;
        }

        /* Bloque de Pregunta y Pasos */
        .inscripciones-guide {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .guide-question {
            font-size: 1.85rem;
            font-weight: 800;
            font-style: italic;
            color: #008f9c;
            margin: 0;
            line-height: 1.3;
        }

        .guide-steps-lead {
            font-size: 1.45rem;
            font-style: italic;
            color: #2c3e50;
            margin: 0;
            line-height: 1.4;
            font-weight: 400;
        }

        .guide-steps-lead strong {
            font-weight: 900;
            color: #0f172a;
        }

        .guide-callout {
            font-size: 1.4rem;
            font-style: italic;
            color: #3b82f6;
            margin: 0;
            line-height: 1.4;
            font-weight: 400;
        }

        /* Tarjetas de Pasos (Estructura base para continuar agregando contenido) */
        .pasos-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.75rem;
            margin-bottom: 2.5rem;
        }

        .paso-card {
            background: #ffffff;
            border: 1px solid var(--color-border);
            border-radius: var(--border-radius-lg);
            padding: 2.25rem 2rem;
            box-shadow: var(--shadow-subtle);
            transition: var(--transition-smooth);
            position: relative;
        }

        .paso-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-medium);
        }

        .paso-card.online {
            border-top: 5px solid #008f9c;
        }

        .paso-card.presencial {
            border-top: 5px solid var(--color-primary);
        }

        .paso-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            font-weight: 800;
            font-size: 1.15rem;
            margin-bottom: 1.25rem;
        }

        .paso-card.online .paso-badge {
            background: rgba(0, 143, 156, 0.12);
            color: #008f9c;
        }

        .paso-card.presencial .paso-badge {
            background: rgba(0, 114, 185, 0.12);
            color: var(--color-primary);
        }

        .paso-title {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--color-primary-dark);
            margin: 0 0 0.75rem 0;
        }

        .paso-desc {
            font-size: 1rem;
            color: var(--color-text-muted);
            line-height: 1.6;
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-container {
                margin-top: 1.5rem;
                padding: 0 1rem;
            }
            .inscripciones-hero {
                padding: 2.25rem 1.5rem;
            }
            .inscripciones-main-title {
                font-size: 2.5rem;
                margin-bottom: 1.5rem;
            }
            .guide-question {
                font-size: 1.45rem;
            }
            .guide-steps-lead {
                font-size: 1.2rem;
            }
            .guide-callout {
                font-size: 1.15rem;
            }
            .pasos-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }
        }
    </style>
</head>
<body style="background-color: var(--color-bg-light);">

    <!-- Header institucional superior -->
    <header class="header" style="position: static; box-shadow: var(--shadow-subtle); background: #ffffff;">
        <div class="container header-container" style="justify-content: space-between; align-items: center; padding: 0.85rem 0;">
            <a href="index.php" class="logo" style="display: flex; gap: 1rem; align-items: center;">
                <img src="assets/logo_facias.png" alt="Logo FACIAS" class="logo-img" style="height: 44px;">
                <img src="assets/logo_unco.png" alt="Logo UNCo" class="logo-img" style="height: 44px;">
            </a>
            <a href="index.php" class="btn btn-outline" style="text-decoration: none; font-size: 0.88rem; padding: 0.45rem 1rem;">
                ← Volver al sitio
            </a>
        </div>
    </header>

    <main class="page-container">
        <!-- Enlace volver atrás -->
        <a href="index.php" class="btn-back-link">
            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Volver a la página principal
        </a>

        <!-- Banner Principal con el diseño de la captura -->
        <section class="inscripciones-hero">
            <h1 class="inscripciones-main-title">
                Inscripciones <span class="year-badge">2027</span>
            </h1>

            <div class="inscripciones-guide">
                <h2 class="guide-question">¿Cómo me inscribo a mi carrera?</h2>
                <p class="guide-steps-lead">
                    Tenés que seguir dos pasos: <strong>1 online y 1 presencial.</strong>
                </p>
                <p class="guide-callout">
                    Acá te contamos como se hace cada uno.
                </p>
            </div>
        </section>

        <!-- Bloques para los dos pasos (listos para desarrollar y agregar contenido) -->
        <div class="pasos-grid">
            <!-- Paso 1 Online -->
            <div class="paso-card online">
                <span class="paso-badge">1</span>
                <h3 class="paso-title">Paso 1: Trámite Online</h3>
                <p class="paso-desc">
                    Registro en la plataforma de preinscripción de la universidad, selección de carrera y carga de la documentación digital requerida.
                </p>
            </div>

            <!-- Paso 2 Presencial -->
            <div class="paso-card presencial">
                <span class="paso-badge">2</span>
                <h3 class="paso-title">Paso 2: Presentación Presencial</h3>
                <p class="paso-desc">
                    Presentación de la documentación impresa y original para su correspondiente cotejo y validación en la ventanilla de Alumnos de la facultad.
                </p>
            </div>
        </div>

    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2rem 0; text-align: center; margin-top: 5rem;">
        <p style="font-size: 0.9rem; opacity: 0.85; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
    </footer>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posgrado | FACIAS - UNCo</title>
    <!-- Meta tags SEO -->
    <meta name="description" content="Propuestas académicas de posgrado, maestrías, especializaciones y diplomaturas de la Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue.">
    <meta name="keywords" content="Posgrado, FACIAS, UNCo, Maestrías, Especializaciones, Diplomaturas, Salud, Ambiente, Neuquén">
    <meta name="author" content="Universidad Nacional del Comahue">
    
    <link rel="stylesheet" href="styles.css?v=3.2">
    <style>
        .page-container {
            max-width: 1000px;
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

        .page-badge-posgrado {
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
            padding: 3.5rem 2rem;
            text-align: center;
            box-shadow: var(--shadow-subtle);
            margin-bottom: 2.5rem;
        }

        .placeholder-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 72px;
            height: 72px;
            background: rgba(0, 143, 156, 0.1);
            color: var(--color-secondary);
            border-radius: 50%;
            margin-bottom: 1.25rem;
        }

        .placeholder-title {
            font-size: 1.45rem;
            font-weight: 700;
            color: var(--color-primary);
            margin-bottom: 0.65rem;
        }

        .placeholder-text {
            font-size: 1.05rem;
            color: var(--color-text-muted);
            line-height: 1.65;
            max-width: 620px;
            margin: 0 auto 1.5rem;
        }

        .placeholder-badge {
            display: inline-block;
            background-color: #fef3c7;
            color: #b45309;
            border: 1px solid #fde68a;
            font-size: 0.85rem;
            font-weight: 700;
            padding: 0.35rem 0.95rem;
            border-radius: 9999px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Caja de contacto */
        .contacto-box {
            background: linear-gradient(135deg, #f0f7ff 0%, #e6f4f6 100%);
            border: 1px solid #bfdbfe;
            border-radius: var(--border-radius-lg);
            padding: 2rem 2.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .contacto-info h3 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--color-primary);
            margin: 0 0 0.4rem 0;
        }

        .contacto-info p {
            font-size: 0.98rem;
            color: #334155;
            margin: 0;
            line-height: 1.5;
        }

        .btn-mail {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            background-color: var(--color-primary);
            color: #ffffff;
            padding: 0.8rem 1.4rem;
            border-radius: var(--border-radius-md);
            font-weight: 700;
            font-size: 0.95rem;
            text-decoration: none;
            transition: var(--transition-smooth);
            box-shadow: 0 2px 6px rgba(0, 114, 185, 0.25);
            white-space: nowrap;
        }

        .btn-mail:hover {
            background-color: var(--color-primary-dark, #005a94);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 114, 185, 0.35);
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 1.85rem;
            }
            .hero-guide-card {
                padding: 1.5rem;
            }
            .placeholder-box {
                padding: 2.5rem 1.25rem;
            }
            .contacto-box {
                padding: 1.5rem;
                flex-direction: column;
                align-items: flex-start;
            }
            .btn-mail {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body style="background-color: var(--color-bg-light);">

    <!-- Header simple con logos institucionales -->
    <header class="header" style="position: static; box-shadow: var(--shadow-subtle); background: white;">
        <div class="container header-container" style="justify-content: center; padding: 1rem 0;">
            <a href="index.php" class="logo" style="display: flex; gap: 1rem;" aria-label="Ir a página principal">
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
                Posgrado
                <span class="page-badge-posgrado">Académica</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- Tarjeta descriptiva de la sección -->
        <div class="hero-guide-card">
            <h2>Formación Continua y Estudios de Posgrado</h2>
            <p>
                La Facultad de Ciencias del Ambiente y la Salud promueve la formación académica avanzada, la investigación y la especialización profesional a través de sus programas de posgrado, maestrías, cursos de perfeccionamiento y diplomaturas.
            </p>
        </div>

        <!-- Contenedor en blanco / listo para completar con información -->
        <div class="placeholder-box" id="contenido-posgrado">
            <div class="placeholder-icon">
                <svg width="36" height="36" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14v7"></path>
                </svg>
            </div>
            <h3 class="placeholder-title">Propuestas Académicas de Posgrado</h3>
            <p class="placeholder-text">
                Esta sección se encuentra en preparación. Próximamente se publicará el listado completo de especializaciones, maestrías, diplomaturas, requisitos de admisión y aranceles.
            </p>
            <span class="placeholder-badge">Sección en actualización</span>
        </div>

        <!-- Caja de contacto con Secretaría de Posgrado -->
        <div class="contacto-box">
            <div class="contacto-info">
                <h3>¿Tenés consultas sobre las carreras de Posgrado?</h3>
                <p>Comunicate con la Secretaría de Ciencia, Técnica y Posgrado de la facultad.</p>
            </div>
            <a href="mailto:posgrado@facias.uncoma.edu.ar" class="btn-mail">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                posgrado@facias.uncoma.edu.ar
            </a>
        </div>
    </main>

    <!-- Footer institucional -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2.5rem 0; text-align: center; margin-top: 5rem;">
        <div class="container">
            <p style="font-size: 0.95rem; opacity: 0.9; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>
    </footer>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaría Académica | FACIAS - UNCo</title>
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

        /* Tarjeta de Autoridad */
        .autoridad-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: var(--border-radius-lg);
            padding: 2rem 2.25rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            border-left: 5px solid var(--color-primary);
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .autoridad-avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--color-primary) 0%, #008f9c 100%);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            flex-shrink: 0;
            box-shadow: 0 4px 10px rgba(0, 75, 135, 0.2);
        }

        .autoridad-info {
            flex: 1;
        }

        .autoridad-cargo {
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--color-secondary);
            margin: 0 0 0.35rem 0;
        }

        .autoridad-nombre {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--color-primary);
            margin: 0;
        }

        /* Grid de 2 columnas para Equipo y Contacto */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .info-card {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 1.75rem 2rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            display: flex;
            flex-direction: column;
        }

        .info-card-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.25rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid var(--color-border);
        }

        .info-card-icon {
            font-size: 1.35rem;
        }

        .info-card-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--color-primary);
            margin: 0;
        }

        .equipo-item {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            font-size: 1.1rem;
            color: #1e293b;
            font-weight: 600;
        }

        .equipo-item-badge {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background-color: var(--color-secondary-light);
            color: var(--color-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            flex-shrink: 0;
        }

        .emails-list {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .email-link {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            color: var(--color-primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.98rem;
            word-break: break-all;
            padding: 0.5rem 0.75rem;
            border-radius: 8px;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            transition: all 0.2s ease;
        }

        .email-link:hover {
            background-color: var(--color-secondary-light);
            color: var(--color-secondary);
            border-color: rgba(0, 143, 156, 0.3);
            transform: translateX(4px);
        }

        .email-icon {
            color: var(--color-secondary);
            flex-shrink: 0;
        }

        /* Tarjeta de Objetivo */
        .objetivo-card {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.25rem 2.5rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            border-left: 5px solid var(--color-secondary);
            margin-bottom: 2rem;
        }

        .objetivo-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--color-primary);
            margin: 0 0 1.25rem 0;
            display: flex;
            align-items: center;
            gap: 0.65rem;
        }

        .objetivo-text {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #334155;
            margin: 0;
            text-align: justify;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 1.85rem;
            }
            .autoridad-card {
                flex-direction: column;
                text-align: center;
                padding: 1.75rem 1.5rem;
            }
            .info-grid {
                grid-template-columns: 1fr;
            }
            .objetivo-card {
                padding: 1.75rem 1.5rem;
            }
            .objetivo-text {
                text-align: left;
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
                Secretaría Académica
                <span class="page-badge">Gestión Institucional</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- Titular / Autoridad -->
        <div class="autoridad-card">
            <div class="autoridad-avatar">
                🎓
            </div>
            <div class="autoridad-info">
                <div class="autoridad-cargo">Secretaria Académica</div>
                <h2 class="autoridad-nombre">Dra. Florencia del Mar González</h2>
            </div>
        </div>

        <!-- Grid: Equipo de Trabajo y Contacto -->
        <div class="info-grid">
            <!-- Equipo de Trabajo -->
            <div class="info-card">
                <div class="info-card-header">
                    <span class="info-card-icon">👥</span>
                    <h3 class="info-card-title">Equipo de Trabajo</h3>
                </div>
                <div class="equipo-item">
                    <div class="equipo-item-badge">👤</div>
                    <span>Srita. Liliana ROSA</span>
                </div>
            </div>

            <!-- Contacto -->
            <div class="info-card">
                <div class="info-card-header">
                    <span class="info-card-icon">✉️</span>
                    <h3 class="info-card-title">Contacto</h3>
                </div>
                <div class="emails-list">
                    <a href="mailto:secretariaacademicafacias@hotmail.com" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        secretariaacademicafacias@hotmail.com
                    </a>
                    <a href="mailto:sacademicanqn@facias.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        sacademicanqn@facias.uncoma.edu.ar
                    </a>
                </div>
            </div>
        </div>

        <!-- Objetivo -->
        <div class="objetivo-card">
            <h3 class="objetivo-title">
                <span>🎯</span>
                <span>Objetivo y Funciones</span>
            </h3>
            <p class="objetivo-text">
                «Las funciones naturales de la Secretaría Académica son las de generar e implementar proyectos académicos que tiendan a mejorar la calidad educativa, especialmente en lo relacionado con el dictado de las distintas carreras de grado, y asesorar a la comunidad académica de la Facultad (HCD, Decanato, Escuelas, docentes, estudiantes, etc.), sobre temas de su competencia. Entre otras actividades, debe entender en las designaciones y licencias docentes, sustanciación de concursos, reformas y aspectos vinculados con la implementación de planes de estudio, curso de nivelación, coordinación y supervisión de las actuaciones de los alumnos ante el Área de Enseñanza (Despacho de alumnos), interpretación y modificación de reglamentaciones académicas, proyectos de articulación y en todo nuevo proyecto académico de grado de carácter curricular.»
            </p>
        </div>
    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2rem 0; text-align: center; margin-top: 5rem;">
        <p style="font-size: 0.9rem; opacity: 0.8; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
    </footer>

</body>
</html>
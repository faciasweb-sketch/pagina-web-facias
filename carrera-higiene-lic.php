<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licenciatura en Higiene y Seguridad en el Trabajo | FACIAS</title>
    <!-- Meta tags SEO -->
    <meta name="description" content="Ciclo de Complementación Curricular de la Licenciatura en Higiene y Seguridad en el Trabajo - Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue.">
    
    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="styles.css?v=1.5">
    <style>
        .page-container {
            max-width: 900px;
            margin: 3rem auto;
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
            margin-bottom: 2.25rem;
            border-bottom: 2px solid var(--color-border);
            padding-bottom: 1.75rem;
        }

        .page-title {
            font-size: 2.35rem;
            font-weight: 800;
            color: var(--color-primary);
            line-height: 1.2;
            margin-bottom: 0.75rem;
            letter-spacing: -0.5px;
        }

        .page-subtitle {
            font-size: 1.1rem;
            color: var(--color-text-muted);
            font-weight: 600;
            margin: 0;
        }

        .career-tags {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
            margin-top: 1.25rem;
        }

        .career-tag {
            background-color: var(--color-secondary-light);
            color: var(--color-secondary);
            font-size: 0.85rem;
            font-weight: 700;
            padding: 0.4rem 0.9rem;
            border-radius: 9999px;
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }

        .career-tag.sede {
            background-color: var(--color-primary-light);
            color: var(--color-primary);
        }

        /* Bloque destacado de presentación */
        .carrera-hero-card {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.25rem 2.5rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            border-left: 6px solid #008f9c;
            margin-bottom: 2.75rem;
        }

        .carrera-descripcion-text {
            font-size: 1.12rem;
            line-height: 1.8;
            color: #334155;
            margin: 0;
            font-weight: 400;
        }

        /* Sección de datos de la carrera */
        .carrera-section-title {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--color-primary);
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .carrera-section-title::after {
            content: '';
            flex: 1;
            height: 2px;
            background: var(--color-border);
            margin-left: 0.5rem;
        }

        .datos-carrera-container {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            overflow: hidden;
            margin-bottom: 3.5rem;
        }

        .dato-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.25rem 2rem;
            border-bottom: 1px solid var(--color-border);
            transition: background-color 0.2s ease;
        }

        .dato-row:last-child {
            border-bottom: none;
        }

        .dato-row:hover {
            background-color: #f8fafc;
        }

        .dato-label {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            font-weight: 700;
            color: var(--color-primary);
            font-size: 1.05rem;
            min-width: 250px;
        }

        .dato-label-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background-color: var(--color-secondary-light);
            color: var(--color-secondary);
            font-size: 1.15rem;
            flex-shrink: 0;
        }

        .dato-value {
            color: var(--color-text-dark);
            font-size: 1.05rem;
            font-weight: 500;
            text-align: right;
            flex-grow: 1;
        }

        /* Tarjeta de Requisitos e Información */
        .carrera-info-card {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            margin-bottom: 3.5rem;
        }

        .carrera-card-body p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #334155;
            margin: 0;
            font-weight: 400;
        }

        .btn-descarga-plan {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            background-color: #008f9c;
            color: #ffffff;
            padding: 0.65rem 1.4rem;
            border-radius: var(--border-radius-md);
            font-weight: 700;
            font-size: 0.95rem;
            text-decoration: none;
            box-shadow: 0 2px 4px rgba(0, 143, 156, 0.2);
            transition: all 0.2s ease;
        }

        .btn-descarga-plan:hover {
            background-color: #007580;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 143, 156, 0.35);
            color: #ffffff;
        }

        /* Tarjeta ¿Cómo es la carrera? */
        .como-es-carrera-card {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            margin-bottom: 3.5rem;
        }

        .carrera-timeline {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .timeline-step {
            display: flex;
            gap: 1.25rem;
            align-items: flex-start;
        }

        .timeline-badge {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, #008f9c 0%, var(--color-primary) 100%);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.05rem;
            flex-shrink: 0;
            box-shadow: 0 2px 6px rgba(0, 143, 156, 0.3);
        }

        .timeline-body p {
            font-size: 1.08rem;
            line-height: 1.75;
            color: #334155;
            margin: 0;
            padding-top: 0.25rem;
        }

        .plan-descarga-box {
            background: #f8fafc;
            border: 1px solid var(--color-border);
            border-radius: var(--border-radius-md);
            padding: 1.5rem 2rem;
            margin-top: 2.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.25rem;
        }

        .plan-descarga-info {
            flex: 1;
            min-width: 250px;
        }

        /* Banner CTA al pie */
        .cta-inscripciones-box {
            background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
            border-radius: var(--border-radius-lg);
            padding: 2.25rem 2.5rem;
            color: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
            box-shadow: var(--shadow-medium);
        }

        .cta-inscripciones-box h3 {
            font-size: 1.4rem;
            font-weight: 800;
            margin: 0 0 0.4rem 0;
            color: #ffffff;
        }

        .cta-inscripciones-box p {
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
            font-size: 1rem;
            line-height: 1.5;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            flex-shrink: 0;
        }

        .cta-buttons .btn-primary {
            background: #008f9c;
            border: none;
            color: #ffffff;
        }

        .cta-buttons .btn-primary:hover {
            background: #007580;
        }

        .cta-buttons .btn-outline {
            border: 2px solid rgba(255, 255, 255, 0.7);
            color: #ffffff;
            background: transparent;
        }

        .cta-buttons .btn-outline:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: #ffffff;
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 1.85rem;
            }
            .carrera-hero-card,
            .como-es-carrera-card,
            .carrera-info-card {
                padding: 1.75rem 1.5rem;
            }
            .dato-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.6rem;
                padding: 1.25rem 1.5rem;
            }
            .dato-value {
                text-align: left;
                padding-left: 3rem;
                width: 100%;
            }
            .cta-inscripciones-box {
                flex-direction: column;
                text-align: center;
                padding: 2rem 1.5rem;
            }
            .cta-buttons {
                flex-direction: column;
                width: 100%;
            }
            .cta-buttons .btn {
                width: 100%;
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
        <a href="index.php#carreras" class="btn-back">
            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Volver a Nuestras Carreras
        </a>

        <!-- Encabezado de la Carrera -->
        <div class="page-header">
            <h1 class="page-title">Licenciatura en Higiene y Seguridad en el Trabajo</h1>
            <p class="page-subtitle">Ciclo de Complementación Curricular - Facultad de Ciencias del Ambiente y la Salud (UNCo)</p>
            <div class="career-tags">
                <span class="career-tag">🦺 Ciclo de Complementación (2 años)</span>
                <span class="career-tag sede">📍 Sede: Neuquén Capital</span>
                <span class="career-tag">🎓 Título de Grado</span>
            </div>
        </div>

        <!-- Presentación de la carrera -->
        <div class="carrera-hero-card">
            <p class="carrera-descripcion-text">
                El Ciclo de Licenciatura da continuidad a la formación de quienes egresan de la Tecnicatura Superior en Higiene y Seguridad en el Trabajo o de carreras equivalentes, con dos años de cursado que culminan en un título de grado. Amplía la formación en tecnología, gestión e investigación, y prepara para conducir equipos de trabajo que planifiquen, organicen, dirijan, controlen y evalúen la higiene y la seguridad de los ambientes laborales.
            </p>
        </div>

        <!-- La carrera en datos -->
        <h2 class="carrera-section-title">
            <span>La carrera en datos</span>
        </h2>

        <div class="datos-carrera-container">
            <!-- Título -->
            <div class="dato-row">
                <div class="dato-label">
                    <span class="dato-label-icon">🎓</span>
                    <span>Título</span>
                </div>
                <div class="dato-value">
                    <strong>Licenciado/a en Higiene y Seguridad en el Trabajo</strong>
                </div>
            </div>

            <!-- Duración -->
            <div class="dato-row">
                <div class="dato-label">
                    <span class="dato-label-icon">⏱️</span>
                    <span>Duración</span>
                </div>
                <div class="dato-value">
                    2 años (4to. y 5to. año)
                </div>
            </div>

            <!-- Carga horaria del ciclo -->
            <div class="dato-row">
                <div class="dato-label">
                    <span class="dato-label-icon">⌛</span>
                    <span>Carga horaria del ciclo</span>
                </div>
                <div class="dato-value">
                    1536 horas (1408 hs. de asignaturas y 128 hs. de requisito de idioma)
                </div>
            </div>

            <!-- Asignación horaria total -->
            <div class="dato-row">
                <div class="dato-label">
                    <span class="dato-label-icon">📚</span>
                    <span>Carga horaria total</span>
                </div>
                <div class="dato-value">
                    3136 horas (sumando las 1600 horas mínimas del título previo)
                </div>
            </div>

            <!-- Modalidad -->
            <div class="dato-row">
                <div class="dato-label">
                    <span class="dato-label-icon">🏫</span>
                    <span>Modalidad</span>
                </div>
                <div class="dato-value">
                    Presencial
                </div>
            </div>

            <!-- Sede -->
            <div class="dato-row">
                <div class="dato-label">
                    <span class="dato-label-icon">📍</span>
                    <span>Sede</span>
                </div>
                <div class="dato-value">
                    Neuquén
                </div>
            </div>

            <!-- Plan de estudios -->
            <div class="dato-row">
                <div class="dato-label">
                    <span class="dato-label-icon">📋</span>
                    <span>Plan de estudios</span>
                </div>
                <div class="dato-value" style="font-size: 0.98rem; line-height: 1.5;">
                    Ord. CS N° 0446/11, modificada por Ord. CS N° 0205/15
                </div>
            </div>
        </div>

        <!-- Requisitos de ingreso -->
        <section class="carrera-info-card" style="border-left: 6px solid #008f9c;">
            <h2 class="carrera-section-title">
                <span>Requisitos de ingreso</span>
            </h2>
            <div class="carrera-card-body">
                <p>
                    Poseer título de <strong>Técnico/a Superior en Higiene y Seguridad en el Trabajo</strong> u otro equivalente en el mismo campo disciplinar, proveniente de universidades o institutos terciarios no universitarios reconocidos por la autoridad educativa de la jurisdicción, con planes de estudio de <strong>3 o más años de duración</strong> y una carga horaria no menor a <strong>1600 horas</strong>.
                </p>
            </div>
        </section>

        <!-- ¿Cómo es la carrera? -->
        <section class="como-es-carrera-card">
            <h2 class="carrera-section-title">
                <span>¿Cómo es la carrera?</span>
            </h2>

            <p style="font-size: 1.12rem; font-weight: 600; color: var(--color-primary); margin: 0 0 1.5rem 0;">
                Las asignaturas se organizan en tres núcleos principales:
            </p>

            <div class="carrera-timeline">
                <div class="timeline-step">
                    <div class="timeline-badge">1</div>
                    <div class="timeline-body">
                        <p>
                            <strong>Núcleo Tecnología:</strong> aborda fundamentos de ciencias tecnológicas (hidráulica y electrotecnia aplicada), máquinas, equipos e instalaciones térmicas, materiales y servicios industriales.
                        </p>
                    </div>
                </div>

                <div class="timeline-step">
                    <div class="timeline-badge">2</div>
                    <div class="timeline-body">
                        <p>
                            <strong>Núcleo Higiene y Seguridad:</strong> profundiza en protección eléctrica y radiológica, prevención y combate de incendios, toxicología laboral e higiene y seguridad en la construcción.
                        </p>
                    </div>
                </div>

                <div class="timeline-step">
                    <div class="timeline-badge">3</div>
                    <div class="timeline-body">
                        <p>
                            <strong>Núcleo Ciencias Sociales:</strong> incluye tecnología y desarrollo humano, investigación científica, economía aplicada, organización industrial y proyectos y gestión de la calidad.
                        </p>
                    </div>
                </div>

                <div class="timeline-step">
                    <div class="timeline-badge">🎓</div>
                    <div class="timeline-body">
                        <p>
                            <strong>Asignaturas optativas y Tesis:</strong> el recorrido se completa con dos asignaturas optativas de libre elección y cierra con una <strong>Tesis de Grado</strong>, que puede ser un trabajo de investigación científico-tecnológica o un trabajo de producción a partir de una pasantía o práctica profesional supervisada.
                        </p>
                    </div>
                </div>

                <div class="timeline-step">
                    <div class="timeline-badge">🌐</div>
                    <div class="timeline-body">
                        <p>
                            <strong>Requisito de idioma:</strong> además, se debe cumplir el requisito de idioma extranjero (Inglés). Quienes lo hayan aprobado durante la Tecnicatura quedan eximidos.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Botón con URL debajo del texto -->
            <div class="plan-descarga-box">
                <div class="plan-descarga-info">
                    <h4 style="margin: 0 0 0.35rem 0; font-size: 1.15rem; color: var(--color-primary); font-weight: 700;">Plan de Estudio Completo</h4>
                    <p style="margin: 0; font-size: 0.95rem; color: var(--color-text-muted);">Consultá o descargá la grilla de materias y correlatividades oficial en formato PDF.</p>
                </div>
                <a href="https://drive.google.com/file/d/1XkEVOGvThqDfY2CDDxcOxFQfaYljLeTx/view?usp=sharing" class="btn-descarga-plan" target="_blank" rel="noopener noreferrer">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    Descargar Plan de Estudios
                </a>
            </div>
        </section>

        <!-- Banner de acción -->
        <div class="cta-inscripciones-box">
            <div class="cta-text">
                <h3>¿Querés estudiar esta carrera?</h3>
                <p>Conocé las fechas, requisitos y pasos para tu inscripción al ciclo lectivo 2027.</p>
            </div>
            <div class="cta-buttons">
                <a href="inscripciones.php" class="btn btn-primary">Quiero Inscribirme</a>
                <a href="index.php#carreras" class="btn btn-outline">Ver otras carreras</a>
            </div>
        </div>
    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2rem 0; text-align: center; margin-top: 5rem;">
        <p style="font-size: 0.9rem; opacity: 0.8; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
    </footer>

</body>
</html>

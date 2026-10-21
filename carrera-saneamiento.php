<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licenciatura en Saneamiento y Protección Ambiental | FACIAS</title>
    <!-- Meta tags SEO -->
    <meta name="description" content="Licenciatura en Saneamiento y Protección Ambiental de la Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue.">
    
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
            min-width: 230px;
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

        /* Tarjetas de Información: Perfil del Egresado y Alcances */
        .carrera-info-card {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.5rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            margin-bottom: 3rem;
        }

        .carrera-card-body p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #334155;
            margin: 0;
            font-weight: 400;
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
            <h1 class="page-title">Licenciatura en Saneamiento y Protección Ambiental</h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
            <div class="career-tags">
                <span class="career-tag">🌱 Licenciatura (5 años)</span>
                <span class="career-tag sede">📍 Sede: Neuquén Capital</span>
                <span class="career-tag">🎓 Título de Grado</span>
            </div>
        </div>

        <!-- Presentación de la carrera -->
        <div class="carrera-hero-card">
            <p class="carrera-descripcion-text">
                La carrera forma profesionales para conocer, cuidar y recuperar el ambiente. Prepara para detectar y evaluar la contaminación del agua, el aire y el suelo, intervenir en el tratamiento de efluentes y residuos y, sobre todo, anticiparse a los daños con medidas de protección planificadas desde criterios de sustentabilidad. Es una formación con base científica y mirada integral, que articula las ciencias ambientales con la salud y la gestión.
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
                    <strong>Licenciado/a en Saneamiento y Protección Ambiental</strong>
                </div>
            </div>

            <!-- Duración -->
            <div class="dato-row">
                <div class="dato-label">
                    <span class="dato-label-icon">⏱️</span>
                    <span>Duración</span>
                </div>
                <div class="dato-value">
                    5 años (10 cuatrimestres y tesis)
                </div>
            </div>

            <!-- Carga horaria -->
            <div class="dato-row">
                <div class="dato-label">
                    <span class="dato-label-icon">⌛</span>
                    <span>Carga horaria total</span>
                </div>
                <div class="dato-value">
                    3184 horas, sin contar la tesis
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
                    Ord. CS N° 0950/05, vigente desde 2006 (correlatividades: Ord. CS N° 0629/10, modificada por las Ord. CS N° 0630/10 y 0631/10)
                </div>
            </div>
        </div>

        <!-- ¿Cómo es la carrera? -->
        <section class="como-es-carrera-card">
            <h2 class="carrera-section-title">
                <span>¿Cómo es la carrera?</span>
            </h2>

            <div class="carrera-timeline">
                <div class="timeline-step">
                    <div class="timeline-badge">1</div>
                    <div class="timeline-body">
                        <p>Los primeros años construyen la base científica: matemática, física, química, biología y ecología.</p>
                    </div>
                </div>

                <div class="timeline-step">
                    <div class="timeline-badge">2</div>
                    <div class="timeline-body">
                        <p>A partir de allí, la formación se orienta al saneamiento: tratamiento de aguas, efluentes y residuos, microbiología y toxicología ambiental, calidad del agua, del aire y del suelo, salud ambiental y salud ocupacional. Hay trabajo de laboratorio y de campo.</p>
                    </div>
                </div>

                <div class="timeline-step">
                    <div class="timeline-badge">3</div>
                    <div class="timeline-body">
                        <p>Los últimos años suman herramientas de gestión: evaluación de impacto y riesgo ambiental, planificación y gestión ambiental, intervención en ambientes degradados, monitoreo de recursos vivos y legislación ambiental.</p>
                    </div>
                </div>

                <div class="timeline-step">
                    <div class="timeline-badge">4</div>
                    <div class="timeline-body">
                        <p>El recorrido se completa con dos seminarios optativos e Inglés, y cierra con una tesis.</p>
                    </div>
                </div>
            </div>

            <!-- Botón con URL debajo del texto -->
            <div class="plan-descarga-box">
                <div class="plan-descarga-info">
                    <h4 style="margin: 0 0 0.35rem 0; font-size: 1.15rem; color: var(--color-primary); font-weight: 700;">Plan de Estudio Completo</h4>
                    <p style="margin: 0; font-size: 0.95rem; color: var(--color-text-muted);">Consultá o descargá el documento oficial del plan de estudio en formato PDF.</p>
                </div>
                <a href="https://drive.google.com/file/d/1QUTn80-Bu7AcvBVBppuCe5Y-OBjYla76/view?usp=drive_link" target="_blank" rel="noopener noreferrer" class="btn-descarga-plan">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    Descargar Plan de Estudios
                </a>
            </div>
        </section>

        <!-- Perfil del egresado/a -->
        <section class="carrera-info-card">
            <h2 class="carrera-section-title">
                <span>Perfil del egresado/a</span>
            </h2>
            <div class="carrera-card-body">
                <p>
                    Quienes egresan de la Licenciatura conocen las características físicas, químicas y biológicas del ambiente y los factores que lo modifican. Están preparados/as para planificar muestreos e interpretar resultados analíticos de aguas, efluentes, residuos, alimentos y aire, con el fin de evaluar riesgos, sanear ambientes contaminados y proteger áreas expuestas a potenciales contaminaciones. Integran equipos multidisciplinarios de evaluación de impacto ambiental, así como equipos de los ámbitos de la salud y la ingeniería, para programar, ejecutar y supervisar acciones de protección y corrección ambiental en áreas urbanas y rurales. También conducen inspecciones y relevamientos que evalúan las condiciones higiénicas de viviendas, establecimientos públicos y lugares de recreación.
                </p>
            </div>
        </section>

        <!-- Alcances del título -->
        <section class="carrera-info-card">
            <h2 class="carrera-section-title">
                <span>Alcances del título</span>
            </h2>
            <div class="carrera-card-body">
                <p>
                    El título habilita para realizar estudios, investigaciones y asesoramiento en saneamiento y protección ambiental. También para planificar muestreos y analizar contaminantes en agua, aire, suelo, efluentes y residuos, y para evaluar la eficiencia de los sistemas de tratamiento. Incluye la evaluación de impacto y riesgo ambiental, el asesoramiento en educación, higiene y seguridad ambiental, y la evaluación de riesgos por agentes biológicos y de las condiciones de seguridad ambiental de viviendas, establecimientos y ámbitos de trabajo.
                </p>
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

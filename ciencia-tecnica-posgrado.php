<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaría de Ciencia, Técnica y Posgrado | FACIAS - UNCo</title>
    <!-- Meta tags SEO -->
    <meta name="description" content="Secretaría de Ciencia, Técnica y Posgrado de la Facultad de Ciencias del Ambiente y la Salud (FACIAS) - Universidad Nacional del Comahue. Políticas científicas, tecnológicas, formación de posgrado y Centro Documental.">
    <meta name="keywords" content="Ciencia y Técnica, Posgrado, Investigación, Centro Documental, Biblioteca, Dra. Paula Sette, FACIAS, UNCo, Neuquén">
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
            font-size: 1.05rem;
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

        .equipo-item-area {
            font-weight: 500;
            color: var(--color-text-muted);
            font-size: 0.92rem;
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
            font-size: 0.95rem;
            word-break: break-all;
            padding: 0.55rem 0.85rem;
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

        /* Banner de Horarios */
        .horarios-banner {
            background: linear-gradient(135deg, #e0f2fe 0%, #e6f4f6 100%);
            border: 1.5px solid #bae6fd;
            border-left: 5px solid #0284c7;
            border-radius: 12px;
            padding: 1.15rem 1.4rem;
            display: flex;
            align-items: center;
            gap: 1.15rem;
            margin-bottom: 2.25rem;
            box-shadow: 0 2px 8px rgba(2, 132, 199, 0.08);
        }

        .horarios-icon-box {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #ffffff;
            color: #0284c7;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 2px 6px rgba(2, 132, 199, 0.15);
        }

        .horarios-text {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .horarios-label {
            font-size: 0.82rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: #0369a1;
        }

        .horarios-days {
            font-size: 1.12rem;
            font-weight: 800;
            color: #0f172a;
        }

        /* Tarjeta de Objetivo */
        .objetivo-card {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.25rem 2.5rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            border-left: 5px solid var(--color-secondary);
            margin-bottom: 3.5rem;
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
            font-size: 1.02rem;
            line-height: 1.8;
            color: #334155;
            margin: 0;
            text-align: justify;
        }

        /* Organigrama */
        .org-card {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.25rem 2.5rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            margin-bottom: 3.5rem;
        }

        .org-root {
            max-width: 440px;
            margin: 0 auto;
            text-align: center;
            background: linear-gradient(135deg, var(--color-primary) 0%, #008f9c 100%);
            color: #ffffff;
            border-radius: 12px;
            padding: 0.9rem 1.25rem;
            box-shadow: 0 4px 10px rgba(0, 75, 135, 0.2);
        }

        .org-root-name {
            display: block;
            font-size: 1.05rem;
            font-weight: 800;
        }

        .org-root-person {
            display: block;
            font-size: 0.92rem;
            font-weight: 600;
            opacity: 0.9;
            margin-top: 0.15rem;
        }

        .org-connector {
            width: 2px;
            height: 1.5rem;
            background-color: var(--color-border);
            margin: 0 auto;
        }

        .org-branches-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            max-width: 900px;
            margin: 0 auto;
            align-items: start;
        }

        .org-node {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-top: 4px solid var(--color-primary);
            border-radius: 12px;
            padding: 1rem 1.15rem;
        }

        .org-node-name {
            font-size: 1rem;
            font-weight: 800;
            color: var(--color-primary);
            margin: 0;
            line-height: 1.3;
        }

        .org-person {
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--color-secondary);
            margin: 0.2rem 0 0 0;
        }

        .org-divs {
            list-style: none;
            margin: 0.65rem 0 0 0;
            padding: 0;
        }

        .org-divs li {
            font-size: 0.85rem;
            color: #475569;
            line-height: 1.5;
            padding-left: 0.9rem;
            position: relative;
        }

        .org-divs li::before {
            content: "";
            position: absolute;
            left: 0.15rem;
            top: 0.65em;
            width: 0.4rem;
            height: 2px;
            background-color: #cbd5e1;
        }

        /* Secciones Dependientes */
        .dept-section {
            margin-top: 3.5rem;
            padding-top: 2.75rem;
            border-top: 2px solid var(--color-border);
        }

        .dept-header {
            margin-bottom: 2rem;
        }

        .dept-title-wrap {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            flex-wrap: wrap;
            margin-bottom: 0.5rem;
        }

        .dept-title {
            font-size: 2.15rem;
            font-weight: 800;
            color: var(--color-primary);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.65rem;
        }

        .dept-subtitle {
            font-size: 1.05rem;
            color: var(--color-text-muted);
            margin: 0;
            font-weight: 500;
        }

        .dept-primary-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2.5rem;
        }

        .dept-card {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 1.6rem 1.75rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: var(--transition-smooth);
            border-top: 4px solid var(--color-primary);
        }

        .dept-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .dept-card-tag {
            font-size: 0.8rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--color-secondary);
            margin-bottom: 0.4rem;
        }

        .dept-person-name {
            font-size: 1.3rem;
            font-weight: 800;
            color: var(--color-primary);
            margin: 0 0 1rem 0;
        }

        .equipo-section-header {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            margin-bottom: 1.35rem;
            padding-bottom: 0.65rem;
            border-bottom: 2px solid #e2e8f0;
        }

        .equipo-section-title {
            font-size: 1.45rem;
            font-weight: 800;
            color: var(--color-primary);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .team-cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
            gap: 1.35rem;
        }

        .team-member-card {
            background: #ffffff;
            border: 1px solid var(--color-border);
            border-radius: 14px;
            padding: 1.45rem 1.6rem;
            box-shadow: var(--shadow-subtle);
            display: flex;
            flex-direction: column;
            gap: 0.85rem;
            transition: var(--transition-smooth);
        }

        .team-member-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
            border-color: #0072b9;
        }

        .member-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .member-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #e6f4f6;
            color: #008f9c;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1rem;
            flex-shrink: 0;
        }

        .member-name {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
            line-height: 1.3;
        }

        .member-tasks {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            margin-top: 0.25rem;
        }

        .task-item {
            display: flex;
            flex-direction: column;
            gap: 0.35rem;
        }

        .task-label {
            font-size: 0.82rem;
            font-weight: 700;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        .task-text {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #334155;
            margin: 0;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 1.85rem;
            }
            .dept-title {
                font-size: 1.75rem;
            }
            .autoridad-card {
                flex-direction: column;
                text-align: center;
                padding: 1.75rem 1.5rem;
            }
            .info-grid, .dept-primary-grid, .team-cards-grid, .org-branches-3 {
                grid-template-columns: 1fr;
            }
            .objetivo-card, .org-card {
                padding: 1.75rem 1.5rem;
            }
            .horarios-banner {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body style="background-color: var(--color-bg-light);">

    <?php include 'header.php'; ?>

    <main class="page-container">
        <!-- Botón Volver -->
        <a href="index.php#secretarias" class="btn-back">
            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Volver a Secretarías
        </a>

        <!-- Encabezado de la página -->
        <div class="page-header">
            <h1 class="page-title">
                Secretaría de Ciencia, Técnica y Posgrado
                <span class="page-badge">Gestión Institucional</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- Titular / Autoridad -->
        <div class="autoridad-card">
            <div class="autoridad-avatar">
                🔬
            </div>
            <div class="autoridad-info">
                <div class="autoridad-cargo">Secretaria de Ciencia, Técnica y Posgrado</div>
                <h2 class="autoridad-nombre">Dra. Paula Sette</h2>
            </div>
        </div>

        <!-- Grid: Equipo de Trabajo y Contacto de Secretaría -->
        <div class="info-grid">
            <!-- Equipo de Trabajo -->
            <div class="info-card">
                <div class="info-card-header">
                    <span class="info-card-icon">👥</span>
                    <h3 class="info-card-title">Equipo de Trabajo</h3>
                </div>
                <div class="emails-list">
                    <div class="equipo-item">
                        <div class="equipo-item-badge">👤</div>
                        <span>Gunther Grant <span class="equipo-item-area">· Posgrado</span></span>
                    </div>
                    <div class="equipo-item">
                        <div class="equipo-item-badge">👤</div>
                        <span>Carolina Encina <span class="equipo-item-area">· Ciencia, Técnica y Departamento Centro Documental</span></span>
                    </div>
                    <div class="equipo-item">
                        <div class="equipo-item-badge">👤</div>
                        <span>Norma Valenzuela <span class="equipo-item-area">· Departamento Centro Documental</span></span>
                    </div>
                </div>
            </div>

            <!-- Contacto -->
            <div class="info-card">
                <div class="info-card-header">
                    <span class="info-card-icon">✉️</span>
                    <h3 class="info-card-title">Contacto</h3>
                </div>
                <div class="emails-list">
                    <a href="mailto:secretaria.investigacion@facias.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        secretaria.investigacion@facias.uncoma.edu.ar
                    </a>
                    <a href="mailto:posgrado@facias.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        posgrado@facias.uncoma.edu.ar
                    </a>
                    <a href="mailto:biblioteca@facias.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        biblioteca@facias.uncoma.edu.ar
                    </a>
                </div>
            </div>
        </div>

        <!-- Horarios de atención de la Secretaría -->
        <div class="horarios-banner">
            <div class="horarios-icon-box">
                <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="horarios-text">
                <span class="horarios-label">Horarios de atención al público:</span>
                <span class="horarios-days">Lunes a Viernes de 08:00 a 13:00 hs</span>
            </div>
        </div>

        <!-- Objetivo -->
        <div class="objetivo-card">
            <h3 class="objetivo-title">
                <span>🎯</span>
                <span>Objetivo y Funciones</span>
            </h3>
            <p class="objetivo-text">
                Tiene a su cargo la planificación, la definición y la gestión de las políticas científicas, tecnológicas y de formación de posgrado de la Facultad. En investigación, sus funciones incluyen la presentación, el seguimiento y el registro de los programas y proyectos internos y externos, incluido el reconocimiento de los proyectos acreditados por otros organismos de ciencia y técnica; la recepción y el control de las presentaciones para incentivos, premios, becas y programas de estímulo a la producción científica; la difusión de las convocatorias; y la producción de contenidos de divulgación científica. En posgrado, tiene a su cargo la organización y el desarrollo de las carreras, los cursos, los seminarios y demás actividades académicas de cuarto nivel; la inscripción de los estudiantes; la carga de la actividad académica en los sistemas vigentes; y las gestiones para el reconocimiento oficial y la validez de los títulos. De la Secretaría depende, además, el Departamento Centro Documental, que organiza y gestiona los recursos y servicios del Centro Documental; gestiona el préstamo y la circulación del material bibliográfico y su registro en los sistemas correspondientes; brinda el servicio de referencia, búsqueda y recuperación de la información; y digitaliza los materiales según los procedimientos y normativas vigentes. En las tres áreas, la Secretaría promueve vínculos, convenios y acciones de cooperación interinstitucional.
            </p>
        </div>

        <!-- Organigrama -->
        <div class="org-card">
            <div class="org-root">
                <span class="org-root-name">Secretaría de Ciencia, Técnica y Posgrado</span>
                <span class="org-root-person">Dra. Paula Sette</span>
            </div>
            <div class="org-connector"></div>

            <div class="org-branches-3">
                <!-- Ciencia y Técnica -->
                <div class="org-node">
                    <h4 class="org-node-name">Ciencia y Técnica</h4>
                    <p class="org-person">Carolina Encina</p>
                </div>

                <!-- Posgrado -->
                <div class="org-node">
                    <h4 class="org-node-name">Posgrado</h4>
                    <p class="org-person">Gunther Grant</p>
                </div>

                <!-- Departamento Centro Documental -->
                <div class="org-node">
                    <h4 class="org-node-name">Departamento Centro Documental</h4>
                    <p class="org-person">Norma Valenzuela</p>
                    <ul class="org-divs">
                        <li>Carolina Encina</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ========================================================
             SECCIÓN: CIENCIA Y TÉCNICA
             ======================================================== -->
        <section class="dept-section" id="ciencia-tecnica">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        Ciencia y Técnica
                    </h2>
                    <span class="page-badge">Investigación</span>
                </div>
                <p class="dept-subtitle">Proyectos y líneas de investigación de la Facultad.</p>
            </div>

            <div class="dept-primary-grid">
                <div class="dept-card">
                    <div>
                        <span class="dept-card-tag">A Cargo de:</span>
                        <h3 class="dept-person-name">Carolina Encina</h3>
                    </div>
                    <a href="mailto:secretaria.investigacion@facias.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        secretaria.investigacion@facias.uncoma.edu.ar
                    </a>
                </div>
            </div>

            <!-- Proyectos y Líneas de Investigación -->
            <div class="equipo-section-header">
                <h3 class="equipo-section-title">
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Proyectos y Líneas de Investigación
                </h3>
            </div>

            <div class="team-cards-grid">
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">🔬</div>
                        <h4 class="member-name">Proyectos y Líneas de Investigación</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <p class="task-text">En diseño.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================================
             SECCIÓN: POSGRADO
             ======================================================== -->
        <section class="dept-section" id="posgrado">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                        Posgrado
                    </h2>
                    <span class="page-badge">Carreras de Posgrado</span>
                </div>
                <p class="dept-subtitle">Carreras de posgrado que se dictan en la Facultad.</p>
            </div>

            <div class="dept-primary-grid">
                <div class="dept-card">
                    <div>
                        <span class="dept-card-tag">A Cargo de:</span>
                        <h3 class="dept-person-name">Gunther Grant</h3>
                    </div>
                    <a href="mailto:posgrado@facias.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        posgrado@facias.uncoma.edu.ar
                    </a>
                </div>
            </div>

            <!-- Carreras -->
            <div class="equipo-section-header">
                <h3 class="equipo-section-title">
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    Carreras
                </h3>
            </div>

            <div class="team-cards-grid">
                <!-- 1. Maestría en Restauración Ecológica -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">MR</div>
                        <h4 class="member-name">Maestría en Restauración Ecológica</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Consultas e Inscripciones:</span>
                            <a href="mailto:posgrado@facias.uncoma.edu.ar" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                posgrado@facias.uncoma.edu.ar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. Especialización en Higiene y Seguridad en el Trabajo -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">EH</div>
                        <h4 class="member-name">Especialización en Higiene y Seguridad en el Trabajo</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Consultas e Inscripciones:</span>
                            <a href="mailto:posgrado@facias.uncoma.edu.ar" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                posgrado@facias.uncoma.edu.ar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================================
             SECCIÓN: DEPARTAMENTO CENTRO DOCUMENTAL
             ======================================================== -->
        <section class="dept-section" id="centro-documental">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                        Departamento Centro Documental
                    </h2>
                </div>
            </div>

            <div class="dept-primary-grid">
                <div class="dept-card">
                    <div>
                        <span class="dept-card-tag">A Cargo de:</span>
                        <h3 class="dept-person-name">Norma Valenzuela</h3>
                    </div>
                    <a href="mailto:biblioteca@facias.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        biblioteca@facias.uncoma.edu.ar
                    </a>
                </div>
            </div>

            <!-- Equipo de Trabajo -->
            <div class="equipo-section-header">
                <h3 class="equipo-section-title">
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Equipo de Trabajo
                </h3>
            </div>

            <div class="team-cards-grid">
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">CE</div>
                        <h4 class="member-name">Carolina Encina</h4>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2rem 0; text-align: center; margin-top: 5rem;">
        <p style="font-size: 0.9rem; opacity: 0.8; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
    </footer>

</body>
</html>

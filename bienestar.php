<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaría de Bienestar | FACIAS - UNCo</title>
    <!-- Meta tags SEO -->
    <meta name="description" content="Secretaría de Bienestar de la Facultad de Ciencias del Ambiente y la Salud (FACIAS) - Universidad Nacional del Comahue. Becas estudiantiles, comedor universitario, salud y deportes, inserción universitaria.">
    <meta name="keywords" content="Bienestar, Becas, Comedor Universitario, Salud Integral, Deportes, Inserción Universitaria, FACIAS, UNCo, Neuquén, Allen, Choele Choel">
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
        .autoridades-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .autoridad-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: var(--border-radius-lg);
            padding: 2rem 2.25rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            border-left: 5px solid var(--color-primary);
            margin-bottom: 0;
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

        /* Grid de Contacto */
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

        .task-item {
            display: flex;
            flex-direction: column;
            gap: 0.35rem;
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
            font-style: italic;
        }

        /* Áreas Dependientes */
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
            .autoridades-grid, .info-grid, .team-cards-grid {
                grid-template-columns: 1fr;
            }
            .objetivo-card {
                padding: 1.75rem 1.5rem;
            }
            .objetivo-text {
                text-align: left;
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
                Secretaría de Bienestar
                <span class="page-badge">Gestión Institucional</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- Titulares / Autoridades -->
        <div class="autoridades-grid">
            <div class="autoridad-card">
                <div class="autoridad-avatar">
                    💚
                </div>
                <div class="autoridad-info">
                    <div class="autoridad-cargo">Secretario de Bienestar Sede Neuquén</div>
                    <h2 class="autoridad-nombre">Felipe Inostroza</h2>
                </div>
            </div>

            <div class="autoridad-card">
                <div class="autoridad-avatar">
                    💚
                </div>
                <div class="autoridad-info">
                    <div class="autoridad-cargo">Secretario de Bienestar Sedes Allen y Choele Choel</div>
                    <h2 class="autoridad-nombre">Gabriel Argat</h2>
                </div>
            </div>
        </div>

        <!-- Grid: Contacto de Secretaría -->
        <div class="info-grid">
            <!-- Contacto -->
            <div class="info-card">
                <div class="info-card-header">
                    <span class="info-card-icon">✉️</span>
                    <h3 class="info-card-title">Contacto</h3>
                </div>
                <div class="emails-list">
                    <span class="task-label">Sede Neuquén:</span>
                    <a href="mailto:secbienestar.facias2026@gmail.com" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        secbienestar.facias2026@gmail.com
                    </a>
                    <span class="task-label" style="margin-top: 0.5rem;">Sedes Allen y Choele Choel:</span>
                    <a href="mailto:hga00@hotmail.com" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        hga00@hotmail.com
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
                <span class="horarios-days">Lunes a Jueves de 09:00 a 12:00 hs</span>
            </div>
        </div>

        <!-- Objetivo -->
        <div class="objetivo-card">
            <h3 class="objetivo-title">
                <span>🎯</span>
                <span>Objetivo y Funciones</span>
            </h3>
            <p class="objetivo-text">
                «La Secretaría de Bienestar tiene a su cargo la definición, la coordinación y la implementación de las políticas de bienestar para la comunidad universitaria de la Facultad en sus tres sedes: Neuquén, Allen y Choele Choel. Entre sus funciones se encuentran la difusión, la inscripción y la gestión de las becas estudiantiles y los beneficios; el control de la documentación presentada; la elaboración de las nóminas de postulantes, renovaciones, adjudicaciones y bajas; y el seguimiento de los pagos en articulación con la Administración. También brinda asistencia profesional y seguimiento de estudiantes becarios y derivaciones cuando corresponde. Además, promueve actividades de cuidado, prevención y promoción de la salud integral; organiza actividades deportivas y recreativas; orienta sobre las licencias estudiantiles; y propone vínculos y convenios con organismos y redes para ampliar el alcance de sus servicios en cada sede.»
            </p>
        </div>

        <!-- ========================================================
             SECCIÓN: BECAS
             ======================================================== -->
        <section class="dept-section" id="becas">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                        Becas
                    </h2>
                    <span class="page-badge">Becas y Beneficios</span>
                </div>
                <p class="dept-subtitle">Becas estudiantiles y beneficios para la comunidad universitaria.</p>
            </div>

            <div class="team-cards-grid">
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">🎓</div>
                        <h4 class="member-name">Becas Estudiantiles</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <p class="task-text">En diseño.</p>
                        </div>
                        <div class="task-item">
                            <span class="task-label">Consultas Sede Neuquén:</span>
                            <a href="mailto:secbienestar.facias2026@gmail.com" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                secbienestar.facias2026@gmail.com
                            </a>
                        </div>
                        <div class="task-item">
                            <span class="task-label">Consultas Sedes Allen y Choele Choel:</span>
                            <a href="mailto:hga00@hotmail.com" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                hga00@hotmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================================
             SECCIÓN: COMEDOR
             ======================================================== -->
        <section class="dept-section" id="comedor">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        Comedor
                    </h2>
                    <span class="page-badge">Comedor Universitario</span>
                </div>
                <p class="dept-subtitle">Comedor universitario para estudiantes de la Facultad.</p>
            </div>

            <div class="team-cards-grid">
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">🍽️</div>
                        <h4 class="member-name">Comedor Universitario</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <p class="task-text">En diseño.</p>
                        </div>
                        <div class="task-item">
                            <span class="task-label">Consultas Sede Neuquén:</span>
                            <a href="mailto:secbienestar.facias2026@gmail.com" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                secbienestar.facias2026@gmail.com
                            </a>
                        </div>
                        <div class="task-item">
                            <span class="task-label">Consultas Sedes Allen y Choele Choel:</span>
                            <a href="mailto:hga00@hotmail.com" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                hga00@hotmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================================
             SECCIÓN: SALUD Y DEPORTES
             ======================================================== -->
        <section class="dept-section" id="salud-deportes">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        Salud y Deportes
                    </h2>
                    <span class="page-badge">Salud Integral</span>
                </div>
                <p class="dept-subtitle">Cuidado, prevención y promoción de la salud integral, y actividades deportivas y recreativas.</p>
            </div>

            <div class="team-cards-grid">
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">⚽</div>
                        <h4 class="member-name">Salud y Deportes</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <p class="task-text">En diseño.</p>
                        </div>
                        <div class="task-item">
                            <span class="task-label">Consultas Sede Neuquén:</span>
                            <a href="mailto:secbienestar.facias2026@gmail.com" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                secbienestar.facias2026@gmail.com
                            </a>
                        </div>
                        <div class="task-item">
                            <span class="task-label">Consultas Sedes Allen y Choele Choel:</span>
                            <a href="mailto:hga00@hotmail.com" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                hga00@hotmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================================
             SECCIÓN: INSERCIÓN UNIVERSITARIA
             ======================================================== -->
        <section class="dept-section" id="insercion-universitaria">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        Inserción Universitaria
                    </h2>
                    <span class="page-badge">Acompañamiento</span>
                </div>
                <p class="dept-subtitle">Apoyo y acompañamiento a estudiantes en su inserción universitaria.</p>
            </div>

            <div class="team-cards-grid">
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">🧭</div>
                        <h4 class="member-name">Apoyo a la Inserción Universitaria</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <p class="task-text">En diseño.</p>
                        </div>
                        <div class="task-item">
                            <span class="task-label">Consultas Sede Neuquén:</span>
                            <a href="mailto:secbienestar.facias2026@gmail.com" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                secbienestar.facias2026@gmail.com
                            </a>
                        </div>
                        <div class="task-item">
                            <span class="task-label">Consultas Sedes Allen y Choele Choel:</span>
                            <a href="mailto:hga00@hotmail.com" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                hga00@hotmail.com
                            </a>
                        </div>
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

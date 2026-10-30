<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaría Académica | FACIAS - UNCo</title>
    <link rel="stylesheet" href="styles.css?v=3.2">
    <style>
        .page-container {
            max-width: 1040px;
            margin: 3rem auto 5rem;
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

        /* ========================================================
           SECCIÓN: DEPARTAMENTO DE ALUMNOS
           ======================================================== */
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

        /* Bloques de Jefatura y Solicitud Planes */
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

        /* Subsección Equipo de Trabajo */
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

        @media (max-width: 768px) {
            .page-title {
                font-size: 1.85rem;
            }
            .autoridad-card {
                flex-direction: column;
                text-align: center;
                padding: 1.75rem 1.5rem;
            }
            .info-grid, .dept-primary-grid, .team-cards-grid {
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

        <!-- Grid: Equipo de Trabajo y Contacto de Secretaría -->
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

        <!-- ========================================================
             SECCIÓN: DEPARTAMENTO DE ALUMNOS
             ======================================================== -->
        <section class="dept-section" id="departamento-alumnos">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        Departamento de Alumnos
                    </h2>
                    <span class="page-badge">Información y Contacto</span>
                </div>
                <p class="dept-subtitle">Atención, trámites y acompañamiento administrativo para estudiantes de todas las carreras y sedes.</p>
            </div>

            <!-- Horarios de atención -->
            <div class="horarios-banner">
                <div class="horarios-icon-box">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div class="horarios-text">
                    <span class="horarios-label">Horarios de atención al público:</span>
                    <span class="horarios-days">Lunes, Martes, Jueves y Viernes de 10:00 a 13:00 hs</span>
                </div>
            </div>

            <!-- Jefatura Académica & Solicitud de Planes -->
            <div class="dept-primary-grid">
                <!-- Jefatura Académica -->
                <div class="dept-card">
                    <div>
                        <span class="dept-card-tag">Jefatura Académica a Cargo de:</span>
                        <h3 class="dept-person-name">Sra. Mariela Mendez</h3>
                    </div>
                    <a href="mailto:departamento.alumnos@facias.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        departamento.alumnos@facias.uncoma.edu.ar
                    </a>
                </div>

                <!-- Solicitud Planes de Estudios -->
                <div class="dept-card">
                    <div>
                        <span class="dept-card-tag">Solicitud Planes de Estudios:</span>
                        <h3 class="dept-person-name">Sra. Amelia Nieves</h3>
                    </div>
                    <a href="mailto:amenieves64@gmail.com" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        amenieves64@gmail.com
                    </a>
                </div>
            </div>

            <!-- Equipo de Trabajo del Departamento -->
            <div class="equipo-section-header">
                <h3 class="equipo-section-title">
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Equipo de Trabajo y Trámites
                </h3>
            </div>

            <div class="team-cards-grid">
                <!-- 1. Evelyn Dietrich -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">ED</div>
                        <h4 class="member-name">Sra. Evelyn Dietrich</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Cursado Paralelo y Cambio de Carrera:</span>
                            <a href="mailto:tramites.dptoalumnos@facias.uncoma.edu.ar" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                tramites.dptoalumnos@facias.uncoma.edu.ar
                            </a>
                        </div>
                        <div class="task-item">
                            <span class="task-label">Equivalencias:</span>
                            <a href="mailto:equivalencia.documentacion@facias.uncoma.edu.ar" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                equivalencia.documentacion@facias.uncoma.edu.ar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. Etel Marianela Salmini -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">ES</div>
                        <h4 class="member-name">Srita. Etel Marianela Salmini</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Encargada de Sedes:</span>
                            <a href="mailto:direccion.academica@facias.uncoma.edu.ar" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                direccion.academica@facias.uncoma.edu.ar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3. Gabriela Rosa -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">GR</div>
                        <h4 class="member-name">Sra. Gabriela Rosa</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Títulos:</span>
                            <a href="mailto:auditoria.titulos@facias.uncoma.edu.ar" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                auditoria.titulos@facias.uncoma.edu.ar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 4. Carla Deccechis -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">CD</div>
                        <h4 class="member-name">Srita. Carla Deccechis</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Cursadas y Exámenes:</span>
                            <a href="mailto:cursada.examenes@facias.uncoma.edu.ar" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                cursada.examenes@facias.uncoma.edu.ar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 5. Tamara Basualdo & Alina Mazzitelli -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">👥</div>
                        <div>
                            <h4 class="member-name" style="margin-bottom: 0.15rem;">Sra. Tamara Basualdo</h4>
                            <h4 class="member-name" style="font-size: 1.05rem; color: #475569;">Sra. Alina Mazzitelli</h4>
                        </div>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Consultas Generales de Alumnos:</span>
                            <a href="mailto:alumnos@facias.uncoma.edu.ar" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                alumnos@facias.uncoma.edu.ar
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
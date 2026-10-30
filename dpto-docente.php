<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento Docente | FACIAS - UNCo</title>
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

        /* Grid de 2 columnas para Equipo y Contacto */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2.5rem;
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
            gap: 1rem;
        }

        .equipo-item-badge {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background-color: var(--color-secondary-light);
            color: var(--color-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
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

        /* Secciones de Documentos / Descargas */
        .doc-section {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2rem 2.25rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            margin-bottom: 2.25rem;
        }

        .doc-section-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.85rem;
            border-bottom: 2px solid var(--color-border);
        }

        .doc-section-icon {
            font-size: 1.5rem;
        }

        .doc-section-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--color-primary);
            margin: 0;
        }

        .doc-cards-list {
            display: flex;
            flex-direction: column;
            gap: 0.85rem;
        }

        .download-doc-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1.25rem;
            background: #f8fafc;
            border: 1px solid var(--color-border);
            border-radius: var(--border-radius-md);
            text-decoration: none;
            color: var(--color-text-dark);
            transition: all 0.2s ease;
            gap: 1.25rem;
        }

        .download-doc-card:hover {
            border-color: var(--color-primary);
            background-color: var(--color-secondary-light);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 75, 135, 0.1);
        }

        .download-doc-info {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            min-width: 0;
        }

        .download-doc-icon {
            flex-shrink: 0;
            color: #e74c3c;
        }

        .download-doc-name {
            font-weight: 600;
            font-size: 0.98rem;
            color: var(--color-text-dark);
            line-height: 1.45;
        }

        .download-doc-card:hover .download-doc-name {
            color: var(--color-primary);
        }

        .download-doc-btn {
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--color-primary);
            background: rgba(0, 114, 185, 0.08);
            border: 1px solid rgba(0, 114, 185, 0.2);
            padding: 0.4rem 0.85rem;
            border-radius: var(--border-radius-pill);
            text-transform: uppercase;
            letter-spacing: 0.03em;
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            white-space: nowrap;
            flex-shrink: 0;
            transition: all 0.2s ease;
        }

        .download-doc-card:hover .download-doc-btn {
            background-color: var(--color-primary);
            color: #ffffff;
            border-color: var(--color-primary);
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 1.85rem;
            }
            .info-grid {
                grid-template-columns: 1fr;
            }
            .doc-section {
                padding: 1.5rem;
            }
            .download-doc-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.75rem;
            }
            .download-doc-btn {
                align-self: flex-start;
            }
        }
    </style>
</head>
<body style="background-color: var(--color-bg-light);">

    <!-- Header simple / Navegación -->
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
                Departamento Docente
                <span class="page-badge">Gestión Académica</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- Grid: Equipo de Trabajo y Contacto -->
        <div class="info-grid">
            <!-- Equipo de Trabajo -->
            <div class="info-card">
                <div class="info-card-header">
                    <span class="info-card-icon">👥</span>
                    <h2 class="info-card-title">Equipo de Trabajo</h2>
                </div>
                <div class="equipo-item">
                    <div class="equipo-item-badge">👤</div>
                    <div>
                        <span style="font-size: 0.85rem; color: var(--color-text-muted); display: block; font-weight: 500; margin-bottom: 0.15rem;">Jefa del Dpto. Docente</span>
                        <strong style="color: var(--color-primary); font-size: 1.15rem;">Srta. Flavia N. Garcia</strong>
                    </div>
                </div>
            </div>

            <!-- Contacto -->
            <div class="info-card">
                <div class="info-card-header">
                    <span class="info-card-icon">✉️</span>
                    <h2 class="info-card-title">Contacto</h2>
                </div>
                <div class="emails-list">
                    <a href="mailto:departamentodocentesfacias@gmail.com" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        departamentodocentesfacias@gmail.com
                    </a>
                    <a href="mailto:concursosdocentesfacias1@gmail.com" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        concursosdocentesfacias1@gmail.com
                    </a>
                </div>
            </div>
        </div>

        <!-- SECCIÓN 1: REQUISITOS PARA INSCRIPCIÓN -->
        <section class="doc-section">
            <div class="doc-section-header">
                <span class="doc-section-icon">📝</span>
                <h2 class="doc-section-title">Requisitos para Inscripción</h2>
            </div>
            
            <div class="doc-cards-list">
                <!-- Formulario de Inscripción -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">Formulario de Inscripción</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- Nota Tipo – Concurso Interino -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">Nota Tipo – Concurso Interino</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- Modelo Formato de Programa para la Carrera -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">Modelo Formato de Programa para la Carrera</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- Ver Resolución 110/24 -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">Ver Resolución 110/24 – «Nuevo reglamento para selecciones docentes interinos cargos AYP-JTP de FACIAS»</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- Ver Resolución 109/24 -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">Ver Resolución 109/24</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>
            </div>
        </section>

        <!-- SECCIÓN 2: REGLAMENTOS -->
        <section class="doc-section">
            <div class="doc-section-header">
                <span class="doc-section-icon">⚖️</span>
                <h2 class="doc-section-title">Reglamentos</h2>
            </div>
            
            <div class="doc-cards-list">
                <!-- ORDENANZA N°728/24 -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">ORDENANZA N°728/24 REGLAMENTO DE CONCURSOS CARGOS DOCENTES REGULARES</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- Ver Reglamento de Concursos de Auxiliares de Docencia Interinos -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">Ver Reglamento de Concursos de Auxiliares de Docencia Interinos</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- Ver Reglamento de Concurso para Profesores Regulares -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">Ver Reglamento de Concurso para Profesores Regulares</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- Ver Resolución de Nuevos Procedimientos para la cobertura de Cargos -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">Ver Resolución de Nuevos Procedimientos para la cobertura de Cargos</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>
            </div>
        </section>

        <!-- SECCIÓN 3: DESIGNACIONES -->
        <section class="doc-section">
            <div class="doc-section-header">
                <span class="doc-section-icon">📜</span>
                <h2 class="doc-section-title">Designaciones</h2>
            </div>
            
            <div class="doc-cards-list">
                <!-- DESIGNACIONES DOCENTES REGULARES 2025 – RES. N° 271/24 -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">DESIGNACIONES DOCENTES REGULARES 2025 – RES. N° 271/24</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- DESIGNACIONES DOCENTES INTERINOS 2025 – RES. N° 272/24 -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">DESIGNACIONES DOCENTES INTERINOS 2025 – RES. N° 272/24</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- DESIGNACIONES DOCENTES 2024 – RES. N° 277/23 -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">DESIGNACIONES DOCENTES 2024 – RES. N° 277/23</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- DESIGNACIONES DOCENTES 2024 – RES. N° 278/23 -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">DESIGNACIONES DOCENTES 2024 – RES. N° 278/23</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- Resolución CD. Nº234/25 Designaciones Docentes Regulares FACIAS 2026 -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">Resolución CD. Nº234/25 Designaciones Docentes Regulares FACIAS 2026</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>

                <!-- Resolución CD. Nº235/25 Designaciones Docentes Interinos/ Suplentes FACIAS 2026 -->
                <a href="#" class="download-doc-card" target="_blank" rel="noopener noreferrer">
                    <div class="download-doc-info">
                        <svg class="download-doc-icon" width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path>
                        </svg>
                        <span class="download-doc-name">Resolución CD. Nº235/25 Designaciones Docentes Interinos/ Suplentes FACIAS 2026</span>
                    </div>
                    <span class="download-doc-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Descargar
                    </span>
                </a>
            </div>
        </section>

    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2rem 0; text-align: center; margin-top: 5rem;">
        <p style="font-size: 0.9rem; opacity: 0.8; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
    </footer>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consejo Directivo | FACIAS - UNCo</title>
    <link rel="stylesheet" href="styles.css?v=3.2">
    <style>
        .page-container {
            max-width: 1120px;
            margin: 2.5rem auto 5rem;
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
            margin: 0 0 1rem 0;
        }

        .page-intro-box {
            background: linear-gradient(135deg, #f0f7ff 0%, #e6f4f6 100%);
            border: 1px solid #bfdbfe;
            border-left: 5px solid var(--color-primary);
            border-radius: 12px;
            padding: 1.25rem 1.6rem;
            font-size: 1rem;
            line-height: 1.65;
            color: #1e3a8a;
            margin-top: 1.25rem;
        }

        /* Barra de navegación interna / Anclas */
        .section-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 0.65rem;
            margin-bottom: 2.5rem;
            padding: 0.75rem;
            background: #ffffff;
            border: 1px solid var(--color-border);
            border-radius: 12px;
            box-shadow: var(--shadow-subtle);
        }

        .section-nav-link {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            color: #334155;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            transition: var(--transition-smooth);
            background: #f8fafc;
        }

        .section-nav-link:hover {
            background: var(--color-primary);
            color: #ffffff;
            transform: translateY(-1px);
        }

        /* Secciones */
        .cd-section {
            margin-bottom: 3.5rem;
            scroll-margin-top: 2rem;
        }

        .cd-section-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 0.65rem;
        }

        .cd-section-title {
            font-size: 1.55rem;
            font-weight: 800;
            color: var(--color-primary);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        /* 1. Tarjetas de Funciones */
        .funciones-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
        }

        .funcion-card {
            background: #ffffff;
            border: 1px solid var(--color-border);
            border-radius: 14px;
            padding: 1.6rem 1.5rem;
            box-shadow: var(--shadow-subtle);
            transition: var(--transition-smooth);
            display: flex;
            flex-direction: column;
        }

        .funcion-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium);
            border-color: #008f9c;
        }

        .funcion-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: #e6f4f6;
            color: #008f9c;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.15rem;
        }

        .funcion-card-title {
            font-size: 1.12rem;
            font-weight: 700;
            color: #0f172a;
            margin: 0 0 0.75rem 0;
            line-height: 1.35;
        }

        .funcion-card-text {
            font-size: 0.94rem;
            color: #475569;
            line-height: 1.6;
            margin: 0;
        }

        .sub-actos-box {
            margin-top: 0.85rem;
            padding: 0.75rem 0.9rem;
            background: #f8fafc;
            border-radius: 8px;
            border-left: 3px solid #008f9c;
            font-size: 0.9rem;
            line-height: 1.55;
            color: #334155;
        }

        .sub-actos-box strong {
            color: #0f172a;
        }

        /* 2. Calendario de Sesiones */
        .calendario-card {
            background: #ffffff;
            border: 1px solid var(--color-border);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: var(--shadow-subtle);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .sesion-item {
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.4rem 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            position: relative;
            transition: var(--transition-smooth);
        }

        .sesion-item:hover {
            border-color: #0072b9;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 114, 185, 0.08);
        }

        .sesion-badge {
            align-self: flex-start;
            background: #e0f2fe;
            color: #0369a1;
            font-weight: 800;
            font-size: 0.78rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            padding: 0.3rem 0.65rem;
            border-radius: 6px;
        }

        .sesion-date {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--color-primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .sesion-nota {
            font-size: 0.88rem;
            background: #fef3c7;
            border: 1px solid #fde68a;
            color: #92400e;
            padding: 0.55rem 0.85rem;
            border-radius: 8px;
            line-height: 1.45;
            margin-top: 0.35rem;
        }

        /* 3. Integrantes */
        .claustro-block {
            background: #ffffff;
            border: 1px solid var(--color-border);
            border-radius: 14px;
            box-shadow: var(--shadow-subtle);
            margin-bottom: 1.75rem;
            overflow: hidden;
        }

        .claustro-header {
            background: #f1f5f9;
            padding: 0.9rem 1.4rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--color-border);
        }

        .claustro-title {
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--color-primary);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .claustro-badge {
            background: #e2e8f0;
            color: #334155;
            font-size: 0.8rem;
            font-weight: 700;
            padding: 0.2rem 0.6rem;
            border-radius: 9999px;
        }

        .integrantes-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }

        .integrantes-table th {
            background: #fafafa;
            color: #475569;
            font-weight: 700;
            text-align: left;
            padding: 0.75rem 1.25rem;
            border-bottom: 1px solid var(--color-border);
            font-size: 0.82rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .integrantes-table td {
            padding: 0.85rem 1.25rem;
            border-bottom: 1px solid #f1f5f9;
            color: #1e293b;
        }

        .integrantes-table tr:last-child td {
            border-bottom: none;
        }

        .integrantes-table tr:hover {
            background: #f8fafc;
        }

        .num-col {
            width: 48px;
            font-weight: 700;
            color: var(--color-secondary);
            text-align: center;
        }

        .titular-cell {
            font-weight: 600;
            color: #0f172a;
        }

        .suplente-cell {
            color: #475569;
        }

        .sin-suplente {
            color: #94a3b8;
            font-style: italic;
        }

        /* 4. Comisiones */
        .comisiones-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
        }

        .comision-card {
            background: #ffffff;
            border: 1px solid var(--color-border);
            border-radius: 14px;
            padding: 1.5rem;
            box-shadow: var(--shadow-subtle);
            display: flex;
            flex-direction: column;
            border-top: 4px solid var(--color-secondary);
        }

        .comision-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--color-primary);
            margin: 0 0 0.85rem 0;
            line-height: 1.3;
        }

        .comision-count {
            align-self: flex-start;
            background: #e6f4f6;
            color: #008f9c;
            font-size: 0.78rem;
            font-weight: 700;
            padding: 0.2rem 0.65rem;
            border-radius: 9999px;
            margin-bottom: 1rem;
        }

        .comision-members-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
        }

        .comision-members-list li {
            font-size: 0.91rem;
            color: #334155;
            padding-left: 1.15rem;
            position: relative;
            line-height: 1.45;
        }

        .comision-members-list li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: var(--color-secondary);
            font-size: 1.1rem;
            line-height: 1;
            font-weight: 800;
        }

        /* 5. Reglamentos */
        .reglamentos-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .reglamento-card {
            background: #ffffff;
            border: 1px solid var(--color-border);
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
            box-shadow: var(--shadow-subtle);
            transition: var(--transition-smooth);
        }

        .reglamento-card:hover {
            border-color: var(--color-primary);
            box-shadow: var(--shadow-medium);
            transform: translateX(4px);
        }

        .reglamento-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .reglamento-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: #eff6ff;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .reglamento-name {
            font-weight: 700;
            color: #0f172a;
            font-size: 1.02rem;
            margin: 0 0 0.25rem 0;
        }

        .reglamento-desc {
            font-size: 0.9rem;
            color: #64748b;
            margin: 0;
        }

        .btn-descargar-reglamento {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            background: var(--color-secondary);
            color: #ffffff;
            font-size: 0.85rem;
            font-weight: 700;
            padding: 0.55rem 1.15rem;
            border-radius: 8px;
            text-decoration: none;
            transition: var(--transition-smooth);
            white-space: nowrap;
        }

        .btn-descargar-reglamento:hover {
            background: #007580;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 143, 156, 0.25);
        }

        .reglamento-proximamente {
            background: #fffbeb;
            border: 1.5px dashed #f59e0b;
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            color: #92400e;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .contacto-box {
            margin-top: 2rem;
            background: #f8fafc;
            border: 1px solid var(--color-border);
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .btn-mail {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--color-primary);
            color: #ffffff;
            font-weight: 700;
            font-size: 0.92rem;
            padding: 0.6rem 1.25rem;
            border-radius: 8px;
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .btn-mail:hover {
            background: #00284d;
            transform: translateY(-2px);
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .calendario-card {
                grid-template-columns: 1fr;
            }
            .page-title {
                font-size: 1.95rem;
            }
            .integrantes-table {
                font-size: 0.88rem;
            }
            .integrantes-table th, 
            .integrantes-table td {
                padding: 0.65rem 0.75rem;
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
                Consejo Directivo
                <span class="page-badge">Órgano de Co-Gobierno</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>

            <div class="page-intro-box">
                El <strong>Consejo Directivo</strong> es el órgano colegiado de gobierno y máxima autoridad de la FACIAS. Con representación democrática y cuatripartita de los claustros <strong>Docentes, Nodocentes, Estudiantes y Graduados</strong>, debate, reglamenta y define los proyectos y las políticas institucionales, académicas y presupuestarias de nuestra unidad académica.
            </div>
        </div>

        <!-- Barra de navegación rápida -->
        <nav class="section-nav" aria-label="Navegación interna del Consejo Directivo">
            <a href="#funciones" class="section-nav-link">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Funciones
            </a>
            <a href="#sesiones" class="section-nav-link">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                Calendario de Sesiones
            </a>
            <a href="#integrantes" class="section-nav-link">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                Integrantes
            </a>
            <a href="#comisiones" class="section-nav-link">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                Comisiones
            </a>
            <a href="#reglamentos" class="section-nav-link">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                Reglamentos
            </a>
            <a href="https://autogestion.uncoma.edu.ar/idp/module.php/arai/loginuserpass.php?AuthState=_b498734ab025d9af832aa7701cf1dab24788f6236b%3Ahttps%3A%2F%2Fautogestion.uncoma.edu.ar%2Fidp%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttps%253A%252F%252Franquel.uncoma.edu.ar%252Fdefault-sp%26RelayState%3Dhttps%253A%252F%252Franquel.uncoma.edu.ar%252F%26cookieTime%3D1793388054" target="_blank" rel="noopener noreferrer" class="section-nav-link" style="background: rgba(0, 114, 185, 0.08); color: var(--color-primary); border: 1px solid rgba(0, 114, 185, 0.25);">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                Ranquel (Resoluciones)
            </a>
        </nav>

        <!-- SECCIÓN 1: FUNCIONES -->
        <section class="cd-section" id="funciones">
            <div class="cd-section-header">
                <h2 class="cd-section-title">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                    Funciones del Consejo Directivo
                </h2>
            </div>

            <div class="funciones-grid">
                <!-- Función 1 -->
                <div class="funcion-card">
                    <div class="funcion-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="funcion-card-title">Formalización de actos e iniciativas institucionales</h3>
                    <p class="funcion-card-text">
                        El Consejo toma decisiones institucionales a través de dos tipos de actos principales:
                    </p>
                    <div class="sub-actos-box">
                        <p style="margin: 0 0 0.45rem 0;"><strong>• Resoluciones:</strong> Para adoptar medidas de orden interno, prestar acuerdo a determinados actos, emitir recomendaciones o realizar pedidos de informe.</p>
                        <p style="margin: 0;"><strong>• Declaraciones:</strong> Para fijar la posición formal del cuerpo respecto de cuestiones de relevancia institucional.</p>
                    </div>
                </div>

                <!-- Función 2 -->
                <div class="funcion-card">
                    <div class="funcion-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h3 class="funcion-card-title">Tratamiento de asuntos académicos y financieros</h3>
                    <p class="funcion-card-text">
                        Se encarga de tratar y decidir sobre proyectos relativos a planes de estudio, la designación de profesores regulares y los asuntos que impliquen gastos e impacto presupuestario institucional.
                    </p>
                </div>

                <!-- Función 3 -->
                <div class="funcion-card">
                    <div class="funcion-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="funcion-card-title">Organización y creación de Comisiones</h3>
                    <p class="funcion-card-text">
                        Define la labor de sus <strong>cuatro comisiones permanentes</strong> (Docencia y Asuntos Estudiantiles, Bienestar Universitario, Interpretación y Reglamento, Investigación y Extensión) y puede crear comisiones ad-hoc para analizar temas específicos no comprendidos en las comisiones fijas.
                    </p>
                </div>

                <!-- Función 4 -->
                <div class="funcion-card">
                    <div class="funcion-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="funcion-card-title">Aprobación de proyectos y resoluciones</h3>
                    <p class="funcion-card-text">
                        Debate, somete a votación y aprueba o rechaza los proyectos de resolución o mociones presentadas por la mayoría absoluta de los miembros presentes en cada sesión.
                    </p>
                </div>
            </div>
        </section>

        <!-- SECCIÓN 2: CALENDARIO DE SESIONES -->
        <section class="cd-section" id="sesiones">
            <div class="cd-section-header">
                <h2 class="cd-section-title">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Calendario de Sesiones
                </h2>
            </div>

            <div class="calendario-card">
                <!-- Sesión 10 -->
                <div class="sesion-item">
                    <span class="sesion-badge">Sesión Programada</span>
                    <div class="sesion-date">
                        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        10° Sesión Ordinaria
                    </div>
                    <p style="font-size: 1.05rem; font-weight: 700; color: #1e293b; margin: 0.25rem 0 0 0;">
                        Jueves 05/11
                    </p>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0;">
                        Sesión pública del Consejo Directivo de la FACIAS.
                    </p>
                </div>

                <!-- Sesión 11 -->
                <div class="sesion-item">
                    <span class="sesion-badge" style="background: #fef3c7; color: #92400e;">Sujeta a confirmación</span>
                    <div class="sesion-date">
                        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        11° Sesión Ordinaria
                    </div>
                    <p style="font-size: 1.05rem; font-weight: 700; color: #1e293b; margin: 0.25rem 0 0 0;">
                        Jueves 03/12
                    </p>
                </div>
            </div>
        </section>

        <!-- SECCIÓN 3: INTEGRANTES DEL CONSEJO -->
        <section class="cd-section" id="integrantes">
            <div class="cd-section-header">
                <h2 class="cd-section-title">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Integrantes del Consejo Directivo
                </h2>
            </div>

            <!-- 1. DOCENTES -->
            <div class="claustro-block">
                <div class="claustro-header">
                    <h3 class="claustro-title">
                        Claustro Docente
                    </h3>
                    <span class="claustro-badge">8 Titulares · 8 Suplentes</span>
                </div>
                <div style="overflow-x: auto;">
                    <table class="integrantes-table">
                        <thead>
                            <tr>
                                <th class="num-col">N°</th>
                                <th>Consejeros/as Titulares</th>
                                <th>Consejeros/as Suplentes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="num-col">1</td>
                                <td class="titular-cell">LEWIS, Grisel Margareth</td>
                                <td class="suplente-cell">TSCHERIG, Rocío Beatriz</td>
                            </tr>
                            <tr>
                                <td class="num-col">2</td>
                                <td class="titular-cell">CORIA, Susana Graciela</td>
                                <td class="suplente-cell">MASSEI, Ignacio Oscar</td>
                            </tr>
                            <tr>
                                <td class="num-col">3</td>
                                <td class="titular-cell">ZUÑIGA, Daniel Alfredo</td>
                                <td class="suplente-cell">REYNES, Pablo Andrés</td>
                            </tr>
                            <tr>
                                <td class="num-col">4</td>
                                <td class="titular-cell">GALLIA, María Celeste</td>
                                <td class="suplente-cell">LOPEZ, Micaela</td>
                            </tr>
                            <tr>
                                <td class="num-col">5</td>
                                <td class="titular-cell">ALVAREZ, Anahí Soledad</td>
                                <td class="suplente-cell">ARZAMENDIA, Yésica</td>
                            </tr>
                            <tr>
                                <td class="num-col">6</td>
                                <td class="titular-cell">GRANT, Gunther</td>
                                <td class="suplente-cell">MONTIEL, Lázaro Fabián</td>
                            </tr>
                            <tr>
                                <td class="num-col">7</td>
                                <td class="titular-cell">CELESCINCO, Alejandra Eyleen</td>
                                <td class="suplente-cell">FERRARI, María Julieta</td>
                            </tr>
                            <tr>
                                <td class="num-col">8</td>
                                <td class="titular-cell">GATICA, Analía</td>
                                <td class="suplente-cell">GOYOCHEA, Marcelo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 2. NODOCENTE -->
            <div class="claustro-block">
                <div class="claustro-header">
                    <h3 class="claustro-title">
                        Claustro Nodocente
                    </h3>
                    <span class="claustro-badge">3 Titulares · 2 Suplentes</span>
                </div>
                <div style="overflow-x: auto;">
                    <table class="integrantes-table">
                        <thead>
                            <tr>
                                <th class="num-col">N°</th>
                                <th>Consejeros/as Titulares</th>
                                <th>Consejeros/as Suplentes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="num-col">9</td>
                                <td class="titular-cell">BAEZA, Mauro</td>
                                <td class="suplente-cell">ENCINA, Carolina</td>
                            </tr>
                            <tr>
                                <td class="num-col">10</td>
                                <td class="titular-cell">SALMINI, Etel</td>
                                <td class="suplente-cell">DECCECHIS, Carla</td>
                            </tr>
                            <tr>
                                <td class="num-col">11</td>
                                <td class="titular-cell">MÓNACO, Melina</td>
                                <td class="suplente-cell sin-suplente">—</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 3. ESTUDIANTES -->
            <div class="claustro-block">
                <div class="claustro-header">
                    <h3 class="claustro-title">
                        Claustro Estudiantil
                    </h3>
                    <span class="claustro-badge">4 Titulares · 4 Suplentes</span>
                </div>
                <div style="overflow-x: auto;">
                    <table class="integrantes-table">
                        <thead>
                            <tr>
                                <th class="num-col">N°</th>
                                <th>Consejeros/as Titulares</th>
                                <th>Consejeros/as Suplentes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="num-col">12</td>
                                <td class="titular-cell">ALVAREZ, Luciana</td>
                                <td class="suplente-cell">REYES, Brenda</td>
                            </tr>
                            <tr>
                                <td class="num-col">13</td>
                                <td class="titular-cell">CANALES, Héctor</td>
                                <td class="suplente-cell">CONTRERAS, María Victoria</td>
                            </tr>
                            <tr>
                                <td class="num-col">14</td>
                                <td class="titular-cell">CURIÑANCO, Katya</td>
                                <td class="suplente-cell">LUCERO, Franco</td>
                            </tr>
                            <tr>
                                <td class="num-col">15</td>
                                <td class="titular-cell">VAZQUEZ, Flavio</td>
                                <td class="suplente-cell">CASTILLO CASTRO, Florencia</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 4. GRADUADOS -->
            <div class="claustro-block">
                <div class="claustro-header">
                    <h3 class="claustro-title">
                        Claustro Graduados
                    </h3>
                    <span class="claustro-badge">1 Titular · 1 Suplente</span>
                </div>
                <div style="overflow-x: auto;">
                    <table class="integrantes-table">
                        <thead>
                            <tr>
                                <th class="num-col">N°</th>
                                <th>Consejeros/as Titulares</th>
                                <th>Consejeros/as Suplentes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="num-col">16</td>
                                <td class="titular-cell">HERRERA, Martín</td>
                                <td class="suplente-cell">GOMEZ, Liliana</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- SECCIÓN 4: COMISIONES -->
        <section class="cd-section" id="comisiones">
            <div class="cd-section-header">
                <h2 class="cd-section-title">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    Comisiones de Trabajo
                </h2>
            </div>

            <div class="comisiones-grid">
                <!-- Comisión 1 -->
                <div class="comision-card">
                    <h3 class="comision-title">Docencia y Asuntos Estudiantiles</h3>
                    <span class="comision-count">15 Integrantes</span>
                    <ul class="comision-members-list">
                        <li>Gunther Grant</li>
                        <li>Susana Coria</li>
                        <li>Melina Mónaco</li>
                        <li>Celeste Gallia</li>
                        <li>Anahí Alvarez</li>
                        <li>Daniel Zúñiga</li>
                        <li>Etel Salmini</li>
                        <li>Carla Deccechis</li>
                        <li>Micaela Lopez</li>
                        <li>Lázaro Montiel</li>
                        <li>Rocío Tscherig</li>
                        <li>Gonzalo Canales</li>
                        <li>Luciana Alvarez</li>
                        <li>Franco Adriano Lucero</li>
                        <li>María Victoria Contreras</li>
                    </ul>
                </div>

                <!-- Comisión 2 -->
                <div class="comision-card">
                    <h3 class="comision-title">Bienestar Universitario</h3>
                    <span class="comision-count">10 Integrantes</span>
                    <ul class="comision-members-list">
                        <li>Martín Herrera</li>
                        <li>Carolina Encina</li>
                        <li>Gunther Grant</li>
                        <li>Susana Coria</li>
                        <li>Melina Mónaco</li>
                        <li>Celeste Gallia</li>
                        <li>Anahí Alvarez</li>
                        <li>Micaela Lopez</li>
                        <li>Flavio Cruz Vazquez</li>
                        <li>Brenda Reyes</li>
                    </ul>
                </div>

                <!-- Comisión 3 -->
                <div class="comision-card">
                    <h3 class="comision-title">Investigación y Extensión</h3>
                    <span class="comision-count">13 Integrantes</span>
                    <ul class="comision-members-list">
                        <li>Carolina Encina</li>
                        <li>Gunther Grant</li>
                        <li>Alejandra Celescinco</li>
                        <li>Melina Mónaco</li>
                        <li>Anahí Alvarez</li>
                        <li>Daniel Zúñiga</li>
                        <li>Pablo Reynes</li>
                        <li>Mauro Baeza</li>
                        <li>Micaela Lopez</li>
                        <li>Lázaro Montiel</li>
                        <li>Katya Curiñanco</li>
                        <li>Susana Coria</li>
                        <li>Celeste Gallia</li>
                    </ul>
                </div>

                <!-- Comisión 4 -->
                <div class="comision-card">
                    <h3 class="comision-title">Interpretación y Reglamento</h3>
                    <span class="comision-count">6 Integrantes</span>
                    <ul class="comision-members-list">
                        <li>Gunther Grant</li>
                        <li>Alejandra Celescinco</li>
                        <li>Melina Mónaco</li>
                        <li>Anahí Alvarez</li>
                        <li>Lázaro Montiel</li>
                        <li>Rocío Tscherig</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- SECCIÓN 5: REGLAMENTOS -->
        <section class="cd-section" id="reglamentos">
            <div class="cd-section-header">
                <h2 class="cd-section-title">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Reglamentos y Normativa
                </h2>
            </div>

            <!-- Acceso a Resoluciones en Ranquel -->
            <div style="background: linear-gradient(135deg, #f0fdf4 0%, #e0f2fe 100%); border: 1px solid #bae6fd; border-left: 5px solid var(--color-primary); border-radius: 14px; padding: 1.5rem 1.75rem; margin-bottom: 2rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1.25rem; box-shadow: var(--shadow-subtle);">
                <div>
                    <h3 style="margin: 0 0 0.35rem 0; font-size: 1.2rem; font-weight: 800; color: var(--color-primary); display: flex; align-items: center; gap: 0.5rem;">
                        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        Resoluciones del Consejo Directivo
                    </h3>
                    <p style="margin: 0; color: #334155; font-size: 0.95rem; line-height: 1.5;">
                        Podés consultar y descargar las resoluciones oficiales del cuerpo a través del sistema <strong>Ranquel</strong> de la UNCo.
                    </p>
                </div>
                <a href="https://autogestion.uncoma.edu.ar/idp/module.php/arai/loginuserpass.php?AuthState=_b498734ab025d9af832aa7701cf1dab24788f6236b%3Ahttps%3A%2F%2Fautogestion.uncoma.edu.ar%2Fidp%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttps%253A%252F%252Franquel.uncoma.edu.ar%252Fdefault-sp%26RelayState%3Dhttps%253A%252F%252Franquel.uncoma.edu.ar%252F%26cookieTime%3D1793388054" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--color-primary); color: #ffffff; padding: 0.75rem 1.35rem; border-radius: 8px; font-weight: 700; font-size: 0.95rem; text-decoration: none; transition: var(--transition-smooth); box-shadow: 0 2px 6px rgba(0, 114, 185, 0.25); white-space: nowrap;">
                    <span>Descargar Resoluciones (Ranquel)</span>
                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                </a>
            </div>

            <div class="reglamentos-list">
                <!-- Reglamento 1 -->
                <div class="reglamento-card">
                    <div class="reglamento-info">
                        <div class="reglamento-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="reglamento-name">Resolución CD N° 715/2010</h4>
                            <p class="reglamento-desc">Reglamento de Funcionamiento Interno del Consejo Directivo de FACIAS.</p>
                        </div>
                    </div>
                    <a href="https://drive.google.com/file/d/1AeWe1OvDFkqVTKqpKN81NDCxr_Br1CUD/view?usp=sharing" target="_blank" rel="noopener noreferrer" class="btn-descargar-reglamento">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        Descargar PDF
                    </a>
                </div>

                <!-- Reglamento 2 -->
                <div class="reglamento-card">
                    <div class="reglamento-info">
                        <div class="reglamento-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="reglamento-name">Resolución CD N° 137/26</h4>
                            <p class="reglamento-desc">Procedimiento formal de Ingreso de Proyectos ante el Consejo Directivo.</p>
                        </div>
                    </div>
                    <a href="https://drive.google.com/file/d/1WWX7XJL0FQQ7SJOzMyLQOYk6S914cGIs/view?usp=sharing" target="_blank" rel="noopener noreferrer" class="btn-descargar-reglamento">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        Descargar PDF
                    </a>
                </div>

                <!-- Reglamento 3 -->
                <div class="reglamento-card">
                    <div class="reglamento-info">
                        <div class="reglamento-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="reglamento-name">Resolución Decanal N° 326/26</h4>
                            <p class="reglamento-desc">Registro, tramitación y seguimiento de Despachos Digitales.</p>
                        </div>
                    </div>
                    <a href="https://drive.google.com/file/d/1baiWo2Wg9YWmWEIhpopIn6DrO1c5-ifJ/view?usp=sharing" target="_blank" rel="noopener noreferrer" class="btn-descargar-reglamento">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        Descargar PDF
                    </a>
                </div>

                <!-- Próximamente -->
                <div class="reglamento-proximamente">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span><strong>Próximamente:</strong> Se anexará el Reglamento de Modalidad Híbrida para sesiones y comisiones.</span>
                </div>
            </div>

            <!-- Caja de contacto con el Consejo -->
            <div class="contacto-box">
                <div>
                    <h4 style="font-size: 1.05rem; font-weight: 700; color: #0f172a; margin: 0 0 0.25rem 0;">¿Tenés consultas para el Consejo Directivo?</h4>
                    <p style="font-size: 0.92rem; color: #64748b; margin: 0;">Podés comunicarte por correo electrónico con la secretaría del cuerpo.</p>
                </div>
                <a href="mailto:consejodirectivofacias26@gmail.com" class="btn-mail">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    consejodirectivofacias26@gmail.com
                </a>
            </div>
        </section>

    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2.5rem 0; text-align: center; margin-top: 5rem;">
        <div class="container">
            <p style="font-size: 0.95rem; opacity: 0.9; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>
    </footer>

</body>
</html>

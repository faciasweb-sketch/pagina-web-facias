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

        /* 1. Hero / Banner Principal de Inscripciones */
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

        /* 2. Sección de Fechas */
        .fechas-section {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.75rem 2.5rem;
            box-shadow: var(--shadow-medium);
            border: 1px solid var(--color-border);
            margin-bottom: 2.5rem;
        }

        .fechas-header-title {
            font-size: 2.25rem;
            font-weight: 800;
            color: #1e293b;
            margin: 0 0 0.5rem 0;
            line-height: 1.2;
        }

        .fechas-header-desc {
            font-size: 1.05rem;
            color: #475569;
            margin: 0 0 1.75rem 0;
            line-height: 1.5;
        }

        /* Selector de Sedes (Píldoras) */
        .sede-tabs-container {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .sede-tab-btn {
            background: #ffffff;
            border: 1.5px solid #cbd5e1;
            color: #1e293b;
            padding: 0.6rem 1.6rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            transition: var(--transition-smooth);
            font-family: inherit;
        }

        .sede-tab-btn:hover {
            border-color: #008f9c;
            color: #008f9c;
        }

        .sede-tab-btn.active {
            background: #1e293b;
            border-color: #1e293b;
            color: #ffffff;
            box-shadow: 0 2px 6px rgba(30, 41, 59, 0.2);
        }

        /* Paneles con animación */
        .sede-panel {
            display: none;
        }

        .sede-panel.active {
            display: block;
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(4px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .periodos-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.75rem;
        }

        .periodo-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .periodo-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: #1e293b;
            margin: 0 0 1.25rem 0;
        }

        .periodo-boxes {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.85rem;
            margin-bottom: 0.75rem;
        }

        .step-box {
            border-radius: 10px;
            padding: 1.1rem 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .step-box.online {
            background: rgba(0, 143, 156, 0.08);
            border: 1px solid rgba(0, 143, 156, 0.15);
        }

        .step-box.presencial {
            background: rgba(0, 114, 185, 0.08);
            border: 1px solid rgba(0, 114, 185, 0.15);
        }

        .step-tag {
            font-size: 0.75rem;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .step-box.online .step-tag {
            color: #008f9c;
        }

        .step-box.presencial .step-tag {
            color: var(--color-primary);
        }

        .step-date {
            font-size: 1.05rem;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.35;
        }

        .periodo-footer-note {
            font-size: 0.82rem;
            color: #64748b;
            margin: 0.75rem 0 0 0;
            line-height: 1.4;
        }

        /* 3. Sección Cómo Inscribirte */
        .como-inscribirte-section {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.75rem 2.5rem;
            box-shadow: var(--shadow-medium);
            border: 1px solid var(--color-border);
            margin-bottom: 2.5rem;
        }

        .como-header-title {
            font-size: 2.25rem;
            font-weight: 800;
            color: #1e293b;
            margin: 0 0 0.5rem 0;
            line-height: 1.2;
        }

        .como-header-desc {
            font-size: 1.05rem;
            color: #475569;
            margin: 0 0 2rem 0;
            line-height: 1.5;
        }

        .steps-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.75rem;
            margin-bottom: 1.75rem;
        }

        .step-full-card {
            border-radius: 16px;
            display: flex;
            overflow: hidden;
            border: 1px solid var(--color-border);
            box-shadow: var(--shadow-subtle);
            transition: var(--transition-smooth);
        }

        .step-full-card:hover {
            box-shadow: var(--shadow-medium);
            transform: translateY(-3px);
        }

        .step-full-card.step-1 {
            background-color: #f0fbfb;
            border-color: rgba(0, 143, 156, 0.25);
        }

        .step-full-card.step-2 {
            background-color: #f1f8fe;
            border-color: rgba(0, 114, 185, 0.25);
        }

        .step-ribbon {
            width: 85px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            padding: 1.75rem 0.5rem;
        }

        .step-full-card.step-1 .step-ribbon {
            background: #008f9c;
        }

        .step-full-card.step-2 .step-ribbon {
            background: #0072b9;
        }

        .ribbon-label {
            font-size: 0.85rem;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 0.25rem;
        }

        .ribbon-number {
            font-size: 3rem;
            font-weight: 900;
            line-height: 1;
        }

        .step-content {
            padding: 2rem 1.75rem 2rem 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .step-content-title {
            font-size: 1.75rem;
            font-weight: 800;
            margin: 0 0 0.5rem 0;
            line-height: 1.2;
        }

        .step-full-card.step-1 .step-content-title {
            color: #008f9c;
        }

        .step-full-card.step-2 .step-content-title {
            color: #0072b9;
        }

        .step-content-subtitle {
            font-size: 0.95rem;
            color: #475569;
            margin: 0 0 1.25rem 0;
            line-height: 1.45;
        }

        .step-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1.5rem 0;
            display: flex;
            flex-direction: column;
            gap: 0.85rem;
            font-size: 0.95rem;
            color: #334155;
            line-height: 1.5;
        }

        .step-list li {
            position: relative;
            padding-left: 1.5rem;
        }

        .step-list-num {
            position: absolute;
            left: 0;
            font-weight: 700;
            color: #1e293b;
        }

        .btn-siu-guarani {
            display: inline-block;
            background-color: #008f9c;
            color: #ffffff;
            font-weight: 700;
            font-size: 0.95rem;
            padding: 0.75rem 1.4rem;
            border-radius: 8px;
            text-decoration: none;
            align-self: flex-start;
            margin-top: auto;
            transition: var(--transition-smooth);
            box-shadow: 0 2px 5px rgba(0, 143, 156, 0.25);
        }

        .btn-siu-guarani:hover {
            background-color: #007580;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 143, 156, 0.35);
            color: #ffffff;
        }

        /* Banner de confirmación oscuro */
        .inscripcion-success-banner {
            background-color: #1e293b;
            color: #ffffff;
            border-radius: 12px;
            padding: 1.15rem 1.5rem;
            text-align: center;
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            box-shadow: 0 3px 8px rgba(30, 41, 59, 0.15);
        }

        .inscripcion-success-banner span.check {
            color: #10b981;
            margin-right: 0.4rem;
            font-size: 1.25rem;
        }

        /* Cuadro de advertencia importante */
        .inscripcion-warning-box {
            background-color: #fef8ee;
            border: 1px solid #fed7aa;
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            font-size: 0.95rem;
            color: #451a03;
            line-height: 1.55;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .inscripcion-warning-box p {
            margin: 0;
        }

        /* 4. Sección Atención en cada sede */
        .atencion-section {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.75rem 2.5rem;
            box-shadow: var(--shadow-medium);
            border: 1px solid var(--color-border);
            margin-bottom: 2.5rem;
        }

        .atencion-header-title {
            font-size: 2.25rem;
            font-weight: 800;
            color: #1e293b;
            margin: 0 0 2rem 0;
            line-height: 1.2;
        }

        .sedes-cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-bottom: 2.5rem;
        }

        .sede-info-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 2rem 1.75rem;
            display: flex;
            flex-direction: column;
            transition: var(--transition-smooth);
        }

        .sede-info-card:hover {
            box-shadow: var(--shadow-medium);
            transform: translateY(-3px);
        }

        .sede-card-name {
            font-size: 1.45rem;
            font-weight: 800;
            color: #1e293b;
            margin: 0 0 0.5rem 0;
        }

        .sede-card-address {
            font-size: 0.95rem;
            color: #64748b;
            margin: 0 0 1.25rem 0;
        }

        .sede-card-hours {
            font-size: 1.05rem;
            font-weight: 800;
            color: #0f172a;
            margin: 0 0 0.85rem 0;
            line-height: 1.4;
        }

        .sede-card-detail {
            font-size: 0.9rem;
            color: #475569;
            line-height: 1.55;
            margin: 0;
        }

        .sede-card-placeholder {
            font-size: 0.95rem;
            color: #94a3b8;
            margin: 0;
            font-style: italic;
        }

        /* Banner Talleres de Ingreso */
        .talleres-banner {
            background: #008f9c;
            border-radius: 16px;
            padding: 2.25rem 2.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
            box-shadow: 0 4px 15px rgba(0, 143, 156, 0.25);
        }

        .talleres-content {
            flex-grow: 1;
        }

        .talleres-title {
            font-size: 1.55rem;
            font-weight: 800;
            color: #ffffff;
            margin: 0 0 0.6rem 0;
            line-height: 1.25;
        }

        .talleres-desc {
            font-size: 0.98rem;
            color: rgba(255, 255, 255, 0.95);
            margin: 0;
            line-height: 1.55;
        }

        .btn-instagram {
            background-color: #ffffff;
            color: #008f9c;
            font-weight: 700;
            font-size: 0.95rem;
            padding: 0.8rem 1.6rem;
            border-radius: 8px;
            text-decoration: none;
            white-space: nowrap;
            flex-shrink: 0;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: var(--transition-smooth);
            cursor: pointer;
            border: none;
        }

        .btn-instagram:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            background-color: #f8fafc;
            color: #007580;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .sedes-cards-grid {
                grid-template-columns: 1fr;
            }
            .talleres-banner {
                flex-direction: column;
                align-items: flex-start;
                padding: 1.75rem 1.5rem;
            }
        }

        @media (max-width: 860px) {
            .periodos-grid,
            .steps-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .page-container {
                margin-top: 1.5rem;
                padding: 0 1rem;
            }
            .inscripciones-hero {
                padding: 2.25rem 1.5rem;
            }
            .fechas-section,
            .como-inscribirte-section,
            .atencion-section {
                padding: 2rem 1.25rem;
            }
            .inscripciones-main-title {
                font-size: 2.5rem;
                margin-bottom: 1.5rem;
            }
            .fechas-header-title,
            .como-header-title,
            .atencion-header-title {
                font-size: 1.85rem;
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
        }

        @media (max-width: 540px) {
            .periodo-boxes {
                grid-template-columns: 1fr;
            }
            .step-full-card {
                flex-direction: column;
            }
            .step-ribbon {
                width: 100%;
                flex-direction: row;
                gap: 0.5rem;
                padding: 0.75rem 1rem;
            }
            .ribbon-number {
                font-size: 2rem;
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

        <!-- 1. Banner Principal con el diseño de Inscripciones 2027 -->
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

        <!-- 2. Sección Fechas de Inscripción -->
        <section class="fechas-section">
            <h2 class="fechas-header-title">Fechas</h2>
            <p class="fechas-header-desc">
                Hay dos períodos de inscripción en Neuquén y Allen, y uno solo en Choele Choel.
            </p>

            <!-- Selector de sedes en pestañas/píldoras -->
            <div class="sede-tabs-container" role="tablist">
                <button class="sede-tab-btn active" data-sede="neuquen-allen" role="tab" aria-selected="true">Neuquén y Allen</button>
                <button class="sede-tab-btn" data-sede="choele" role="tab" aria-selected="false">Choele Choel</button>
            </div>

            <!-- Panel 1: Neuquén y Allen -->
            <div class="sede-panel active" id="panel-neuquen-allen" role="tabpanel">
                <div class="periodos-grid">
                    <!-- Primer período -->
                    <div class="periodo-card">
                        <div>
                            <h3 class="periodo-title">Primer período</h3>
                            <div class="periodo-boxes">
                                <!-- Paso 1 Online -->
                                <div class="step-box online">
                                    <span class="step-tag">PASO 1 · ONLINE</span>
                                    <span class="step-date">1 al 15 de noviembre de 2026</span>
                                </div>
                                <!-- Paso 2 Presencial -->
                                <div class="step-box presencial">
                                    <span class="step-tag">PASO 2 · PRESENCIAL</span>
                                    <span class="step-date">23 de noviembre al 4 de diciembre de 2026</span>
                                </div>
                            </div>
                        </div>
                        <p class="periodo-footer-note">
                            Sin atención presencial el [26/11 o 27/11 – Día del Nodocente, a confirmar].
                        </p>
                    </div>

                    <!-- Segundo período -->
                    <div class="periodo-card">
                        <div>
                            <h3 class="periodo-title">Segundo período</h3>
                            <div class="periodo-boxes">
                                <!-- Paso 1 Online -->
                                <div class="step-box online">
                                    <span class="step-tag">PASO 1 · ONLINE</span>
                                    <span class="step-date">15 de enero al 5 de febrero de 2027</span>
                                </div>
                                <!-- Paso 2 Presencial -->
                                <div class="step-box presencial">
                                    <span class="step-tag">PASO 2 · PRESENCIAL</span>
                                    <span class="step-date">10 al 26 de febrero de 2027</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Panel 2: Choele Choel -->
            <div class="sede-panel" id="panel-choele" role="tabpanel">
                <div class="periodos-grid" style="grid-template-columns: 1fr; max-width: 560px;">
                    <div class="periodo-card">
                        <div>
                            <h3 class="periodo-title">Período único</h3>
                            <div class="periodo-boxes">
                                <div class="step-box online">
                                    <span class="step-tag">PASO 1 · ONLINE</span>
                                    <span class="step-date">15 de enero al 5 de febrero de 2027</span>
                                </div>
                                <div class="step-box presencial">
                                    <span class="step-tag">PASO 2 · PRESENCIAL</span>
                                    <span class="step-date">22 al 26 de febrero de 2027</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Sección Cómo Inscribirte -->
        <section class="como-inscribirte-section">
            <h2 class="como-header-title">Cómo inscribirte</h2>
            <p class="como-header-desc">
                Son dos pasos y tenés que hacer los dos, en este orden.
            </p>

            <div class="steps-container">
                <!-- Paso 1: Online -->
                <div class="step-full-card step-1">
                    <div class="step-ribbon">
                        <span class="ribbon-label">PASO</span>
                        <span class="ribbon-number">1</span>
                    </div>
                    <div class="step-content">
                        <h3 class="step-content-title">Online</h3>
                        <p class="step-content-subtitle">
                            En SIU Guaraní. Mejor si lo hacés desde la computadora.
                        </p>
                        <ol class="step-list">
                            <li>
                                <span class="step-list-num">1.</span>
                                Creá tu usuario. Usá un mail que revises seguido: te va a llegar un correo para activarlo.
                            </li>
                            <li>
                                <span class="step-list-num">2.</span>
                                Elegí carrera y sede, y completá tus datos.
                            </li>
                            <li>
                                <span class="step-list-num">3.</span>
                                Descargá tu <strong>formulario de preinscripción</strong> con el botón IMPRIMIR.
                            </li>
                            <li>
                                <span class="step-list-num">4.</span>
                                Subí tu documentación: <strong>DNI (frente y dorso), título secundario o constancia de título en trámite, y el formulario.</strong>
                            </li>
                        </ol>
                        <a href="https://siufacias.uncoma.edu.ar/facias/" target="_blank" rel="noopener noreferrer" class="btn-siu-guarani">
                            Ir a SIU Guaraní
                        </a>
                    </div>
                </div>

                <!-- Paso 2: Presencial -->
                <div class="step-full-card step-2">
                    <div class="step-ribbon">
                        <span class="ribbon-label">PASO</span>
                        <span class="ribbon-number">2</span>
                    </div>
                    <div class="step-content">
                        <h3 class="step-content-title">Presencial</h3>
                        <p class="step-content-subtitle">
                            En la sede donde te inscribiste.<br>
                            Es un trámite personal: tenés que ir vos.
                        </p>
                        <ol class="step-list">
                            <li>
                                <span class="step-list-num">1.</span>
                                Mostrás tus documentos originales. No se piden fotocopias.
                            </li>
                            <li>
                                <span class="step-list-num">2.</span>
                                Si todo está en orden, te asignan un <strong>número de legajo</strong>.
                            </li>
                            <li>
                                <span class="step-list-num">3.</span>
                                Te llevás un <strong>comprobante de inscripción</strong> con tu legajo, tu condición y, si te falta algo, qué documentación adeudás. Guardalo.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Banner oscuro de confirmación -->
            <div class="inscripcion-success-banner">
                <span class="check">✓</span> ¡Listo! Con tu número de legajo ya estás inscripto/a.
            </div>

            <!-- Cuadro de advertencia importante -->
            <div class="inscripcion-warning-box">
                <p>
                    <strong>Si hacés solo el Paso 1, todavía no estás inscripto/a.</strong> El legajo te lo dan únicamente en la sede.
                </p>
                <p>
                    <strong>Hacé el Paso 2 en el mismo período en que hiciste el Paso 1.</strong> ¡Y no lo dejes para el último día!
                </p>
            </div>
        </section>

        <!-- 4. Sección Atención en cada sede y Talleres -->
        <section class="atencion-section">
            <h2 class="atencion-header-title">Atención en cada sede</h2>

            <div class="sedes-cards-grid">
                <!-- Neuquén -->
                <div class="sede-info-card">
                    <h3 class="sede-card-name">Neuquén</h3>
                    <p class="sede-card-address">Buenos Aires 1400</p>
                    <p class="sede-card-hours">De 9 a 12:30 y de 14 a 16:30</p>
                    <p class="sede-card-detail">
                        Atención por número: a las 9 y a las 14 se repartirá una cantidad limitada. Solo se atiende a quien tiene número. Si no quedan, o te llaman y no estás, tenés que volver otro día.
                    </p>
                </div>

                <!-- Allen -->
                <div class="sede-info-card">
                    <h3 class="sede-card-name">Allen</h3>
                    <p class="sede-card-address">Güemes y Einstein</p>
                    <p class="sede-card-placeholder">[Horario y modalidad de atención]</p>
                </div>

                <!-- Choele Choel -->
                <div class="sede-info-card">
                    <h3 class="sede-card-name">Choele Choel</h3>
                    <p class="sede-card-address">Pacheco 460 (Edificio Perito Moreno)</p>
                    <p class="sede-card-placeholder">[Horario y modalidad de atención]</p>
                </div>
            </div>

            <!-- Banner Talleres de Ingreso -->
            <div class="talleres-banner">
                <div class="talleres-content">
                    <h3 class="talleres-title">Talleres de ingreso: en febrero</h3>
                    <p class="talleres-desc">
                        Los talleres son clave para empezar bien: hacelos aunque todavía no tengas tu número de legajo. Los días y horarios se publican más adelante.
                    </p>
                </div>
                <a href="javascript:void(0)" class="btn-instagram" role="button">
                    Seguinos en Instagram
                </a>
            </div>
        </section>

    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2rem 0; text-align: center; margin-top: 5rem;">
        <p style="font-size: 0.9rem; opacity: 0.85; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
    </footer>

    <!-- Script para alternar sedes interactivamente -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabBtns = document.querySelectorAll('.sede-tab-btn');
            const panels = document.querySelectorAll('.sede-panel');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const targetSede = btn.getAttribute('data-sede');

                    tabBtns.forEach(b => {
                        b.classList.remove('active');
                        b.setAttribute('aria-selected', 'false');
                    });
                    panels.forEach(p => p.classList.remove('active'));

                    btn.classList.add('active');
                    btn.setAttribute('aria-selected', 'true');
                    const targetPanel = document.getElementById(`panel-${targetSede}`);
                    if (targetPanel) {
                        targetPanel.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>
</html>

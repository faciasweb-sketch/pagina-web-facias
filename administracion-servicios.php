<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaría de Administración y Servicios | FACIAS - UNCo</title>
    <!-- Meta tags SEO -->
    <meta name="description" content="Secretaría de Administración y Servicios de la Facultad de Ciencias del Ambiente y la Salud (FACIAS) - Universidad Nacional del Comahue. Gestión presupuestaria, compras, personal y servicios generales.">
    <meta name="keywords" content="Administración, Servicios Generales, FACIAS, UNCo, Presupuesto, Compras, Personal, Neuquén">
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

        .horarios-nota {
            font-size: 0.95rem;
            font-weight: 600;
            color: #334155;
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
            max-width: 420px;
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

        .org-branches {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 1rem;
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

        .org-children {
            list-style: none;
            margin: 0.85rem 0 0 0;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 0.65rem;
        }

        .org-child {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-left: 3px solid var(--color-secondary);
            border-radius: 8px;
            padding: 0.6rem 0.8rem;
        }

        .org-child-name {
            font-size: 0.92rem;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
            line-height: 1.35;
        }

        .org-divs {
            list-style: none;
            margin: 0.4rem 0 0 0;
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

        /* Secciones de Áreas Dependientes */
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
            .info-grid, .dept-primary-grid, .team-cards-grid, .org-branches {
                grid-template-columns: 1fr;
            }
            .objetivo-card, .org-card {
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
                Secretaría de Administración y Servicios
                <span class="page-badge">Gestión Institucional</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- Titular / Autoridad -->
        <div class="autoridad-card">
            <div class="autoridad-avatar">
                🏛️
            </div>
            <div class="autoridad-info">
                <div class="autoridad-cargo">Secretaria de Administración y Servicios</div>
                <h2 class="autoridad-nombre">Lic. Malén Zapata</h2>
            </div>
        </div>

        <!-- Grid: Contacto de Secretaría -->
        <div class="info-grid">
            <div class="info-card">
                <div class="info-card-header">
                    <span class="info-card-icon">✉️</span>
                    <h3 class="info-card-title">Contacto</h3>
                </div>
                <div class="emails-list">
                    <a href="mailto:secretaria.administrativa@facias.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        secretaria.administrativa@facias.uncoma.edu.ar
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
                <span class="horarios-days">Martes, Miércoles y Jueves de 9:30 a 12:30 hs y de 14:00 a 15:30 hs</span>
                <span class="horarios-nota">Lunes y Viernes cerrado por trabajo interno.</span>
            </div>
        </div>

        <!-- Objetivo -->
        <div class="objetivo-card">
            <h3 class="objetivo-title">
                <span>🎯</span>
                <span>Objetivo y Funciones</span>
            </h3>
            <p class="objetivo-text">
                «La Secretaría de Administración y Servicios tiene a su cargo la gestión económico-financiera, patrimonial y del personal de la Facultad. Entre sus funciones se encuentran el registro e imputación de los movimientos económico-financieros; el control de la documentación respaldatoria y la tramitación de las rendiciones de cuentas ante la Administración Central; la gestión de pagos de viáticos, becas, subsidios y facturas a proveedores; la facturación, recaudación y registro de los fondos provenientes de servicios prestados; el seguimiento económico-financiero de proyectos especiales, posgrados y servicios a terceros; la provisión de bienes y servicios y la propuesta del plan anual de compras y contrataciones; el registro y control de los bienes patrimoniales de la Facultad; y la administración de las novedades del personal docente y nodocente.»
            </p>
        </div>

        <!-- Organigrama -->
        <div class="org-card">
            <div class="org-root">
                <span class="org-root-name">Secretaría de Administración y Servicios</span>
                <span class="org-root-person">Lic. Malén Zapata</span>
            </div>
            <div class="org-connector"></div>

            <div class="org-branches">
                <!-- Dirección de Administración -->
                <div class="org-node">
                    <h4 class="org-node-name">Dirección de Administración</h4>
                    <p class="org-person">Marina Guido</p>
                    <ul class="org-children">
                        <li class="org-child">
                            <p class="org-child-name">Depto. Administración</p>
                            <p class="org-person">Melina Mónaco</p>
                            <ul class="org-divs">
                                <li>Div. Contable</li>
                                <li>Div. Recursos Propios</li>
                            </ul>
                        </li>
                        <li class="org-child">
                            <p class="org-child-name">Depto. Gestión Patrimonial</p>
                            <p class="org-person">Bruno Baeza</p>
                        </li>
                        <li class="org-child">
                            <p class="org-child-name">Depto. Desarrollo y Administración de Personal</p>
                            <p class="org-person">Ángel Marseñux</p>
                            <ul class="org-divs">
                                <li>Div. Administración de Personal</li>
                                <li>Div. Desarrollo y Acompañamiento Laboral</li>
                            </ul>
                        </li>
                        <li class="org-child">
                            <p class="org-child-name">Div. Tesorería</p>
                        </li>
                        <li class="org-child">
                            <p class="org-child-name">Div. Higiene y Seguridad</p>
                        </li>
                    </ul>
                </div>

                <!-- Mantenimiento y Servicios -->
                <div class="org-node">
                    <h4 class="org-node-name">Depto. Mantenimiento y Servicios</h4>
                    <p class="org-person">Javier Contreras</p>
                </div>

                <!-- Tecnologías de la Información -->
                <div class="org-node">
                    <h4 class="org-node-name">Dirección Tecnologías de la Información</h4>
                    <p class="org-person">Facundo Muñoz</p>
                </div>
            </div>
        </div>

        <!-- ========================================================
             SECCIÓN: DIRECCIÓN DE ADMINISTRACIÓN
             ======================================================== -->
        <section class="dept-section" id="direccion-administracion">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        Dirección de Administración
                    </h2>
                    <span class="page-badge">Contable, Financiera y Patrimonial</span>
                </div>
                <p class="dept-subtitle">Gestión económico-financiera, rendiciones de cuentas, compras y patrimonio de la Facultad.</p>
            </div>

            <!-- Dirección & Departamento Administración -->
            <div class="dept-primary-grid">
                <!-- Dirección -->
                <div class="dept-card">
                    <div>
                        <span class="dept-card-tag">Dirección a Cargo de:</span>
                        <h3 class="dept-person-name">Marina Guido</h3>
                    </div>
                </div>

                <!-- Departamento Administración -->
                <div class="dept-card">
                    <div>
                        <span class="dept-card-tag">Departamento Administración:</span>
                        <h3 class="dept-person-name">Melina Mónaco</h3>
                    </div>
                    <a href="mailto:departamento.contable@facias.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        departamento.contable@facias.uncoma.edu.ar
                    </a>
                </div>
            </div>

            <!-- Departamentos y Divisiones de la Dirección -->
            <div class="equipo-section-header">
                <h3 class="equipo-section-title">
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Departamentos y Divisiones
                </h3>
            </div>

            <div class="team-cards-grid">
                <!-- 1. División Contable -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">DC</div>
                        <h4 class="member-name">División Contable</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Departamento Administración:</span>
                            <p class="task-text">Registro e imputación de movimientos, rendiciones de cuentas ante la Administración Central y pagos de viáticos, becas, subsidios y proveedores.</p>
                        </div>
                    </div>
                </div>

                <!-- 2. División Recursos Propios -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">RP</div>
                        <h4 class="member-name">División Recursos Propios</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Departamento Administración:</span>
                            <p class="task-text">Facturación, recaudación y registro de los fondos por servicios prestados, y seguimiento económico de posgrados, proyectos especiales y servicios a terceros.</p>
                        </div>
                    </div>
                </div>

                <!-- 3. División Tesorería -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">TE</div>
                        <h4 class="member-name">División Tesorería</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Pagos y fondos:</span>
                            <p class="task-text">Pagos, conciliaciones bancarias y arqueos de los fondos de la Facultad.</p>
                        </div>
                    </div>
                </div>

                <!-- 4. Departamento Gestión Patrimonial -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">GP</div>
                        <h4 class="member-name">Departamento Gestión Patrimonial</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">A Cargo de:</span>
                            <p class="task-text">Bruno Baeza</p>
                        </div>
                        <div class="task-item">
                            <span class="task-label">Patrimonio:</span>
                            <p class="task-text">Registro y control de los bienes inventariables en SIU-Diaguita (altas, bajas y transferencias).</p>
                        </div>
                        <div class="task-item">
                            <span class="task-label">Compras y Proveedores:</span>
                            <a href="mailto:compras@facias.uncoma.edu.ar" class="email-link">
                                <svg class="email-icon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                compras@facias.uncoma.edu.ar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 5. División Higiene y Seguridad -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">HS</div>
                        <h4 class="member-name">División Higiene y Seguridad</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Seguridad Laboral:</span>
                            <p class="task-text">Higiene y seguridad en el trabajo en los edificios y sedes de la Facultad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================================
             SECCIÓN: DEPARTAMENTO DE DESARROLLO Y ADMINISTRACIÓN DE PERSONAL
             ======================================================== -->
        <section class="dept-section" id="departamento-personal">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                        Departamento de Desarrollo y Administración de Personal
                    </h2>
                    <span class="page-badge">Recursos Humanos</span>
                </div>
                <p class="dept-subtitle">Novedades del personal docente y nodocente de las tres sedes, declaraciones juradas de cargos, licencias y registro de asistencia.</p>
            </div>

            <!-- Jefatura -->
            <div class="dept-primary-grid">
                <div class="dept-card">
                    <div>
                        <span class="dept-card-tag">Jefatura a Cargo de:</span>
                        <h3 class="dept-person-name">Ángel Marseñux</h3>
                    </div>
                    <a href="mailto:departamento.administrativo@facias.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        departamento.administrativo@facias.uncoma.edu.ar
                    </a>
                </div>
            </div>

            <!-- Divisiones del Departamento -->
            <div class="equipo-section-header">
                <h3 class="equipo-section-title">
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Divisiones
                </h3>
            </div>

            <div class="team-cards-grid">
                <!-- 1. División Administración de Personal -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">AP</div>
                        <h4 class="member-name">División Administración de Personal</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Novedades en Oficina Digital y SIU Mapuche:</span>
                            <p class="task-text">Carga de altas, bajas, licencias y prórrogas del personal; declaraciones juradas de cargos e incompatibilidades.</p>
                        </div>
                    </div>
                </div>

                <!-- 2. División Desarrollo y Acompañamiento Laboral -->
                <div class="team-member-card">
                    <div class="member-header">
                        <div class="member-avatar">DL</div>
                        <h4 class="member-name">División Desarrollo y Acompañamiento Laboral</h4>
                    </div>
                    <div class="member-tasks">
                        <div class="task-item">
                            <span class="task-label">Acompañamiento:</span>
                            <p class="task-text">Capacitación y acompañamiento del personal en su desarrollo laboral.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================================
             SECCIÓN: MANTENIMIENTO Y SERVICIOS
             ======================================================== -->
        <section class="dept-section" id="mantenimiento-servicios">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Departamento Mantenimiento y Servicios
                    </h2>
                    <span class="page-badge">Servicios Generales</span>
                </div>
                <p class="dept-subtitle">Mantenimiento edilicio y servicios generales de las dependencias de la Facultad.</p>
            </div>

            <div class="dept-primary-grid">
                <div class="dept-card">
                    <div>
                        <span class="dept-card-tag">A Cargo de:</span>
                        <h3 class="dept-person-name">Javier Contreras</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================================
             SECCIÓN: DIRECCIÓN TECNOLOGÍAS DE LA INFORMACIÓN
             ======================================================== -->
        <section class="dept-section" id="tecnologias-informacion">
            <div class="dept-header">
                <div class="dept-title-wrap">
                    <h2 class="dept-title">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Dirección Tecnologías de la Información
                    </h2>
                    <span class="page-badge">Soporte Informático</span>
                </div>
                <p class="dept-subtitle">Soporte informático, redes y equipamiento de la Facultad.</p>
            </div>

            <!-- Horarios de atención -->
            <div class="horarios-banner">
                <div class="horarios-icon-box">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div class="horarios-text">
                    <span class="horarios-label">Horario de soporte:</span>
                    <span class="horarios-days">Turno tarde, de 15:00 a 20:00 hs</span>
                </div>
            </div>

            <div class="dept-primary-grid">
                <div class="dept-card">
                    <div>
                        <span class="dept-card-tag">A Cargo de:</span>
                        <h3 class="dept-person-name">Facundo Muñoz</h3>
                    </div>
                    <a href="mailto:facundo.munoz@dti.uncoma.edu.ar" class="email-link">
                        <svg class="email-icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        facundo.munoz@dti.uncoma.edu.ar
                    </a>
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

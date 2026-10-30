<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carreras de Posgrado | FACIAS - UNCo</title>
    <!-- Meta tags SEO -->
    <meta name="description" content="Propuestas académicas de posgrado de la Facultad de Ciencias del Ambiente y la Salud (FACIAS) - Universidad Nacional del Comahue: Especializaciones, Maestrías y Doctorados.">
    <meta name="keywords" content="Posgrado, FACIAS, UNCo, Especialización Higiene y Seguridad, Medicina del Trabajo, Restauración Ecológica, Doctorado DOC.T.A.A., Salud, Ambiente, Neuquén">
    <meta name="author" content="Universidad Nacional del Comahue">
    
    <link rel="stylesheet" href="styles.css?v=3.2">
    <style>
        .page-container {
            max-width: 1080px;
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

        .page-badge-posgrado {
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

        .hero-guide-card {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2rem 2.25rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            border-left: 5px solid var(--color-secondary);
            margin-bottom: 2.5rem;
        }

        .hero-guide-card h2 {
            color: var(--color-primary);
            font-size: 1.35rem;
            font-weight: 800;
            margin-bottom: 0.65rem;
        }

        .hero-guide-card p {
            color: #334155;
            font-size: 1.02rem;
            line-height: 1.65;
            margin: 0;
        }

        .aviso-actualizacion {
            background-color: rgba(245, 158, 11, 0.08);
            border: 1px solid rgba(245, 158, 11, 0.3);
            border-left: 4px solid #f59e0b;
            border-radius: var(--border-radius-sm);
            padding: 0.9rem 1.25rem;
            margin-top: 1.25rem;
            font-size: 0.92rem;
            color: #92400e;
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        /* Grilla de Carreras de Posgrado */
        .posgrados-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
            gap: 1.85rem;
            margin-bottom: 3.5rem;
        }

        .posgrado-card {
            background: #ffffff;
            border: 1px solid var(--color-border);
            border-radius: 14px;
            padding: 2rem;
            box-shadow: var(--shadow-subtle);
            transition: var(--transition-smooth);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }

        .posgrado-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-medium);
            border-color: var(--color-secondary);
        }

        .posgrado-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.75rem;
            margin-bottom: 1.15rem;
            flex-wrap: wrap;
        }

        .badge-tipo {
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.35rem 0.85rem;
            border-radius: var(--border-radius-pill);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-especializacion {
            background-color: rgba(0, 114, 185, 0.1);
            color: var(--color-primary);
            border: 1px solid rgba(0, 114, 185, 0.25);
        }

        .badge-maestria {
            background-color: rgba(16, 185, 129, 0.1);
            color: #047857;
            border: 1px solid rgba(16, 185, 129, 0.25);
        }

        .badge-doctorado {
            background-color: rgba(124, 58, 237, 0.1);
            color: #6d28d9;
            border: 1px solid rgba(124, 58, 237, 0.25);
        }

        .posgrado-title {
            color: var(--color-primary);
            font-size: 1.35rem;
            font-weight: 800;
            line-height: 1.35;
            margin: 0 0 1rem 0;
        }

        .posgrado-desc-placeholder {
            font-size: 0.95rem;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .posgrado-instituciones {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-left: 3px solid #6d28d9;
            border-radius: 8px;
            padding: 0.9rem 1.1rem;
            font-size: 0.88rem;
            color: #334155;
            line-height: 1.55;
            margin-bottom: 1.5rem;
        }

        .posgrado-instituciones strong {
            color: #0f172a;
        }

        .posgrado-footer {
            border-top: 1px solid var(--color-border);
            padding-top: 1.25rem;
            margin-top: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .btn-posgrado-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background-color: var(--color-primary);
            color: #ffffff;
            padding: 0.55rem 1.15rem;
            border-radius: 6px;
            font-size: 0.88rem;
            font-weight: 700;
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .btn-posgrado-link:hover {
            background-color: var(--color-secondary);
            color: #ffffff;
            transform: translateY(-2px);
        }

        .btn-posgrado-consultar {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            background-color: transparent;
            color: var(--color-primary);
            border: 1px solid var(--color-primary);
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-size: 0.85rem;
            font-weight: 700;
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .btn-posgrado-consultar:hover {
            background-color: var(--color-primary);
            color: #ffffff;
        }

        .tag-en-desarrollo {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            font-size: 0.82rem;
            color: #64748b;
            font-weight: 600;
        }

        /* Caja de contacto */
        .contacto-box {
            background: linear-gradient(135deg, #f0f7ff 0%, #e6f4f6 100%);
            border: 1px solid #bfdbfe;
            border-radius: var(--border-radius-lg);
            padding: 2rem 2.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .contacto-info h3 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--color-primary);
            margin: 0 0 0.4rem 0;
        }

        .contacto-info p {
            font-size: 0.98rem;
            color: #334155;
            margin: 0;
            line-height: 1.5;
        }

        .btn-mail {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            background-color: var(--color-primary);
            color: #ffffff;
            padding: 0.8rem 1.4rem;
            border-radius: var(--border-radius-md);
            font-weight: 700;
            font-size: 0.95rem;
            text-decoration: none;
            transition: var(--transition-smooth);
            box-shadow: 0 2px 6px rgba(0, 114, 185, 0.25);
            white-space: nowrap;
        }

        .btn-mail:hover {
            background-color: var(--color-primary-dark, #005a94);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 114, 185, 0.35);
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 1.85rem;
            }
            .hero-guide-card {
                padding: 1.5rem;
            }
            .posgrados-grid {
                grid-template-columns: 1fr;
            }
            .contacto-box {
                padding: 1.5rem;
                flex-direction: column;
                align-items: flex-start;
            }
            .btn-mail {
                width: 100%;
                justify-content: center;
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
                Carreras de Posgrado
                <span class="page-badge-posgrado">Académica</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- Tarjeta descriptiva de la sección -->
        <div class="hero-guide-card">
            <h2>Formación Continua y Especialización Profesional</h2>
            <p>
                La Facultad de Ciencias del Ambiente y la Salud promueve la formación académica avanzada, la investigación y la especialización a través de sus carreras de posgrado orientadas a la salud ocupacional, la seguridad laboral, la gestión ambiental y las ciencias interdisciplinarias.
            </p>
            <div class="aviso-actualizacion">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Actualmente estamos preparando el desarrollo informativo detallado de cada carrera (planes de estudio, aranceles, cronogramas y requisitos de admisión).</span>
            </div>
        </div>

        <!-- Grilla con las Carreras de Posgrado -->
        <div class="posgrados-grid">

            <!-- 1. Especialización en Higiene y Seguridad en el Trabajo -->
            <div class="posgrado-card">
                <div>
                    <div class="posgrado-card-header">
                        <span class="badge-tipo badge-especializacion">Especialización</span>
                    </div>
                    <h3 class="posgrado-title">Especialización en Higiene y Seguridad en el Trabajo</h3>
                    <p class="posgrado-desc-placeholder">
                        Formación de posgrado orientada a profesionales que buscan profundizar en la prevención de riesgos laborales, condiciones de higiene ocupacional, normativa vigente y gestión integral de la seguridad en el ámbito productivo y de servicios.
                    </p>
                </div>
                <div class="posgrado-footer">
                    <span class="tag-en-desarrollo">
                        <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Información en desarrollo
                    </span>
                    <a href="mailto:posgrado@facias.uncoma.edu.ar?subject=Consulta%20-%20Especializacion%20en%20Higiene%20y%20Seguridad%20en%20el%20Trabajo" class="btn-posgrado-consultar">
                        Consultar
                    </a>
                </div>
            </div>

            <!-- 2. Especialización en Medicina del Trabajo -->
            <div class="posgrado-card">
                <div>
                    <div class="posgrado-card-header">
                        <span class="badge-tipo badge-especializacion">Especialización</span>
                    </div>
                    <h3 class="posgrado-title">Especialización en Medicina del Trabajo</h3>
                    <p class="posgrado-desc-placeholder">
                        Programa de posgrado destinado a médicos/as enfocado en la prevención y detección temprana de patologías y enfermedades de origen laboral, evaluación pericial, promoción de la salud psicofísica en los trabajadores y medicina ocupacional.
                    </p>
                </div>
                <div class="posgrado-footer">
                    <span class="tag-en-desarrollo">
                        <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Información en desarrollo
                    </span>
                    <a href="mailto:posgrado@facias.uncoma.edu.ar?subject=Consulta%20-%20Especializacion%20en%20Medicina%20del%20Trabajo" class="btn-posgrado-consultar">
                        Consultar
                    </a>
                </div>
            </div>

            <!-- 3. Maestría en Restauración Ecológica con Enfoque Social -->
            <div class="posgrado-card">
                <div>
                    <div class="posgrado-card-header">
                        <span class="badge-tipo badge-maestria">Maestría</span>
                    </div>
                    <h3 class="posgrado-title">Maestría en Restauración Ecológica con Enfoque Social</h3>
                    <p class="posgrado-desc-placeholder">
                        Propuesta de posgrado interdisciplinaria centrada en la recuperación y restauración de ecosistemas degradados, articulando el rigor científico ambiental con la dimensión humana, participativa y social de las comunidades de la región.
                    </p>
                </div>
                <div class="posgrado-footer">
                    <span class="tag-en-desarrollo">
                        <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Información en desarrollo
                    </span>
                    <a href="mailto:posgrado@facias.uncoma.edu.ar?subject=Consulta%20-%20Maestria%20en%20Restauracion%20Ecologica%20con%20Enfoque%20Social" class="btn-posgrado-consultar">
                        Consultar
                    </a>
                </div>
            </div>

            <!-- 4. Doctorado en Ciencia y Tecnología Agroalimentaria y Ambiental -->
            <div class="posgrado-card">
                <div>
                    <div class="posgrado-card-header">
                        <span class="badge-tipo badge-doctorado">Doctorado Interinstitucional</span>
                    </div>
                    <h3 class="posgrado-title">Doctorado en Ciencia y Tecnología Agroalimentaria y Ambiental (DOC.T.A.A.)</h3>
                    <div class="posgrado-instituciones">
                        <strong>Dictado conjunto UNCo:</strong> Se dicta de manera conjunta e interinstitucional entre:
                        <br>
                        • <strong>FACIAS</strong> (Facultad de Ciencias del Ambiente y la Salud)
                        <br>
                        • <strong>FACA</strong> (Facultad de Ciencias Agrarias)
                        <br>
                        • <strong>FACTA</strong> (Facultad de Ciencias y Tecnologías de los Alimentos)
                        <br>
                        • <strong>CRUSMA</strong> (Centro Regional Universitario San Martín de los Andes)
                    </div>
                </div>
                <div class="posgrado-footer">
                    <span class="tag-en-desarrollo" style="color: #6d28d9;">
                        🌐 doctaa.uncoma.edu.ar
                    </span>
                    <a href="https://doctaa.uncoma.edu.ar/" target="_blank" rel="noopener noreferrer" class="btn-posgrado-link">
                        <span>Sitio Web Oficial</span>
                        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- Caja de contacto con Secretaría de Posgrado -->
        <div class="contacto-box">
            <div class="contacto-info">
                <h3>Secretaría de Ciencia, Técnica y Posgrado</h3>
                <p>Para consultas académicas, inscripciones y asesoramiento sobre las carreras de posgrado, escribinos a:</p>
            </div>
            <a href="mailto:posgrado@facias.uncoma.edu.ar" class="btn-mail">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                posgrado@facias.uncoma.edu.ar
            </a>
        </div>
    </main>

    <!-- Footer institucional -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2.5rem 0; text-align: center; margin-top: 5rem;">
        <div class="container">
            <p style="font-size: 0.95rem; opacity: 0.9; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>
    </footer>

</body>
</html>

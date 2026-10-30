<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestras Sedes | FACIAS - UNCo</title>
    <link rel="stylesheet" href="styles.css?v=3.2">
    <style>
        .page-container {
            max-width: 1080px;
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

        .page-badge-sedes {
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

        /* Tarjeta de Sede con Grilla (Mapa + Info) */
        .sede-card {
            background-color: #ffffff;
            border: 1px solid var(--color-border);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-subtle);
            overflow: hidden;
            margin-bottom: 2.5rem;
            display: grid;
            grid-template-columns: 44% 56%;
            transition: var(--transition-smooth);
        }

        .sede-card:hover {
            box-shadow: var(--shadow-medium);
            transform: translateY(-2px);
        }

        .sede-map-col {
            position: relative;
            background-color: #e2e8f0;
            min-height: 350px;
        }

        .sede-map-col iframe {
            width: 100%;
            height: 100%;
            border: none;
            display: block;
            min-height: 350px;
        }

        .sede-info-col {
            padding: 2.25rem 2.5rem;
            display: flex;
            flex-direction: column;
        }

        .sede-overline {
            font-size: 0.8rem;
            font-weight: 800;
            letter-spacing: 1px;
            color: #008f9c;
            text-transform: uppercase;
            margin-bottom: 0.35rem;
        }

        .sede-name {
            font-size: 1.95rem;
            font-weight: 800;
            color: #0072b9;
            margin: 0 0 1.25rem 0;
            line-height: 1.2;
        }

        .sede-details-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1.5rem 0;
            display: flex;
            flex-direction: column;
            gap: 0.65rem;
            font-size: 0.96rem;
            color: #334155;
            line-height: 1.55;
        }

        .sede-details-list li strong {
            color: #0f172a;
            font-weight: 700;
        }

        .sede-details-list a {
            color: #0072b9;
            text-decoration: underline;
        }

        .badge-confirmar {
            display: inline-block;
            background-color: #fef3c7;
            color: #b45309;
            border: 1px solid #fde68a;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.15rem 0.55rem;
            border-radius: 9999px;
            margin-left: 0.35rem;
            vertical-align: middle;
            text-decoration: none !important;
        }

        .sede-carreras-title {
            font-size: 0.82rem;
            font-weight: 800;
            letter-spacing: 0.75px;
            text-transform: uppercase;
            color: #008f9c;
            margin: 0 0 0.65rem 0;
        }

        .sede-carreras-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1.75rem 0;
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
            font-size: 0.95rem;
            color: #334155;
            line-height: 1.5;
        }

        .sede-carreras-list li {
            position: relative;
            padding-left: 1.15rem;
        }

        .sede-carreras-list li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #008f9c;
            font-weight: 800;
            font-size: 1.1rem;
            line-height: 1.2;
        }

        .btn-como-llegar {
            align-self: flex-start;
            margin-top: auto;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background-color: #ffffff;
            color: #0072b9;
            border: 1.5px solid #0072b9;
            padding: 0.55rem 1.35rem;
            border-radius: 8px;
            font-weight: 700;
            font-size: 0.92rem;
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .btn-como-llegar:hover {
            background-color: #0072b9;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 3px 8px rgba(0, 114, 185, 0.25);
        }

        @media (max-width: 860px) {
            .sede-card {
                grid-template-columns: 1fr;
            }
            .sede-map-col {
                min-height: 250px;
                height: 250px;
            }
            .sede-map-col iframe {
                min-height: 250px;
            }
            .sede-info-col {
                padding: 1.75rem 1.5rem;
            }
            .page-title {
                font-size: 1.85rem;
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
                Nuestras Sedes
                <span class="page-badge-sedes">FACIAS Regional</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- 1. SEDE NEUQUÉN -->
        <article class="sede-card" id="sede-neuquen">
            <div class="sede-map-col">
                <iframe 
                    src="https://maps.google.com/maps?q=-38.94011068852173,-68.0574490914052&amp;hl=es&amp;z=16&amp;output=embed" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade" 
                    title="Mapa Sede Neuquén">
                </iframe>
            </div>
            <div class="sede-info-col">
                <span class="sede-overline">SEDE CENTRAL</span>
                <h2 class="sede-name">Neuquén</h2>
                <ul class="sede-details-list">
                    <li><strong>Dirección:</strong> Buenos Aires 1400, Neuquén (CP 8300), Provincia de Neuquén</li>
                    <li><strong>Teléfono:</strong> <a href="tel:02994490300" style="text-decoration: none; color: inherit;">0299-4490300</a></li>
                    <li><strong>Mail:</strong> <a href="mailto:departamento.alumnos@facias.uncoma.edu.ar">departamento.alumnos@facias.uncoma.edu.ar</a></li>
                    <li><strong>Departamento de Alumnos:</strong> lunes, martes, jueves y viernes de 10 a 13</li>
                    <li><strong>Inscripciones (Paso 2):</strong> de 9 a 12:30 y de 14 a 16:30, por número</li>
                </ul>

                <h3 class="sede-carreras-title">CARRERAS QUE SE DICTAN</h3>
                <ul class="sede-carreras-list">
                    <li>Licenciatura en Saneamiento y Protección Ambiental (5 años)</li>
                    <li>Licenciatura en Enfermería (5 años), con título intermedio de Enfermero/a</li>
                    <li>Tecnicatura Superior en Higiene y Seguridad en el Trabajo (3 años)</li>
                    <li>Licenciatura en Higiene y Seguridad en el Trabajo, Ciclo de Complementación Curricular (2 años)</li>
                </ul>

                <a href="https://www.google.com/maps/dir/?api=1&amp;destination=-38.94011068852173,-68.0574490914052" target="_blank" rel="noopener noreferrer" class="btn-como-llegar">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Cómo llegar
                </a>
            </div>
        </article>

        <!-- 2. SEDE ALLEN -->
        <article class="sede-card" id="sede-allen">
            <div class="sede-map-col">
                <iframe 
                    src="https://maps.google.com/maps?q=-38.98157698958156,-67.81619510674687&amp;hl=es&amp;z=16&amp;output=embed" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade" 
                    title="Mapa Sede Allen">
                </iframe>
            </div>
            <div class="sede-info-col">
                <span class="sede-overline">RÍO NEGRO · ALTO VALLE</span>
                <h2 class="sede-name">Allen</h2>
                <ul class="sede-details-list">
                    <li><strong>Dirección:</strong> Güemes y Einstein, Allen (CP 8328), Provincia de Río Negro</li>
                    <li><strong>Teléfono:</strong> 0298-4450615 <span class="badge-confirmar">a confirmar</span></li>
                    <li><strong>Mail:</strong> <a href="mailto:coordinacionacademicaallen@hotmail.com">coordinacionacademicaallen@hotmail.com</a> <span class="badge-confirmar">a confirmar</span></li>
                    <li><strong>Inscripciones (Paso 2):</strong> por número · <span class="badge-confirmar">horario a confirmar</span></li>
                </ul>

                <h3 class="sede-carreras-title">CARRERA QUE SE DICTA</h3>
                <ul class="sede-carreras-list">
                    <li>Licenciatura en Enfermería (5 años), con título intermedio de Enfermero/a</li>
                </ul>

                <a href="https://www.google.com/maps/dir/?api=1&amp;destination=-38.98157698958156,-67.81619510674687" target="_blank" rel="noopener noreferrer" class="btn-como-llegar">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Cómo llegar
                </a>
            </div>
        </article>

        <!-- 3. SEDE CHOELE CHOEL -->
        <article class="sede-card" id="sede-choele-choel">
            <div class="sede-map-col">
                <iframe 
                    src="https://maps.google.com/maps?q=-39.28709012436284,-65.66247517550015&amp;hl=es&amp;z=16&amp;output=embed" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade" 
                    title="Mapa Sede Choele Choel">
                </iframe>
            </div>
            <div class="sede-info-col">
                <span class="sede-overline">RÍO NEGRO · VALLE MEDIO</span>
                <h2 class="sede-name">Choele Choel</h2>
                <ul class="sede-details-list">
                    <li><strong>Dirección:</strong> Pacheco 460 (Edificio Perito Moreno), Choele Choel (CP 8360), Provincia de Río Negro</li>
                    <li><strong>Teléfono:</strong> 2946-443153 <span class="badge-confirmar">a confirmar</span></li>
                    <li><strong>Mail:</strong> <a href="mailto:vanesale3@hotmail.com">vanesale3@hotmail.com</a> <span class="badge-confirmar">a confirmar</span></li>
                    <li><strong>Inscripciones (Paso 2):</strong> por número · <span class="badge-confirmar">horario a confirmar</span></li>
                </ul>

                <h3 class="sede-carreras-title">CARRERA QUE SE DICTA</h3>
                <ul class="sede-carreras-list">
                    <li>Licenciatura en Enfermería, solo hasta el título intermedio de Enfermero/a (3 años)</li>
                </ul>

                <a href="https://www.google.com/maps/dir/?api=1&amp;destination=-39.28709012436284,-65.66247517550015" target="_blank" rel="noopener noreferrer" class="btn-como-llegar">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Cómo llegar
                </a>
            </div>
        </article>

    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2.5rem 0; text-align: center; margin-top: 5rem;">
        <div class="container">
            <p style="font-size: 0.95rem; opacity: 0.9; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>
    </footer>

</body>
</html>

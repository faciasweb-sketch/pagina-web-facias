<?php
// Directorios para guardar las novedades e imágenes del CMS
$novedades_dir = __DIR__ . '/datos/novedades';
$assets_dir = __DIR__ . '/assets/novedades';

if (!is_dir($novedades_dir)) {
    mkdir($novedades_dir, 0755, true);
}
if (!is_dir($assets_dir)) {
    mkdir($assets_dir, 0755, true);
}

// Crear archivos de novedades de ejemplo si la carpeta está vacía (inicialización automática)
$existing_files = glob($novedades_dir . '/*.json');
if (empty($existing_files)) {
    $novedades_ejemplo = [
        '2026-06-28-monitoreo-ambiental' => [
            'title' => 'Monitoreo Ambiental en la Cuenca del Limay: Proyecto de Investigación Estudiantil',
            'categoria' => 'AMBIENTE',
            'fecha' => '28 de Junio, 2026',
            'imagen' => 'assets/news_ambiente.png',
            'body' => "Estudiantes avanzados de la Licenciatura en Saneamiento y Protección Ambiental llevaron adelante un nuevo muestreo periódico de aguas en distintos puntos del río Limay.\n\nEl proyecto, coordinado por el Laboratorio de Toxicología Ambiental (LTA) de FACIAS, busca evaluar la presencia de microplásticos y trazas de agroquímicos en los sedimentos de la costa. Las tareas se concentraron en las zonas balnearias de Neuquén Capital y Plottier.\n\nLos resultados preliminares indican que el río mantiene niveles aceptables de aptitud recreativa, aunque se observa una tendencia al alza en la presencia de fibras plásticas de origen urbano. Estos datos serán presentados oficialmente ante la Subsecretaría de Medioambiente provincial en el mes de Julio.\n\nInvestigación a cargo de la cátedra de Ecología General y Toxicología. Colaboración inter-institucional UNCo - AIC."
        ],
        '2026-06-22-nuevos-simuladores' => [
            'title' => 'Nuevos Simuladores de Alta Fidelidad para la carrera de Licenciatura en Enfermería',
            'categoria' => 'SALUD',
            'fecha' => '22 de Junio, 2026',
            'imagen' => 'assets/news_salud.png',
            'body' => "La facultad adquirió dos nuevos maniquíes inteligentes de simulación clínica para su laboratorio en el campus de Allen y Neuquén.\n\nLos equipos permiten simular respuestas fisiológicas realistas, tales como paro cardiorrespiratorio, variaciones de presión arterial, y respuesta a fármacos en tiempo real. Esto permitirá a los estudiantes de Licenciatura en Enfermería y Enfermería Profesional realizar prácticas profesionales supervisadas en un entorno controlado y seguro antes de sus rotaciones hospitalarias.\n\n\"Esta incorporación pone a nuestra facultad a la vanguardia de la enseñanza en salud en la región. La simulación de alta fidelidad disminuye el margen de error clínico y brinda una confianza inigualable a los alumnos\", destacó la Decana en el acto de presentación."
        ],
        '2026-06-15-inauguracion-biblioteca' => [
            'title' => 'Inauguración de la nueva Sede de Biblioteca y Aulas Tecnológicas de FACIAS',
            'categoria' => 'INSTITUCIONAL',
            'fecha' => '15 de Junio, 2026',
            'imagen' => 'assets/news_campus.png',
            'body' => "Con la presencia de autoridades rectorales y del gobierno provincial, quedaron formalmente habilitadas las nuevas salas del campus.\n\nLa obra edilicia de 450 metros cuadrados cuenta con una sala silenciosa de lectura con capacidad para 80 estudiantes, una hemeroteca actualizada y un aula informática con 30 puestos equipados con software de Sistemas de Información Geográfica (SIG) orientados al análisis ambiental.\n\nEl espacio estará abierto al público de lunes a viernes en el horario corrido de 8:00 a 20:00 hs. Contará también con sistema de Wi-Fi libre para todos los estudiantes y docentes de la universidad."
        ],
        '2026-06-10-apertura-inscripciones' => [
            'title' => 'Apertura de inscripciones para el segundo cuatrimestre ciclo lectivo 2026',
            'categoria' => 'INSTITUCIONAL',
            'fecha' => '10 de Junio, 2026',
            'imagen' => 'assets/news_campus.png',
            'body' => "La secretaría académica de FACIAS informa las fechas de reincorporación y matriculación a materias del segundo periodo anual.\n\nEl proceso se realizará del 3 al 14 de Agosto del corriente año a través del portal SIU Guaraní. Está destinado a aquellos alumnos que deseen retomar sus planes de estudio o cursar asignaturas electivas anuales y cuatrimestrales.\n\nEs requisito indispensable contar con el legajo al día y tener aprobadas las materias correlativas correspondientes según plan de estudio. Las clases presenciales iniciarán el lunes 17 de Agosto en las tres sedes de la facultad."
        ],
        '2026-06-05-seminario-regional' => [
            'title' => '1° Seminario Regional de Salud Ambiental y Energías Renovables',
            'categoria' => 'AMBIENTE',
            'fecha' => '05 de Junio, 2026',
            'imagen' => 'assets/news_ambiente.png',
            'body' => "Un espacio de debate y exposición sobre la matriz energética y los riesgos sanitarios en el Alto Valle.\n\nEl evento se llevará a cabo los días 24 y 25 de Septiembre en el Aula Magna de la UNCo Neuquén. Contará con la participación de destacados expertos nacionales y representantes de ONGs ambientales de la provincia.\n\nLos temas centrales serán la transición energética patagónica, el impacto de los parques eólicos, y la gestión integrada de la salud en áreas hidrocarbulíferas. La entrada es libre y gratuita para toda la comunidad universitaria previa inscripción en nuestro sitio web."
        ],
        '2026-06-02-campana-vacunacion' => [
            'title' => 'Campaña de Vacunación contra la Gripe en el campus Neuquén organizada por estudiantes',
            'categoria' => 'SALUD',
            'fecha' => '02 de Junio, 2026',
            'imagen' => 'assets/news_salud.png',
            'body' => "El proyecto de extensión de la Licenciatura en Enfermería inmunizó a más de 300 personas de la comunidad universitaria.\n\nLa campaña, planificada de forma conjunta con el Ministerio de Salud de Neuquén, permitió que los alumnos de último año de enfermería realicen sus prácticas de inmunología en campo. Se priorizó a los grupos de riesgo, adultos mayores y personal nodocente de la sede central.\n\n\"Es una forma directa de devolver a la comunidad y aplicar los conocimientos aprendidos directamente en el territorio\", señalaron desde el centro de estudiantes."
        ]
    ];

    foreach ($novedades_ejemplo as $filename => $data) {
        file_put_contents($novedades_dir . '/' . $filename . '.json', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }
}

// Cargar todas las novedades ordenadas cronológicamente (por nombre de archivo)
$novedades = [];
$files = glob($novedades_dir . '/*.json');
if ($files) {
    rsort($files); // Más nuevos primero
    foreach ($files as $file) {
        $content = file_get_contents($file);
        if ($content !== false) {
            $data = json_decode($content, true);
            if ($data) {
                $data['id'] = basename($file, '.json');
                $novedades[] = $data;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACIAS - Facultad de Ciencias del Ambiente y la Salud | UNCo</title>
    <!-- Meta tags SEO -->
    <meta name="description" content="Sitio oficial de la Facultad de Ciencias del Ambiente y la Salud (FACIAS) de la Universidad Nacional del Comahue. Oferta académica, investigación, secretarías y servicios estudiantiles en Neuquén, Allen y Choele Choel.">
    <meta name="keywords" content="FACIAS, UNCo, Universidad Nacional del Comahue, Ciencias del Ambiente, Salud, Neuquén, Allen, Choele Choel, Enfermería, Saneamiento Ambiental, Higiene y Seguridad">
    <meta name="author" content="Universidad Nacional del Comahue">
    
    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="styles.css?v=1.1">
</head>
<body>

    <!-- 1. ENCABEZADO (Sticky Header) -->
    <header class="header" id="main-header">
        <div class="container header-container">
            <!-- Logo FACIAS & UNCo -->
            <a href="#inicio" class="logo" id="header-logo-link">
                <img src="assets/logo_facias.png" alt="Logo FACIAS" class="logo-img">
                <img src="assets/logo_unco.png" alt="Logo UNCo" class="logo-img">
            </a>

            <!-- Menú de Navegación con Dropdowns -->
            <nav id="nav-navigation" aria-label="Navegación principal">
                <ul class="nav-menu" id="nav-links">
                    <!-- Institucional -->
                    <li class="nav-item dropdown">
                        <a href="#institucional" class="nav-link dropdown-toggle" id="nav-item-institucional">
                            Institucional
                            <svg class="dropdown-arrow" viewBox="0 0 20 20" fill="currentColor" width="12" height="12">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#institucional-autoridades" class="dropdown-item" data-action="autoridades">Autoridades</a></li>
                            <li><a href="#institucional-consejo" class="dropdown-item" data-action="consejo">Consejo Directivo</a></li>
                            <li><a href="#institucional-sedes" class="dropdown-item" data-action="sedes">Nuestras sedes</a></li>
                        </ul>
                    </li>
                    <!-- Estudiantes -->
                    <li class="nav-item dropdown">
                        <a href="#estudiantes" class="nav-link dropdown-toggle" id="nav-item-estudiantes">
                            Estudiantes
                            <svg class="dropdown-arrow" viewBox="0 0 20 20" fill="currentColor" width="12" height="12">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#estudiantes-mesas" class="dropdown-item" data-action="mesas">Mesas de examen</a></li>
                            <li><a href="#estudiantes-tramites" class="dropdown-item" data-action="estudiantes-tramites">Trámites</a></li>
                            <li><a href="#estudiantes-consultas" class="dropdown-item" data-action="consultas">Canales de consultas</a></li>
                        </ul>
                    </li>
                    <!-- Académica -->
                    <li class="nav-item dropdown">
                        <a href="#academica" class="nav-link dropdown-toggle" id="nav-item-academica">
                            Académica
                            <svg class="dropdown-arrow" viewBox="0 0 20 20" fill="currentColor" width="12" height="12">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#academica-carreras" class="dropdown-item" data-action="carreras">Nuestras carreras</a></li>
                            <li><a href="#academica-calendario" class="dropdown-item" data-action="calendario">Calendario académico</a></li>
                            <li><a href="#academica-departamentos" class="dropdown-item" data-action="departamentos">Departamentos</a></li>
                        </ul>
                    </li>
                    <!-- Secretarías -->
                    <li class="nav-item dropdown">
                        <a href="#secretarias" class="nav-link dropdown-toggle" id="nav-item-secretarias">
                            Secretarías
                            <svg class="dropdown-arrow" viewBox="0 0 20 20" fill="currentColor" width="12" height="12">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#sec-ciencia" class="dropdown-item" data-action="sec-ciencia">Ciencia, Técnica y Posgrado</a></li>
                            <li><a href="#sec-extension" class="dropdown-item" data-action="sec-extension">Vinculación y Extensión</a></li>
                            <li><a href="#sec-administrativa" class="dropdown-item" data-action="sec-admin">Administración y Servicios</a></li>
                            <li><a href="#sec-academica" class="dropdown-item" data-action="sec-academica">Académica</a></li>
                            <li><a href="#sec-bienestar" class="dropdown-item" data-action="sec-bienestar">Bienestar</a></li>
                        </ul>
                    </li>
                    <!-- Ingresantes -->
                    <li><a href="#ingresantes" class="nav-link" id="nav-item-ingresantes">Ingresantes</a></li>
                </ul>
            </nav>

            <!-- Toggle Menú Móvil -->
            <button class="nav-toggle" id="nav-menu-toggle" aria-label="Abrir menú de navegación" aria-expanded="false" aria-controls="nav-navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- PANEL PRINCIPAL (SPA) -->
    <main>
        
        <!-- VISTA DE INICIO (Home Page) -->
        <div id="home-view" class="view-panel active">
            
            <!-- 2. HERO SECTION -->
            <section class="hero-section">
                <!-- Slider Background Images -->
                <div class="hero-slider">
                    <div class="hero-slide active" style="background-image: url('assets/hero_slide1.jpg');"></div>
                    <div class="hero-slide" style="background-image: url('assets/hero_slide2.jpg');"></div>
                </div>

                <!-- Capa de superposición para legibilidad -->
                <div class="hero-overlay"></div>

                <!-- SVG Background Ondas sutiles -->
                <svg class="hero-bg-pattern" viewBox="0 0 1440 320" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="z-index: 3;">
                    <path fill="rgba(255,255,255,1)" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,213.3C672,192,768,128,864,112C960,96,1056,128,1152,144C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>

                <!-- Botones de navegación del slider -->
                <button class="hero-slider-btn prev" aria-label="Imagen anterior">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button class="hero-slider-btn next" aria-label="Imagen siguiente">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                </button>

                <!-- Puntos indicadores (Dots) -->
                <div class="hero-slider-dots">
                    <button class="hero-slider-dot active" data-slide="0" aria-label="Diapositiva 1"></button>
                    <button class="hero-slider-dot" data-slide="1" aria-label="Diapositiva 2"></button>
                </div>

                <div class="container" style="position: relative; z-index: 10;">
                    <div class="hero-content">
                        <span class="hero-badge">Universidad Nacional del Comahue</span>
                        <h1 class="hero-title" id="main-heading-title">Facultad de Ciencias del Ambiente y la Salud</h1>
                        <p class="hero-subtitle">Formando profesionales con compromiso social y rigor científico para el desarrollo ambiental y el bienestar en salud de la Patagonia.</p>
                    </div>
                </div>
            </section>

            <!-- ¿QUÉ NECESITÁS? (Accesos por Rol) -->
            <section class="roles-section">
                <div class="container">
                    <div class="roles-container">
                        <h2 class="roles-title">¿Qué necesitás?</h2>
                        <div class="roles-grid">
                            <!-- Ingresante -->
                            <button class="role-card" id="role-ingresante" aria-haspopup="dialog">
                                <svg class="role-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                                <span class="role-name">Ingresante</span>
                            </button>
                            <!-- Estudiante -->
                            <button class="role-card" id="role-estudiante" aria-haspopup="dialog">
                                <svg class="role-icon" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Manija superior -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5c0-1.5 1-2.5 3-2.5s3 1 3 2.5v1H9V5z" />
                                    <!-- Correas de los hombros (fondo) -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.5 6C4.5 6 3 8.5 3 11v4M17.5 6C19.5 6 21 8.5 21 11v4" />
                                    <!-- Domo principal de la mochila -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 14c0-4 3-7 7-7s7 3 7 7v4a2 2 0 01-2 2H7a2 2 0 01-2-2v-4z" />
                                    <!-- Bolsillo inferior -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 16h10v2a2 2 0 01-2 2H9a2 2 0 01-2-2v-2z" />
                                    <!-- Tapa del bolsillo inferior -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 16v-1.5a0.5 0.5 0 010.5-.5h9a0.5 0.5 0 010.5 0.5v1.5" />
                                    <!-- Hebilla central -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 16v2h2v-2" />
                                    <!-- Parche de diamante -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.5l2.5 2.5-2.5 2.5-2.5-2.5L12 8.5z" />
                                    <!-- Dos líneas verticales del parche -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 10.5v1.5M12.75 10.5v1.5" />
                                </svg>
                                <span class="role-name">Estudiante</span>
                            </button>
                            <!-- Docente -->
                            <button class="role-card" id="role-docente" aria-haspopup="dialog">
                                <svg class="role-icon" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Pizarra - Barra horizontal superior -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4h18" />
                                    <!-- Pizarra - Línea vertical izquierda colgante -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 5v5" />
                                    <!-- Pizarra - Borde derecho y parte inferior -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 5v11a2 2 0 01-2 2h-4" />
                                    <!-- Pizarra - Líneas de texto/escritura -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 8h7" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 12h7" />
                                    <!-- Docente - Cabeza (Círculo flotante) -->
                                    <circle cx="7" cy="10" r="2.5" />
                                    <!-- Docente - Cuerpo y Brazo apuntando -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.5 20v-2.5c0-1.8 1.2-2.5 3-2.5h1.5l4.5-1.5a1 1 0 011.2.8v0a1 1 0 01-.8 1.2L9.2 17c-1 1-1.2 2-1.2 3H3.5z" />
                                </svg>
                                <span class="role-name">Docente</span>
                            </button>
                            <!-- Graduado/a -->
                            <button class="role-card" id="role-graduado" aria-haspopup="dialog">
                                <svg class="role-icon" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Tapa del birrete (Rombo superior) -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3L2 8l10 5 10-5L12 3z" />
                                    <!-- Copa del birrete (Base inferior) -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 10.5v2.5c0 2.5 2.7 4.5 6 4.5s6-2 6-4.5v-2.5" />
                                    <!-- Cordón y flecos de la borla a la derecha -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.5 8v5.5" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 16l1.5-2.5 1.5 2.5" />
                                </svg>
                                <span class="role-name">Graduado/a</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 3. ACCESOS RÁPIDOS -->
            <section class="quick-access">
                <div class="container">
                    <div class="quick-grid">
                        <a href="https://siufacias.uncoma.edu.ar/facias/" target="_blank" rel="noopener noreferrer" class="quick-item" id="quick-guarani">
                            <svg class="quick-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            </svg>
                            SIU Guaraní
                        </a>
                        <a href="https://pedco.uncoma.edu.ar" target="_blank" rel="noopener noreferrer" class="quick-item" id="quick-pedco">
                            <svg class="quick-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            PEDCO
                        </a>
                        <a href="https://preinscripcion.uncoma.edu.ar" target="_blank" rel="noopener noreferrer" class="quick-item" id="quick-preins">
                            <svg class="quick-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Preinscripción
                        </a>
                        <a href="https://facias.uncoma.edu.ar/" target="_blank" rel="noopener noreferrer" class="quick-item" id="quick-webmail">
                            <svg class="quick-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Webmail
                        </a>
                        <a href="#calendario" class="quick-item" id="quick-calendario">
                            <svg class="quick-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Calendario académico
                        </a>
                    </div>
                </div>
            </section>

            <!-- 4. NOVEDADES (Home Grid) -->
            <section class="section">
                <div class="container">
                    <div class="news-header">
                        <h2 class="section-title">Novedades Destacadas</h2>
                        <!-- Botón para ver la lista filtrable completa (SPA View Trigger) -->
                        <button class="btn btn-outline" id="btn-novedades-completo" aria-controls="news-panel-view">Ver todas las novedades</button>
                    </div>

                    <div class="news-grid">
                        <?php
                        $count = 0;
                        $categoria_map = [
                            'AMBIENTE' => 'Ambiente',
                            'SALUD' => 'Salud',
                            'INSTITUCIONAL' => 'Institucional'
                        ];
                        foreach ($novedades as $item):
                            if ($count >= 3) break;
                            $cat_pretty = isset($categoria_map[$item['categoria']]) ? $categoria_map[$item['categoria']] : ucfirst(strtolower($item['categoria']));
                            $count++;
                        ?>
                            <article class="news-card">
                                <div class="news-img-wrapper">
                                    <img src="<?php echo htmlspecialchars($item['imagen']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="news-img" loading="lazy">
                                    <span class="news-badge"><?php echo htmlspecialchars($cat_pretty); ?></span>
                                </div>
                                <div class="news-body">
                                    <span class="news-date"><?php echo htmlspecialchars($item['fecha']); ?></span>
                                    <h3 class="news-card-title"><?php echo htmlspecialchars($item['title']); ?></h3>
                                    <a href="#noticia-<?php echo htmlspecialchars($item['id']); ?>" class="news-link modal-trigger" data-noticia="<?php echo htmlspecialchars($item['id']); ?>">
                                        Leer más 
                                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                                    </a>
                                </div>
                            </article>
                        <?php endforeach; ?>
                        <?php if ($count === 0): ?>
                            <p style="grid-column: 1 / -1; text-align: center; color: var(--color-text-muted); padding: 3rem 0;">No hay novedades publicadas en este momento.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <!-- 5. SECRETARÍAS (Home) -->
            <section class="section section-bg-light" id="secretarias-home-section">
                <div class="container">
                    <h2 class="section-title">Secretarías</h2>
                    <div class="secretaries-grid">
                        
                        <!-- Académica -->
                        <article class="sec-card sec-card-academica">
                            <div class="sec-icon-wrapper">
                                <svg class="sec-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h3 class="sec-name">Académica</h3>
                            <p class="sec-desc">Gestión curricular, calendario académico, expedición de títulos y coordinación del cuerpo docente.</p>
                            <a href="#sec-academica" class="sec-link" data-sec="academica">
                                Ver más información
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </article>

                        <!-- Administración y Servicios -->
                        <article class="sec-card sec-card-admin">
                            <div class="sec-icon-wrapper">
                                <svg class="sec-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <h3 class="sec-name">Administración y Servicios</h3>
                            <p class="sec-desc">Presupuesto, mantenimiento edilicio, suministros y soporte logístico de las distintas dependencias.</p>
                            <a href="#sec-admin" class="sec-link" data-sec="administracion">
                                Ver más información
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </article>

                        <!-- Bienestar -->
                        <article class="sec-card sec-card-bienestar">
                            <div class="sec-icon-wrapper">
                                <svg class="sec-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h3 class="sec-name">Bienestar</h3>
                            <p class="sec-desc">Programas de becas, comedor, salud estudiantil, deportes y apoyo a la inserción universitaria.</p>
                            <a href="#sec-bienestar" class="sec-link" data-sec="bienestar">
                                Ver más información
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </article>

                        <!-- Ciencia, Técnica y Posgrado -->
                        <article class="sec-card sec-card-ciencia">
                            <div class="sec-icon-wrapper">
                                <svg class="sec-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <h3 class="sec-name">Ciencia, Técnica y Posgrado</h3>
                            <p class="sec-desc">Proyectos de investigación, carreras de posgrado, doctorados, becas científicas y publicaciones.</p>
                            <a href="#sec-ciencia" class="sec-link" data-sec="ciencia">
                                Ver más información
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </article>

                        <!-- Vinculación y Extensión -->
                        <article class="sec-card sec-card-vinculacion">
                            <div class="sec-icon-wrapper">
                                <svg class="sec-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                            </div>
                            <h3 class="sec-name">Vinculación y Extensión</h3>
                            <p class="sec-desc">Relación de la universidad con la sociedad, pasantías profesionales, convenios y cursos comunitarios.</p>
                            <a href="#sec-extension" class="sec-link" data-sec="vinculacion">
                                Ver más información
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </article>

                    </div>
                </div>
            </section>

        </div> <!-- FIN VISTA DE INICIO -->


        <!-- VISTA: VER TODAS LAS NOVEDADES (SPA Filtrable) -->
        <div id="news-panel-view" class="view-panel">
            <section class="section">
                <div class="container">
                    <button class="btn-back-home" id="btn-news-back-home">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Volver al Inicio
                    </button>
                    
                    <h2 class="section-title">Todas las Novedades</h2>
                    
                    <!-- Botonera de Filtro -->
                    <div class="filter-container">
                        <button class="filter-btn active" data-filter="all">Todas</button>
                        <button class="filter-btn" data-filter="Ambiente">Ambiente</button>
                        <button class="filter-btn" data-filter="Salud">Salud</button>
                        <button class="filter-btn" data-filter="Institucional">Institucional</button>
                        <button class="filter-btn" data-filter="Academica">Académica</button>
                    </div>

                    <!-- Grilla Completa de Novedades -->
                    <div class="news-grid" id="filterable-news-grid">
                        <?php
                        foreach ($novedades as $item):
                            $cat_pretty = isset($categoria_map[$item['categoria']]) ? $categoria_map[$item['categoria']] : ucfirst(strtolower($item['categoria']));
                        ?>
                            <article class="news-card" data-category="<?php echo htmlspecialchars($cat_pretty); ?>">
                                <div class="news-img-wrapper">
                                    <img src="<?php echo htmlspecialchars($item['imagen']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="news-img" loading="lazy">
                                    <span class="news-badge"><?php echo htmlspecialchars($cat_pretty); ?></span>
                                </div>
                                <div class="news-body">
                                    <span class="news-date"><?php echo htmlspecialchars($item['fecha']); ?></span>
                                    <h3 class="news-card-title"><?php echo htmlspecialchars($item['title']); ?></h3>
                                    <a href="#noticia-<?php echo htmlspecialchars($item['id']); ?>" class="news-link modal-trigger" data-noticia="<?php echo htmlspecialchars($item['id']); ?>">
                                        Leer más 
                                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                                    </a>
                                </div>
                            </article>
                        <?php endforeach; ?>
                        <?php if (empty($novedades)): ?>
                            <p style="grid-column: 1 / -1; text-align: center; color: var(--color-text-muted); padding: 3rem 0;">No hay novedades publicadas en este momento.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>


        <!-- SECCIONES INTERACTIVAS EXTRA (Navegables vía Header links) -->
        
        <!-- INSTITUCIONAL -->
        <section class="section section-bg-light" id="institucional" style="display:none;">
            <div class="container">
                <h2 class="section-title">Institucional</h2>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-top: 3rem;" class="responsive-two-cols">
                    <div>
                        <h3 style="color: var(--color-primary); font-size: 1.5rem; margin-bottom: 1.25rem;">Nuestra Historia y Misión</h3>
                        <p style="margin-bottom: 1.25rem;">La Facultad de Ciencias del Ambiente y la Salud (FACIAS) es una de las unidades académicas fundacionales de la Universidad Nacional del Comahue. Buscamos formar profesionales capacitados para dar respuesta a las problemáticas sanitarias y medioambientales de la región patagónica.</p>
                        <p style="margin-bottom: 2rem;">Contamos con un equipo de docentes, investigadores y nodocentes altamente comprometidos con la educación pública, la inclusión social, la excelencia académica y la sustentabilidad.</p>
                        
                        <!-- Panel de estadísticas visuales -->
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; text-align: center;">
                            <div style="background: var(--color-bg-white); padding: 1.25rem; border-radius: var(--border-radius-md); box-shadow: var(--shadow-subtle); border-top: 4px solid var(--color-primary);">
                                <span style="font-size: 2rem; font-weight: 800; color: var(--color-primary); display: block;">3</span>
                                <span style="font-size: 0.8rem; font-weight: 600; color: var(--color-text-muted);">Sedes Regionales</span>
                            </div>
                            <div style="background: var(--color-bg-white); padding: 1.25rem; border-radius: var(--border-radius-md); box-shadow: var(--shadow-subtle); border-top: 4px solid var(--color-secondary);">
                                <span style="font-size: 2rem; font-weight: 800; color: var(--color-secondary); display: block;">+1500</span>
                                <span style="font-size: 0.8rem; font-weight: 600; color: var(--color-text-muted);">Estudiantes Activos</span>
                            </div>
                            <div style="background: var(--color-bg-white); padding: 1.25rem; border-radius: var(--border-radius-md); box-shadow: var(--shadow-subtle); border-top: 4px solid var(--color-primary);">
                                <span style="font-size: 2rem; font-weight: 800; color: var(--color-primary); display: block;">5</span>
                                <span style="font-size: 0.8rem; font-weight: 600; color: var(--color-text-muted);">Carreras de Grado</span>
                            </div>
                        </div>
                    </div>
                    
                    <div style="background: var(--color-bg-white); padding: 2.5rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-medium); border: 1px solid var(--color-border);">
                        <h3 style="color: var(--color-primary); font-size: 1.5rem; margin-bottom: 1.5rem; border-bottom: 2px solid var(--color-border); padding-bottom: 0.5rem;">Autoridades</h3>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 1.25rem;">
                            <li>
                                <strong style="color: var(--color-text-dark); display: block; font-size: 1.05rem;">Decana:</strong>
                                <span style="color: var(--color-text-muted); font-size: 0.95rem;">Lic. Liliana LIBERATI</span>
                            </li>
                            <li>
                                <strong style="color: var(--color-text-dark); display: block; font-size: 1.05rem;">Vicedecano:</strong>
                                <span style="color: var(--color-text-muted); font-size: 0.95rem;">Ing. Juan VASSALLO</span>
                            </li>
                            <li>
                                <strong style="color: var(--color-text-dark); display: block; font-size: 1.05rem;">Secretaria Académica:</strong>
                                <span style="color: var(--color-text-muted); font-size: 0.95rem;">Dra. Florencia DEL MAR GONZALEZ</span>
                            </li>
                            <li>
                                <strong style="color: var(--color-text-dark); display: block; font-size: 1.05rem;">Secretaria Administrativa:</strong>
                                <span style="color: var(--color-text-muted); font-size: 0.95rem;">Lic. Malén ZAPATA</span>
                            </li>
                            <li>
                                <strong style="color: var(--color-text-dark); display: block; font-size: 1.05rem;">Secretaria de Ciencia, Técnica y Posgrado:</strong>
                                <span style="color: var(--color-text-muted); font-size: 0.95rem;">Dra. Paula SETTE</span>
                            </li>
                            <li>
                                <strong style="color: var(--color-text-dark); display: block; font-size: 1.05rem;">Secretario de Extensión y Vinculación:</strong>
                                <span style="color: var(--color-text-muted); font-size: 0.95rem;">Ing. Juan VASSALLO</span>
                            </li>
                            <li>
                                <strong style="color: var(--color-text-dark); display: block; font-size: 1.05rem;">Secretario de Bienestar Estudiantil:</strong>
                                <span style="color: var(--color-text-muted); font-size: 0.95rem;">Enf. Felipe INOSTROZA</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CARRERAS -->
        <section class="section" id="carreras" style="display:none;">
            <div class="container">
                <h2 class="section-title">Oferta Académica</h2>
                <p style="text-align: center; max-width: 600px; margin: -1.5rem auto 3rem; color: var(--color-text-muted);">
                    Formaciones académicas que responden a las demandas actuales en sustentabilidad y gestión sanitaria.
                </p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; margin-top: 2rem;">
                    <!-- Lic. en Saneamiento -->
                    <div style="background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 2.25rem; display: flex; flex-direction: column;" class="academic-card">
                        <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-secondary); text-transform: uppercase; margin-bottom: 0.5rem; letter-spacing: 0.5px;">Licenciatura (5 años)</span>
                        <h3 style="color: var(--color-primary); font-size: 1.35rem; font-weight: 700; margin-bottom: 1rem;">Licenciatura en Saneamiento y Protección Ambiental</h3>
                        <p style="font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">Forma profesionales dedicados a diagnosticar, planificar y remediar problemas medioambientales, evaluando el impacto ambiental en el sector público y privado.</p>
                        <div style="border-top: 1px solid var(--color-border); padding-top: 1rem; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 0.85rem; color: var(--color-text-muted); font-weight: 600;">Sede: Neuquén</span>
                            <a href="#carrera-saneamiento" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.85rem;" data-carrera="saneamiento">Plan de estudio</a>
                        </div>
                    </div>

                    <!-- Lic. en Enfermería -->
                    <div style="background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 2.25rem; display: flex; flex-direction: column;" class="academic-card">
                        <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-secondary); text-transform: uppercase; margin-bottom: 0.5rem; letter-spacing: 0.5px;">Licenciatura (5 años)</span>
                        <h3 style="color: var(--color-primary); font-size: 1.35rem; font-weight: 700; margin-bottom: 1rem;">Licenciatura en Enfermería</h3>
                        <p style="font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">Brinda una formación integral humanística, científica y técnica para el cuidado y atención de la salud individual, familiar y comunitaria.</p>
                        <div style="border-top: 1px solid var(--color-border); padding-top: 1rem; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 0.85rem; color: var(--color-text-muted); font-weight: 600;">Sedes: Allen / Choele Choel</span>
                            <a href="#carrera-enfermeria" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.85rem;" data-carrera="enfermeria">Plan de estudio</a>
                        </div>
                    </div>

                    <!-- Lic. en Higiene y Seguridad -->
                    <div style="background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 2.25rem; display: flex; flex-direction: column;" class="academic-card">
                        <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-secondary); text-transform: uppercase; margin-bottom: 0.5rem; letter-spacing: 0.5px;">Licenciatura (5 años - Ciclo de Complementación)</span>
                        <h3 style="color: var(--color-primary); font-size: 1.35rem; font-weight: 700; margin-bottom: 1rem;">Licenciatura en Higiene y Seguridad del Trabajo</h3>
                        <p style="font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">Destinado a graduados de tecnicaturas afines para profundizar en la prevención de riesgos y gestión integral de la salud laboral.</p>
                        <div style="border-top: 1px solid var(--color-border); padding-top: 1rem; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 0.85rem; color: var(--color-text-muted); font-weight: 600;">Sede: Neuquén</span>
                            <a href="#carrera-higiene-lic" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.85rem;" data-carrera="higiene-lic">Plan de estudio</a>
                        </div>
                    </div>

                    <!-- Tecnicatura Higiene y Seguridad -->
                    <div style="background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 2.25rem; display: flex; flex-direction: column;" class="academic-card">
                        <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-secondary); text-transform: uppercase; margin-bottom: 0.5rem; letter-spacing: 0.5px;">Tecnicatura (3 años)</span>
                        <h3 style="color: var(--color-primary); font-size: 1.35rem; font-weight: 700; margin-bottom: 1rem;">Tecnicatura en Higiene y Seguridad del Trabajo</h3>
                        <p style="font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">Capacita para la aplicación de normas, prevención de riesgos laborales y control de ambientes de trabajo seguros y saludables.</p>
                        <div style="border-top: 1px solid var(--color-border); padding-top: 1rem; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 0.85rem; color: var(--color-text-muted); font-weight: 600;">Sede: Neuquén</span>
                            <a href="#carrera-higiene-tec" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.85rem;" data-carrera="higiene-tec">Plan de estudio</a>
                        </div>
                    </div>

                    <!-- Enfermería Profesional -->
                    <div style="background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 2.25rem; display: flex; flex-direction: column;" class="academic-card">
                        <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-secondary); text-transform: uppercase; margin-bottom: 0.5rem; letter-spacing: 0.5px;">Pregrado (3 años)</span>
                        <h3 style="color: var(--color-primary); font-size: 1.35rem; font-weight: 700; margin-bottom: 1rem;">Enfermería Profesional</h3>
                        <p style="font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">Carrera técnica con rápida salida laboral habilitando para el ejercicio del cuidado de enfermería de mediana complejidad.</p>
                        <div style="border-top: 1px solid var(--color-border); padding-top: 1rem; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 0.85rem; color: var(--color-text-muted); font-weight: 600;">Sedes: Allen / Choele Choel</span>
                            <a href="#carrera-enfermero" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.85rem;" data-carrera="enfermero">Plan de estudio</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- INVESTIGACIÓN -->
        <section class="section section-bg-light" id="investigacion" style="display:none;">
            <div class="container">
                <h2 class="section-title">Investigación y Posgrado</h2>
                <p style="text-align: center; max-width: 600px; margin: -1.5rem auto 3rem; color: var(--color-text-muted);">
                    Nuestra facultad impulsa activamente proyectos científicos que promueven la preservación ambiental y el avance de los sistemas de salud regionales.
                </p>
                
                <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem;" class="responsive-two-cols">
                    <div>
                        <h3 style="color: var(--color-primary); font-size: 1.5rem; margin-bottom: 1.25rem;">Líneas de Investigación Activas</h3>
                        
                        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                            <!-- Proyecto 1 -->
                            <div style="background: var(--color-bg-white); padding: 1.5rem; border-radius: var(--border-radius-md); box-shadow: var(--shadow-subtle); border-left: 5px solid var(--color-primary);">
                                <h4 style="font-weight: 700; color: var(--color-text-dark); margin-bottom: 0.5rem;">Ecología Acuática y Eco-toxicología en Ríos Patagónicos</h4>
                                <p style="font-size: 0.9rem; color: var(--color-text-muted);">Estudio sistemático de la presencia de contaminantes químicos en el río Negro y Limay y su impacto en la biodiversidad y la salud humana de las poblaciones ribereñas.</p>
                            </div>
                            
                            <!-- Proyecto 2 -->
                            <div style="background: var(--color-bg-white); padding: 1.5rem; border-radius: var(--border-radius-md); box-shadow: var(--shadow-subtle); border-left: 5px solid var(--color-secondary);">
                                <h4 style="font-weight: 700; color: var(--color-text-dark); margin-bottom: 0.5rem;">Epidemiología Comunitaria y Gestión de Salud Pública</h4>
                                <p style="font-size: 0.9rem; color: var(--color-text-muted);">Análisis de determinantes sociales de la salud en zonas vulnerables y optimización del diseño de atención primaria en el Alto Valle.</p>
                            </div>

                            <!-- Proyecto 3 -->
                            <div style="background: var(--color-bg-white); padding: 1.5rem; border-radius: var(--border-radius-md); box-shadow: var(--shadow-subtle); border-left: 5px solid var(--color-primary);">
                                <h4 style="font-weight: 700; color: var(--color-text-dark); margin-bottom: 0.5rem;">Gestión de Residuos Industriales y Salud Ocupacional</h4>
                                <p style="font-size: 0.9rem; color: var(--color-text-muted);">Investigación aplicada sobre protocolos de seguridad en la industria del gas y petróleo no convencional y prevención de patologías asociadas.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div style="background: var(--color-bg-white); padding: 2rem; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-medium); height: fit-content;">
                        <h3 style="color: var(--color-primary); font-size: 1.3rem; margin-bottom: 1.25rem;">Centros y Laboratorios</h3>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 1.25rem;">
                            <li style="border-bottom: 1px solid var(--color-border); padding-bottom: 1rem;">
                                <strong style="color: var(--color-text-dark); display: block; margin-bottom: 0.25rem;">L.T.A. - Laboratorio de Toxicología Ambiental:</strong>
                                <span style="font-size: 0.85rem; color: var(--color-text-muted);">Certificación de muestras regionales y desarrollo experimental.</span>
                            </li>
                            <li style="border-bottom: 1px solid var(--color-border); padding-bottom: 1rem;">
                                <strong style="color: var(--color-text-dark); display: block; margin-bottom: 0.25rem;">C.I.S. - Centro de Investigaciones de la Salud:</strong>
                                <span style="font-size: 0.85rem; color: var(--color-text-muted);">Investigaciones de enfermería comunitaria, bioética y medicina del trabajo.</span>
                            </li>
                            <li>
                                <strong style="color: var(--color-text-dark); display: block; margin-bottom: 0.25rem;">Revista "Ambiente y Salud":</strong>
                                <span style="font-size: 0.85rem; color: var(--color-text-muted);">Publicación científica periódica con referato internacional disponible para docentes e investigadores.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <!-- CONTACTO -->
        <section class="section" id="contacto" style="display:none;">
            <div class="container">
                <h2 class="section-title">Contacto y Ubicación</h2>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-top: 3rem;" class="responsive-two-cols">
                    <!-- Formulario de contacto -->
                    <div style="background: var(--color-bg-light); padding: 2.5rem; border-radius: var(--border-radius-lg); border: 1px solid var(--color-border);">
                        <h3 style="color: var(--color-primary); font-size: 1.4rem; margin-bottom: 1.5rem;">Escribinos tu consulta</h3>
                        <form id="contact-form" style="display: flex; flex-direction: column; gap: 1.25rem;">
                            <div>
                                <label for="name" style="font-weight: 600; font-size: 0.9rem; display: block; margin-bottom: 0.5rem;">Nombre Completo:</label>
                                <input type="text" id="name" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: var(--border-radius-sm); outline: none;" placeholder="Ej. Juan Pérez">
                            </div>
                            
                            <div>
                                <label for="email" style="font-weight: 600; font-size: 0.9rem; display: block; margin-bottom: 0.5rem;">Correo Electrónico:</label>
                                <input type="email" id="email" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: var(--border-radius-sm); outline: none;" placeholder="Ej. juan@correo.com">
                            </div>

                            <div>
                                <label for="subject" style="font-weight: 600; font-size: 0.9rem; display: block; margin-bottom: 0.5rem;">Asunto o Rol:</label>
                                <select id="subject" style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: var(--border-radius-sm); outline: none; background: white;">
                                    <option value="consulta">Consulta General</option>
                                    <option value="ingreso">Inscripción / Ingreso</option>
                                    <option value="tramite">Trámite Académico</option>
                                    <option value="investigacion">Investigación</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" style="font-weight: 600; font-size: 0.9rem; display: block; margin-bottom: 0.5rem;">Mensaje:</label>
                                <textarea id="message" rows="5" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: var(--border-radius-sm); outline: none; resize: vertical;" placeholder="Escribí tu consulta detallada acá..."></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" style="margin-top: 0.5rem;">Enviar Mensaje</button>
                        </form>
                    </div>

                    <!-- Datos y Horarios -->
                    <div>
                        <h3 style="color: var(--color-primary); font-size: 1.4rem; margin-bottom: 1.5rem;">Datos Institucionales</h3>
                        
                        <div style="display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2rem;">
                            <div style="display: flex; gap: 1rem;">
                                <svg style="width: 24px; height: 24px; color: var(--color-secondary); flex-shrink: 0;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div>
                                    <strong style="display: block;">Sede Neuquén (Decanato)</strong>
                                    <span style="color: var(--color-text-muted); font-size: 0.95rem;">Buenos Aires 1400, C.P. 8300, Neuquén Capital.</span>
                                </div>
                            </div>
                            
                            <div style="display: flex; gap: 1rem;">
                                <svg style="width: 24px; height: 24px; color: var(--color-secondary); flex-shrink: 0;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                <div>
                                    <strong style="display: block;">Teléfono Departamento Alumnos</strong>
                                    <span style="color: var(--color-text-muted); font-size: 0.95rem;">0299 4490300 Int. 476 (Atención Lunes a Viernes de 9 a 13hs).</span>
                                </div>
                            </div>

                            <div style="display: flex; gap: 1rem;">
                                <svg style="width: 24px; height: 24px; color: var(--color-secondary); flex-shrink: 0;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <div>
                                    <strong style="display: block;">Correo de Contacto Oficial</strong>
                                    <span style="color: var(--color-text-muted); font-size: 0.95rem;">departamento.alumnos@facias.uncoma.edu.ar</span>
                                </div>
                            </div>
                        </div>

                        <!-- Panel Informativo de atención presencial -->
                        <div style="background-color: var(--color-secondary-light); border-left: 4px solid var(--color-secondary); padding: 1.5rem; border-radius: var(--border-radius-sm);">
                            <h4 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.5rem; font-size: 1rem;">Atención Presencial</h4>
                            <p style="font-size: 0.9rem; line-height: 1.5; color: var(--color-text-dark);">
                                La atención al público en ventanilla de Alumnos se realiza sin turno previo en el horario matutino de **09:00 a 13:00 hs**, en cualquiera de las tres sedes administrativas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- VISTA: TRÁMITES (Página con botones de trámites migrada desde Ingresantes) -->
        <div id="tramites-view" class="view-panel">
            <section class="section">
                <div class="container" style="text-align: center;">
                    <h2 class="section-title">Trámites de Estudiantes</h2>
                    <p style="max-width: 600px; margin: -1.5rem auto 3rem; color: var(--color-text-muted);">
                        Seleccioná el trámite que deseás realizar. Haciendo clic en cada botón accederás al espacio correspondiente.
                    </p>
                    
                    <!-- Contenedor de botones (Pills) -->
                    <div class="tramites-container" style="display: flex; flex-direction: column; align-items: center; gap: 1.5rem; margin-top: 2rem;">
                        <!-- Fila 1 -->
                        <div class="tramites-row" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1.25rem; width: 100%;">
                            <button class="btn-tramite-pill" data-tramite="Solic. de títulos">Solic. de títulos</button>
                            <button class="btn-tramite-pill" data-tramite="Materias en suspenso">Materias en suspenso</button>
                            <button class="btn-tramite-pill" data-tramite="Solic. de equivalencias">Solic. de equivalencias</button>
                            <button class="btn-tramite-pill" data-tramite="Pedidos de programas">Pedidos de programas</button>
                        </div>
                        <!-- Fila 2 -->
                        <div class="tramites-row" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1.25rem; width: 100%;">
                            <button class="btn-tramite-pill" data-tramite="Cambio de plan de est.">Cambio de plan de est.</button>
                            <button class="btn-tramite-pill" data-tramite="Ped. de cursada paralela y cambio de carrera">Ped. de cursada paralela y cambio de carrera</button>
                            <button class="btn-tramite-pill" data-tramite="Calendario académico">Calendario académico</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- VISTA: INGRESANTES (Página vacía por el momento) -->
        <div id="ingresantes-view" class="view-panel">
            <section class="section">
                <div class="container">
                    <h2 class="section-title" style="text-align: left;">Ingresantes</h2>
                    <p style="max-width: 600px; margin: -1.5rem 0 3rem; color: var(--color-text-muted);">
                        Información para nuevos ingresantes del ciclo lectivo. Esta sección se encuentra actualmente en desarrollo y quedará vacía temporalmente.
                    </p>
                    <div style="background-color: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-lg); padding: 4rem 2rem; text-align: center; margin-top: 2rem; min-height: 300px; display: flex; align-items: center; justify-content: center;">
                        <p style="color: var(--color-text-muted); font-size: 1.1rem; font-style: italic;">
                            Esta sección se encuentra actualmente vacía y se completará próximamente con guías e instrucciones para nuevos alumnos.
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <!-- VISTA: TRÁMITE VACÍO (Página intermedia vacía) -->
        <div id="tramite-vacio-view" class="view-panel">
            <section class="section">
                <div class="container">
                    <button class="btn-back-home" id="btn-back-to-tramites" style="margin-bottom: 2rem; display: inline-flex; align-items: center; gap: 0.5rem; font-weight: 600; color: var(--color-primary);">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Volver a Trámites
                    </button>
                    
                    <h2 class="section-title" id="tramite-vacio-title" style="text-align: left;">Nombre del Trámite</h2>
                    
                    <div id="tramite-vacio-content">
                        <!-- El contenido se cargará dinámicamente desde script.js -->
                    </div>
                </div>
            </section>
        </div>

    </main>

    <!-- 6. PIE DE PÁGINA (Footer) -->
    <footer class="footer">
        <div class="container footer-container-body">
            <div class="footer-grid">
                
                <!-- Columna 1: Info FACIAS -->
                <div class="footer-col">
                    <div class="footer-logo">
                        <img src="assets/logo_facias.png" alt="Logo FACIAS" class="footer-logo-img">
                        <img src="assets/logo_unco.png" alt="Logo UNCo" class="footer-logo-img">
                    </div>
                    <p class="footer-about">Facultad de Ciencias del Ambiente y la Salud, unidad de formación científica, ambiental y sanitaria de la Universidad Nacional del Comahue en la Patagonia.</p>
                </div>

                <!-- Columna 2: Enlaces Rápidos -->
                <div class="footer-col">
                    <h3 class="footer-col-title">Accesos Rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="https://www.uncoma.edu.ar" target="_blank" rel="noopener noreferrer">Sitio Central UNCo</a></li>
                        <li><a href="#inicio">Preguntas Frecuentes</a></li>
                        <li><a href="#carreras">Planes de Estudio</a></li>
                        <li><a href="https://pedco.uncoma.edu.ar" target="_blank" rel="noopener noreferrer">Plataforma PEDCO</a></li>
                        <li><a href="https://guarani.uncoma.edu.ar" target="_blank" rel="noopener noreferrer">SIU Guaraní Alumnos</a></li>
                        <li><a href="#secretarias">Contacto Secretarías</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Información de Contacto -->
                <div class="footer-col">
                    <h3 class="footer-col-title">Contacto</h3>
                    <div class="footer-contact-info">
                        <p>
                            <svg class="footer-contact-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            Buenos Aires 1400, Neuquén, Argentina
                        </p>
                        <p>
                            <svg class="footer-contact-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            Tel: 0299 4490300
                        </p>
                        <p>
                            <svg class="footer-contact-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            departamento.alumnos@facias.uncoma.edu.ar
                        </p>
                        <!-- Redes Sociales -->
                        <div class="social-links">
                            <a href="https://www.instagram.com/faciasunco" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Instagram de FACIAS">
                                <svg class="social-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            </a>
                            <a href="https://www.facebook.com/faciasunco" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Facebook de FACIAS">
                                <svg class="social-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Columna 4: Sedes y Mini Mapa Interactivo -->
                <div class="footer-col">
                    <h3 class="footer-col-title">Nuestras Sedes</h3>
                    <div class="footer-map-container">
                        <div class="sede-buttons" role="tablist">
                            <button class="btn-sede-tab active" id="btn-sede-nqn" role="tab" aria-selected="true" aria-controls="map-box" data-sede="nqn">Neuquén</button>
                            <button class="btn-sede-tab" id="btn-sede-allen" role="tab" aria-selected="false" aria-controls="map-box" data-sede="allen">Allen</button>
                            <button class="btn-sede-tab" id="btn-sede-choele" role="tab" aria-selected="false" aria-controls="map-box" data-sede="choele">C. Choel</button>
                        </div>
                        
                        <div class="map-view-box" id="map-box">
                            <!-- Mapa de Neuquén por defecto -->
                            <iframe id="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7797746411516!2d-68.05837652345885!3d-38.94619427171424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x960a33c1626c0667%3A0xe2cd2460e65e4ff5!2sFacultad%20de%20Ciencias%20del%20Ambiente%20y%20la%20Salud%20-%20UNCo!5e0!3m2!1ses-419!2sar!4v1719600000000!5m2!1ses-419!2sar" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            
                            <!-- Capa informativa de carga de mapa -->
                            <div class="map-placeholder-info" id="map-info-text">
                                Mostrando ubicación: Sede Neuquén (Buenos Aires 1400)
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Credits -->
            <div class="footer-bottom">
                <p>&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue. Todos los derechos reservados.</p>
                <div class="footer-bottom-links">
                    <a href="#inicio">Políticas de Privacidad</a>
                    <a href="#inicio">Términos de Uso</a>
                    <a href="https://www.uncoma.edu.ar" target="_blank" rel="noopener noreferrer">UNCo</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- 7. MODALES / VENTANAS EMERGENTES INTERACTIVAS -->
    
    <!-- Modal de Roles ("¿Qué necesitás?") -->
    <div class="modal-overlay" id="role-modal" role="dialog" aria-modal="true" aria-labelledby="modal-role-title">
        <div class="modal-card">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-role-title">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Portal de Accesos
                </h3>
                <button class="modal-close" id="btn-modal-close" aria-label="Cerrar modal">&times;</button>
            </div>
            
            <div class="modal-body" id="modal-role-body">
                <!-- Se inyecta contenido dinámico con JS según el rol cliqueado -->
                <p>Cargando información del rol...</p>
            </div>
        </div>
    </div>

    <!-- Modal para Noticias Detalladas ("Leer más") -->
    <div class="modal-overlay" id="news-modal" role="dialog" aria-modal="true" aria-labelledby="modal-news-title">
        <div class="modal-card" style="max-width: 700px;">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-news-title" style="font-size: 1.3rem;">Noticia Completa</h3>
                <button class="modal-close" id="btn-news-modal-close" aria-label="Cerrar noticia">&times;</button>
            </div>
            <div class="modal-body" id="modal-news-body" style="padding-top: 1rem;">
                <!-- Contenido dinámico inyectado por JS -->
                <p>Cargando noticia...</p>
            </div>
        </div>
    </div>


    <!-- Exponer datos de novedades de Decap CMS a JavaScript -->
    <script>
        window.dynamicNewsData = <?php echo json_encode($novedades, JSON_UNESCAPED_UNICODE); ?>;
    </script>

    <!-- Script de interactividad -->
    <script src="script.js?v=1.6"></script>
</body>
</html>

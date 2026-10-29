<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ya estoy inscripto/a | GPF - FACIAS</title>
    <link rel="stylesheet" href="styles.css?v=2.5">
    <style>
        .page-container {
            max-width: 960px;
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
            margin-bottom: 2.25rem;
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

        .page-badge-gpf {
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

        /* Bloque de Bienvenida: Y ahora qué sigue?? */
        .welcome-guide-card {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.25rem;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--color-border);
            border-left: 5px solid #e0522d;
            margin-bottom: 3rem;
        }

        .welcome-title {
            color: #e0522d;
            font-size: 1.75rem;
            font-weight: 800;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .welcome-congrats {
            font-size: 1.15rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
            line-height: 1.5;
        }

        .welcome-desc {
            font-size: 1.02rem;
            color: #475569;
            line-height: 1.65;
            margin: 0;
        }

        /* Bloques de sección */
        .guide-section {
            background: #ffffff;
            border-radius: var(--border-radius-lg);
            padding: 2.25rem 2.25rem 2.5rem;
            border: 1px solid var(--color-border);
            box-shadow: var(--shadow-subtle);
            margin-bottom: 3rem;
            transition: var(--transition-smooth);
        }

        .guide-section:hover {
            box-shadow: var(--shadow-medium);
        }

        /* Encabezado píldora azul */
        .section-pill-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            background: linear-gradient(135deg, #0072b9 0%, #005a94 100%);
            color: #ffffff;
            padding: 0.75rem 1.75rem;
            border-radius: 9999px;
            font-size: 1.35rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 114, 185, 0.25);
            width: 100%;
            box-sizing: border-box;
        }

        .section-lead-box {
            font-size: 1.05rem;
            color: #334155;
            line-height: 1.65;
            margin-bottom: 1.75rem;
        }

        .section-lead-box strong.lead-term {
            color: #0072b9;
            font-size: 1.15rem;
            font-weight: 800;
        }

        .section-subhead {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1e293b;
            margin: 1.5rem 0 0.85rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .section-subhead.teal {
            color: #008f9c;
            font-size: 1.15rem;
            margin-top: 1.75rem;
        }

        /* Chips / Píldoras de acciones */
        .chips-container {
            display: flex;
            flex-wrap: wrap;
            gap: 0.65rem;
            margin-bottom: 1.5rem;
        }

        .chip-pill {
            background-color: #f1f5f9;
            border: 1px solid #cbd5e1;
            color: #334155;
            padding: 0.45rem 1rem;
            border-radius: 9999px;
            font-size: 0.92rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            transition: var(--transition-smooth);
        }

        .chip-pill:hover {
            background-color: #e2e8f0;
            color: #0f172a;
            border-color: #94a3b8;
        }

        /* Barra de acceso directo a plataforma */
        .platform-access-bar {
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            padding: 1rem 1.4rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .platform-access-info {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1rem;
            font-weight: 700;
            color: #1e293b;
            flex-wrap: wrap;
        }

        .btn-access-platform {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #008f9c;
            color: #ffffff;
            font-weight: 700;
            font-size: 0.95rem;
            padding: 0.65rem 1.25rem;
            border-radius: 8px;
            text-decoration: none;
            transition: var(--transition-smooth);
            box-shadow: 0 2px 6px rgba(0, 143, 156, 0.25);
        }

        .btn-access-platform:hover {
            background: #007580;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 143, 156, 0.35);
            color: #ffffff;
        }

        .platform-note {
            font-size: 0.88rem;
            font-weight: 500;
            color: #64748b;
        }

        /* Lista de tarjetas con borde suave */
        .cards-list {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .info-card-item {
            background-color: #ffffff;
            border: 1.5px solid #cbd5e1;
            border-radius: 12px;
            padding: 1rem 1.25rem;
            font-size: 0.98rem;
            line-height: 1.6;
            color: #334155;
            transition: var(--transition-smooth);
        }

        .info-card-item:hover {
            border-color: #94a3b8;
            background-color: #fcfdfe;
        }

        .info-card-item strong {
            color: #0f172a;
        }

        .info-card-item.with-action {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .btn-video-tutorial {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background-color: #fee2e2;
            color: #dc2626;
            border: 1px solid #fca5a5;
            border-radius: 9999px;
            padding: 0.4rem 0.9rem;
            font-size: 0.88rem;
            font-weight: 700;
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .btn-video-tutorial:hover {
            background-color: #dc2626;
            color: #ffffff;
            border-color: #dc2626;
        }

        /* Alertas especiales / Regla de oro */
        .alert-rule-box {
            background-color: #f0f7ff;
            border: 1.5px solid #bfdbfe;
            border-left: 5px solid #0072b9;
            border-radius: 12px;
            padding: 1.15rem 1.4rem;
            font-size: 0.98rem;
            line-height: 1.6;
            color: #1e3a8a;
            margin-top: 1.25rem;
        }

        .alert-rule-box.danger {
            background-color: #fef2f2;
            border-color: #fecaca;
            border-left-color: #dc2626;
            color: #7f1d1d;
        }

        .alert-rule-tag {
            font-weight: 800;
            color: #dc2626;
            margin-right: 0.35rem;
        }

        .alert-rule-box.warning {
            background-color: #fef8ee;
            border-color: #fed7aa;
            border-left-color: #f59e0b;
            color: #78350f;
        }

        /* Sección Final: Contactos y Tips */
        .contacts-summary-card {
            background: #ffffff;
            border: 2px solid #94a3b8;
            border-radius: 16px;
            padding: 2.25rem;
            box-shadow: var(--shadow-medium);
            margin-bottom: 2rem;
        }

        .contacts-summary-title {
            font-size: 1.4rem;
            font-weight: 800;
            color: #0072b9;
            margin-bottom: 1.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .contacts-group {
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid var(--color-border);
        }

        .contacts-group:last-child {
            padding-bottom: 0;
            margin-bottom: 0;
            border-bottom: none;
        }

        .contacts-group-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .contacts-group-desc {
            font-size: 0.98rem;
            color: #475569;
            line-height: 1.6;
            margin-bottom: 0.85rem;
        }

        .contact-pills-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.65rem;
        }

        .contact-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #0072b9;
            color: #ffffff;
            padding: 0.45rem 1rem;
            border-radius: 9999px;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .contact-badge:hover {
            background: #005a94;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .contact-badge.teal {
            background: #008f9c;
        }

        .contact-badge.teal:hover {
            background: #007580;
        }

        .contact-badge.outline {
            background: #ffffff;
            color: #0072b9;
            border: 1.5px solid #0072b9;
        }

        .contact-badge.outline:hover {
            background: #f0f7ff;
            color: #005a94;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 1.85rem;
            }
            .welcome-title {
                font-size: 1.45rem;
            }
            .guide-section {
                padding: 1.5rem;
            }
            .section-pill-badge {
                font-size: 1.15rem;
                padding: 0.65rem 1.25rem;
            }
            .platform-access-bar {
                flex-direction: column;
                align-items: flex-start;
            }
            .btn-access-platform {
                width: 100%;
                justify-content: center;
            }
            .contacts-summary-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body style="background-color: var(--color-bg-light);">

    <!-- Header simple / Navegación -->
    <header class="header" style="position: static; box-shadow: var(--shadow-subtle); background: white;">
        <div class="container header-container" style="justify-content: center; padding: 1rem 0;">
            <a href="index.php" class="logo" style="display: flex; gap: 1rem;">
                <img src="assets/logo_facias.png" alt="Logo FACIAS" class="logo-img" style="height: 45px;">
                <img src="assets/logo_unco.png" alt="Logo UNCo" class="logo-img" style="height: 45px;">
            </a>
        </div>
    </header>

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
                Ya estoy inscripto/a
                <span class="page-badge-gpf">GPF · Guía Para las FACIAS</span>
            </h1>
            <p class="page-subtitle">Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>

        <!-- Tarjeta de bienvenida: Y ahora qué sigue?? -->
        <div class="welcome-guide-card">
            <h2 class="welcome-title">Y ahora qué sigue??</h2>
            <p class="welcome-congrats">
                Antes de continuar ¡felicidades, ya estás inscripto/a en la Facultad!!
            </p>
            <p class="welcome-desc">
                A continuación vas a encontrar una guía realista con toda la info que necesitás para empezar a cursar con el pie derecho.
            </p>
        </div>

        <!-- SECCIÓN 1: SIU Guaraní -->
        <section class="guide-section" id="siu-guarani">
            <div class="section-pill-badge">
                <span>🖥️</span> SIU Guaraní
            </div>

            <div class="section-lead-box">
                <strong class="lead-term">¿Qué es el SIU?</strong> Es tu legajo digital, el único lugar donde queda registrado tu recorrido académico y administrativo en la facultad.
            </div>

            <h3 class="section-subhead">¿Qué puedo hacer en SIU?</h3>
            <div class="chips-container">
                <span class="chip-pill">✍️ Inscribirte a cursadas</span>
                <span class="chip-pill">📋 Inscribirte a exámenes</span>
                <span class="chip-pill">📊 Mirar tu historia académica</span>
                <span class="chip-pill">🔄 Reinscripción anual</span>
                <span class="chip-pill">📄 Obtener certificados de alumno regular</span>
            </div>

            <!-- Acceso a SIU Guaraní -->
            <div class="platform-access-bar">
                <div class="platform-access-info">
                    <span>Acceso al sistema:</span>
                    <a href="https://siufacias.uncoma.edu.ar/facias/" target="_blank" rel="noopener noreferrer" class="btn-access-platform">
                        Ingresá al sistema desde aquí ↗
                    </a>
                </div>
                <span class="platform-note">SIU Guaraní · FACIAS UNCo</span>
            </div>

            <h3 class="section-subhead teal">¿Tuviste algún problema? Acá te dejamos algunas sugerencias:</h3>
            <div class="cards-list">
                <div class="info-card-item">
                    <strong>Si ingresás por primera vez, hacé lo siguiente:</strong> Si no te fue asignada la contraseña, probá en usuario con tu número de DNI (sin puntos) y la clave que te llegó por correo.
                </div>
                <div class="info-card-item with-action">
                    <div>
                        <strong>Para ver un ejemplo de cómo se usa:</strong> Podés consultar los instructivos paso a paso en video.
                    </div>
                    <a href="https://www.youtube.com/watch?v=ZEZzAKpxvRI" target="_blank" rel="noopener noreferrer" class="btn-video-tutorial">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                        Mirá este tutorial
                    </a>
                </div>
                <div class="info-card-item">
                    <strong>¿Seguís teniendo problemas?</strong> Podés pedir ayuda en el Departamento de Alumnos o a tu tutor/a de ingreso.
                </div>
            </div>

            <div class="alert-rule-box danger">
                <span class="alert-rule-tag">¡Cada trámite en el SIU tiene fecha límite!</span>
                No esperes al último día... cuando hay mucha demanda, el sistema se pone lento o puede fallar.
            </div>
        </section>

        <!-- SECCIÓN 2: PEDCO -->
        <section class="guide-section" id="pedco">
            <div class="section-pill-badge">
                <span>💻</span> PEDCO
            </div>

            <div class="section-lead-box">
                <strong class="lead-term">¿Qué es PEDCO?</strong> Es tu aula virtual y el canal oficial de comunicación con tus docentes. <strong>Si el SIU es para los trámites, PEDCO es donde pasa el estudio.</strong>
            </div>

            <h3 class="section-subhead">¿Qué puedo hacer en PEDCO?</h3>
            <div class="chips-container">
                <span class="chip-pill">📖 Ver material de estudio</span>
                <span class="chip-pill">📢 Avisos y novedades</span>
                <span class="chip-pill">📤 Entrega de trabajos prácticos</span>
                <span class="chip-pill">💬 Foros de dudas y consultas</span>
            </div>

            <!-- Acceso a PEDCO -->
            <div class="platform-access-bar">
                <div class="platform-access-info">
                    <span>Ingresá a la plataforma desde aquí:</span>
                    <a href="https://pedco.uncoma.edu.ar/" target="_blank" rel="noopener noreferrer" class="btn-access-platform">
                        Ir a PEDCO ↗
                    </a>
                </div>
                <span class="platform-note">(Tu usuario es tu DNI y la contraseña inicial es tu DNI también)</span>
            </div>

            <h3 class="section-subhead teal">¿Tuviste algún problema en la Pedco? Acá te dejamos algunas sugerencias:</h3>
            <div class="cards-list">
                <div class="info-card-item">
                    <strong>Si ingresás por primera vez:</strong> Pedí el alta de tu usuario completando el formulario correspondiente. No te asustes por el cartel de que caducó el link: el mail de confirmación puede demorar unos días.
                </div>
                <div class="info-card-item with-action">
                    <div>
                        <strong>¿El link o datos para matricularte no funcionan?</strong> Pedíselo directamente a tu docente de cátedra o mirá los tutoriales de automatriculación.
                    </div>
                    <a href="https://pedco.uncoma.edu.ar/" target="_blank" rel="noopener noreferrer" class="btn-video-tutorial">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/></svg>
                        Ver instructivo
                    </a>
                </div>
                <div class="info-card-item">
                    <strong>¿Seguís teniendo problemas?</strong> Podés pedir ayuda técnica escribiendo a: <a href="mailto:soportepedco@facias.uncoma.edu.ar" style="color: #0072b9; font-weight: 700; text-decoration: underline;">soportepedco@facias.uncoma.edu.ar</a>
                </div>
            </div>

            <div class="alert-rule-box">
                <span class="alert-rule-tag" style="color: #0072b9;">TIP ÚTIL:</span>
                <strong>Podés configurar que las notificaciones te lleguen a tu correo.</strong> Además, podés desmatricularte de las materias que ya hayas aprobado para mantener tu espacio ordenado.
            </div>
        </section>

        <!-- SECCIÓN 3: El Plan de Estudios -->
        <section class="guide-section" id="plan-estudios">
            <div class="section-pill-badge">
                <span>🗺️</span> El Plan de Estudios: el mapa de tu carrera
            </div>

            <div class="section-lead-box">
                <strong class="lead-term">¿Qué es un Plan de Estudios?</strong> Es el documento oficial que dice qué materias tenés que cursar, cómo se organizan y qué necesitás para avanzar. <strong>¡Te sugerimos que lo estudies, te va a facilitar planificar el recorrido de tu cursada!</strong>
            </div>

            <h3 class="section-subhead teal">¿Bueno y qué es exactamente? Acá te explicamos algunos puntos a tener en cuenta:</h3>
            <div class="cards-list">
                <div class="info-card-item">
                    <strong>¿Qué es el plan de estudios?</strong> Es la norma que regula todos los aspectos de la carrera: periodicidad y duración en cuatrimestres o años, cuáles son las materias mínimas, la carga horaria y las materias correlativas.
                </div>
                <div class="info-card-item">
                    <strong>Correlatividad:</strong> Es la relación de prelación, es lo que te habilita o te traba para cursar o rendir. Saber qué tenés que aprobar antes de cursar la siguiente. ¡No te asustes, te podés fijar en la tabla del plan!
                </div>
                <div class="info-card-item">
                    <strong>Planificación:</strong> Con el plan podés proyectar cuántas materias cursar por cuatrimestre y cuál cursar antes, minimizando la demora en tu carrera.
                </div>
                <div class="info-card-item">
                    <strong>Régimen de cursada:</strong> Es donde podés ver si cada materia es cuatrimestral o anual, la carga horaria semanal, si tiene clases prácticas, trabajo de campo, y si es promocionable o con examen final.
                </div>
            </div>

            <div class="alert-rule-box">
                <span class="alert-rule-tag">Regla de oro:</span>
                Armá una estrategia de materias, no te enloquezcas queriendo cursar todo de golpe... Si te va mal en una materia, ¡en el siguiente período podés volver a intentarlo!
            </div>
        </section>

        <!-- SECCIÓN 4: Calendario Académico -->
        <section class="guide-section" id="calendario-academico">
            <div class="section-pill-badge">
                <span>📅</span> Calendario académico
            </div>

            <div class="section-lead-box">
                <strong class="lead-term">¿Qué es el Calendario académico?</strong> Es un calendario donde están todas las fechas clave del año universitario. <strong>¡Te sugerimos consultarlo seguido, es el hábito que más problemas te va a ahorrar en tu cursada!</strong>
            </div>

            <h3 class="section-subhead teal">¿Y qué consulto ahí? Acá te explicamos a qué debes prestar atención:</h3>
            <div class="cards-list">
                <div class="info-card-item">
                    <strong>Fechas de reinscripción a la carrera:</strong> Hay un período clave y obligatorio a principio de cada año para confirmar que continuás cursando. ¡Sin reinscripción no te podés inscribir a materias!
                </div>
                <div class="info-card-item">
                    <strong>Fechas de inicio y fin de las clases:</strong> El calendario universitario es el que marca de manera precisa el comienzo: el primer cuatrimestre de marzo a junio/julio, y el segundo de agosto a noviembre.
                </div>
                <div class="info-card-item">
                    <strong>Fechas de inscripción a cursadas:</strong> Además de estar inscripto a la carrera, te inscribís a cada materia en su período específico habilitado por el SIU, uno por cuatrimestre.
                </div>
                <div class="info-card-item">
                    <strong>Fechas de mesas de exámenes:</strong> Fechas clave a lo largo del año: febrero y marzo, mayo, julio, agosto, octubre y diciembre. En esas semanas de mesas no se dictan cursadas regulares.
                </div>
                <div class="info-card-item">
                    <strong>Fechas para trámites administrativos:</strong> El calendario te indica las fechas fijas para pedidos de pases de sede, programas legalizados, equivalencias o cambio de carrera. Si se te pasa, debés esperar al siguiente período.
                </div>
                <div class="info-card-item">
                    <strong>Fechas de receso y sin actividad académica:</strong> Receso invernal en julio y receso en verano, feriados, asuetos, Semana de Mayo y Semana del Estudiante. Todas estas fechas se fijan en el calendario.
                </div>
                <div class="info-card-item with-action">
                    <div>
                        <strong>¿Dónde consulto el calendario oficial?</strong> Podés ver las fechas detalladas en la sección oficial de FACIAS.
                    </div>
                    <a href="calendario-academico.php" class="btn-access-platform" style="padding: 0.45rem 1rem; font-size: 0.88rem;">
                        Ver Calendario Académico ↗
                    </a>
                </div>
            </div>

            <div class="alert-rule-box danger">
                <span class="alert-rule-tag">Regla de oro:</span>
                El calendario es el reloj de la facultad y no se detiene por nadie. Si se te pasó una fecha de inscripción, <strong>el sistema no permite excepciones</strong>... ¡Usá el calendario con responsabilidad!
            </div>
        </section>

        <!-- SECCIÓN 5: ¿A quién recurrir? -->
        <section class="guide-section" id="a-quien-recurrir">
            <div class="section-pill-badge">
                <span>🤝</span> ¿A quién recurrir?
            </div>

            <div class="section-lead-box">
                A medida que avances en la carrera van a surgir dudas... <strong>¡Conocer las áreas de la facultad va a ayudarte a resolverlas!</strong>
            </div>

            <h3 class="section-subhead teal">¿Áreas de la Facultad? ¿Hay más de una? Tranqui, acá te contamos cuáles son las más importantes y qué podés resolver en cada una:</h3>
            <div class="cards-list">
                <div class="info-card-item">
                    <strong>Área de Ingreso y Permanencia:</strong> El equipo de tutores brinda orientación al estudiante en todos los aspectos que tengan que ver con la facultad y la vida universitaria. Te acompañan en tus dudas, consultas y necesidades que se presenten en la carrera.
                </div>
                <div class="info-card-item">
                    <strong>Departamento de Alumnos:</strong> Acá podés hacer trámites académicos como entrega de documentación, pedir certificados de alumno regular o constancias analíticas, y solicitar equivalencias si venís de otra carrera o facultad.
                </div>
                <div class="info-card-item">
                    <strong>Secretaría de Bienestar Estudiantil:</strong> Es la que coordina la vida fuera de las aulas: como becas de ayuda económica, salud estudiantil, comedor universitario, residencias estudiantiles, deportes y boleto estudiantil.
                </div>
                <div class="info-card-item">
                    <strong>Bedelía:</strong> Si no sabés en qué aula se dicta tu materia o si un docente no va al aula, te comunicás con el equipo de bedeles; siempre están disponibles para orientarte.
                </div>
                <div class="info-card-item">
                    <strong>Biblioteca de FACIAS:</strong> Sala de lectura silenciosa donde podés pedir libros. No solo es de la Facu propia, sino que hay un catálogo muy completo. Además cuentan con computadoras con conexión Wi-Fi.
                </div>
                <div class="info-card-item">
                    <strong>Departamento de Informática:</strong> Acá podés pedir la recuperación de contraseña de acceso a la PEDCO. Se pueden comunicar por correo electrónico a: <a href="mailto:soportepedco@facias.uncoma.edu.ar" style="color: #0072b9; font-weight: 700; text-decoration: underline;">soportepedco@facias.uncoma.edu.ar</a>.
                </div>
            </div>
        </section>

        <!-- SECCIÓN 6: Contactos, Horarios y Tips -->
        <div class="contacts-summary-card" id="contactos-tips">
            <h3 class="contacts-summary-title">
                <span>📌</span> Acá te dejamos horarios, contactos y algunos tips más:
            </h3>

            <!-- 1. Área de Ingreso y Permanencia -->
            <div class="contacts-group">
                <h4 class="contacts-group-title">Área de Ingreso y Permanencia</h4>
                <p class="contacts-group-desc">
                    Podés comunicarte con el Departamento y/o coordinar las consultas por mail o redes; espacio y atención de Tutores Pares, presencial en el aula de tutorías (aula común 7 o box de tutorías, Sede NQN).
                </p>
                <div class="contact-pills-row">
                    <a href="mailto:ingresoypermanenciafacias@gmail.com" class="contact-badge teal">
                        ✉️ ingresoypermanenciafacias@gmail.com
                    </a>
                    <a href="https://www.instagram.com/ingreso_permanencia_facias/" target="_blank" rel="noopener noreferrer" class="contact-badge">
                        📸 Instagram
                    </a>
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="contact-badge outline">
                        👥 Facebook
                    </a>
                </div>
            </div>

            <!-- 2. Departamento de Alumnos -->
            <div class="contacts-group">
                <h4 class="contacts-group-title">Departamento de Alumnos</h4>
                <p class="contacts-group-desc">
                    Para consultas académicas presenciales: <strong>Lunes a viernes de 9 a 13 hs.</strong> Grupo para hacer consultas o correo electrónico:
                </p>
                <div class="contact-pills-row">
                    <a href="mailto:dptoalumnos@facias.uncoma.edu.ar" class="contact-badge">
                        ✉️ dptoalumnos@facias.uncoma.edu.ar
                    </a>
                    <a href="mailto:dptoalumnosfacias@gmail.com" class="contact-badge outline">
                        ✉️ dptoalumnosfacias@gmail.com
                    </a>
                </div>
            </div>

            <!-- 3. Cómo asociarse a la biblioteca -->
            <div class="contacts-group">
                <h4 class="contacts-group-title">Cómo asociarse a la biblioteca</h4>
                <p class="contacts-group-desc">
                    <strong>Lunes a viernes.</strong> Con carnet de biblioteca podés retirar hasta 3 libros. <strong>Requisitos para asociarte a biblioteca:</strong> Constancia de Alumno Regular (la descargás de SIU Guaraní) y foto carnet.
                </p>
            </div>

            <!-- 4. Becas y ayudas -->
            <div class="contacts-group">
                <h4 class="contacts-group-title">Becas y ayudas</h4>
                <p class="contacts-group-desc">
                    Todos los años se abren convocatorias para becas de ayuda económica de Nación y de la UNCo. Comedor universitario, residencias, boleto estudiantil... Podés consultar en el Área de Ingreso y Permanencia.
                </p>
            </div>
        </div>

    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2.5rem 0; text-align: center; margin-top: 5rem;">
        <div class="container">
            <p style="font-size: 0.95rem; opacity: 0.9; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
        </div>
    </footer>

</body>
</html>

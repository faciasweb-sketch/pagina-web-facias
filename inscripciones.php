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

        /* Responsive */
        @media (max-width: 860px) {
            .periodos-grid {
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
            .fechas-section {
                padding: 2rem 1.25rem;
            }
            .inscripciones-main-title {
                font-size: 2.5rem;
                margin-bottom: 1.5rem;
            }
            .fechas-header-title {
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

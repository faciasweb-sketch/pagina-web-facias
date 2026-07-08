document.addEventListener('DOMContentLoaded', () => {
    
    // ==========================================
    // 1. STICKY HEADER & NAV RESPONSIVE
    // ==========================================
    const header = document.getElementById('main-header');
    const navToggle = document.getElementById('nav-menu-toggle');
    const navLinksContainer = document.getElementById('nav-links');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Scroll header sutil
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Toggle menu móvil
    navToggle.addEventListener('click', () => {
        const expanded = navToggle.getAttribute('aria-expanded') === 'true' || false;
        navToggle.setAttribute('aria-expanded', !expanded);
        navToggle.classList.toggle('active');
        navLinksContainer.classList.toggle('active');
    });

    // Cerrar menú móvil al hacer clic en un enlace
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navToggle.setAttribute('aria-expanded', 'false');
            navToggle.classList.remove('active');
            navLinksContainer.classList.remove('active');
        });
    });

    // ==========================================
    // 2. SPA VIEW ROUTING SYSTEM
    // ==========================================
    const views = {
        'inicio': document.getElementById('home-view'),
        'institucional': document.getElementById('institucional'),
        'carreras': document.getElementById('carreras'),
        'investigacion': document.getElementById('investigacion'),
        'contacto': document.getElementById('contacto'),
        'novedades': document.getElementById('news-panel-view'),
        'ingresantes': document.getElementById('ingresantes-view'),
        'tramites': document.getElementById('tramites-view'),
        'tramite-vacio': document.getElementById('tramite-vacio-view')
    };

    function switchView(targetViewId) {
        // Ocultar todas las vistas
        Object.keys(views).forEach(key => {
            if (views[key]) {
                views[key].style.display = 'none';
                views[key].classList.remove('active');
            }
        });

        // Mostrar la vista deseada
        const targetView = views[targetViewId];
        if (targetView) {
            // El home-view usa display block por su clase active o CSS
            if (targetViewId === 'inicio' || targetViewId === 'novedades') {
                targetView.style.display = 'block';
            } else {
                targetView.style.display = 'block'; // Asegurar block
            }
            targetView.classList.add('active');
        }

        // Actualizar estados del menú de navegación
        navLinks.forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href');
            if (href === `#${targetViewId}`) {
                link.classList.add('active');
            }
        });

        // Scroll suave al inicio de la página
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Navegación y comportamiento de los Toggles de Dropdown en móvil
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                e.stopPropagation();
                
                const parent = toggle.closest('.nav-item.dropdown');
                const wasActive = parent.classList.contains('active');
                
                // Cerrar todos los demás dropdowns
                document.querySelectorAll('.nav-item.dropdown').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Alternar el actual
                if (!wasActive) {
                    parent.classList.add('active');
                }
            } else {
                const href = toggle.getAttribute('href');
                if (href.startsWith('#')) {
                    e.preventDefault();
                    const viewId = href.substring(1);
                    if (views[viewId]) {
                        switchView(viewId);
                    }
                }
            }
        });
    });

    // Cerrar dropdowns si se hace clic fuera del menú en móvil
    document.addEventListener('click', () => {
        if (window.innerWidth <= 992) {
            document.querySelectorAll('.nav-item.dropdown').forEach(item => {
                item.classList.remove('active');
            });
        }
    });

    // Acciones para los sub-items del menú dropdown
    const dropdownItems = document.querySelectorAll('.dropdown-item');
    dropdownItems.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            const action = item.getAttribute('data-action');
            
            // Cerrar menú móvil al seleccionar
            navToggle.setAttribute('aria-expanded', 'false');
            navToggle.classList.remove('active');
            navLinksContainer.classList.remove('active');
            
            // Cerrar todos los dropdowns activos
            document.querySelectorAll('.nav-item.dropdown').forEach(d => d.classList.remove('active'));

            ejecutarAccionMenu(action);
        });
    });

    // Event listeners para los enlaces directos del menú (que no son dropdowns, ej. Ingresantes)
    navLinks.forEach(link => {
        if (!link.classList.contains('dropdown-toggle')) {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                if (href.startsWith('#')) {
                    e.preventDefault();
                    const viewId = href.substring(1);
                    const targetViewId = viewId === 'ingresantes' ? 'ingresantes' : viewId;
                    if (views[targetViewId]) {
                        switchView(targetViewId);
                    }
                }
            });
        }
    });

    // Datos y contenido para cada trámite específico
    const tramitesData = {
        "Solic. de títulos": {
            title: "Trámite de Solicitud de Título",
            html: `
                <div class="tramite-detail-wrapper" style="line-height: 1.7; color: var(--color-text-dark);">
                    <div style="background-color: var(--color-secondary-light); border-left: 4px solid var(--color-secondary); padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2rem;">
                        <h4 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.5rem; font-size: 1.1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            FECHAS DEL TRÁMITE
                        </h4>
                        <p style="font-size: 1.1rem; font-weight: 700; color: var(--color-primary); margin: 0;">Desde el 09/03/2026 al 31/03/2026 de 10:00 a 13:00 hs.</p>
                    </div>

                    <h4 style="font-weight: 700; margin-bottom: 0.75rem; color: var(--color-primary); font-size: 1.2rem;">Modalidad de Presentación</h4>
                    <p style="margin-bottom: 1.5rem;">
                        El trámite se realiza de forma <strong>presencial</strong> en tu sede administrativa correspondiente, a excepción de los estudiantes pertenecientes a la <strong>sede Choele Choel</strong>, quienes deberán realizar la solicitud obligatoriamente enviando un correo electrónico con la documentación escaneada al siguiente correo oficial:
                        <br>
                        <a href="mailto:auditoria.titulos@facias.uncoma.edu.ar" style="color: var(--color-primary); font-weight: 600; text-decoration: underline;">auditoria.titulos@facias.uncoma.edu.ar</a>.
                    </p>

                    <div style="background-color: rgba(220, 53, 69, 0.06); border-left: 4px solid #dc3545; padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2.5rem;">
                        <p style="color: #c0392b; font-weight: 700; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                            ⚠️ IMPORTANTE: A dicho trámite se le dará curso únicamente si se presenta toda la documentación requerida de forma completa. De lo contrario, la solicitud no podrá ser recibida ni procesada bajo ningún término.
                        </p>
                    </div>

                    <h4 style="font-weight: 700; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.2rem; border-bottom: 2px solid var(--color-border); padding-bottom: 0.5rem;">Requisitos y Documentación Solicitada:</h4>
                    <ul class="requisitos-list" style="padding-left: 0; list-style: none; display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.95rem; margin-bottom: 2rem;">
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Formulario único</strong> (Formulario de solicitud general).</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Formulario de Jura</strong> (seleccionando la fórmula de juramento que desees).</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Fotocopia del DNI</strong> ampliada en tamaño A4 (frente y dorso en el mismo folio).</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Fotocopia del Título analítico del secundario</strong>.</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Fotocopia del título analítico previo</strong> (solo si son enfermeros o técnicos en higiene y seguridad).</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Fotocopia de la Convalidación del Título Secundario</strong> (si correspondiera).</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Fotocopia de la Convalidación del Título Terciario</strong> (si correspondiera).</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Fotocopia de la Convalidación del Título Universitario</strong> (si correspondiera).</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Fotocopia del Acta de Nacimiento</strong> (no se requiere que tenga fecha actualizada).</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Formulario de materias optativas, seminarios y materias electivas</strong> completado.</span></li>
                    </ul>

                    <h4 style="font-weight: 700; margin-top: 2rem; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.2rem; border-bottom: 2px solid var(--color-border); padding-bottom: 0.5rem;">Descarga de Formularios Obligatorios:</h4>
                    <div style="display: grid; grid-template-columns: 1fr; gap: 1rem; margin-bottom: 2rem;">
                        <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.25rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth);" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                            <span style="font-weight: 600; font-size: 0.95rem; display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path></svg>
                                Planilla de Materia Optativa – Lic. en Higiene y Seguridad en el Trabajo
                            </span>
                            <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-primary); background: rgba(0, 114, 185, 0.1); padding: 0.25rem 0.6rem; border-radius: 4px; text-transform: uppercase;">Descargar PDF</span>
                        </a>
                        <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.25rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth);" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                            <span style="font-weight: 600; font-size: 0.95rem; display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path></svg>
                                Planilla de Seminarios – Lic. en Saneamiento
                            </span>
                            <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-primary); background: rgba(0, 114, 185, 0.1); padding: 0.25rem 0.6rem; border-radius: 4px; text-transform: uppercase;">Descargar PDF</span>
                        </a>
                        <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.25rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth);" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                            <span style="font-weight: 600; font-size: 0.95rem; display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="22" height="22" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path></svg>
                                Planilla para Materias Extracurriculares – Lic. en Enfermería
                            </span>
                            <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-primary); background: rgba(0, 114, 185, 0.1); padding: 0.25rem 0.6rem; border-radius: 4px; text-transform: uppercase;">Descargar PDF</span>
                        </a>
                    </div>

                    <h4 style="font-weight: 700; margin-top: 2rem; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.2rem; border-bottom: 2px solid var(--color-border); padding-bottom: 0.5rem;">Fórmulas de Juramentos (Descargables):</h4>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; margin-bottom: 2.5rem;" class="responsive-two-cols">
                        <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0.85rem 1rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth);" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                            <span style="font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 0.5rem;">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Formulario de Promesa
                            </span>
                            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-secondary);">DOCX / PDF</span>
                        </a>
                        <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0.85rem 1rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth);" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                            <span style="font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 0.5rem;">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Juro por Dios, Patria y Evangelios
                            </span>
                            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-secondary);">DOCX / PDF</span>
                        </a>
                        <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0.85rem 1rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth);" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                            <span style="font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 0.5rem;">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Juro por Dios y la Patria
                            </span>
                            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-secondary);">DOCX / PDF</span>
                        </a>
                        <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0.85rem 1rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth);" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                            <span style="font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 0.5rem;">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Juro por la Patria
                            </span>
                            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-secondary);">DOCX / PDF</span>
                        </a>
                        <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0.85rem 1rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth);" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                            <span style="font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 0.5rem;">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Constancia
                            </span>
                            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-secondary);">DOCX / PDF</span>
                        </a>
                        <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0.85rem 1rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth);" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                            <span style="font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 0.5rem;">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Compromiso
                            </span>
                            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-secondary);">DOCX / PDF</span>
                        </a>
                    </div>

                    <div style="background-color: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 1.5rem; margin-top: 2rem;">
                        <h4 style="font-weight: 700; color: #e67e22; margin-bottom: 1rem; font-size: 1.1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            ACLARACIONES IMPORTANTES POR CARRERA
                        </h4>
                        <ul style="padding-left: 1.25rem; display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.92rem; line-height: 1.5;">
                            <li><strong>• LICENCIATURA EN ENFERMERÍA:</strong> Para poder preinscribirse e ingresar al <strong>Ciclo Superior</strong> de la carrera, deberá presentar obligatoriamente el <strong>Título de Enfermero/a Profesional</strong> de base.</li>
                            <li><strong>• LICENCIATURA EN HIGIENE Y SEGURIDAD EN EL TRABAJO:</strong> Para poder preinscribirse e ingresar al <strong>Ciclo Superior</strong> de la carrera, deberá presentar obligatoriamente el <strong>Título de Técnico/a</strong> de base.</li>
                        </ul>
                    </div>
                </div>
            `
        },
        "Materias en suspenso": {
            title: "Levantamiento de Materias en Suspenso",
            html: `
                <div class="tramite-detail-wrapper" style="line-height: 1.7; color: var(--color-text-dark);">
                    <div style="background-color: var(--color-secondary-light); border-left: 4px solid var(--color-secondary); padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2rem;">
                        <h4 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.5rem; font-size: 1.1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            FECHAS DEL TRÁMITE (DOS PERÍODOS)
                        </h4>
                        <p style="font-size: 1.05rem; font-weight: 700; color: var(--color-primary); margin-bottom: 0.35rem;">• Primer Período: Desde el 02/03/2026 al 20/03/2026</p>
                        <p style="font-size: 1.05rem; font-weight: 700; color: var(--color-primary); margin: 0;">• Segundo Período: Desde el 18/08/2026 al 24/08/2026</p>
                    </div>

                    <h4 style="font-weight: 700; margin-bottom: 0.75rem; color: var(--color-primary); font-size: 1.2rem;">Modalidad de Presentación</h4>
                    <p style="margin-bottom: 1.5rem;">
                        El trámite se realiza de forma <strong>presencial</strong> en tu sede de origen. 
                        <br>
                        <em>Excepción para Sedes Allen y Choele Choel:</em> Los estudiantes pertenecientes a estas sedes deberán realizar el trámite en formato virtual enviando toda la documentación correspondiente al siguiente correo oficial:
                        <br>
                        <a href="mailto:tramites.dptoalumnos@facias.uncoma.edu.ar" style="color: var(--color-primary); font-weight: 600; text-decoration: underline;">tramites.dptoalumnos@facias.uncoma.edu.ar</a>.
                    </p>

                    <div style="background-color: rgba(220, 53, 69, 0.06); border-left: 4px solid #dc3545; padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2.5rem;">
                        <p style="color: #c0392b; font-weight: 700; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                            ⚠️ IMPORTANTE: A las solicitudes se les dará curso únicamente si se presenta toda la documentación requerida de forma completa. Caso contrario, no se procesará el levantamiento de suspenso.
                        </p>
                    </div>

                    <h4 style="font-weight: 700; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.2rem; border-bottom: 2px solid var(--color-border); padding-bottom: 0.5rem;">Requisitos y Documentación a Presentar:</h4>
                    <ul class="requisitos-list" style="padding-left: 0; list-style: none; display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.95rem; margin-bottom: 2rem;">
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Reinscripción anual:</strong> Contar con la reinscripción obligatoria realizada al año lectivo vigente.</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Nota Formal (Hoja A4):</strong> Dirigida a la Decana <strong>Lic. Liliana Liberati</strong> detallando correctamente las materias de las cuales solicitas levantar el suspenso.</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Cumplimiento de Correlativas:</strong> Se levantará el suspenso únicamente si cuentas con las materias correlativas exigidas aprobadas en el plan de estudio vigente.</span></li>
                    </ul>

                    <h4 style="font-weight: 700; margin-top: 2rem; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.2rem; border-bottom: 2px solid var(--color-border); padding-bottom: 0.5rem;">Descarga de Modelos:</h4>
                    <div style="display: grid; grid-template-columns: 1fr; gap: 1rem; margin-bottom: 2rem;">
                        <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.25rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth);" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                            <span style="font-weight: 600; font-size: 0.95rem; display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="22" height="22" fill="none" stroke="#2980b9" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path></svg>
                                Modelo de Nota - Levantamiento de Materias en Suspenso
                            </span>
                            <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-primary); background: rgba(0, 114, 185, 0.1); padding: 0.25rem 0.6rem; border-radius: 4px; text-transform: uppercase;">Descargar Word</span>
                        </a>
                    </div>

                    <div style="background-color: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 1.5rem;">
                        <h4 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.5rem; font-size: 1.05rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Dudas o consultas
                        </h4>
                        <p style="font-size: 0.95rem; margin: 0;">
                            Para consultas o envío de la documentación de sedes Allen/Choele, escribe directamente al correo del Departamento de Alumnos:
                            <a href="mailto:tramites.dptoalumnos@facias.uncoma.edu.ar" style="color: var(--color-primary); font-weight: 600; text-decoration: underline;">tramites.dptoalumnos@facias.uncoma.edu.ar</a>.
                        </p>
                    </div>
                </div>
            `
        },
        "Solic. de equivalencias": {
            title: "Solicitud de Equivalencias",
            html: `
                <div class="tramite-detail-wrapper" style="line-height: 1.7; color: var(--color-text-dark);">
                    
                    <!-- Tarjeta de Fechas -->
                    <div style="background-color: var(--color-secondary-light); border-left: 4px solid var(--color-secondary); padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2rem;">
                        <h4 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.75rem; font-size: 1.1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            CRONOGRAMA DE PRESENTACIÓN (SIN EXCEPCIÓN)
                        </h4>
                        <ul style="margin: 0; padding-left: 1.25rem; font-size: 1.05rem; font-weight: 700; color: var(--color-primary); display: flex; flex-direction: column; gap: 0.35rem; list-style-type: square;">
                            <li>Primer Período: Desde el 04/05/2026 hasta el 22/05/2026</li>
                            <li>Segundo Período: Desde el 04/10/2026 hasta el 10/10/2026</li>
                        </ul>
                    </div>

                    <!-- Modalidad y correo -->
                    <h4 style="font-weight: 700; margin-bottom: 0.75rem; color: var(--color-primary); font-size: 1.2rem;">Modalidad de Presentación</h4>
                    <p style="margin-bottom: 1.5rem;">
                        El trámite se realizará <strong>exclusivamente de forma virtual por correo electrónico</strong> enviando toda la documentación al siguiente correo oficial:
                        <br>
                        <a href="mailto:equivalencias.documentacion@facias.uncoma.edu.ar" style="color: var(--color-primary); font-weight: 600; text-decoration: underline; font-size: 1.05rem;">equivalencias.documentacion@facias.uncoma.edu.ar</a>
                    </p>

                    <!-- Requisitos de archivo -->
                    <div style="background-color: var(--color-bg-light); border: 1px solid var(--color-border); padding: 1.25rem; border-radius: var(--border-radius-md); margin-bottom: 2rem;">
                        <h5 style="margin: 0 0 0.5rem; font-weight: 700; color: var(--color-primary); font-size: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            Formato de Archivo Requerido
                        </h5>
                        <p style="margin: 0; font-size: 0.95rem;">
                            Toda la documentación debe ser digitalizada y adjuntada en <strong>un solo archivo único en formato PDF o JPG</strong>, el cual no debe superar los <strong>10 MB</strong> de tamaño total.
                        </p>
                    </div>

                    <!-- Advertencia importante -->
                    <div style="background-color: rgba(220, 53, 69, 0.06); border-left: 4px solid #dc3545; padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2.5rem;">
                        <p style="color: #c0392b; font-weight: 700; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                            ⚠️ IMPORTANTE: El trámite solo se procesará si contiene toda la documentación solicitada de forma completa. En caso de faltar algún requisito, NO se le dará curso bajo ningún concepto.
                        </p>
                    </div>

                    <!-- Secciones de equivalencias -->
                    <div style="display: grid; grid-template-columns: 1fr; gap: 2.5rem; margin-bottom: 2rem;">
                        
                        <!-- EQUIVALENCIAS EXTERNAS -->
                        <div style="background: white; border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 1.75rem; box-shadow: var(--shadow-subtle);">
                            <h4 style="font-weight: 700; margin-top: 0; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.25rem; display: flex; align-items: center; gap: 0.5rem; border-bottom: 2px solid var(--color-secondary); padding-bottom: 0.5rem;">
                                <svg width="24" height="24" fill="none" stroke="var(--color-secondary)" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                Equivalencias Externas
                            </h4>
                            <p style="font-size: 0.95rem; color: var(--color-text-muted); margin-bottom: 1.25rem;">
                                Destinado a estudios realizados en otras Facultades o instituciones ajenas a la FACIAS.
                            </p>
                            
                            <h5 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.75rem; font-size: 1rem;">Requisitos a enviar:</h5>
                            <ul class="requisitos-list" style="padding-left: 0; list-style: none; display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.95rem; margin-bottom: 1.5rem;">
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span>Estar inscripto/a en la FACIAS y contar con <strong>Número de Legajo</strong> asignado.</span></li>
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Nota de solicitud de equivalencias COMPLETA:</strong> en la nota se debe detallar correctamente la materia aprobada por la cual se solicita la equivalencia, especificando explícitamente a cuál de las asignaturas del plan de estudio de esta facultad corresponde.</span></li>
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Rendimiento Académico o Certificado Analítico</strong> oficial donde consten las asignaturas aprobadas en la institución de origen.</span></li>
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Plan de Estudio</strong> completo de la carrera de origen.</span></li>
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Programas de estudio certificados</strong> de cada una de las asignaturas aprobadas que sean de interés para la evaluación de equivalencias.</span></li>
                            </ul>

                            <!-- Cuadro informativo Enfermería -->
                            <div style="background-color: var(--color-secondary-light); border-radius: var(--border-radius-sm); padding: 1.25rem; margin-top: 1.5rem; border: 1px solid rgba(0, 114, 185, 0.15);">
                                <h5 style="margin: 0 0 0.5rem; font-weight: 700; color: var(--color-primary); font-size: 0.95rem; display: flex; align-items: center; gap: 0.5rem;">
                                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    Programas de Enfermería en la División de Equivalencias:
                                </h5>
                                <p style="margin: 0; font-size: 0.9rem; line-height: 1.5;">
                                    La facultad ya dispone de los programas certificados para las siguientes carreras de origen:
                                </p>
                                <ul style="margin: 0.5rem 0 0; padding-left: 1.25rem; font-size: 0.9rem; line-height: 1.5; display: flex; flex-direction: column; gap: 0.25rem; list-style-type: circle;">
                                    <li><strong>Plan de estudio IUCE 0623:</strong> Programas bajo la Resolución 0570, Expediente N°5721-007506/14 (Carrera de Enfermería).</li>
                                    <li><strong>Plan de estudio IFSSA 623/15:</strong> Programas y plan de estudio correspondientes a ese año (Carrera de Enfermería).</li>
                                </ul>
                            </div>

                            <div style="margin-top: 1.25rem; background-color: rgba(243, 156, 18, 0.08); border-left: 3px solid #f39c12; padding: 0.75rem 1rem; border-radius: 4px; font-size: 0.9rem; color: #d35400; font-weight: 600;">
                                ⚠ IMPORTANTE: En todos los casos descritos para equivalencias externas, la documentación de origen deberá estar correctamente firmada, legalizada y/o certificada por la institución emisora.
                            </div>
                        </div>

                        <!-- EQUIVALENCIAS INTERNAS -->
                        <div style="background: white; border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 1.75rem; box-shadow: var(--shadow-subtle);">
                            <h4 style="font-weight: 700; margin-top: 0; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.25rem; display: flex; align-items: center; gap: 0.5rem; border-bottom: 2px solid var(--color-secondary); padding-bottom: 0.5rem;">
                                <svg width="24" height="24" fill="none" stroke="var(--color-secondary)" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                Equivalencias Internas
                            </h4>
                            <p style="font-size: 0.95rem; color: var(--color-text-muted); margin-bottom: 1.25rem;">
                                Destinado a estudios realizados previamente dentro de las carreras que se dictan en la propia FACIAS.
                            </p>
                            
                            <h5 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.75rem; font-size: 1rem;">Requisitos a enviar:</h5>
                            <ul class="requisitos-list" style="padding-left: 0; list-style: none; display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.95rem;">
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span>Estar inscripto/a en la FACIAS con <strong>Número de Legajo</strong> activo en la carrera en la cual se solicitan las equivalencias.</span></li>
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Nota de solicitud de equivalencias COMPLETA:</strong> detallando la materia aprobada por la cual se solicita la equivalencia, especificando correctamente a cuál de las asignaturas de esta facultad corresponde.</span></li>
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Programas de estudio</strong> de cada una de las asignaturas aprobadas que sean de tu interés para el análisis de equivalencia.</span></li>
                            </ul>
                            
                            <div style="margin-top: 1.25rem; background-color: rgba(46, 204, 113, 0.08); border-left: 3px solid #2ecc71; padding: 0.75rem 1rem; border-radius: 4px; font-size: 0.9rem; color: #27ae60; font-weight: 600;">
                                ℹ NOTA: En este caso no es necesario legalizarlos ni certificarlos, ya que los programas pertenecen y fueron aprobados dentro de la FACIAS.
                            </div>
                        </div>

                    </div>
                </div>
            `
        },
        "Pedidos de programas": {
            title: "Pedidos de Programas Legalizados",
            html: `
                <div class="tramite-detail-wrapper" style="line-height: 1.7; color: var(--color-text-dark);">
                    
                    <!-- Tarjeta de Fechas -->
                    <div style="background-color: var(--color-secondary-light); border-left: 4px solid var(--color-secondary); padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2rem;">
                        <h4 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.75rem; font-size: 1.1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            CRONOGRAMA DE PEDIDOS 2026
                        </h4>
                        <ul style="margin: 0; padding-left: 1.25rem; font-size: 1.05rem; font-weight: 700; color: var(--color-primary); display: flex; flex-direction: column; gap: 0.35rem; list-style-type: square;">
                            <li>Primer Período: Desde el 09/03/2026 hasta el 13/03/2026</li>
                            <li>Segundo Período: Desde el 08/06/2026 hasta el 19/06/2026</li>
                            <li>Tercer Período: Desde el 19/10/2026 hasta el 30/10/2026</li>
                        </ul>
                    </div>

                    <!-- Modalidad y correo -->
                    <h4 style="font-weight: 700; margin-bottom: 0.75rem; color: var(--color-primary); font-size: 1.2rem;">Modalidad de Presentación</h4>
                    <p style="margin-bottom: 1.5rem;">
                        El trámite se realiza de forma digital mediante correo electrónico. Debés enviar toda la documentación solicitada a la siguiente casilla oficial:
                        <br>
                        <a href="mailto:amenieves64@gmail.com" style="color: var(--color-primary); font-weight: 600; text-decoration: underline; font-size: 1.05rem;">amenieves64@gmail.com</a>
                    </p>

                    <!-- Requisitos -->
                    <h4 style="font-weight: 700; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.2rem; border-bottom: 2px solid var(--color-border); padding-bottom: 0.5rem;">Requisitos y Documentación Solicitada</h4>
                    <ul class="requisitos-list" style="padding-left: 0; list-style: none; display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.95rem; margin-bottom: 2rem;">
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Nota de solicitud:</strong> Nota formal dirigida a la Decana <strong>Lic. Liliana Liberati</strong>, detallando formalmente las materias de las cuales solicitas los programas.</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Programas previos:</strong> Si disponés físicamente de las copias o archivos de los programas de tu interés, debés adjuntarlos al correo electrónico.</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Datos de contacto:</strong> Informar de manera obligatoria un número de contacto telefónico activo.</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Para Graduados:</strong> Si ya sos graduado/a, debés adjuntar una copia escaneada de tu Título Analítico.</span></li>
                    </ul>

                    <!-- Aclaración digital -->
                    <div style="background-color: rgba(46, 204, 113, 0.08); border-left: 4px solid #2ecc71; padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2rem;">
                        <p style="color: #27ae60; font-weight: 700; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                            ℹ NOTA IMPORTANTE: Recordá que todos los programas legalizados solicitados serán entregados exclusivamente en formato digital.
                        </p>
                    </div>
                </div>
            `
        },
        "Cambio de plan de est.": {
            title: "Cambio de Plan de Estudios",
            html: `
                <div class="tramite-detail-wrapper" style="line-height: 1.7; color: var(--color-text-dark);">
                    
                    <!-- Tarjeta de Fechas -->
                    <div style="background-color: var(--color-secondary-light); border-left: 4px solid var(--color-secondary); padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2rem;">
                        <h4 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.75rem; font-size: 1.1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            PERÍODOS DE PRESENTACIÓN 2026 (SIN EXCEPCIÓN)
                        </h4>
                        <ul style="margin: 0; padding-left: 1.25rem; font-size: 1.05rem; font-weight: 700; color: var(--color-primary); display: flex; flex-direction: column; gap: 0.35rem; list-style-type: square;">
                            <li>Primer Período: Desde el 02/03/2026 al 20/03/2026</li>
                            <li>Segundo Período: Desde el 18/08/2026 al 24/08/2026</li>
                        </ul>
                    </div>

                    <!-- Modalidad y Excepciones -->
                    <h4 style="font-weight: 700; margin-bottom: 0.75rem; color: var(--color-primary); font-size: 1.2rem;">Modalidad de Presentación</h4>
                    <p style="margin-bottom: 1.5rem;">
                        El trámite se realiza de forma <strong>presencial</strong> en tu sede correspondiente.
                        <br>
                        <em>Excepción para Sedes Allen y Choele Choel:</em> Los alumnos de estas sedes deberán realizar la solicitud enviando toda la documentación correspondiente al correo oficial:
                        <br>
                        <a href="mailto:tramites.dptoalumnos@facias.uncoma.edu.ar" style="color: var(--color-primary); font-weight: 600; text-decoration: underline;">tramites.dptoalumnos@facias.uncoma.edu.ar</a>.
                    </p>

                    <!-- Advertencia de Documentación Completa -->
                    <div style="background-color: rgba(220, 53, 69, 0.06); border-left: 4px solid #dc3545; padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2.5rem;">
                        <p style="color: #c0392b; font-weight: 700; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                            ⚠️ IMPORTANTE: A dicho trámite se le dará curso únicamente si se presenta toda la documentación requerida de forma completa. De lo contrario, no se procesará la solicitud.
                        </p>
                    </div>

                    <!-- Requisitos -->
                    <h4 style="font-weight: 700; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.2rem; border-bottom: 2px solid var(--color-border); padding-bottom: 0.5rem;">Requisitos Obligatorios</h4>
                    <ul class="requisitos-list" style="padding-left: 0; list-style: none; display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.95rem; margin-bottom: 2rem;">
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Reinscripción anual:</strong> Contar con la reinscripción obligatoria realizada al año lectivo vigente.</span></li>
                        <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Nota formal (Hoja A4):</strong> Dirigida a la Decana <strong>Lic. Liliana Liberati</strong>, solicitando de forma explícita el cambio de plan al nuevo o vigente.</span></li>
                    </ul>

                    <!-- Descarga de Modelo de Nota -->
                    <h4 style="font-weight: 700; margin-top: 2rem; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.2rem; border-bottom: 2px solid var(--color-border); padding-bottom: 0.5rem;">Descarga de Modelos:</h4>
                    <div style="display: grid; grid-template-columns: 1fr; gap: 1rem; margin-bottom: 2rem;">
                        <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.25rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth);" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                            <span style="font-weight: 600; font-size: 0.95rem; display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="22" height="22" fill="none" stroke="#2980b9" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path></svg>
                                Modelo de Nota - Solicitud de Cambio de Plan de Estudios
                            </span>
                            <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-primary); background: rgba(0, 114, 185, 0.1); padding: 0.25rem 0.6rem; border-radius: 4px; text-transform: uppercase;">Descargar Word</span>
                        </a>
                    </div>

                    <!-- Dudas o Consultas -->
                    <div style="background-color: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 1.5rem;">
                        <h4 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.5rem; font-size: 1.05rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Dudas o consultas
                        </h4>
                        <p style="font-size: 0.95rem; margin: 0;">
                            Para cualquier duda o consulta sobre el cambio de plan, escribí al Departamento de Alumnos:
                            <a href="mailto:tramites.dptoalumnos@facias.uncoma.edu.ar" style="color: var(--color-primary); font-weight: 600; text-decoration: underline;">tramites.dptoalumnos@facias.uncoma.edu.ar</a>.
                        </p>
                    </div>
                </div>
            `
        },
        "Ped. de cursada paralela y cambio de carrera": {
            title: "Cursado Paralelo y Cambio de Carrera",
            html: `
                <div class="tramite-detail-wrapper" style="line-height: 1.7; color: var(--color-text-dark);">
                    
                    <!-- Tarjeta de Fechas Unificadas -->
                    <div style="background-color: var(--color-secondary-light); border-left: 4px solid var(--color-secondary); padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2rem;">
                        <h4 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.5rem; font-size: 1.1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            CRONOGRAMA DE PRESENTACIÓN 2026 (SIN EXCEPCIÓN)
                        </h4>
                        <p style="font-size: 1.1rem; font-weight: 700; color: var(--color-primary); margin: 0;">Desde el 02/03/2026 al 20/03/2026</p>
                    </div>

                    <h4 style="font-weight: 700; margin-bottom: 0.75rem; color: var(--color-primary); font-size: 1.2rem;">Modalidad de Presentación</h4>
                    <p style="margin-bottom: 1.5rem;">
                        Ambos trámites se realizan de forma estrictamente <strong>presencial</strong> en el Departamento de Alumnos de tu sede.
                    </p>

                    <!-- Advertencia Legalización -->
                    <div style="background-color: rgba(243, 156, 18, 0.06); border-left: 4px solid #f39c12; padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 2.5rem; color: #c0392b;">
                        <p style="font-weight: 700; margin: 0; font-size: 0.95rem; line-height: 1.5; color: #d35400;">
                            ⚠️ CERTIFICACIÓN DE DOCUMENTOS: Si las fotocopias de DNI o analítico secundario no se encuentran debidamente legalizadas de origen, debés concurrir obligatoriamente con los documentos <strong>originales</strong> en mano para que el personal administrativo pueda autenticar las copias.
                        </p>
                    </div>

                    <!-- Dos columnas / Bloques separados -->
                    <div style="display: grid; grid-template-columns: 1fr; gap: 2.5rem; margin-bottom: 2rem;">
                        
                        <!-- CAMBIO DE CARRERA -->
                        <div style="background: white; border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 1.75rem; box-shadow: var(--shadow-subtle);">
                            <h4 style="font-weight: 700; margin-top: 0; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.25rem; display: flex; align-items: center; gap: 0.5rem; border-bottom: 2px solid var(--color-secondary); padding-bottom: 0.5rem;">
                                <svg width="24" height="24" fill="none" stroke="var(--color-secondary)" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                                1. Cambio de Carrera
                            </h4>
                            <p style="font-size: 0.95rem; color: var(--color-text-muted); margin-bottom: 1.25rem;">
                                Para estudiantes inscriptos en la FACIAS que decidan cambiar su carrera de origen a otra carrera dentro de la facultad.
                            </p>
                            
                            <h5 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.75rem; font-size: 1rem;">Requisitos a presentar:</h5>
                            <ul class="requisitos-list" style="padding-left: 0; list-style: none; display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.95rem; margin-bottom: 1.5rem;">
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Nota formal (Hoja A4):</strong> Dirigida a la Decana <strong>Lic. Liliana Liberati</strong> solicitando explícitamente el cambio, detallando todos tus datos personales y de contacto.</span></li>
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Fotocopia de DNI:</strong> Ambos lados legalizada.</span></li>
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Fotocopia del Título Analítico Secundario:</strong> Completo y legalizado.</span></li>
                            </ul>

                            <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 1rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth); font-size: 0.9rem;" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                                <span style="font-weight: 600; display: flex; align-items: center; gap: 0.5rem;">
                                    <svg width="18" height="18" fill="none" stroke="#2980b9" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path></svg>
                                    Modelo de Nota - Cambio de Carrera
                                </span>
                                <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-primary);">Descargar Word</span>
                            </a>
                        </div>

                        <!-- CURSADO PARALELO -->
                        <div style="background: white; border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 1.75rem; box-shadow: var(--shadow-subtle);">
                            <h4 style="font-weight: 700; margin-top: 0; margin-bottom: 1.25rem; color: var(--color-primary); font-size: 1.25rem; display: flex; align-items: center; gap: 0.5rem; border-bottom: 2px solid var(--color-secondary); padding-bottom: 0.5rem;">
                                <svg width="24" height="24" fill="none" stroke="var(--color-secondary)" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                2. Cursado Paralelo
                            </h4>
                            <p style="font-size: 0.95rem; color: var(--color-text-muted); margin-bottom: 1.25rem;">
                                Para cursar simultáneamente más de una carrera dentro de la facultad de FACIAS.
                            </p>
                            
                            <h5 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.75rem; font-size: 1rem;">Requisitos a presentar:</h5>
                            <ul class="requisitos-list" style="padding-left: 0; list-style: none; display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.95rem; margin-bottom: 1.5rem;">
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Reinscripción anual:</strong> Contar con la reinscripción obligatoria realizada al año lectivo vigente.</span></li>
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>Nota formal (Hoja A4):</strong> Dirigida a la Decana <strong>Anahí Álvarez</strong>, solicitando el cursado paralelo de las carreras y detallando tus datos completos.</span></li>
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Fotocopia de DNI:</strong> Ambos lados legalizada.</span></li>
                                <li style="display: flex; gap: 0.5rem;"><span style="color: var(--color-secondary); font-weight: bold;">✔</span> <span><strong>1 Fotocopia del Título Analítico Secundario:</strong> Legalizada.</span></li>
                            </ul>

                            <a href="#" class="download-link-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 1rem; background: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); text-decoration: none; color: var(--color-text-dark); transition: var(--transition-smooth); font-size: 0.9rem;" onmouseover="this.style.borderColor='var(--color-primary)'; this.style.backgroundColor='var(--color-secondary-light)';" onmouseout="this.style.borderColor='var(--color-border)'; this.style.backgroundColor='var(--color-bg-light)';">
                                <span style="font-weight: 600; display: flex; align-items: center; gap: 0.5rem;">
                                    <svg width="18" height="18" fill="none" stroke="#2980b9" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M9 17h6M9 13h6M9 9h3"></path></svg>
                                    Modelo de Nota - Cursado Paralelo
                                </span>
                                <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-primary);">Descargar Word</span>
                            </a>
                        </div>

                    </div>

                    <!-- Dudas o Consultas -->
                    <div style="background-color: var(--color-bg-light); border: 1px solid var(--color-border); border-radius: var(--border-radius-md); padding: 1.5rem;">
                        <h4 style="font-weight: 700; color: var(--color-primary); margin-bottom: 0.5rem; font-size: 1.05rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Dudas o consultas
                        </h4>
                        <p style="font-size: 0.95rem; margin: 0;">
                            Por dudas o consultas sobre estos trámites, escribí al Departamento de Alumnos:
                            <a href="mailto:tramites.dptoalumnos@facias.uncoma.edu.ar" style="color: var(--color-primary); font-weight: 600; text-decoration: underline;">tramites.dptoalumnos@facias.uncoma.edu.ar</a>.
                        </p>
                    </div>
                </div>
            `
        }
    };

    // Lógica para los botones de trámites en la sección Ingresantes
    const tramitesButtons = document.querySelectorAll('.btn-tramite-pill');
    const tramiteVacioTitle = document.getElementById('tramite-vacio-title');
    const tramiteVacioContent = document.getElementById('tramite-vacio-content');
    
    tramitesButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const tramiteNombre = btn.getAttribute('data-tramite');
            if (tramiteVacioTitle) {
                tramiteVacioTitle.textContent = tramiteNombre;
            }
            
            // Cargar contenido correspondiente o mostrar mensaje por defecto
            if (tramiteVacioContent) {
                const data = tramitesData[tramiteNombre];
                if (data) {
                    tramiteVacioContent.innerHTML = data.html;
                } else {
                    tramiteVacioContent.innerHTML = `
                        <div style="padding: 4rem 2rem; text-align: center; display: flex; align-items: center; justify-content: center; min-height: 250px;">
                            <p style="color: var(--color-text-muted); font-size: 1.1rem; font-style: italic; margin: 0;">
                                Esta sección se encuentra actualmente en desarrollo y quedará vacía temporalmente.
                            </p>
                        </div>
                    `;
                }
            }
            
            switchView('tramite-vacio');
        });
    });

    const btnBackToTramites = document.getElementById('btn-back-to-tramites');
    if (btnBackToTramites) {
        btnBackToTramites.addEventListener('click', () => {
            switchView('tramites');
        });
    }

    // Función auxiliar para mostrar un popup de información general usando el DOM del modal de roles
    function abrirModalInformativo(titulo, htmlContent) {
        modalTitle.innerHTML = `
            <svg style="width:28px;height:28px;color:var(--color-secondary);" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            ${titulo}
        `;
        modalBody.innerHTML = `<div class="modal-info">${htmlContent}</div>`;
        roleModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function ejecutarAccionMenu(action) {
        switch (action) {
            // INSTITUCIONAL
            case 'autoridades':
                switchView('institucional');
                setTimeout(() => {
                    const h3s = document.querySelectorAll('#institucional h3');
                    let targetFound = false;
                    h3s.forEach(h3 => {
                        if (h3.textContent.includes('Autoridades')) {
                            h3.scrollIntoView({ behavior: 'smooth', block: 'center' });
                            targetFound = true;
                        }
                    });
                    if (!targetFound) {
                        window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
                    }
                }, 300);
                break;
            case 'consejo':
                abrirModalInformativo(
                    "Consejo Directivo",
                    `
                    <p style="margin-bottom: 1.25rem;">El Consejo Directivo es el órgano máximo de gobierno de la Facultad de Ciencias del Ambiente y la Salud, integrado por representantes de todos los claustros: Docentes, Estudiantes, Nodocentes y Graduados.</p>
                    <h4 style="font-weight: 700; margin-bottom: 0.5rem; color: var(--color-primary);">Funciones principales:</h4>
                    <ul style="padding-left: 1.25rem; margin-bottom: 1.25rem; font-size: 0.95rem; line-height: 1.6;">
                        <li>Dictar reglamentaciones internas académicas y administrativas.</li>
                        <li>Aprobar y modificar planes de estudio con acuerdo del Consejo Superior.</li>
                        <li>Proponer la designación de docentes regulares e interinos.</li>
                        <li>Aprobar la distribución presupuestaria anual de la facultad.</li>
                    </ul>
                    <p style="font-size: 0.9rem; color: var(--color-text-muted);">Las sesiones ordinarias se realizan quincenalmente y son de carácter público.</p>
                    `
                );
                break;
            case 'sedes':
                switchView('inicio');
                setTimeout(() => {
                    const footer = document.querySelector('.footer');
                    footer.scrollIntoView({ behavior: 'smooth' });
                }, 300);
                break;

            // ESTUDIANTES
            case 'mesas':
                abrirModalInformativo(
                    "Mesas de Examen",
                    `
                    <p style="margin-bottom: 1.25rem;">Las fechas de exámenes finales para el periodo lectivo vigente se encuentran habilitadas en el sistema de autogestión SIU Guaraní.</p>
                    <h4 style="font-weight: 700; margin-bottom: 0.5rem; color: var(--color-primary);">Períodos ordinarios de mesas:</h4>
                    <ul style="padding-left: 1.25rem; margin-bottom: 1.25rem; font-size: 0.95rem; line-height: 1.6;">
                        <li><strong>Julio / Agosto:</strong> Inscripciones abiertas 48 horas antes de cada mesa.</li>
                        <li><strong>Diciembre:</strong> Mesas de cierre de ciclo lectivo.</li>
                        <li><strong>Febrero / Marzo:</strong> Primer turno ordinario anual.</li>
                    </ul>
                    <a href="https://guarani.uncoma.edu.ar" target="_blank" class="btn btn-primary" style="font-size:0.9rem; padding: 0.5rem 1rem;">Ir a SIU Guaraní</a>
                    `
                );
                break;
            case 'estudiantes-tramites':
                switchView('tramites');
                break;
            case 'consultas':
                switchView('contacto');
                break;

            // ACADÉMICA
            case 'carreras':
                switchView('carreras');
                break;
            case 'calendario':
                alert("El Calendario Académico Oficial 2026/2027 se abrirá en formato PDF próximamente. Consultar en la ventanilla de Secretaría Académica para obtener la versión preliminar.");
                break;
            case 'departamentos':
                abrirModalInformativo(
                    "Departamentos Académicos",
                    `
                    <p style="margin-bottom: 1.25rem;">La facultad se estructura académicamente en Departamentos de materias que coordinan la enseñanza e investigación:</p>
                    <ul style="padding-left: 1.25rem; margin-bottom: 1.25rem; font-size: 0.95rem; line-height: 1.6; list-style: none;">
                        <li style="margin-bottom: 0.75rem;"><strong>• Departamento de Ciencias del Ambiente:</strong> Dirección de Lic. en Saneamiento y Protección Ambiental.</li>
                        <li style="margin-bottom: 0.75rem;"><strong>• Departamento de Enfermería:</strong> Dirección de Lic. y Tec. en Enfermería en sede Allen, Choele Choel y Neuquén.</li>
                        <li style="margin-bottom: 0.75rem;"><strong>• Departamento de Higiene y Seguridad:</strong> Dirección de Lic. y Tec. en Higiene y Seguridad en el Trabajo.</li>
                    </ul>
                    `
                );
                break;

            // SECRETARÍAS
            case 'sec-ciencia':
                switchView('investigacion');
                break;
            case 'sec-extension':
                switchView('inicio');
                setTimeout(() => {
                    document.querySelector('.sec-card:nth-child(5)').scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 300);
                break;
            case 'sec-academica':
                switchView('inicio');
                setTimeout(() => {
                    document.querySelector('.sec-card:nth-child(1)').scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 300);
                break;
            case 'sec-bienestar':
                switchView('inicio');
                setTimeout(() => {
                    document.querySelector('.sec-card:nth-child(3)').scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 300);
                break;
            case 'sec-admin':
                switchView('inicio');
                setTimeout(() => {
                    document.querySelector('.sec-card:nth-child(2)').scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 300);
                break;

            // INGRESANTES
            case 'ingresantes-info':
            case 'ingresantes-tramites':
                abrirModalRol('ingresante');
                break;
            case 'ingresantes-consultas':
                switchView('contacto');
                break;
            
            default:
                switchView('inicio');
        }
    }

    // Enlace del logo para volver a Inicio
    document.getElementById('header-logo-link').addEventListener('click', (e) => {
        e.preventDefault();
        switchView('inicio');
    });

    // Botón "Ver todas las novedades" en la Home
    const btnNovedadesCompleto = document.getElementById('btn-novedades-completo');
    if (btnNovedadesCompleto) {
        btnNovedadesCompleto.addEventListener('click', () => {
            switchView('novedades');
            // Filtrar por "all" por defecto
            filterNews('all');
        });
    }

    // Botón "Volver" en panel de novedades
    const btnNewsBackHome = document.getElementById('btn-news-back-home');
    if (btnNewsBackHome) {
        btnNewsBackHome.addEventListener('click', () => {
            switchView('inicio');
        });
    }


    // ==========================================
    // 3. SELECCIÓN DE SEDES (Sincronización Bidireccional)
    // ==========================================
    const sedeSelector = document.getElementById('sede-selector');
    const mapIframe = document.getElementById('map-iframe');
    const mapInfoText = document.getElementById('map-info-text');
    const sedeButtons = document.querySelectorAll('.btn-sede-tab');

    // Ubicaciones geográficas (Google Maps Embed Links)
    const mapasSedes = {
        nqn: {
            url: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7797746411516!2d-68.05837652345885!3d-38.94619427171424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x960a33c1626c0667%3A0xe2cd2460e65e4ff5!2sFacultad%20de%20Ciencias%20del%20Ambiente%20y%20la%20Salud%20-%20UNCo!5e0!3m2!1ses-419!2sar!4v1719600000000!5m2!1ses-419!2sar",
            info: "Mostrando ubicación: Sede Neuquén (Buenos Aires 1400)",
            selectorVal: "neuquen"
        },
        allen: {
            url: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3106.3986950293116!2d-67.83173772346294!3d-38.98223687170829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x960a16ecb1bf5b47%3A0xf6930d6bf4eb1ab8!2sEscuela%20Superior%20de%20Salud%20y%20Ambiente%20-%20Sede%20Allen!5e0!3m2!1ses-419!2sar!4v1719600001000!5m2!1ses-419!2sar",
            info: "Mostrando ubicación: Sede Allen (B. Rivadavia e/ L. y Planes y M. Quintana)",
            selectorVal: "allen"
        },
        choele: {
            url: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3056.550186938927!2d-65.65651472340664!3d-39.98522327150937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95fa590fcde23bf3%3A0xe54d924d55b4105a!2sUniversidad%20Nacional%20del%20Comahue%20-%20Sede%20Choele%20Choel!5e0!3m2!1ses-419!2sar!4v1719600002000!5m2!1ses-419!2sar",
            info: "Mostrando ubicación: Sede Choele Choel (Ruta 22 km 998)",
            selectorVal: "choele"
        }
    };

    // Actualizar mapa y botón activo en base a clave de sede
    function actualizarSede(sedeClave) {
        const mapaData = mapasSedes[sedeClave];
        if (!mapaData) return;

        // Actualizar mapa iframe
        mapIframe.src = mapaData.url;
        mapInfoText.textContent = mapaData.info;

        // Sincronizar botones del footer
        sedeButtons.forEach(btn => {
            if (btn.getAttribute('data-sede') === sedeClave) {
                btn.classList.add('active');
                btn.setAttribute('aria-selected', 'true');
            } else {
                btn.classList.remove('active');
                btn.setAttribute('aria-selected', 'false');
            }
        });

        // Sincronizar selector del header
        if (sedeSelector) {
            sedeSelector.value = mapaData.selectorVal;
        }
    }

    // Escuchador dropdown header
    if (sedeSelector) {
        sedeSelector.addEventListener('change', (e) => {
            const val = e.target.value;
            if (val === 'neuquen') actualizarSede('nqn');
            if (val === 'allen') actualizarSede('allen');
            if (val === 'choele') actualizarSede('choele');
        });
    }

    // Escuchador botones footer
    sedeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const sede = btn.getAttribute('data-sede');
            actualizarSede(sede);
        });
    });


    // ==========================================
    // 4. PORTAL DE ACCESOS POR ROL (MODALES)
    // ==========================================
    const roleModal = document.getElementById('role-modal');
    const modalTitle = document.getElementById('modal-role-title');
    const modalBody = document.getElementById('modal-role-body');
    const btnModalClose = document.getElementById('btn-modal-close');

    // Datos dinámicos por rol
    const rolesData = {
        ingresante: {
            title: "Portal para Ingresantes",
            html: `
                <div class="modal-info">
                    <p style="margin-bottom: 1.25rem;">¡Te damos la bienvenida a FACIAS! Si querés estudiar una carrera en nuestra facultad, acá tenés las herramientas clave para comenzar tu trámite de ingreso.</p>
                    
                    <h4 class="modal-section-title">Enlaces Importantes:</h4>
                    <div class="modal-links-grid">
                        <a href="https://preinscripcion.uncoma.edu.ar" target="_blank" class="modal-action-link">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            Preinscripción Online
                        </a>
                        <a href="#carreras" class="modal-action-link" id="modal-lnk-carreras">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            Oferta de Carreras
                        </a>
                    </div>
                    
                    <h4 class="modal-section-title">Requisitos de Inscripción:</h4>
                    <ul style="padding-left: 1.25rem; margin-bottom: 1.5rem; font-size: 0.95rem; line-height: 1.6;">
                        <li>Formulario de preinscripción impreso.</li>
                        <li>DNI (original y copia).</li>
                        <li>Título secundario legalizado o certificado de finalización en trámite.</li>
                        <li>Dos fotos tipo carnet de 3x3 cm.</li>
                    </ul>
                    <p style="font-size: 0.85rem; color: var(--color-text-muted); background: var(--color-bg-light); padding: 0.75rem; border-radius: var(--border-radius-sm);">
                        <strong>Consultas:</strong> Escribí al área de Ingreso a <a href="mailto:ingreso@facias.uncoma.edu.ar" style="color: var(--color-primary); font-weight: 600;">ingreso.alumnos@facias.uncoma.edu.ar</a>.
                    </p>
                </div>
            `
        },
        estudiante: {
            title: "Portal para Estudiantes",
            html: `
                <div class="modal-info">
                    <p style="margin-bottom: 1.25rem;">Acceso directo a las plataformas de gestión de cursado y exámenes oficiales, así como servicios de apoyo.</p>
                    
                    <h4 class="modal-section-title">Sistemas de Autogestión:</h4>
                    <div class="modal-links-grid">
                        <a href="https://guarani.uncoma.edu.ar" target="_blank" class="modal-action-link">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                            SIU Guaraní Alumnos
                        </a>
                        <a href="https://pedco.uncoma.edu.ar" target="_blank" class="modal-action-link">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3"></path></svg>
                            Plataforma PEDCO
                        </a>
                        <a href="#calendario" class="modal-action-link">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Calendario Académico
                        </a>
                        <a href="#secretarias" class="modal-action-link" id="modal-lnk-bienestar">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            Becas y Bienestar
                        </a>
                    </div>
                    
                    <h4 class="modal-section-title">Certificados de Cursado:</h4>
                    <p style="font-size: 0.9rem; margin-bottom: 1rem;">Para constancias de alumno regular o analíticos parciales, realizá la solicitud 100% online desde la sección trámites de tu perfil de SIU Guaraní.</p>
                </div>
            `
        },
        docente: {
            title: "Portal para Docentes",
            html: `
                <div class="modal-info">
                    <p style="margin-bottom: 1.25rem;">Espacio de recursos técnicos y académicos para la gestión docente de cátedras y comisiones.</p>
                    
                    <h4 class="modal-section-title">Enlaces del Docente:</h4>
                    <div class="modal-links-grid">
                        <a href="https://guarani.uncoma.edu.ar" target="_blank" class="modal-action-link">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                            SIU Guaraní Autogestión
                        </a>
                        <a href="https://webmail.uncoma.edu.ar" target="_blank" class="modal-action-link">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            Correo Webmail UNCo
                        </a>
                        <a href="https://pedco.uncoma.edu.ar" target="_blank" class="modal-action-link">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3"></path></svg>
                            Aulas Virtuales PEDCO
                        </a>
                        <a href="#investigacion" class="modal-action-link" id="modal-lnk-invest">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547"></path></svg>
                            Secretaría de Investigación
                        </a>
                    </div>
                </div>
            `
        },
        nodocente: {
            title: "Portal para Nodocentes",
            html: `
                <div class="modal-info">
                    <p style="margin-bottom: 1.25rem;">Accesos y herramientas específicas para el personal de administración, servicios y maestranza de FACIAS.</p>
                    
                    <h4 class="modal-section-title">Herramientas de Trabajo:</h4>
                    <div class="modal-links-grid">
                        <a href="https://webmail.uncoma.edu.ar" target="_blank" class="modal-action-link">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            Webmail Institucional
                        </a>
                        <a href="#contacto" class="modal-action-link" id="modal-lnk-contacto">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            Directorio y Teléfonos
                        </a>
                    </div>
                </div>
            `
        },
        graduado: {
            title: "Portal para Graduados/as",
            html: `
                <div class="modal-info">
                    <p style="margin-bottom: 1.25rem;">Mantenemos el vínculo con nuestros egresados. Accedé a ofertas de posgrado, capacitaciones laborales e inserción profesional.</p>
                    
                    <h4 class="modal-section-title">Posgrado y Egresados:</h4>
                    <div class="modal-links-grid">
                        <a href="#secretarias" class="modal-action-link" id="modal-lnk-posgrado">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172"></path></svg>
                            Ciencia, Técnica y Posgrado
                        </a>
                        <a href="https://preinscripcion.uncoma.edu.ar" target="_blank" class="modal-action-link">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            Registro de Egresados UNCo
                        </a>
                    </div>
                </div>
            `
        }
    };

    // Funciones del modal
    function abrirModalRol(rol) {
        const data = rolesData[rol];
        if (!data) return;

        modalTitle.innerHTML = `
            <svg style="width:28px;height:28px;color:var(--color-secondary);" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            ${data.title}
        `;
        modalBody.innerHTML = data.html;
        roleModal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Detener scroll de fondo

        // Vincular clics de enlaces del modal a la navegación SPA local
        vincularEnlacesModal();
    }

    function cerrarModalRol() {
        roleModal.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Vincular botones de rol
    const btnRoleIngresante = document.getElementById('role-ingresante');
    const btnRoleEstudiante = document.getElementById('role-estudiante');
    const btnRoleDocente = document.getElementById('role-docente');
    const btnRoleNodocente = document.getElementById('role-nodocente');
    const btnRoleGraduado = document.getElementById('role-graduado');

    if (btnRoleIngresante) btnRoleIngresante.addEventListener('click', () => abrirModalRol('ingresante'));
    if (btnRoleEstudiante) btnRoleEstudiante.addEventListener('click', () => abrirModalRol('estudiante'));
    if (btnRoleDocente) btnRoleDocente.addEventListener('click', () => abrirModalRol('docente'));
    if (btnRoleNodocente) btnRoleNodocente.addEventListener('click', () => abrirModalRol('nodocente'));
    if (btnRoleGraduado) btnRoleGraduado.addEventListener('click', () => abrirModalRol('graduado'));

    btnModalClose.addEventListener('click', cerrarModalRol);

    // Cerrar modal al hacer clic en el fondo gris
    roleModal.addEventListener('click', (e) => {
        if (e.target === roleModal) cerrarModalRol();
    });

    // Permitir navegación interna desde los botones dentro de modales
    function vincularEnlacesModal() {
        const lnkCarreras = document.getElementById('modal-lnk-carreras');
        const lnkBienestar = document.getElementById('modal-lnk-bienestar');
        const lnkInvest = document.getElementById('modal-lnk-invest');
        const lnkContacto = document.getElementById('modal-lnk-contacto');
        const lnkPosgrado = document.getElementById('modal-lnk-posgrado');

        if (lnkCarreras) {
            lnkCarreras.addEventListener('click', (e) => {
                e.preventDefault();
                cerrarModalRol();
                switchView('carreras');
            });
        }
        if (lnkBienestar) {
            lnkBienestar.addEventListener('click', (e) => {
                e.preventDefault();
                cerrarModalRol();
                switchView('inicio');
                setTimeout(() => {
                    document.getElementById('secretarias-home-section').scrollIntoView({ behavior: 'smooth' });
                }, 300);
            });
        }
        if (lnkInvest) {
            lnkInvest.addEventListener('click', (e) => {
                e.preventDefault();
                cerrarModalRol();
                switchView('investigacion');
            });
        }
        if (lnkContacto) {
            lnkContacto.addEventListener('click', (e) => {
                e.preventDefault();
                cerrarModalRol();
                switchView('contacto');
            });
        }
        if (lnkPosgrado) {
            lnkPosgrado.addEventListener('click', (e) => {
                e.preventDefault();
                cerrarModalRol();
                switchView('investigacion');
            });
        }
    }


    // ==========================================
    // 5. FILTRADO DE NOVEDADES EN TIEMPO REAL
    // ==========================================
    const filterButtons = document.querySelectorAll('.filter-btn');
    const filterableNewsGrid = document.getElementById('filterable-news-grid');
    const newsCards = filterableNewsGrid.querySelectorAll('.news-card');

    function filterNews(categoria) {
        newsCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            
            if (categoria === 'all' || cardCategory === categoria) {
                card.style.display = 'flex';
                // Animación fade sutil
                card.style.opacity = '0';
                setTimeout(() => {
                    card.style.transition = 'opacity 0.3s ease';
                    card.style.opacity = '1';
                }, 50);
            } else {
                card.style.display = 'none';
            }
        });

        // Actualizar botón de filtro activo
        filterButtons.forEach(btn => {
            if (btn.getAttribute('data-filter') === categoria) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const filterVal = btn.getAttribute('data-filter');
            filterNews(filterVal);
        });
    });


    // ==========================================
    // 6. MODAL DE NOTICIAS ("LEER MÁS")
    // ==========================================
    const newsModal = document.getElementById('news-modal');
    const modalNewsTitle = document.getElementById('modal-news-title');
    const modalNewsBody = document.getElementById('modal-news-body');
    const btnNewsModalClose = document.getElementById('btn-news-modal-close');

    // Noticias mockeadas
    const noticiasDetalle = {
        '1': {
            title: "Monitoreo Ambiental en la Cuenca del Limay: Proyecto de Investigación Estudiantil",
            category: "Ambiente",
            date: "28 de Junio, 2026",
            image: "assets/news_ambiente.png",
            content: `
                <p style="margin-bottom: 1.25rem; font-weight: 600; font-size:1.05rem;">Estudiantes avanzados de la Licenciatura en Saneamiento y Protección Ambiental llevaron adelante un nuevo muestreo periódico de aguas en distintos puntos del río Limay.</p>
                <p style="margin-bottom: 1.25rem;">El proyecto, coordinado por el Laboratorio de Toxicología Ambiental (LTA) de FACIAS, busca evaluar la presencia de microplásticos y trazas de agroquímicos en los sedimentos de la costa. Las tareas se concentraron en las zonas balnearias de Neuquén Capital y Plottier.</p>
                <p style="margin-bottom: 1.25rem;">Los resultados preliminares indican que el río mantiene niveles aceptables de aptitud recreativa, aunque se observa una tendencia al alza en la presencia de fibras plásticas de origen urbano. Estos datos serán presentados oficialmente ante la Subsecretaría de Medioambiente provincial en el mes de Julio.</p>
                <p style="font-size: 0.9rem; color: var(--color-text-muted);">Investigación a cargo de la cátedra de Ecología General y Toxicología. Colaboración inter-institucional UNCo - AIC.</p>
            `
        },
        '2': {
            title: "Nuevos Simuladores de Alta Fidelidad para la carrera de Licenciatura en Enfermería",
            category: "Salud",
            date: "22 de Junio, 2026",
            image: "assets/news_salud.png",
            content: `
                <p style="margin-bottom: 1.25rem; font-weight: 600; font-size:1.05rem;">La facultad adquirió dos nuevos maniquíes inteligentes de simulación clínica para su laboratorio en el campus de Allen y Neuquén.</p>
                <p style="margin-bottom: 1.25rem;">Los equipos permiten simular respuestas fisiológicas realistas, tales como paro cardiorrespiratorio, variaciones de presión arterial, y respuesta a fármacos en tiempo real. Esto permitirá a los estudiantes de Licenciatura en Enfermería y Enfermería Profesional realizar prácticas profesionales supervisadas en un entorno controlado y seguro antes de sus rotaciones hospitalarias.</p>
                <p style="margin-bottom: 1.25rem;">"Esta incorporación pone a nuestra facultad a la vanguardia de la enseñanza en salud en la región. La simulación de alta fidelidad disminuye el margen de error clínico y brinda una confianza inigualable a los alumnos", destacó la Decana en el acto de presentación.</p>
            `
        },
        '3': {
            title: "Inauguración de la nueva Sede de Biblioteca y Aulas Tecnológicas de FACIAS",
            category: "Institucional",
            date: "15 de Junio, 2026",
            image: "assets/news_campus.png",
            content: `
                <p style="margin-bottom: 1.25rem; font-weight: 600; font-size:1.05rem;">Con la presencia de autoridades rectorales y del gobierno provincial, quedaron formalmente habilitadas las nuevas salas del campus.</p>
                <p style="margin-bottom: 1.25rem;">La obra edilicia de 450 metros cuadrados cuenta con una sala silenciosa de lectura con capacidad para 80 estudiantes, una hemeroteca actualizada y un aula informática con 30 puestos equipados con software de Sistemas de Información Geográfica (SIG) orientados al análisis ambiental.</p>
                <p style="margin-bottom: 1.25rem;">El espacio estará abierto al público de lunes a viernes en el horario corrido de 8:00 a 20:00 hs. Contará también con sistema de Wi-Fi libre para todos los estudiantes y docentes de la universidad.</p>
            `
        },
        '4': {
            title: "Apertura de inscripciones para el segundo cuatrimestre ciclo lectivo 2026",
            category: "Academica",
            date: "10 de Junio, 2026",
            image: "assets/news_campus.png",
            content: `
                <p style="margin-bottom: 1.25rem; font-weight: 600; font-size:1.05rem;">La Secretaría Académica de FACIAS informa las fechas de reincorporación y matriculación a materias del segundo periodo anual.</p>
                <p style="margin-bottom: 1.25rem;">El proceso se realizará del 3 al 14 de Agosto del corriente año a través del portal SIU Guaraní. Está destinado a aquellos alumnos que deseen retomar sus planes de estudio o cursar asignaturas electivas anuales y cuatrimestrales.</p>
                <p style="margin-bottom: 1.25rem;">Es requisito indispensable contar con el legajo al día y tener aprobadas las materias correlativas correspondientes según plan de estudio. Las clases presenciales iniciarán el lunes 17 de Agosto en las tres sedes de la facultad.</p>
            `
        },
        '5': {
            title: "1° Seminario Regional de Salud Ambiental y Energías Renovables",
            category: "Ambiente",
            date: "05 de Junio, 2026",
            image: "assets/news_ambiente.png",
            content: `
                <p style="margin-bottom: 1.25rem; font-weight: 600; font-size:1.05rem;">Un espacio de debate y exposición sobre la matriz energética y los riesgos sanitarios en el Alto Valle.</p>
                <p style="margin-bottom: 1.25rem;">El evento se llevará a cabo los días 24 y 25 de Septiembre en el Aula Magna de la UNCo Neuquén. Contará con la participación de destacados expertos nacionales y representantes de ONGs ambientales de la provincia.</p>
                <p style="margin-bottom: 1.25rem;">Los temas centrales serán la transición energética patagónica, el impacto de los parques eólicos, y la gestión integrada de la salud en áreas hidrocarburíferas. La entrada es libre y gratuita para toda la comunidad universitaria previa inscripción en nuestro sitio web.</p>
            `
        },
        '6': {
            title: "Campaña de Vacunación contra la Gripe en el campus Neuquén organizada por estudiantes",
            category: "Salud",
            date: "02 de Junio, 2026",
            image: "assets/news_salud.png",
            content: `
                <p style="margin-bottom: 1.25rem; font-weight: 600; font-size:1.05rem;">El proyecto de extensión de la Licenciatura en Enfermería inmunizó a más de 300 personas de la comunidad universitaria.</p>
                <p style="margin-bottom: 1.25rem;">La campaña, planificada de forma conjunta con el Ministerio de Salud de Neuquén, permitió que los alumnos de último año de enfermería realicen sus prácticas de inmunología en campo. Se priorizó a los grupos de riesgo, adultos mayores y personal nodocente de la sede central.</p>
                <p style="margin-bottom: 1.25rem;">"Es una forma directa de devolver a la comunidad y aplicar los conocimientos aprendidos directamente en el territorio", señalaron desde el centro de estudiantes.</p>
            `
        }
    };

    function abrirModalNews(noticiaId) {
        // Buscar primero en las novedades dinámicas cargadas por el CMS
        let data = null;
        if (window.dynamicNewsData) {
            data = window.dynamicNewsData.find(item => item.id === noticiaId);
        }
        
        // Si no se encuentra, buscar en el listado antiguo mockeado
        if (!data) {
            data = noticiasDetalle[noticiaId];
        }
        
        if (!data) return;

        modalNewsTitle.textContent = data.title;
        
        // Normalizar los campos de categoría, fecha, imagen y cuerpo
        const rawCategory = data.categoria || data.category || 'Novedad';
        const prettyCategory = rawCategory.charAt(0).toUpperCase() + rawCategory.slice(1).toLowerCase();
        
        const rawDate = data.fecha || data.date || '';
        const imgUrl = data.imagen || data.image || '';
        
        // Conversión básica de Markdown a párrafos HTML para el campo 'body' del CMS
        let bodyHtml = data.content || '';
        if (!bodyHtml && data.body) {
            bodyHtml = data.body
                .split("\n\n")
                .map(p => p.trim() ? `<p style="margin-bottom: 1.25rem;">${p.replace(/\n/g, '<br>')}</p>` : '')
                .join("");
        }

        modalNewsBody.innerHTML = `
            <div style="margin-bottom: 1.5rem; border-radius: var(--border-radius-md); overflow:hidden; height:250px;">
                <img src="${imgUrl}" alt="${data.title}" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem; font-size:0.85rem;">
                <span style="background-color: var(--color-secondary); color: white; padding: 0.25rem 0.75rem; border-radius: 50px; font-weight:700;">${prettyCategory}</span>
                <span style="color:var(--color-text-muted); font-weight:600;">${rawDate}</span>
            </div>
            <div style="line-height:1.7; color: var(--color-text-dark);">
                ${bodyHtml}
            </div>
        `;
        
        newsModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function cerrarModalNews() {
        newsModal.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Vincular todos los gatillos de noticia en el DOM (en home y en view filtrable)
    document.body.addEventListener('click', (e) => {
        // Encontrar si el clic fue en un enlace "Leer más"
        const trigger = e.target.closest('.modal-trigger');
        if (trigger) {
            e.preventDefault();
            const noticiaId = trigger.getAttribute('data-noticia');
            abrirModalNews(noticiaId);
        }
    });

    btnNewsModalClose.addEventListener('click', cerrarModalNews);
    
    newsModal.addEventListener('click', (e) => {
        if (e.target === newsModal) cerrarModalNews();
    });


    // ==========================================
    // 7. FORMULARIO DE CONTACTO (INTERACTIVIDAD)
    // ==========================================
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Simular envío
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            
            // Mostrar confirmación premium
            alert(`¡Gracias, ${name}! Tu consulta ha sido recibida con éxito. Nos comunicaremos a tu correo (${email}) a la brevedad.`);
            
            contactForm.reset();
        });
    }

    // ==========================================
    // 8. ACCIÓN AL MAPA CALENDARIO
    // ==========================================
    const quickCalendario = document.getElementById('quick-calendario');
    if (quickCalendario) {
        quickCalendario.addEventListener('click', (e) => {
            e.preventDefault();
            alert("El Calendario Académico Oficial 2026/2027 se abrirá en formato PDF próximamente. Consultar en la ventanilla de Secretaría Académica para obtener la versión preliminar.");
        });
    }

    // ==========================================
    // 9. HERO SLIDER INTERACTIVO
    // ==========================================
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-slider-dot');
    const prevBtn = document.querySelector('.hero-slider-btn.prev');
    const nextBtn = document.querySelector('.hero-slider-btn.next');
    
    let currentSlide = 0;
    let sliderInterval;

    function showSlide(index) {
        if (index >= slides.length) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = slides.length - 1;
        } else {
            currentSlide = index;
        }

        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        if (slides[currentSlide]) slides[currentSlide].classList.add('active');
        if (dots[currentSlide]) dots[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    function startAutoSlider() {
        clearInterval(sliderInterval);
        sliderInterval = setInterval(nextSlide, 5000);
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            startAutoSlider();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            startAutoSlider();
        });
    }

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            const slideIndex = parseInt(dot.getAttribute('data-slide'));
            showSlide(slideIndex);
            startAutoSlider();
        });
    });

    if (slides.length > 0) {
        startAutoSlider();
    }

});

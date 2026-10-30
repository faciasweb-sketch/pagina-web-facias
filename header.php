<?php
// Determinar si la página actual es la portada (index.php)
$is_home_page = (basename($_SERVER['PHP_SELF']) === 'index.php');
$home_prefix = $is_home_page ? '' : 'index.php';
$header_sticky_style = $is_home_page ? '' : 'position: sticky; top: 0; z-index: 1000; background: #ffffff; box-shadow: var(--shadow-subtle);';
?>
<!-- ENCABEZADO INSTITUCIONAL -->
<header class="header <?= $is_home_page ? '' : 'header-subpage' ?>" id="main-header" <?= $header_sticky_style ? 'style="' . $header_sticky_style . '"' : '' ?>>
    <div class="container header-container">
        <!-- Logos Institucionales -->
        <a href="index.php" class="logo" id="header-logo-link" aria-label="FACIAS - Página principal">
            <img src="assets/logo_facias.png" alt="Logo FACIAS" class="logo-img">
            <img src="assets/logo_unco.png" alt="Logo UNCo" class="logo-img">
        </a>

        <!-- Menú de Navegación con Dropdowns -->
        <nav id="nav-navigation" aria-label="Navegación principal">
            <ul class="nav-menu" id="nav-links">
                <!-- Institucional -->
                <li class="nav-item dropdown">
                    <a href="<?= $home_prefix ?>#institucional" class="nav-link dropdown-toggle" id="nav-item-institucional">
                        Institucional
                        <svg class="dropdown-arrow" viewBox="0 0 20 20" fill="currentColor" width="12" height="12">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $home_prefix ?>#institucional-autoridades" class="dropdown-item" data-action="autoridades">Autoridades</a></li>
                        <li><a href="consejo-directivo.php" class="dropdown-item" data-action="consejo">Consejo Directivo</a></li>
                        <li><a href="<?= $home_prefix ?>#institucional-historia" class="dropdown-item" data-action="historia">Nuestra Historia</a></li>
                    </ul>
                </li>

                <!-- Carreras -->
                <li class="nav-item dropdown">
                    <a href="<?= $home_prefix ?>#carreras" class="nav-link dropdown-toggle" id="nav-item-carreras">
                        Carreras
                        <svg class="dropdown-arrow" viewBox="0 0 20 20" fill="currentColor" width="12" height="12">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $home_prefix ?>#carreras" class="dropdown-item" data-action="carreras">Grado</a></li>
                        <li><a href="posgrado.php" class="dropdown-item">Posgrado</a></li>
                    </ul>
                </li>

                <!-- Sedes -->
                <li class="nav-item">
                    <a href="sedes.php" class="nav-link" id="nav-item-sedes">Sedes</a>
                </li>

                <!-- Contacto -->
                <li class="nav-item">
                    <a href="<?= $home_prefix ?>#contacto" class="nav-link" id="nav-item-contacto" data-action="contacto">Contacto</a>
                </li>
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
<?php if (!$is_home_page): ?>
<script>
// Manejo interactivo del menú móvil y dropdowns en subpáginas
document.addEventListener('DOMContentLoaded', function() {
    var navToggle = document.getElementById('nav-menu-toggle');
    var navLinks = document.getElementById('nav-links');
    if (navToggle && navLinks) {
        navToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            var isExpanded = navToggle.getAttribute('aria-expanded') === 'true';
            navToggle.setAttribute('aria-expanded', !isExpanded);
            navToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
    }

    var dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    dropdownToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                e.stopPropagation();
                var parent = toggle.closest('.nav-item.dropdown');
                document.querySelectorAll('.nav-item.dropdown').forEach(function(item) {
                    if (item !== parent) item.classList.remove('active');
                });
                if (parent) parent.classList.toggle('active');
            }
        });
    });

    document.addEventListener('click', function() {
        if (window.innerWidth <= 992) {
            document.querySelectorAll('.nav-item.dropdown').forEach(function(item) {
                item.classList.remove('active');
            });
        }
    });
});
</script>
<?php endif; ?>

<?php
session_start();

// Configuración de credenciales de acceso
$ADMIN_USER = 'facias.videos@gmail.com';
$ADMIN_PASS = '$0p0rt3F4c!@s';

$novedades_dir = __DIR__ . '/../datos/novedades';
$assets_dir = __DIR__ . '/../assets';

if (!is_dir($novedades_dir)) {
    @mkdir($novedades_dir, 0755, true);
}
if (!is_dir($assets_dir)) {
    @mkdir($assets_dir, 0755, true);
}

// Opciones oficiales de Público y Tema
$OPCIONES_PUBLICO = [
    'Todos',
    'Ingresantes',
    'Estudiantes',
    'Docentes',
    'Graduados',
    'Organizaciones'
];

$OPCIONES_TEMA = [
    'Todos',
    'Concursos docentes',
    'Mesas de examen',
    'Horarios',
    'Convocatorias',
    'Becas',
    'Posgrado',
    'Cursos'
];

// Helper para meses en español
function fecha_espanol_actual() {
    $meses = [
        1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril',
        5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto',
        9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre'
    ];
    $dia = date('d');
    $mes = $meses[(int)date('n')];
    $anio = date('Y');
    return "$dia de $mes, $anio";
}

// Helper para inicializar el contenido en el editor Quill
function preparar_body_para_editor($body) {
    if (empty($body)) return '';
    // Si contiene etiquetas HTML, adaptar rutas relativas para el admin (../assets/)
    if (preg_match('/<[a-z][\s\S]*>/i', $body)) {
        $body = str_replace('src="assets/', 'src="../assets/', $body);
        $body = str_replace('src="Assets/', 'src="../assets/', $body);
        return $body;
    }
    // Si es texto plano clásico, convertir saltos de línea a párrafos HTML
    $paragraphs = explode("\n\n", str_replace("\r\n", "\n", $body));
    $html = '';
    foreach ($paragraphs as $p) {
        $p = trim($p);
        if ($p !== '') {
            $html .= '<p>' . nl2br(htmlspecialchars($p)) . '</p>';
        }
    }
    return $html;
}

// Procesar Logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $_SESSION = [];
    session_destroy();
    header('Location: index.php');
    exit;
}

// Procesar Login
$login_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if ($username === $ADMIN_USER && $password === $ADMIN_PASS) {
        $_SESSION['facias_admin_logged'] = true;
        $_SESSION['facias_admin_user'] = $username;
        header('Location: index.php');
        exit;
    } else {
        $login_error = 'Usuario o contraseña incorrectos. Por favor, reintenta.';
    }
}

// Verificar si está autenticado
$is_logged = isset($_SESSION['facias_admin_logged']) && $_SESSION['facias_admin_logged'] === true;

// Si está autenticado, procesar acciones
$mensaje_exito = '';
$mensaje_error = '';

if ($is_logged) {
    // AJAX: Subir imagen insertada en el cuerpo de la novedad
    if (isset($_GET['action']) && $_GET['action'] === 'upload_inline_image' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        header('Content-Type: application/json; charset=utf-8');
        if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            echo json_encode(['success' => false, 'error' => 'No se recibió ninguna imagen o ocurrió un error al subirla.']);
            exit;
        }

        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $permitidas = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
        if (!in_array($ext, $permitidas)) {
            echo json_encode(['success' => false, 'error' => 'Formato no permitido. Solo se aceptan JPG, PNG, WebP o GIF.']);
            exit;
        }

        $slug_clean = preg_replace('/[^a-zA-Z0-9]+/', '_', strtolower(pathinfo($_FILES['image']['name'], PATHINFO_FILENAME)));
        $nombre_img = 'body_' . date('Ymd_His') . '_' . substr($slug_clean, 0, 20) . '.' . $ext;
        $destino_img = $assets_dir . '/' . $nombre_img;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $destino_img)) {
            echo json_encode([
                'success' => true,
                'url' => 'assets/' . $nombre_img
            ]);
            exit;
        } else {
            echo json_encode(['success' => false, 'error' => 'No se pudo guardar la imagen en el servidor. Verifica permisos de la carpeta assets.']);
            exit;
        }
    }

    // Eliminar noticia
    if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
        $del_id = basename($_GET['id']);
        $file_to_del = $novedades_dir . '/' . $del_id . '.json';
        if (file_exists($file_to_del)) {
            @unlink($file_to_del);
            header('Location: index.php?msg=deleted');
            exit;
        }
    }

    // Guardar / Crear noticia
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_novedad'])) {
        $edit_id = isset($_POST['edit_id']) ? trim($_POST['edit_id']) : '';
        $titulo = isset($_POST['title']) ? trim($_POST['title']) : '';
        
        // Procesar Público (Filtro 1) - Soporte múltiple
        $publico_array = [];
        if (isset($_POST['publico'])) {
            if (is_array($_POST['publico'])) {
                $publico_array = array_values(array_intersect($_POST['publico'], $OPCIONES_PUBLICO));
            } else {
                $publico_array = [trim($_POST['publico'])];
            }
        }
        if (in_array('Todos', $publico_array) && count($publico_array) > 1) {
            $publico_array = array_values(array_diff($publico_array, ['Todos']));
        }
        if (empty($publico_array)) {
            $publico_array = ['Todos'];
        }
        $publico = implode(', ', $publico_array);

        $tema = isset($_POST['tema']) ? trim($_POST['tema']) : 'Todos';
        $fecha = isset($_POST['fecha']) && !empty(trim($_POST['fecha'])) ? trim($_POST['fecha']) : fecha_espanol_actual();
        
        // Contenido / Cuerpo: normalizar rutas relativas para la web
        $cuerpo = isset($_POST['body']) ? trim($_POST['body']) : '';
        $cuerpo = str_replace(['src="../assets/', 'src="../Assets/'], 'src="assets/', $cuerpo);

        $imagen_actual = isset($_POST['imagen_actual']) ? trim($_POST['imagen_actual']) : '';

        if (empty($titulo)) {
            $mensaje_error = 'El título de la novedad es obligatorio.';
        } else {
            // Manejo de imagen de portada
            $ruta_imagen = $imagen_actual;
            if (isset($_FILES['imagen_file']) && $_FILES['imagen_file']['error'] === UPLOAD_ERR_OK) {
                $ext = strtolower(pathinfo($_FILES['imagen_file']['name'], PATHINFO_EXTENSION));
                $permitidas = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
                if (in_array($ext, $permitidas)) {
                    $slug_img = preg_replace('/[^a-zA-Z0-9]+/', '-', strtolower($titulo));
                    $nombre_img = date('Ymd_His') . '_' . substr($slug_img, 0, 30) . '.' . $ext;
                    $destino_img = $assets_dir . '/' . $nombre_img;
                    if (move_uploaded_file($_FILES['imagen_file']['tmp_name'], $destino_img)) {
                        $ruta_imagen = 'assets/' . $nombre_img;
                    }
                }
            }

            if (empty($ruta_imagen)) {
                $ruta_imagen = 'assets/logo_facias.png';
            }

            // Generar o mantener ID de archivo
            if (!empty($edit_id)) {
                $filename = $edit_id . '.json';
            } else {
                $slug = preg_replace('/[^a-zA-Z0-9]+/', '-', strtolower($titulo));
                $slug = trim($slug, '-');
                $filename = date('Y-m-d') . '-' . substr($slug, 0, 40) . '.json';
            }

            $datos_novedad = [
                'title' => $titulo,
                'publico' => $publico,
                'tema' => $tema,
                'categoria' => $publico, // Compatibilidad con versiones previas
                'fecha' => $fecha,
                'imagen' => $ruta_imagen,
                'body' => $cuerpo
            ];

            $guardado = file_put_contents(
                $novedades_dir . '/' . $filename,
                json_encode($datos_novedad, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
            );

            if ($guardado !== false) {
                header('Location: index.php?msg=saved');
                exit;
            } else {
                $mensaje_error = 'No se pudo guardar el archivo. Verifica los permisos de escritura.';
            }
        }
    }

    if (isset($_GET['msg']) && $_GET['msg'] === 'saved') {
        $mensaje_exito = '¡Novedad guardada y publicada correctamente en la web!';
    } elseif (isset($_GET['msg']) && $_GET['msg'] === 'deleted') {
        $mensaje_exito = 'Novedad eliminada correctamente.';
    }

    // Cargar todas las novedades existentes
    $lista_novedades = [];
    $archivos = glob($novedades_dir . '/*.json');
    if ($archivos) {
        rsort($archivos);
        foreach ($archivos as $arch) {
            $raw = file_get_contents($arch);
            if ($raw !== false) {
                $item = json_decode($raw, true);
                if ($item) {
                    $item['id'] = basename($arch, '.json');
                    $lista_novedades[] = $item;
                }
            }
        }
    }

    // Noticia a editar (si aplica)
    $noticia_editando = null;
    if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
        $id_buscado = basename($_GET['id']);
        foreach ($lista_novedades as $nov) {
            if ($nov['id'] === $id_buscado) {
                $noticia_editando = $nov;
                break;
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
    <title>Panel de Administración | Novedades FACIAS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Estilos y Scripts de Quill Editor -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <style>
        :root {
            --color-primary: #004b87;
            --color-primary-dark: #003660;
            --color-secondary: #008f9c;
            --color-accent: #e0f2fe;
            --color-bg-light: #f8fafc;
            --color-text-dark: #1e293b;
            --color-text-muted: #64748b;
            --color-border: #e2e8f0;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.08);
            --border-radius: 12px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--color-bg-light);
            color: var(--color-text-dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header {
            background: #ffffff;
            border-bottom: 1px solid var(--color-border);
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: var(--shadow-sm);
        }

        .header-brand {
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            color: var(--color-primary);
        }

        .header-brand img {
            height: 40px;
        }

        .header-title {
            font-size: 1.15rem;
            font-weight: 700;
        }

        .header-subtitle {
            font-size: 0.8rem;
            color: var(--color-text-muted);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.6rem 1.25rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            text-decoration: none;
            border: 1px solid transparent;
            transition: all 0.2s ease;
        }

        .btn-primary {
            background-color: var(--color-primary);
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: var(--color-primary-dark);
        }

        .btn-outline {
            background-color: transparent;
            border-color: var(--color-border);
            color: var(--color-text-dark);
        }

        .btn-outline:hover {
            background-color: #f1f5f9;
        }

        .btn-danger {
            background-color: #fee2e2;
            color: #dc2626;
        }

        .btn-danger:hover {
            background-color: #fecaca;
        }

        .btn-sm {
            padding: 0.4rem 0.8rem;
            font-size: 0.82rem;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            margin: 2rem auto;
            padding: 0 1.5rem;
            flex: 1;
        }

        /* Login Card */
        .login-wrapper {
            max-width: 440px;
            margin: 5rem auto;
            background: #ffffff;
            padding: 2.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--color-border);
            text-align: center;
        }

        .login-logo {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .login-logo img {
            height: 48px;
        }

        .login-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--color-primary);
            margin-bottom: 0.5rem;
        }

        .login-desc {
            font-size: 0.9rem;
            color: var(--color-text-muted);
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
            text-align: left;
        }

        .form-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 0.4rem;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--color-border);
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.95rem;
            color: var(--color-text-dark);
            background-color: #ffffff;
            transition: border-color 0.2s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--color-primary);
            box-shadow: 0 0 0 3px rgba(0, 75, 135, 0.12);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.25rem;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        .alert {
            padding: 1rem 1.25rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-size: 0.92rem;
            font-weight: 500;
        }

        .alert-success {
            background-color: #ecfdf5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }

        .alert-error {
            background-color: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        /* Card Section */
        .card {
            background: #ffffff;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--color-border);
            padding: 1.75rem;
            margin-bottom: 2rem;
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--color-border);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--color-primary);
        }

        /* Table */
        .news-table {
            width: 100%;
            border-collapse: collapse;
        }

        .news-table th {
            text-align: left;
            padding: 0.75rem 1rem;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--color-text-muted);
            border-bottom: 2px solid var(--color-border);
        }

        .news-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--color-border);
            vertical-align: middle;
        }

        .news-table tr:hover {
            background-color: #f8fafc;
        }

        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .badge-publico {
            background-color: #e0f2fe;
            color: #0369a1;
        }

        .badge-tema {
            background-color: #f0fdf4;
            color: #15803d;
        }

        .thumb {
            width: 60px;
            height: 45px;
            object-fit: cover;
            border-radius: 6px;
        }

        .actions-cell {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-end;
        }

        .footer {
            text-align: center;
            padding: 1.5rem;
            font-size: 0.85rem;
            color: var(--color-text-muted);
            border-top: 1px solid var(--color-border);
            background: #ffffff;
            margin-top: auto;
        }

        /* Selector de Público (Filtro 1) Múltiple */
        .filter-pills-selector {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            padding: 0.35rem 0;
        }

        .filter-pill-check {
            cursor: pointer;
            user-select: none;
            margin: 0;
            display: inline-block;
        }

        .filter-pill-check input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .filter-pill-check span {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--color-text-dark);
            background-color: #f1f5f9;
            border: 1.5px solid var(--color-border);
            transition: all 0.2s ease;
        }

        .filter-pill-check span:hover {
            border-color: var(--color-primary);
            background-color: #e0f2fe;
            color: var(--color-primary);
        }

        .filter-pill-check input[type="checkbox"]:checked + span {
            background-color: #0284c7;
            color: #ffffff;
            border-color: #0284c7;
            box-shadow: 0 2px 6px rgba(2, 132, 199, 0.25);
        }

        .filter-pill-check input[type="checkbox"]:checked + span::before {
            content: '✓ ';
            font-weight: 800;
        }

        /* Estilos de Quill Editor */
        .ql-toolbar.ql-snow {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            border-color: var(--color-border);
            background-color: #f8fafc;
        }

        .ql-container.ql-snow {
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            border-color: var(--color-border);
            font-family: inherit;
            font-size: 1rem;
            background-color: #ffffff;
        }

        .ql-editor {
            min-height: 280px;
            line-height: 1.8;
            font-size: 1rem;
            color: var(--color-text-dark);
        }

        .ql-editor img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 1.25rem auto;
            display: block;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <?php if (!$is_logged): ?>
        <!-- PANTALLA DE LOGIN -->
        <div class="login-wrapper">
            <div class="login-logo">
                <img src="../assets/logo_facias.png" alt="FACIAS" onerror="this.src='../Assets/logo_facias.png'">
                <img src="../assets/logo_unco.png" alt="UNCo" onerror="this.src='../Assets/logo_unco.png'">
            </div>
            <h1 class="login-title">Panel de Novedades</h1>
            <p class="login-desc">Ingresá tus credenciales para administrar las publicaciones de FACIAS</p>

            <?php if (!empty($login_error)): ?>
                <div class="alert alert-error"><?php echo htmlspecialchars($login_error); ?></div>
            <?php endif; ?>

            <form method="POST" action="index.php">
                <div class="form-group">
                    <label class="form-label" for="username">Usuario (Email institucional)</label>
                    <input type="email" id="username" name="username" class="form-control" required autofocus value="<?php echo htmlspecialchars(isset($_POST['username']) ? $_POST['username'] : ''); ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" name="login_submit" class="btn btn-primary" style="width: 100%; justify-content: center; margin-top: 1rem; padding: 0.8rem;">
                    Iniciar Sesión
                </button>
            </form>
        </div>

    <?php else: ?>
        <!-- PANTALLA PRINCIPAL DE ADMINISTRACIÓN -->
        <header class="header">
            <a href="index.php" class="header-brand">
                <img src="../assets/logo_facias.png" alt="FACIAS" onerror="this.src='../Assets/logo_facias.png'">
                <div>
                    <div class="header-title">Panel de Novedades FACIAS</div>
                    <div class="header-subtitle">Universidad Nacional del Comahue</div>
                </div>
            </a>
            <div class="header-actions">
                <span style="font-size: 0.85rem; color: var(--color-text-muted);">
                    👤 <?php echo htmlspecialchars($_SESSION['facias_admin_user']); ?>
                </span>
                <a href="../index.php" target="_blank" class="btn btn-outline btn-sm">
                    🌐 Ver Sitio Web
                </a>
                <a href="index.php?action=logout" class="btn btn-danger btn-sm">
                    Cerrar Sesión
                </a>
            </div>
        </header>

        <main class="container">
            <?php if (!empty($mensaje_exito)): ?>
                <div class="alert alert-success"><?php echo htmlspecialchars($mensaje_exito); ?></div>
            <?php endif; ?>
            <?php if (!empty($mensaje_error)): ?>
                <div class="alert alert-error"><?php echo htmlspecialchars($mensaje_error); ?></div>
            <?php endif; ?>

            <!-- FORMULARIO DE CREAR / EDITAR -->
            <div class="card" id="form-card">
                <div class="card-header">
                    <h2 class="card-title">
                        <?php echo $noticia_editando ? '✏️ Editar Novedad' : '➕ Publicar Nueva Novedad'; ?>
                    </h2>
                    <?php if ($noticia_editando): ?>
                        <a href="index.php" class="btn btn-outline btn-sm">Cancelar Edición</a>
                    <?php endif; ?>
                </div>

                <form method="POST" action="index.php" enctype="multipart/form-data">
                    <input type="hidden" name="save_novedad" value="1">
                    <input type="hidden" name="edit_id" value="<?php echo htmlspecialchars($noticia_editando ? $noticia_editando['id'] : ''); ?>">
                    <input type="hidden" name="imagen_actual" value="<?php echo htmlspecialchars($noticia_editando && isset($noticia_editando['imagen']) ? $noticia_editando['imagen'] : ''); ?>">

                    <div class="form-group">
                        <label class="form-label" for="title">Título de la Novedad *</label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Ej: Convocatoria a Becas EVC-CIN 2027" required value="<?php echo htmlspecialchars($noticia_editando ? $noticia_editando['title'] : ''); ?>">
                    </div>

                    <div class="form-row">
                        <!-- FILTRO PÚBLICO (Soporta múltiples opciones) -->
                        <div class="form-group" style="grid-column: 1 / -1;">
                            <label class="form-label">
                                Público Destinatario (Filtro 1) * 
                                <span style="font-size: 0.82rem; font-weight: 500; color: var(--color-text-muted);">
                                    (Podés marcar más de una opción)
                                </span>
                            </label>
                            <div class="filter-pills-selector" id="publico-pills-container">
                                <?php
                                $val_pub = $noticia_editando && isset($noticia_editando['publico']) ? $noticia_editando['publico'] : 'Todos';
                                $val_pub_arr = is_array($val_pub) ? $val_pub : array_map('trim', explode(',', $val_pub));
                                if (empty($val_pub_arr)) $val_pub_arr = ['Todos'];

                                foreach ($OPCIONES_PUBLICO as $opc):
                                    $checked = in_array($opc, $val_pub_arr) ? 'checked' : '';
                                ?>
                                    <label class="filter-pill-check">
                                        <input type="checkbox" name="publico[]" value="<?php echo htmlspecialchars($opc); ?>" class="input-pub-check" data-val="<?php echo htmlspecialchars($opc); ?>" <?php echo $checked; ?>>
                                        <span><?php echo htmlspecialchars($opc); ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- FILTRO TEMA -->
                        <div class="form-group">
                            <label class="form-label" for="tema">Tema (Filtro 2) *</label>
                            <select id="tema" name="tema" class="form-control" required>
                                <?php
                                $val_tema = $noticia_editando && isset($noticia_editando['tema']) ? $noticia_editando['tema'] : 'Todos';
                                foreach ($OPCIONES_TEMA as $opc):
                                ?>
                                    <option value="<?php echo htmlspecialchars($opc); ?>" <?php echo ($val_tema === $opc) ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($opc); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- FECHA -->
                        <div class="form-group">
                            <label class="form-label" for="fecha">Fecha de Publicación</label>
                            <input type="text" id="fecha" name="fecha" class="form-control" placeholder="Ej: <?php echo fecha_espanol_actual(); ?>" value="<?php echo htmlspecialchars($noticia_editando && isset($noticia_editando['fecha']) ? $noticia_editando['fecha'] : fecha_espanol_actual()); ?>">
                        </div>
                    </div>

                    <!-- IMAGEN DE PORTADA -->
                    <div class="form-group">
                        <label class="form-label" for="imagen_file">Imagen de Portada (Tarjeta principal en la web)</label>
                        <input type="file" id="imagen_file" name="imagen_file" class="form-control" accept="image/*">
                        <?php if ($noticia_editando && !empty($noticia_editando['imagen'])): ?>
                            <small style="display:block; margin-top:0.35rem; color: var(--color-text-muted);">
                                Imagen actual: <code><?php echo htmlspecialchars($noticia_editando['imagen']); ?></code>
                            </small>
                        <?php endif; ?>
                    </div>

                    <!-- CUERPO DE LA NOVEDAD CON QUILL EDITOR E IMÁGENES -->
                    <div class="form-group">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem; flex-wrap: wrap; gap: 0.5rem;">
                            <label class="form-label" style="margin-bottom: 0;">
                                Contenido / Cuerpo de la Novedad *
                            </label>
                            <button type="button" class="btn btn-outline btn-sm" id="btn-insert-image" style="color: var(--color-primary); border-color: var(--color-primary); background: #f0f9ff; font-weight: 700;">
                                📷 Insertar Imagen en el texto
                            </button>
                        </div>
                        
                        <div id="editor-container">
                            <?php 
                            if ($noticia_editando && isset($noticia_editando['body'])) {
                                echo preparar_body_para_editor($noticia_editando['body']);
                            }
                            ?>
                        </div>
                        <input type="hidden" name="body" id="body-hidden-input">
                        <small style="display: block; margin-top: 0.5rem; color: var(--color-text-muted);">
                            💡 <strong>Tip:</strong> Podés usar el botón <strong>📷 Insertar Imagen</strong> o el icono de imagen en la barra superior para colocar fotos en cualquier parte de la noticia. También podés formatear títulos, listas, negritas y enlaces.
                        </small>
                    </div>

                    <div style="display:flex; justify-content:flex-end; gap: 1rem; margin-top: 1.5rem;">
                        <?php if ($noticia_editando): ?>
                            <a href="index.php" class="btn btn-outline">Cancelar</a>
                        <?php endif; ?>
                        <button type="submit" class="btn btn-primary" style="padding: 0.75rem 2rem;">
                            <?php echo $noticia_editando ? '💾 Guardar Cambios' : '🚀 Publicar Novedad'; ?>
                        </button>
                    </div>
                </form>
            </div>

            <!-- LISTADO DE NOVEDADES PUBLICADAS -->
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">📰 Novedades Publicadas (<?php echo count($lista_novedades); ?>)</h2>
                    <a href="#form-card" class="btn btn-primary btn-sm" onclick="document.getElementById('title').focus();">
                        ➕ Nueva Publicación
                    </a>
                </div>

                <?php if (empty($lista_novedades)): ?>
                    <p style="text-align: center; color: var(--color-text-muted); padding: 3rem 0;">No hay novedades publicadas aún.</p>
                <?php else: ?>
                    <div style="overflow-x: auto;">
                        <table class="news-table">
                            <thead>
                                <tr>
                                    <th style="width: 70px;">Foto</th>
                                    <th>Título</th>
                                    <th>Público</th>
                                    <th>Tema</th>
                                    <th>Fecha</th>
                                    <th style="text-align: right;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lista_novedades as $nov):
                                    $img_src = !empty($nov['imagen']) ? '../' . ltrim($nov['imagen'], '/') : '../assets/logo_facias.png';
                                    $pub = isset($nov['publico']) && !empty($nov['publico']) ? $nov['publico'] : (isset($nov['categoria']) ? $nov['categoria'] : 'Todos');
                                    $tem = isset($nov['tema']) && !empty($nov['tema']) ? $nov['tema'] : 'Todos';
                                ?>
                                    <tr>
                                        <td>
                                            <img src="<?php echo htmlspecialchars($img_src); ?>" alt="Preview" class="thumb" onerror="this.src='../assets/logo_facias.png'">
                                        </td>
                                        <td>
                                            <strong><?php echo htmlspecialchars($nov['title']); ?></strong>
                                        </td>
                                        <td>
                                            <?php 
                                            $pubs = is_array($pub) ? $pub : array_map('trim', explode(',', $pub));
                                            foreach ($pubs as $p):
                                                if (empty($p)) continue;
                                            ?>
                                                <span class="badge badge-publico" style="margin: 2px 2px 2px 0;"><?php echo htmlspecialchars($p); ?></span>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <span class="badge badge-tema"><?php echo htmlspecialchars($tem); ?></span>
                                        </td>
                                        <td style="font-size: 0.85rem; color: var(--color-text-muted); white-space: nowrap;">
                                            <?php echo htmlspecialchars(isset($nov['fecha']) ? $nov['fecha'] : ''); ?>
                                        </td>
                                        <td>
                                            <div class="actions-cell">
                                                <a href="../noticia.php?id=<?php echo urlencode($nov['id']); ?>" target="_blank" class="btn btn-outline btn-sm" title="Ver en la web">
                                                    👁️
                                                </a>
                                                <a href="index.php?action=edit&id=<?php echo urlencode($nov['id']); ?>#form-card" class="btn btn-outline btn-sm" title="Editar">
                                                    ✏️ Editar
                                                </a>
                                                <a href="index.php?action=delete&id=<?php echo urlencode($nov['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta novedad?');" title="Eliminar">
                                                    🗑️
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </main>

        <footer class="footer">
            Facultad de Ciencias del Ambiente y la Salud &bull; Universidad Nacional del Comahue &bull; Panel de Gestión Directa
        </footer>

        <script>
            // Lógica de selección múltiple de Público
            document.addEventListener('DOMContentLoaded', function() {
                const checks = document.querySelectorAll('.input-pub-check');
                const todosCheck = document.querySelector('.input-pub-check[data-val="Todos"]');

                checks.forEach(chk => {
                    chk.addEventListener('change', function() {
                        const val = this.getAttribute('data-val');
                        if (val === 'Todos') {
                            if (this.checked) {
                                // Desmarcar los demás
                                checks.forEach(c => {
                                    if (c !== todosCheck) c.checked = false;
                                });
                            }
                        } else {
                            if (this.checked) {
                                // Si se marca uno específico, desmarcar 'Todos'
                                if (todosCheck) todosCheck.checked = false;
                            } else {
                                // Si se desmarcó todo, volver a marcar 'Todos'
                                const anyChecked = Array.from(checks).some(c => c !== todosCheck && c.checked);
                                if (!anyChecked && todosCheck) {
                                    todosCheck.checked = true;
                                }
                            }
                        }
                    });
                });

                // Inicialización de Quill Editor
                const editorElem = document.getElementById('editor-container');
                if (editorElem) {
                    const toolbarOptions = [
                        [{ 'header': [1, 2, 3, false] }],
                        ['bold', 'italic', 'underline', 'strike'],
                        [{ 'color': [] }, { 'background': [] }],
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        ['link', 'image'],
                        ['clean']
                    ];

                    const quill = new Quill('#editor-container', {
                        theme: 'snow',
                        placeholder: 'Escribí aquí los detalles de la noticia. Podés insertar imágenes en el texto, dar formato, crear listas y enlaces...',
                        modules: {
                            toolbar: toolbarOptions
                        }
                    });

                    // Función para subir imagen e insertarla en la posición del cursor en Quill
                    function uploadAndInsertImage() {
                        const fileInput = document.createElement('input');
                        fileInput.type = 'file';
                        fileInput.accept = 'image/png, image/jpeg, image/jpg, image/webp, image/gif';
                        fileInput.click();

                        fileInput.onchange = async function() {
                            const file = fileInput.files[0];
                            if (!file) return;

                            // Insertar texto temporal de carga
                            const range = quill.getSelection(true) || { index: quill.getLength() };
                            quill.insertText(range.index, '⏳ Subiendo imagen...', { 'italic': true, 'color': '#0284c7' });

                            const formData = new FormData();
                            formData.append('image', file);

                            try {
                                const res = await fetch('index.php?action=upload_inline_image', {
                                    method: 'POST',
                                    body: formData
                                });
                                const data = await res.json();
                                
                                // Remover texto temporal
                                quill.deleteText(range.index, 19);

                                if (data.success && data.url) {
                                    // En el editor de admin la ruta es ../assets/...
                                    quill.insertEmbed(range.index, 'image', '../' + data.url);
                                    quill.setSelection(range.index + 1);
                                } else {
                                    alert(data.error || 'Error al subir la imagen.');
                                }
                            } catch (err) {
                                quill.deleteText(range.index, 19);
                                alert('Hubo un error de conexión al subir la imagen.');
                            }
                        };
                    }

                    // Asignar al botón de imagen de la barra de herramientas de Quill
                    quill.getModule('toolbar').addHandler('image', function() {
                        uploadAndInsertImage();
                    });

                    // Asignar al botón destacado "Insertar Imagen"
                    const btnInsertImg = document.getElementById('btn-insert-image');
                    if (btnInsertImg) {
                        btnInsertImg.addEventListener('click', function() {
                            uploadAndInsertImage();
                        });
                    }

                    // Al enviar el formulario, sincronizar HTML al input oculto
                    const formCard = document.querySelector('form[action="index.php"]');
                    if (formCard) {
                        formCard.addEventListener('submit', function() {
                            let html = quill.root.innerHTML;
                            if (html === '<p><br></p>') {
                                html = '';
                            }
                            // Normalizar rutas relativas de '../assets/' a 'assets/' para la web pública
                            html = html.replace(/src="\.\.\/assets\//g, 'src="assets/');
                            html = html.replace(/src="\.\.\/Assets\//g, 'src="assets/');
                            document.getElementById('body-hidden-input').value = html;

                            // Validar que al menos un público esté seleccionado
                            const hasPub = Array.from(checks).some(c => c.checked);
                            if (!hasPub && todosCheck) {
                                todosCheck.checked = true;
                            }
                        });
                    }
                }
            });
        </script>
    <?php endif; ?>

</body>
</html>

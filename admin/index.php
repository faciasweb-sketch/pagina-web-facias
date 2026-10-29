<?php
session_start();

// Configuración de credenciales de acceso
$ADMIN_USER = 'facias.videos@gmail.com';
$ADMIN_PASS = '$0p0rt3F4c!@s';

$novedades_dir = __DIR__ . '/../datos/novedades';
$assets_dir = __DIR__ . '/../Assets';

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
        $publico = isset($_POST['publico']) ? trim($_POST['publico']) : 'Todos';
        $tema = isset($_POST['tema']) ? trim($_POST['tema']) : 'Todos';
        $fecha = isset($_POST['fecha']) && !empty(trim($_POST['fecha'])) ? trim($_POST['fecha']) : fecha_espanol_actual();
        $cuerpo = isset($_POST['body']) ? trim($_POST['body']) : '';
        $imagen_actual = isset($_POST['imagen_actual']) ? trim($_POST['imagen_actual']) : '';

        if (empty($titulo)) {
            $mensaje_error = 'El título de la novedad es obligatorio.';
        } else {
            // Manejo de imagen
            $ruta_imagen = $imagen_actual;
            if (isset($_FILES['imagen_file']) && $_FILES['imagen_file']['error'] === UPLOAD_ERR_OK) {
                $ext = strtolower(pathinfo($_FILES['imagen_file']['name'], PATHINFO_EXTENSION));
                $permitidas = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
                if (in_array($ext, $permitidas)) {
                    $slug_img = preg_replace('/[^a-zA-Z0-9]+/', '-', strtolower($titulo));
                    $nombre_img = date('Ymd_His') . '_' . substr($slug_img, 0, 30) . '.' . $ext;
                    $destino_img = $assets_dir . '/' . $nombre_img;
                    if (move_uploaded_file($_FILES['imagen_file']['tmp_name'], $destino_img)) {
                        $ruta_imagen = 'Assets/' . $nombre_img;
                    }
                }
            }

            if (empty($ruta_imagen)) {
                $ruta_imagen = 'Assets/logo_facias.png';
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
                        <!-- FILTRO PÚBLICO -->
                        <div class="form-group">
                            <label class="form-label" for="publico">Público Destinatario (Filtro 1) *</label>
                            <select id="publico" name="publico" class="form-control" required>
                                <?php
                                $val_pub = $noticia_editando && isset($noticia_editando['publico']) ? $noticia_editando['publico'] : 'Todos';
                                foreach ($OPCIONES_PUBLICO as $opc):
                                ?>
                                    <option value="<?php echo htmlspecialchars($opc); ?>" <?php echo ($val_pub === $opc) ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($opc); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
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
                    </div>

                    <div class="form-row">
                        <!-- FECHA -->
                        <div class="form-group">
                            <label class="form-label" for="fecha">Fecha de Publicación</label>
                            <input type="text" id="fecha" name="fecha" class="form-control" placeholder="Ej: <?php echo fecha_espanol_actual(); ?>" value="<?php echo htmlspecialchars($noticia_editando && isset($noticia_editando['fecha']) ? $noticia_editando['fecha'] : fecha_espanol_actual()); ?>">
                        </div>

                        <!-- IMAGEN -->
                        <div class="form-group">
                            <label class="form-label" for="imagen_file">Imagen de Portada (Subir archivo JPG/PNG/WebP)</label>
                            <input type="file" id="imagen_file" name="imagen_file" class="form-control" accept="image/*">
                            <?php if ($noticia_editando && !empty($noticia_editando['imagen'])): ?>
                                <small style="display:block; margin-top:0.35rem; color: var(--color-text-muted);">
                                    Imagen actual: <code><?php echo htmlspecialchars($noticia_editando['imagen']); ?></code>
                                </small>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="body">Contenido / Cuerpo de la Novedad</label>
                        <textarea id="body" name="body" class="form-control" rows="8" placeholder="Escribí aquí los detalles de la noticia. Podés separar párrafos con un renglón en blanco..."><?php echo htmlspecialchars($noticia_editando && isset($noticia_editando['body']) ? $noticia_editando['body'] : ''); ?></textarea>
                    </div>

                    <div style="display:flex; justify-content:flex-end; gap: 1rem; margin-top: 1rem;">
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
                                    $img_src = !empty($nov['imagen']) ? '../' . ltrim($nov['imagen'], '/') : '../Assets/logo_facias.png';
                                    $pub = isset($nov['publico']) && !empty($nov['publico']) ? $nov['publico'] : (isset($nov['categoria']) ? $nov['categoria'] : 'Todos');
                                    $tem = isset($nov['tema']) && !empty($nov['tema']) ? $nov['tema'] : 'Todos';
                                ?>
                                    <tr>
                                        <td>
                                            <img src="<?php echo htmlspecialchars($img_src); ?>" alt="Preview" class="thumb" onerror="this.src='../Assets/logo_facias.png'">
                                        </td>
                                        <td>
                                            <strong><?php echo htmlspecialchars($nov['title']); ?></strong>
                                        </td>
                                        <td>
                                            <span class="badge badge-publico"><?php echo htmlspecialchars($pub); ?></span>
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
    <?php endif; ?>

</body>
</html>

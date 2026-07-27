<?php
// Sanitizar el ID para prevenir directory traversal
$id = isset($_GET['id']) ? basename($_GET['id']) : '';
$file_path = __DIR__ . '/datos/novedades/' . $id . '.json';

$noticia = null;
if ($id && file_exists($file_path)) {
    $content = file_get_contents($file_path);
    if ($content !== false) {
        $noticia = json_decode($content, true);
    }
}

if (!$noticia) {
    // Redirigir a la home si no existe la noticia
    header('Location: index.php');
    exit;
}

$categoria_map = [
    'AMBIENTE' => 'Estudiantes',
    'SALUD' => 'Estudiantes',
    'INSTITUCIONAL' => 'Académica',
    'Estudiantes' => 'Estudiantes',
    'Academica' => 'Académica',
    'Dpto. Docente' => 'Dpto. Docente',
    'ESTUDIANTES' => 'Estudiantes',
    'ACADEMICA' => 'Académica',
    'DPTO_DOCENTE' => 'Dpto. Docente'
];

$cat_pretty = isset($categoria_map[$noticia['categoria']]) ? $categoria_map[$noticia['categoria']] : ucfirst(strtolower($noticia['categoria']));

// Formatear el contenido del body a párrafos HTML
$body_html = '';
if (isset($noticia['body'])) {
    $body_html = implode('', array_map(function($p) {
        $p = trim($p);
        return $p ? '<p style="margin-bottom: 1.5rem; font-size: 1.1rem; line-height: 1.8; color: var(--color-text-dark);">' . nl2br(htmlspecialchars($p)) . '</p>' : '';
    }, explode("\n\n", $noticia['body'])));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($noticia['title']); ?> | FACIAS</title>
    <link rel="stylesheet" href="styles.css?v=1.1">
    <style>
        .article-container {
            max-width: 800px;
            margin: 4rem auto;
            padding: 0 1.5rem;
        }
        .article-header {
            margin-bottom: 2rem;
        }
        .article-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }
        .article-category {
            background-color: var(--color-secondary);
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.05em;
        }
        .article-date {
            color: var(--color-text-muted);
            font-weight: 600;
        }
        .article-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--color-primary);
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }
        .article-img-wrapper {
            width: 100%;
            height: 450px;
            border-radius: var(--border-radius-lg);
            overflow: hidden;
            margin-bottom: 2.5rem;
            box-shadow: var(--shadow-md);
        }
        .article-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .article-body {
            font-size: 1.15rem;
            color: var(--color-text-dark);
            line-height: 1.8;
        }
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--color-primary);
            text-decoration: none;
            font-weight: 700;
            margin-bottom: 3rem;
            transition: var(--transition-smooth);
        }
        .btn-back:hover {
            color: var(--color-secondary);
            transform: translateX(-5px);
        }
        @media (max-width: 768px) {
            .article-title {
                font-size: 1.8rem;
            }
            .article-img-wrapper {
                height: 250px;
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

    <main class="article-container">
        <a href="index.php" class="btn-back">
            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Volver al Inicio
        </a>

        <article>
            <header class="article-header">
                <div class="article-meta">
                    <span class="article-category"><?php echo htmlspecialchars($cat_pretty); ?></span>
                    <span class="article-date"><?php echo htmlspecialchars($noticia['fecha']); ?></span>
                </div>
                <h1 class="article-title"><?php echo htmlspecialchars($noticia['title']); ?></h1>
            </header>

            <div class="article-img-wrapper">
                <img src="<?php echo htmlspecialchars($noticia['imagen']); ?>" alt="<?php echo htmlspecialchars($noticia['title']); ?>" class="article-img">
            </div>

            <div class="article-body">
                <?php echo $body_html; ?>
            </div>
        </article>
    </main>

    <!-- Footer simple -->
    <footer style="background-color: var(--color-primary); color: white; padding: 2rem 0; text-align: center; margin-top: 5rem;">
        <p style="font-size: 0.9rem; opacity: 0.8; margin: 0;">&copy; 2026 Facultad de Ciencias del Ambiente y la Salud - Universidad Nacional del Comahue</p>
    </footer>

</body>
</html>

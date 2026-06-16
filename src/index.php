<?php
require_once __DIR__ . '/config.php';

$view_folder = $is_admin_area ? 'view/admin/' : 'view/';

$page_file_path = $view_folder . $page_name . '.php';

if (!file_exists($page_file_path)) {
    $page_name = '404';
    $page_file_path = $view_folder . '404.php';

    if (!file_exists($page_file_path)) {
        $page_file_path = 'view/404.php';
    }
    http_response_code(404);
}

ob_start();

if (file_exists($page_file_path)) {
    include($page_file_path);
} else {
    echo "<h2 style='text-align: center; margin-top: 50px;'>Erro 404 - Página não encontrada.</h2>";
}

$content = ob_get_clean();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title><?= $is_admin_area ? 'Admin' : 'Área do Cliente'; ?> | Raizes do Nordeste</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="<?= BASE_URL; ?>view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>view/assets/css/style.css">

    <?php

    $page_css_path = $view_folder . 'assets/css/' . $page_name . '.css';

    if ($is_admin_area && !file_exists($page_css_path)) {
        $page_css_path = 'view/assets/css/' . $page_name . '.css';
    }

    if (file_exists($page_css_path)) {
        echo '<link rel="stylesheet" href="' . BASE_URL . $page_css_path . '">';
    }

    ?>

</head>

<body>

    <?php

    $navbar_path = $view_folder . 'includes/navbar.php';
    $sidebar_path = $view_folder . 'includes/sidebar.php';

    if (!file_exists($navbar_path)) $navbar_path = 'view/includes/navbar.php';
    if (!file_exists($sidebar_path)) $sidebar_path = 'view/includes/sidebar.php';

    if ($page_name !== 'login' && $page_name !== '404' && $page_name !== 'cadastro') {
        if (file_exists($navbar_path)) require_once $navbar_path;
        if (file_exists($sidebar_path)) require_once $sidebar_path;
    }

    ?>

    <main>

        <?php

        echo $content;

        ?>

    </main>

    <script src="<?= BASE_URL; ?>view/assets/js/bootstrap.bundle.min.js"></script>

    <?php

    $dashboard_js_path = $view_folder . 'assets/js/dashboard.js';
    if ($is_admin_area && !file_exists($dashboard_js_path)) {
        $dashboard_js_path = 'view/assets/js/dashboard.js';
    }
    if (file_exists($dashboard_js_path)) {
        echo '<script src="' . BASE_URL . $dashboard_js_path . '"></script>' . "\n";
    }

    $script_js_path = $view_folder . 'assets/js/script.js';
    if ($is_admin_area && !file_exists($script_js_path)) {
        $script_js_path = 'view/assets/js/script.js';
    }
    if (file_exists($script_js_path)) {
        echo '    <script src="' . BASE_URL . $script_js_path . '"></script>' . "\n";
    }
    ?>

</body>

</html>
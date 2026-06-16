<?php

if (!defined('BASE_URL')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
    $baseUrl = $protocol . $host . $basePath . '/';
    define('BASE_URL', $baseUrl);
}

$url = isset($_GET['url']) && !empty($_GET['url']) ? rtrim($_GET['url'], '/') : 'login';
$url_parts = explode('/', $url);

$is_admin_area = false;

if (isset($url_parts[0]) && $url_parts[0] === 'admin') {

    $is_admin_area = true;
    $page_name = isset($url_parts[1]) && !empty($url_parts[1]) ? $url_parts[1] : 'login';

} else {

    $page_name = isset($url_parts[0]) && !empty($url_parts[0]) ? $url_parts[0] : 'login';

}

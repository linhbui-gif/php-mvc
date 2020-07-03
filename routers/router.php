<?php

$db = new Connection($connection['host'], $connection['dbname'], $connection['username'], $connection['password']);

$connect = $db->connect();

$request = $_SERVER['REQUEST_URI'];
$view = '';
switch ($request) {
    case '/' :
        // require __DIR__ . '/views/index.php';
        break;
    case '/home' :
        require __DIR__ . '/../app/Controllers/HomeController.php';
        $home = new HomeController($connect);
        $view = $home->index();
        break;
    case '/about' :
        // require __DIR__ . '/views/about.php';
        break;
    default:
        http_response_code(404);
        // require __DIR__ . '/views/404.php';
        break;
}

var_dump($view);
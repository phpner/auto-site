<?php
// Create a Router
$router = new \Bramus\Router\Router();

// Custom 404 Handler
$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    require_once "App/View/404.php";
});


// Static route: / (homepage)
$router->get('/', 'App\Controllers\Index@home');


// Dynamic route: /hello/name
$router->get('/hello/(\w+)', function ($name) {
    echo 'Hello ' . htmlentities($name);
});

// Dynamic route: /ohai/name/in/parts
$router->get('/(\w+-?\w+)(.htm?)?$', 'App\Controllers\PagesAuto@HomeAuto');




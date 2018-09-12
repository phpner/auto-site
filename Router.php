<?php
// Create a Router
$router = new \Bramus\Router\Router();

// Custom 404 Handler
$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    require_once "App/View/404.php";
});


// Главная страница
$router->get('/', 'App\Controllers\Index@home');



$router->get('/prava.html', function () {

    return require_once __DIR__."/App/View/prava.html";

});

$router->get('/politic.html', function () {

    return require_once __DIR__."/App/View/politic.html";

});

$router->get('thankYou.html', function () {

    return require_once __DIR__."/App/View/thankYou.html";

});

// Страницы марок и моделей
$router->get('/(.*).(htm|html|php)$', 'App\Controllers\PagesAuto@HomeAuto');




<?php

include dirname(__DIR__).'/vendor/autoload.php';

$url = $_SERVER['REQUEST_URI'];

$routes = include dirname(__DIR__).'/routes/web.php';

var_dump($routes);

if (false === isset($routes[$url])) {
    echo "Pagina nao encontrada";
    exit;
}

$controller = $routes[$url][0];
$action = $routes[$url][1];

(new $controller)->$action();

<?php

$url = $_SERVER['REQUEST_URI'];

$routes = include '../routes/web.php';

if (false === isset($routes[$url])) {
    echo "Pagina nao encontrada";
    exit;
}

$controller = $routes[$url][0];
$action = $routes[$url][1];

(new $controller)->$action();

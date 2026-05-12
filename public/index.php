<?php

echo "Ola mundo";
?>

<h1>Aula 12/05/2026 18:50</h1>

<?php

die();
include "../vendor/autoload.php";

$url = $_SERVER['REQUEST_URI'];

$routes = include '../routes/web.php';

if (false === isset($routes[$url])) {
    echo "Pagina nao encontrada";
    exit;
}

$controller = $routes[$url][0];
$action = $routes[$url][1];

(new $controller)->$action();

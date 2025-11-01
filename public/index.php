<?php

$url = $_SERVER['REQUEST_URI'];

$routes = include '../routes/web.php';

view($routes[$url] ?? 'notFound');

function view(string $file): void
{
    include "../src/views/{$file}.phtml";
}

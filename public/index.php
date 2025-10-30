<?php

// pegando a url que o usuario ta acessando
$url = $_SERVER['REQUEST_URI'];  

$pagina = match($url) {
    '/' => 'home',
    '/admin' => 'admin', //nome da view
    '/admin/usuarios' => 'usuarios',
    default => '404',
};

view($pagina);

function view(string $nome): void
{
    include "../src/views/_layout/head.phtml";

    include "../src/views/_components/menu.phtml";
    include "../src/views/{$nome}.phtml";

    include "../src/views/_layout/footer.phtml";
}

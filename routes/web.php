<?php

use App\Controller\HomeController;
use App\Controller\ProductController;
use App\Controller\UserController;

return [
    '/' => [HomeController::class, 'index'],
    '/admin' => [HomeController::class, 'admin'],
    '/admin/usuarios' => [UserController::class, 'list'],
    '/admin/produtos' => [ProductController::class, 'list'],
];

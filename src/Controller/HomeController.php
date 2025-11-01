<?php

declare(strict_types=1);

namespace App\Controller;

class HomeController extends AbstractController
{
    public function index(): void
    {
        $this->view('home'); // home.phtml
    }

    public function admin(): void
    {
        $this->view('admin');
    } 
}
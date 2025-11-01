<?php

declare(strict_types=1);

namespace App\Controller;

class UserController extends AbstractController
{ 
    public function list(): void
    {
        $this->view('users');
    }
}
<?php

declare(strict_types=1);

namespace App\Controller;

class ProductController extends AbstractController
{
    public function list(): void
    {
        $this->view('products');
    }
}
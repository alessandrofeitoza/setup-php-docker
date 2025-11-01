<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    public function view(string $file): void
    {
        include "../src/views/_layout/head.phtml";

        include "../src/views/{$file}.phtml";

        include "../src/views/_layout/footer.phtml";
    }
}
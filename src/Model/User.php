<?php

declare(strict_types=1);

namespace App\Model;

class User
{
    public static function findAll(): array
    {
        return [
            'Chiquim',
            'Zezim',
            'Junim',
        ];
    }
}
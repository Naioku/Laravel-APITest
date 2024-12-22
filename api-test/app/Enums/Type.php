<?php

namespace App\Enums;

enum Type: string
{
    case Individual = 'individual';
    case Business = 'business';

    public static function values(): array
    {
        return array_column(Type::cases(), 'value');
    }
}

<?php

namespace App\Enums;

enum Status: string
{
    case Billed = 'billed';
    case Paid = 'paid';
    case Void = 'void';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

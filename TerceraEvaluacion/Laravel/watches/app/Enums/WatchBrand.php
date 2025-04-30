<?php

namespace App\Enums;

enum WatchBrand: string
{
    case ROLEX = 'ROLEX';
    case TAGHEUR = 'TAGHEUR';
    case CASIO = 'CASIO';
    case LOTUS = 'LOTUS';

    public static function values(): array {
        return array_column(self::cases(), 'value');
    }
}

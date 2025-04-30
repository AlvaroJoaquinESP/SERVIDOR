<?php

namespace App\Enums;

enum WatchType: string
{
    case SPORT = 'SPORT';
    case CASUAL = 'CASUAL';
    case BUSINESS = 'BUSINESS';

    public static function values(): array {
        return array_column(self::cases(), 'value');
    }
}

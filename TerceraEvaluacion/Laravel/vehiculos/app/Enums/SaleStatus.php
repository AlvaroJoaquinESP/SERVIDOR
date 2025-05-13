<?php

namespace App\Enums;

enum SaleStatus:string
{
    case CREATED = 'CREATED';
    case PAID = 'PAID';
    case CANCELLED = 'CANCELLED';

    
    public static function values()
    {
        return array_column(self::cases(), 'value');
    }
}

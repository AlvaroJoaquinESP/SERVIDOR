<?php

namespace App\Enums;

enum RentalStatusEnum : string
{
    case ACTIVE = 'ACTIVE';
    case RETURNED = 'RETURNED';
    case INCIDENCE = 'INCIDENCE';

    public static function values() : array 
    {
        return array_column(self::cases(), 'value');
    }
}

<?php

namespace App\Enums;

enum OrderStatusEnum2 : string
{
    case CREATED = 'CREATED';
    case PAID = 'PAID';
    case PROCESSED = 'PROCESSED';
    case CANCELLED = 'CANCELLED';

    public static function values() : array
    {
        return array_column(self::cases(), 'value');
    }
}

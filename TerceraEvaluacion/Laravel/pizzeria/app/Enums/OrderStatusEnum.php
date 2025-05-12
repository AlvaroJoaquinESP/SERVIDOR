<?php

namespace App\Enums;


enum OrderStatusEnum :string
{
    case CREATED = 'CREATED';
    case PAID = 'PAID';
    case IN_PREPARATION = 'IN_PREPARATION';
    case DELIVERED = 'DELIVERED';
    case CANCELLED = 'CANCELLED';

    public static function values()
    {
        return array_column(self::cases(), 'value');
    }
}

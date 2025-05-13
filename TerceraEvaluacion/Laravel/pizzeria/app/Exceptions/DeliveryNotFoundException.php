<?php

namespace App\Exceptions;

use Exception;

class DeliveryNotFoundException extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }
}

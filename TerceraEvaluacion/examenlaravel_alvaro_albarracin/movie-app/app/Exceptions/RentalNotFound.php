<?php

namespace App\Exceptions;

use Exception;

class RentalNotFound extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }
}

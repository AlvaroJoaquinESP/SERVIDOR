<?php

namespace App\Exceptions;

use Exception;

class PreconditionCustomerFailed extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }
}

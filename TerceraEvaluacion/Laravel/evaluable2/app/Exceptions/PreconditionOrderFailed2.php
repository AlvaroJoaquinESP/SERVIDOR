<?php

namespace App\Exceptions;

use Exception;

class PreconditionOrderFailed2 extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }
}

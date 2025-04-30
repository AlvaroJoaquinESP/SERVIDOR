<?php

namespace App\Exceptions;

use Exception;

class OrderNotFoundException extends Exception
{
    protected $code;

    public function __construct($message, $code)
    {
        $this->code = $code;
        parent::__construct($message);
    }
}

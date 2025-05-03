<?php

namespace App\Exceptions;

use Exception;

class WatchNotFoundException extends Exception
{
    protected $code;

    public function __construct($message, $code)
    {
        $this->code = $code;
        // Calling the father class construct. (Exception).
        parent::__construct($message);
    }
}

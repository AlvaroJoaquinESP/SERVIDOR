<?php

namespace App\Exceptions;

use Exception;

class WatchNotFoundException extends Exception
{
    public function __construct($message, $code)
    {
        // Calling the father class construct. (Exception).
        parent::__construct($message);
    }
}

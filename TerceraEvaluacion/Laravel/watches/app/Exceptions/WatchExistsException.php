<?php

namespace App\Exceptions;

use Exception;

class WatchExistsException extends Exception
{   
    public function __construct($message, $code)
    {
        parent::__construct($message);
    }
}

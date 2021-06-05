<?php


namespace Popsicle\Amazon;

use Exception;
use Throwable;

class OAuthException extends Exception
{
    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
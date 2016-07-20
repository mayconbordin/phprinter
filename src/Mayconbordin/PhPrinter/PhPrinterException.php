<?php namespace Mayconbordin\PhPrinter;

use Exception;

class PhPrinterException extends Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

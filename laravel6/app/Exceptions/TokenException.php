<?php


namespace App\Exceptions;

use Throwable;

class TokenException extends BaseException
{
    public $code = '401';
    public $errorCode = 10000;
    public $msg = 'Token已过期或无效Token';

    /**
     * ParamException constructor.
     * @param string $msg
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($msg = "Token已过期或无效Token", $code = 401, Throwable $previous = null)
    {
        parent::__construct($msg, $code, $previous);
    }

}

<?php


namespace App\Exceptions;


class DefaultException extends BaseException
{
    public $code = '500';
    public $errorCode = 10000;
    public $msg = '参数错误';

    /**
     * ParamException constructor.
     * @param string $msg
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($msg = "自定义异常", $code = 500, Throwable $previous = null)
    {
        parent::__construct($msg, $code, $previous);
    }
}

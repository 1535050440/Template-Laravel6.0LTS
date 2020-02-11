<?php
/**
 * Created by PhpStorm.
 * User: 12155
 * Date: 2019/8/7
 * Time: 17:51
 */

namespace App\Exceptions;


use Throwable;

class BaseException extends \Exception
{
    public $code = 500;
    public $msg = '系统x错误';
    public $errorCode = 999;

    /**
     * BaseException constructor.
     * @param string $msg
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($msg = "", $code = 500, Throwable $previous = null)
    {
        $this->msg = $msg;
        $this->code = $code;
        $this->msg = $msg;
        parent::__construct($msg, $code, $previous);
    }


}

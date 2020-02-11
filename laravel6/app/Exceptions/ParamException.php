<?php
/**
 * Created by PhpStorm.
 * User: 12155
 * Date: 2019/8/7
 * Time: 17:52
 */

namespace App\Exceptions;


use Throwable;

class ParamException extends BaseException
{
    public $code = '400';
    public $errorCode = 10000;
    public $msg = '参数错误';

    /**
     * ParamException constructor.
     * @param string $msg
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($msg = "参数错误", $code = 400, Throwable $previous = null)
    {
        parent::__construct($msg, $code, $previous);
    }

}

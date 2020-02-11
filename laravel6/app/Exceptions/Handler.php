<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    private $errorCode;
    private $msg;
    private $code;

    /**
     * Report or log an exception.
     *
     * @param  \Exception $exception
     * @return void
     * @throws Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof BaseException) {
            //  输入自定义异常时：
            $this->code = $exception->code;
            $this->msg = $exception->msg;
            $this->errorCode = $exception->errorCode;
        } else {
            //  非自定义异常[泛指系统错误]
            $this->code = '500';
            $this->msg = 'system_error';
//            $this->errorCode = '999';

            return parent::render($request, $exception);
        }

        // 公共响应头
        header('Content-Type: Application/json');

        $result = [
            'code' => $this->code,
            'msg' => $this->msg,
//            'errorCode' => $this->errorCode,
            'url' => $request->url(),
        ];

//        return request()->json($request,555);
        echo json_encode($result);
        exit;

    }
}

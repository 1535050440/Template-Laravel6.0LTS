<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 请求成功时返回
     *
     * @param array $data
     * @param string $message
     * @param int $code
     * @param array $headers
     * @return JsonResponse
     * @author deng    (2020/02/11 23:21)
     */
    public function success($data = [], $message = '请求成功！', $code = 200, $headers = [])
    {
        return response()->json([
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ]);
    }
}

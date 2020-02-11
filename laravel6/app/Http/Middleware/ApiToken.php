<?php

namespace App\Http\Middleware;

use App\Common\Model\Admin;
use App\Common\Model\User;
use App\Exceptions\ParamException;
use App\Exceptions\TokenException;
use Closure;
use Illuminate\Support\Facades\Cache;

class ApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @throws ParamException
     * @throws TokenException
     */
    public function handle($request, Closure $next)
    {
        $token = trim($request->header('token'));

        return $next($request);
    }
}

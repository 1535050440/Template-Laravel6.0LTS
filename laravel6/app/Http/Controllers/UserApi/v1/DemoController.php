<?php

namespace App\Http\Controllers\UserApi\v1;

use App\Common\Model\User;
use App\Exceptions\DefaultException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DemoController extends Controller
{
    public function demo(Request $request)
    {
        return $this->success($request->all());
    }

}

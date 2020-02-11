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
    protected $no_need_token = [
        'learn'
    ];
    public function clear(Request $request)
    {
        $type = $request->post('type');

        if ($type == 'cache') {
            Artisan::call('cache:clear');
//            Artisan::call('config:clear');
//            Artisan::call('route:clear');
//            Artisan::call('view:clear');
//            Artisan::call('clear-compiled');
//            Artisan::call('modelCache:clear');
            $a = redirect()->back();
            return $this->success($a);
        }

        return $this->success($request->all());
    }

    public function demo(Request $request)
    {
        $a = User::find(5);
        $content = '特3456书yuuo莞6543李zxcz蒜7782法fgnv级';
        $ww = $a->userCopySign($content);
        return $this->success($ww);


        throw new DefaultException('xxx','4001');

        $a = 'demo测试使用';
        return $this->success($a);
        echo 'demo测试使用';
    }

    /**
     * @author deng    (2019/12/2 17:45)
     */
    public function phpinfo()
    {
        echo phpinfo();
    }

    /**
     * 1.请求远程api
     * 2.获取网络图片
     * 3.保存到数据库
     *
     * @author deng    (2019/12/2 17:52)
     */
    public function down()
    {

        echo '通过接口获取图片保存';
    }

    /**
     *
     * @param Request $request
     * @author:  deng    (2019/12/30 17:41)
     */
    public function learn(Request $request)
    {
//        $data = config('web');
//        $data = env('DB_DATABASE');
//        $data = app_path();          F:\GIT\deng\deng-git-laravel-sign\sign\app
//        $data = __("lang.test");
//        $data = str_contains('This is my name', 'mxy');
//        $data = str_limit('我是中国人', 3, '...');
//        $data = str_random(4);
//        $data = secure_asset('img/photo.jpg');
//        $data = url('user/profile', ['id'=>1]);
        //http://laravel.api.shanliwawa.top/user/profile/1   secure_url只生成https
//        $data = url()->full();
//        $data = $token = csrf_token();

//        $data = true;
//        info('Some helpful information!');
//        写入日志
//        DB::connection()->enableQueryLog();  // 开启QueryLog
//        User::find(1);
//        dd(DB::getQueryLog());
//exit;
//    use Illuminate\Support\Facades\Hash;
//        $aa = Hash::make(123456);
//        dd($aa);
//        加密密码
//        $data = strlen(encrypt('aaaaaa'));
//        print_r($data);
        $data = $request->input('title','xxx');


        dd($data);



    }
}

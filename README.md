<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Template-Laravel6.0LTS

###项目初始化

````$xslt
1. git clone git地址

2. composer update

3. 复制 .env.example  后改成  .env

4. 设置key:
    php artisan key:generate

5. 访问：
    http://pin.com/index.php/api/demo

(完)
````

````text

创建model:
php artisan make:model Common\Model\UserModel


````

```text
UserModel:

    protected $table = 'd_user';

    protected $appends = [
        'add_time_date'
    ];

    /**
     * 增加参数
     *
     * @return bool
     * @author:  deng    (2020/2/9 17:36)
     */
    public function getAddTimeDateAttribute()
        {
            if ($this->add_time) {
                $result = date('Y-m-d H:i:s',$this->add_time);
            } else {
                $result = '';
            }
    
            return $result;
    }

```
<?php


namespace App\Common\Model;


use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel
 * @package App\Common\Model
 */
class BaseModel extends Model
{
    //设置不操作时间
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
      //设置模型操作数据表
    public $table = 'user';
    //设置模型操作主件
    protected $primaryKey = 'uid';
    //添加相应的字段
    protected $fillable = ['uname', 'email', 'phone'];

    public function userinfo()
   	{
   		return $this->hasOne('App\Models\user_info','uid');
   	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
         //设置模型操作数据表
    public $table = 'user_info';
    //设置模型操作主件
    protected $primaryKey = 'uid';

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logon extends Model
{
     //设置模型操作操作
    public $table = 'user';
    //设置模型操作主件
    protected $primaryKey = 'uid';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
     //设置模型操作时间操作
    public $table = 'club';
    //设置模型操作主件
    protected $primaryKey = 'cid';
}

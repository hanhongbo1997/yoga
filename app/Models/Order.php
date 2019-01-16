<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     //设置模型操作操作
    public $table = 'order';
    //设置模型操作主件
    protected $primaryKey = 'oid';
}

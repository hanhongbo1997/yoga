<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    //设置模型操作操作
    public $table = 'teacher';
    //设置模型操作主件
    protected $primaryKey = 'tid';
    //设置一对一
    public function teachinfoend()
    {
    	return $this->hasOne('App\Models\Teachinof','tid');
    }
}

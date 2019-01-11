<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
     //设置模型操作操作
    public $table = 'club';
    //设置模型操作主件
    protected $primaryKey = 'cid';

    //模型和Clubinfo一对一关系
    public function clubdetails()
    {
    	return $this->hasOne('App\Models\Clubinfo','clid');
    }
    //模型和Clubsort 一对一关系
    // public function clubsortinfo()
    // {
    // 	return $this->belongsTo('App\Models\Clubsort','csid');
    // }
}

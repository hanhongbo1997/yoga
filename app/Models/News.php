<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //资讯模型
    public $table = 'news';
    public function newinfo()
    {
    	return $this->hasOne('App\Models\NewInfo','niid');
    } 
}

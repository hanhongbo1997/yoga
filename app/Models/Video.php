<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //设置表名
    public $table = 'video';
    public function videodetails()
    {
    	return $this->hasOne('App\Models\VideoDetails','vid');
    } 

    public function comment()
    {
    	return $this->hasOne('App\Models\Comment','video_id');
    } 

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public $table = 'video_comment';
    protected $primaryKey = 'id';
    public function commentuser()
    {
    	return $this->belongsTo('App\Models\Users', 'user_id', 'uid');
    }
    public function commentvideo()
    {
    	return $this->belongsTo('App\Models\Video', 'video_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lessoncomment extends Model
{
    //
    public $table = 'lesson_comment';
    protected $primaryKey = 'id';
    public function commentuser()
    {
    	return $this->belongsTo('App\Models\Users', 'user_id', 'uid');
    }
    public function commentlesson()
    {
    	return $this->belongsTo('App\Models\Lesson', 'lesson_id', 'id');
    }
}

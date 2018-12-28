<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    public $table = 'lesson';
    public function lessondetails()
    {
    	return $this->hasOne('App\Models\LessonDetails','vid');
    } 
}

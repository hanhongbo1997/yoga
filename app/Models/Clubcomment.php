<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clubcomment extends Model
{
    //
    public $table = 'club_comment';
    protected $primaryKey = 'id';
    public function commentuser()
    {
    	return $this->belongsTo('App\Models\Users', 'user_id', 'uid');
    }
}

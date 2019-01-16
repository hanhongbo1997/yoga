<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $table = 'cart';
    protected $primaryKey = 'id';
    public function lessoncart()
    {
    	return $this->belongsTo('App\Models\Lesson', 'cid', 'id');
    }
}

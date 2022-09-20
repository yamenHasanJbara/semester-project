<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $table="cars";
    public function officecars()
    {
    	return $this->belongsTo('App\OfficeCar');
    }
}

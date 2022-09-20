<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rentaloffice extends Model
{
   
	public $table="rentaloffices";
    public function cars()
    {
    	return $this->hasMany('App\Car');
    }

    public function carorders()
    {
    	return $this->hasMany('App\Carorder');
    }

}

<?php

namespace App;

use App\Taxi;
use Illuminate\Database\Eloquent\Model;

class Taxioffice extends Model
{
	 public $table='taxioffices';
	 public function taxis()
    {
    	return $this->hasMany('App\Taxi');
    }  

    public function taxiorders()
   {
   	return $this->hasMany('App\Taxiorder');
   }

}

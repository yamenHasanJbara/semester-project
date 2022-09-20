<?php

namespace App;

use App\Taxioffice;
use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
	public $table='taxis';
    public function taxioffices()
    {
    	return $this->belongTo('App\Taxioffice');
    }
    public function users()
    {
    	return $this->belongTo('App\User');
    }
}

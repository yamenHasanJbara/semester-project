<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servtaxiorder extends Model
{
    public $table='servtaxiorders';

    public function users()
   {
   	return $this->belongsTo('App\User');
   }

   public function taxioffices()
   {
   	return $this->belongsTo('App\Taxioffice');
   }

}

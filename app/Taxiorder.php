<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxiorder extends Model
{
     public $table="taxiorders";
     public function users()
   {
   	return $this->belongsTo('App\User');
   }

   public function taxioffices()
   {
   	return $this->belongsTo('App\Taxioffice');
   }


}

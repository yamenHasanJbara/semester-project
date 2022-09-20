<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carorder extends Model
{
    public $table="carorders";
    public function rentaloffices()
    {
    	return $this->belongsTo('App\Rentaloffice');
    }

    public function users()
    {
    	return $this->belongsTo('App\User');
    }


}

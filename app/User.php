<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{   
    public $table="users";
    public function taxiorders()
   {
    return $this->hasMany('App\Taxiorder');
   }
    public function carorders()
   {
    return $this->hasMany('App\Carorder');
   }

   public function taxis()
   {
    return $this->hasMany('App\Taxi');
   }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FirstName','LastName','email', 'password','MobileNumber','gender','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

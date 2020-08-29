<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

      public  function carts()
     {
       return $this->hasMany('App\cart','User_id');
     }


}

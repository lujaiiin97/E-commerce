<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class merchant extends Authenticatable
{
    use Notifiable, HasApiTokens;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'merchant';


    protected $fillable = [
    'Email', 'Password',
    ];
    
      public  function stores()
     {
       return $this->hasMany('App\store','Merchant_id');
     }
}
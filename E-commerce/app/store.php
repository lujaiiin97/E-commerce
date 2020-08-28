<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    /*
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table = 'store';


    protected $fillable = [
    'Name','Merchant_id'
    ];


     public  function merchent()
    {
      return $this->belongsTo('App\merchent','merchent');
    }

       public  function product()
     {
       return $this->hasMany('App\product','Store_id');
     }
}



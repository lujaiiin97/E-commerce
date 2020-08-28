<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table = 'product';

    protected $fillable = [
    'Name', 'Description','Price'
    ];

     public  function merchent()
    {
      return $this->belongsTo('App\store','store');
    }

     public  function Product_carts()
     {
       return $this->hasMany('App\product_cart','Product_id');
     }



}

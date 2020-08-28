<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'cart';

    protected $fillable = [
    'Total_price'
    ];


    public  function Product_carts()
     {
       return $this->hasMany('App\product_cart','Cart_id');
     }
      public  function user()
    {
      return $this->belongsTo('App\User','User');
    }

    
}

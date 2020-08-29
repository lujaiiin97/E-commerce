<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_cart extends Model
{
    protected $table = 'product_cart';


    protected $fillable = [
    'Product_id', 'Cart_id',
    ];
    
     public  function cart()
    {
      return $this->belongsTo('App\cart','cart');
    }

     public  function product()
    {
      return $this->belongsTo('App\product','product');
    }
}

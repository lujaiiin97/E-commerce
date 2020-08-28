<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product_cart', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('Product_id');
             $table->foreign('Product_id')
             ->references('id')
             ->on('product')
            ->onDelete('cascade');
     
             
             $table->unsignedBigInteger('Cart_id');
             $table->foreign('Cart_id')
             ->references('id')
             ->on('cart')
            ->onDelete('cascade');
                 });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Product_cart');
    }
}

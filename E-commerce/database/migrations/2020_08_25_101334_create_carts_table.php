<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('User_id');
            $table->unsignedBigInteger('Product_id');
            $table->integer('Total_price');

            $table->foreign('User_id')
            ->references('id')
           ->on('users')
           ->onDelete('cascade');


           $table->foreign('Product_id')
           ->references('id')
           ->on('product')
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
        Schema::dropIfExists('cart');
    }
}

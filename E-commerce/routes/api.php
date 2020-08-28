<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login','MerchantController@login');
Route::post('/register','MerchantController@register');
Route::post('/Add_product','ProductController@Add_product');
Route::post('/create_store','StoreController@create_store');
Route::post('/create_cart','CartController@create_cart');
Route::post('/Add_to_cart','CartController@Add_to_cart');


Route::group(['middleware' => ['CheckMerchantToken:merchant']], function () {

});
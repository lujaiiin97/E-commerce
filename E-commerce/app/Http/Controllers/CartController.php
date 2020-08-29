<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use response;
use Auth;
use App\store;
use App\cart;
use App\product_cart;
use App\product;
use App\User;



class CartController extends Controller
{

    // This method for crearing cart for the guests
    public function create_cart(Request $request){
    $data=array(); $message="";  $status=TRUE;   
          //generate new id and token for the guest
        $user = User::create();
       $token = $user->createToken('guest')->accessToken; 
        if($user->save()){
         $cart = new cart;
         $cart->User_id = $user->id;
         //the total price will be increased when the user add products to this cart
         $cart->Total_price = 0;
         if($cart->save()){
           $data = $cart;
           $message='The cart has been created successfully.'; 
         }
        else {
          $status=FALSE; $message= 'Somthing went wrong while creating the cart, please try again!';
         }
        }

    return response()->json(array(['data'=>$data,'token'=>$token],'status'=>$status,'message'=>$message));
    }

    // This method to add products to the guest's cart
        public function Add_to_cart(Request $request){
        $data=array(); $message="";  $status=TRUE;   
        //check if the cart if existing.
         $cart = cart::find($request->cart_id);
         if($cart){
        //check if the product if existing.
        $product = product::find($request->Product_id);
        if($product){
            /*create new row at product_cart table beacuse 
            the relation is many to many between the cart and products*/
            $product_cart = new product_cart;
            $product_cart->cart_id = $request->cart_id;
            $product_cart->Product_id = $request->Product_id;
            //increse the amount of the total price for this cart
            $cart->Total_price += $product->Price;
            if($product_cart->save()){
               $cart->update();
               $data = $cart;
               $message='The product has been added to the cart successfully.';
            }
            }
            else{
           $status=FALSE; $message= 'The product does not exist.';
            }  
         } 
         else{
           $status=FALSE; $message= 'The cart does not exist.';
         }  
        return response()->json(array('data'=>$data,'status'=>$status,'message'=>$message));
    }


}

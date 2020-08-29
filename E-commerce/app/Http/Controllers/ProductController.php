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
use App\merchant;
use App\store;
use App\product;

class ProductController extends Controller
{

    //This method to allow the merchant to add new product to thier stores
    public function Add_product(Request $request){

         $data=array(); $message="";  $status=TRUE;   

         $product = new product;
         $product->Name = $request->Name;
         $product->Description =  $request->Description;
         $product->Price =  $request->Price;
         $product->Store_id =  $request->Store_id;
         
         if($product->save()){
           $data = $product;
           $message='The product has been created successfully.';
         }
         else {
          $status=FALSE; $message= 'Somthing went wrong while adding new product, please try again!';
         }
        return response()->json(array('data'=>$data,'status'=>$status,'message'=>$message));
    }
}

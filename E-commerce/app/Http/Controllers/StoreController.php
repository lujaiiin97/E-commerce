<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use JWTAuth;
use response;
use Auth;
use App\merchant;
use App\store;
use App\product;
class StoreController extends Controller
{
   
    public function create_store(Request $request){
            $data=array(); $message="";  $status=TRUE;   
            $request->validate([
            'Name' => 'required|unique:store', 
        ]);

         $Store = new store;
         $Store->Name = $request->Name;
         $Store->Merchant_id =  $request->Merchant_id;
         if($Store->save()){
            $data = $Store;
           $message='The store has been created successfully.'; 
         }
        else {
          $status=FALSE; $message= 'Somthing went wrong while creating the store, please try again!';
         }

    return response()->json(array('data'=>$data,'status'=>$status,'message'=>$message));
    }

    
}

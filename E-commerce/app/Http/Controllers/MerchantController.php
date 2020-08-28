<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Exceptions\JWTException;
use DB;
use JWTAuth;
use response;
use Auth;
use App\User;
use App\merchant;

class MerchantController extends Controller
{



      public function login(Request $request){
         $data=array(); $message="";  $status=TRUE;   
           $request->validate([
            'Email' => 'required|Email', 
            'Password' => 'required', 
        ]);

        $user = merchant::where('email', $request->Email)->first();
        if (!Hash::check($request->Password, $user->password) || !$user) {
            $status=FALSE;   
            $message='somthing weng wrong while you logged in, please try again!';
        }
           $status=TRUE;
           $data = $user;
           $message='Logged in successfully.';
       return response()->json(array('data'=>[$data,'token'=>$user->createToken('Auth Token')->accessToken],'status'=>$status,'message'=>$message));

    }

      
         

       public function register(Request $request){
       $data=array(); $message="";  $status=TRUE;   

            $validator = Validator::make($request->all(), [ 
            'Email' => 'required|Email', 
            'Password' => 'required', 
        ]);

        $input = $request->all(); 
        if  (merchant::where('email', $request->Email)->first()){
            $status=FALSE;   
            $message='The email is already exists, please try again!';
        }
        else{ 
        $input['Password'] = bcrypt($input['Password']); 
        $user = merchant::create($input); 
        $data['user']=  $user;
        $data['token'] =  $user->createToken('merchant')->accessToken; 

         $message='You have been registerd successfully.';
        }
       
        return response()->json(array('data'=>$data,'status'=>$status,'message'=>$message));


    }
    }

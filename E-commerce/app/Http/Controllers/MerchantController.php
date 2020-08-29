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


    //This method to logged in exisiting merchant
      public function login(Request $request){
         $data=array(); $message="";  $status=TRUE;   
         /*Validate method to make sure the 
         merchant enter his/her Email and password*/
           $request->validate([
            'Email' => 'required|Email', 
            'Password' => 'required', 
        ]);

        $user = merchant::where('email', $request->Email)->first();
        /*check if the email is exist in the database and the
         hashed password equal the plain one.*/
        if (!Hash::check($request->Password, $user->password) || !$user) {
            $status=FALSE;   
            $message='somthing weng wrong while you logged in, please try again!';
        }
           $status=TRUE;
           $data = $user;
           $message='Logged in successfully.';
       return response()->json(array('data'=>[$data,'token'=>$user->createToken('Auth Token')->accessToken],'status'=>$status,'message'=>$message));

    }

      
         
       //This method to register new merchant
       public function register(Request $request){
       $data=array(); $message="";  $status=TRUE;   
         /*Validate method to make sure the 
         merchant enter his/her Unique Email and right password*/
            $validator = Validator::make($request->all(), [ 
            'Email' => 'required|Email|unique:merchant', 
            'Password' => 'required', 
        ]);

        $input = $request->all(); 
        //to retuen an error message if the email is already taken
        if  (merchant::where('email', $request->Email)->first()){
            $status=FALSE;   
            $message='The email is already exists, please try again!';
        }
        else{ 
        //to save the password in a hash way in the database
        $input['Password'] = bcrypt($input['Password']); 
        $user = merchant::create($input); 
        $data['user']=  $user;
        //create token for the merchant
        $data['token'] =  $user->createToken('merchant')->accessToken; 
         $message='You have been registerd successfully.';
        }
       
        return response()->json(array('data'=>$data,'status'=>$status,'message'=>$message));


    }
    }

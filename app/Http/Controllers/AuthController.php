<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller; 
use App\User;
class AuthController extends Controller
{
   public function login(){
   	  return view('auth.login');
   }
   public function handlelogin(Request $request){
   	 
     $this->validate($request, User::$login_validation_rules);
   	 $data =$request->only('email','password');
   	 if(\Auth::attempt($data)){
        $field=\Auth::user()->field;
            if($field=="t"){
   	 	return redirect()->intended('home');}
         else
         {return redirect()->intended('shome');}
   	 }
   	 return back()->withInput()->witherrors(['email' =>'Username or password is wrong']);
   }

 public function logout(){
   	 
   	 \Auth::logout(); 

   	 	return redirect()->route('login');
   	
   }   
}

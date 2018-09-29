<?php

namespace SSS\Http\Controllers\Auth;

use Illuminate\Http\Request;
use SSS\Http\Controllers\Controller;
use Auth;
class SecurityLoginController extends Controller
{
    //
    public function __construct(){

        $this->middleware('guest:security');
    } 

    public function showLoginForm(){

        return view('auth.security_login');
    }

    public function login(Request $request){

        // validate data input

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

        //authenticate security 

        if(Auth::guard('security')
        ->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember)){
            //redirect to security home page
            return redirect()->intended(route('security'));
        }
        
        // if unauthenticated  
        // redirect to staff login page
        return redirect()->back()->withInput($request->only('email','remember'));

    }
}

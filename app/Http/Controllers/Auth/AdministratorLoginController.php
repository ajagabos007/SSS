<?php

namespace SSS\Http\Controllers\Auth;

use Illuminate\Http\Request;
use SSS\Http\Controllers\Controller;
Use Auth;

class AdministratorLoginController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest:administrator');
    }
    public function showLoginForm(){
        return view('auth.administrator_login');
    }
    public function login(Request $request){
        
        //validate the form

        $this->validate($request,[
            'email' => 'required|email',
            'password' =>'required|min:6',
        ]);

        // attempt to login administrators
        if(Auth::guard('administrator')
            ->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){

                //redirect to administrator page
                return redirect()->intended(route('admin'));
        }


        //if unsuccessful, redirect back to the login page with form data
        return redirect()->back()->withInput($request->only(['email','remember']));
    }
}

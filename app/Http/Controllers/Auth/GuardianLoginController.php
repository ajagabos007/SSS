<?php

namespace SSS\Http\Controllers\Auth;

use Illuminate\Http\Request;
use SSS\Http\Controllers\Controller;

Use Auth;

class GuardianLoginController extends Controller
{
    //
    public function __contruct(){
        $this->middleware('guest:guardian');
    }
    public function showLoginForm()
    {
        # code...
        return view('auth.guardian_login');
    }
    public function login(Request $request){

        // validate form
       
        $this->validate($request,[
            'email' => 'required|email',
            'password' =>'required|min:6',
        ]);
        //attempt login and redirect if authenticated
        if(Auth::guard('guardian')
            ->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
                
                //redirect to guidance page
                return redirect()->intended(route('guardian'));
        }

        // redirect if unauthenticated
       return redirect()->back()->withInput($request->only(['email','remember']));
    }
}

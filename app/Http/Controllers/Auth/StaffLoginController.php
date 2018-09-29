<?php

namespace SSS\Http\Controllers\Auth;

use Illuminate\Http\Request;
use SSS\Http\Controllers\Controller;
use Auth;

class StaffLoginController extends Controller
{
    //
    public function __construct(){

        $this->middleware('guest:staff');
    }

    public function showLoginForm(){
        return view('auth.staff_login');
    }
    
    public function login(Request $request){

        //validate form
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);
        
        //authenticate staff

       if(Auth::guard('staff')
           ->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
                return redirect()->intended(route('staff'));
        }
            //redirect if not authenticated

            return redirect()->back()->withInput($request->only(['email','remember']));
    }
    //validate input
    
}

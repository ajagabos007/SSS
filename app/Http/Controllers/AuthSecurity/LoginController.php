<?php

namespace SSS\Http\Controllers\AuthSecurity;

use Illuminate\Http\Request;
use SSS\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

use Auth;
class LoginController extends Controller
{
    //
    public function __construct(){

        $this->middleware('guest:security');
    } 

    public function showLoginForm(){

        return view('authSecurity.login');
    }

    public function login(Request $request){

        // validate data input

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|string',
        ]);

        //authenticate security 

        if(Auth::guard('security')
        ->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember)){
            //redirect to security home page
            return redirect()->intended(route('security'));
        }
        
         // if unauthenticated  
        // redirect to administrator login page  
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username(){
        
        return 'email';
    }

    public function logout(Request $request){

        $this->guard()->logout();
        /*
        The code with label CODE below destroys all session but we
        dont want that cause we want to remain login 
        as other users e.g admin,guardian, security etc until logout

        CODE: $request->session()->invalidate();
        */
        return $this->loggedOut($request) ?: redirect('/');
    }

     /**
     * The security has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function  loggedOut(Request $request){
        
    }

     /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    public function guard(){
        return Auth::guard('security');
    }
}

<?php

namespace SSS\Http\Controllers\AuthGuardian;

use Illuminate\Http\Request;
use SSS\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;


Use Auth;

class LoginController extends Controller
{
    //
    public function __contruct(){
        $this->middleware('guest:guardian')->except('logout');
    }
    public function showLoginForm()
    {
        # code...
        return view('authGuardian.login');
    }
    public function login(Request $request){

        // validate form
       
        $this->validate($request,[
            'email' => 'required|email',
            'password' =>'required|string',
        ]);
        //attempt login and redirect if authenticated
        if($this->guard()
            ->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
                
                //redirect to guidance home page
                return redirect()->intended(route('guardian'));
        }
        
         // if unauthenticated  
        // redirect to administrator login page  
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    
       return redirect()->back()->withInput($request->only(['email','remember']));
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username(){
        
        return 'email';
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        /*
        The CODE below destroys all session but we
        dont want that cause we want to remain login 
        as other users e.g admin,guardian, security etc until logout

        CODE: $request->session()->invalidate();

        */
        return $this->loggedOut($request) ?: redirect('/');
    }

    /**
     * The guardian has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        //
    }
      /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('guardian');
    }
}

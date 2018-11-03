<?php

namespace SSS\Http\Controllers\Auth;

use SSS\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout','studentLogout');
    }

    public function studentLogout(Request $request){

        $this->guard()->logout();
        /*
        The code with label CODE below destroys all session but we
        dont want that cause we want to remain login 
        as other users e.g admin,guardian, security etc until logout

        CODE: $request->session()->invalidate();
        */
        return $this->loggedOut($request) ?: redirect('/');
    }

    
}

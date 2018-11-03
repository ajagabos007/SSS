<?php

namespace SSS\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            
            // I philip James Ajagabos added this
            // from down below
            switch ($guard) {
                case 'administrator':
                    # code...
                    return redirect()->route('admin');
                    break;

                case 'staff':
                    # code...
                    return redirect()->route('staff');
                    break;
                
                case 'guardian':
                    # code...
                    return redirect()->route('guardian');
                    break;

                case 'security':
                    # code...
                    return redirect()->route('security');
                    break;

                default:
                    # code...
                    return redirect()->route('home');
                    break;
            }
            //end here
            
            return redirect('/home');
        }

        return $next($request);
    }
}

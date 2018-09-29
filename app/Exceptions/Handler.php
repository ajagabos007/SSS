<?php

namespace SSS\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

// I philip james ajagabos added this
use Illuminate\Auth\AuthenticationException;
//end here

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        // I Philip James Ajagabos added this

       //end here
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }

    // I Philip James Ajagabos added this
    /**
     * Convert an authentication exception into an unaunthenticated reponse
     * 
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Auth\AuthenticationException $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        # code...
        // if($request->exceptionsJson()){
        //     return response()->json(['error'=>'Unauthenticated'],401);
        // }
        $page;
        $guard = array_get($exception->guards(),0);
        switch ($guard) {
            case 'administrator':
                # code...
                $page='admin.login';
                break;
            case 'guardian':
                # code...
                $page='guardian.login';
                break;
            case 'security':
                # code...
                $page='security.login';
                break;
            case 'staff':
                # code...
                $page='staff.login';
                break;
            default:
                # code...
                $page='login'; 
                break;
        }
      return redirect()->guest(route($page));
    }

       //end here
}

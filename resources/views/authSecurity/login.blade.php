@extends('layouts.sss')
@section('content')
<div class="panel panel-primary col-sm-offset-1 col-sm-10 login-form">
    <div class="panel panel-heading">
        {{__('Security Login')}}
    </div>
     <div class="panel panel-body">
            <form method="POST" action="{{route('security.login.submit')}}"  aria-label="{{ __('Login') }}" class="form-horizontal" role="form">
            @csrf
                <div class="form-group">
                    <label class="control-label col-sm-3" for="email">{{__('E-Mail Address')}}</label>
                    <div class="col-sm-9">
                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required autofocus>
                       @if ($errors->has('email'))
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                         @endif
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-sm-3" for="password">{{__('Password')}}</label>
                    <div class="col-sm-9 ">
                    <input type="password" name='password' class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Enter password" required>
                     @if ($errors->has('password'))
                         <span class="alert-danger" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                           </span>
                    @endif 
                </div>
                </div>
                <div class="form-group"> 
                    <div class="checkbox col-sm-10 col-sm-offset-3">
                        <label for="remember">
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                             {{ __('Remember Me') }}
                         </label> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    </div>
                </div>
            </form>
     </div>
 </div>
 @endsection
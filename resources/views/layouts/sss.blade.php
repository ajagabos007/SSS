<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SSS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <img src="#"/>
                      <a class="navbar-brand" href="{{url('/home')}}">{{ config('app.name', 'SSS') }}</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav nav-tabs">
                        @auth('web')
                         <li><a href="">{{__('Home')}}</a></li>
                        @endauth('web')
                        @auth('administrator')
                            <li><a href="#">{{__('Home')}}</a></li>
                        @endauth('administrator')
                        @auth('staff')
                            <li><a href="#">{{__('Home')}}</a></li>
                        @endauth('staff')
                        @auth('guardian')
                        <li><a href="{{route('guardian')}}">{{__('Home')}}</a></li>
                        @endauth('guardian')
                        @auth('security')
                            <li><a href="#">{{__('Home')}}</a></li>
                        @endauth('security')
                        <li><a href="#">About SSS</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Our policy</a></li>
                    </ul>
                   <ul class="nav navbar-nav navbar-right">
                        
                        <!-- Authentication Links -->
                        @guest
                                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span>{{__('Login')}}</a></li>
                                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span>{{__('Register')}}</a></li>
                            @else
                                <li class="dropdown">
                                    <a class= "dropdown-toggle btn" type="button" data-toggle="dropdown">
                                        {{ Auth::user()->name }}<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @auth('web')
                                            <li><a href="">{{__('Profile')}}</a></li>
                                        @endauth('web')
                                        @auth('administrator')
                                            <li><a href="#">{{__('Profile')}}</a></li>
                                        @endauth('administrator')
                                        @auth('staff')
                                            <li><a href="#">{{__('Profile')}}</a></li>
                                        @endauth('staff')
                                        @auth('guardian')
                                            <li><a href="{{route('guardian/profile',Auth::user()->id)}}">{{__('Profile')}}</a></li>
                                        @endauth('guardian')
                                        @auth('security')
                                            <li><a href="#">{{__('Profile')}}</a></li>
                                        @endauth('security')
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                                
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                        </form>
                                        </li>
                                    </ul>
                                </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid text-center">    
            <div class="row content">
                <div class="col-sm-2 sidenav">
                  @yield('left_sidenav')
                </div>
                <div class="col-sm-8 text-left main"> 
                  <div class="col-sm-offset-2">
                    @include('partials.errors')
                    @include('partials.success')
                    </div>
                    @yield('content')
                </div>
                <div class="col-sm-2 sidenav">
                    @yield('right_sidenav')
                </div>
            </div>
        </div>

        <footer class="footer container-default text-center">
            <p><strong>SSS</strong> &copy; 2018</p>
        </footer>
    </div>
</body>
</html>

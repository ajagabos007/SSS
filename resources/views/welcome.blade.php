<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <style>
            nav{
                /* background-color:f !important; */
            }
            div.jumbotron{
            }
             /* Set black background color, white text and some padding */
             footer {
                    background-color:#f1f1f1;
                    padding: 15px;
                 }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">{{ config('app.name', 'SSS') }}</a>
                    <img src="#" class="navbar-brand">
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Route::has('login'))
                            @auth
                            <li> <a href="{{ url('/home') }}">Home</a></li>
                            @endauth
                            @auth('administrator')
                            <li> <a href="{{ url('/administrator') }}">Admin Home</a></li>
                            @endauth('administrator')
                            @auth('guardian')
                                <li><a href="{{ url('/guardian') }}">Guidance Dashbord</a></li>
                            @endauth('guardian')
                            @auth('staff')
                                <li><a href="{{ url('/staff') }}">Staff Home</a></li>
                            @endauth('staff')
                            @auth('security')
                            <li> <a href="{{ url('/security') }}">Security Home</a></li>
                            @endauth('security')
                        @endif
                         <li> <a href="{{ route('login') }}">Login</a><li>
                        <li> <a href="{{ route('register') }}">Register</a></li>
                   </ul>
                 </div>
             </div>
        </nav>

        
        <div class="container">
            <div class="jumbotron">
              <center>
                    <h1>School Security System <strong>SSS</strong></h1>
                    <h3>Integrating Technology into School Security</h3>
                    <p> Securing and insuring student safety at school is our optimate priority</p>
              </center>
            </div>
            <a class="btn ">Email us</a>&nbsp;
           <a class="btn "> About SSS</a>
        </div>


<footer class="container-fluid text-center">
  <p>Design by Philip James Ajagabos &copy 2018</p>
</footer>
    </body>
</html>

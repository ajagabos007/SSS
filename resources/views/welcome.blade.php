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
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> -->

        <!-- Styles -->
        <!-- <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet"> -->

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
         body{
             background-color:lightblue;
             color:black;
         }
         
        .navbar-default {
         }
                
         .navbar-default a{
            font-family:georgia,garamond,serif;
             color:#333366 !important;
             font-weight:500;
             font-size:120%;
             text-decoration:blink;
             /* color:blue !important; */
             text-transform:uppercase;
         }
         input{
             color:black !important;
         }
         .navbar-default a:hover{

         }
         footer{
             padding:10px;
             background-color:#f8f8f8;
         }
         .sidenav{
             padding:10px;
             margin:0px 0px 0px 0px; #TRLB
         }
         .app{
             margin:0px !important;
             padding:0px !important;
             color:blue;
         }
         .bg-grey{
             background-color:white;
         }
        .section {
      padding: 60px 50px;
  }
         div.jumbotron{
             padding-top: 100px;
            background-color:deepSkyblue !important;
         }
         a:hover{
            background-color:lightblue !important;

         }

    </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">{{ config('app.name', 'SSS') }}</a>
                    <img src="{{asset('images/james.jpg')}}" alt="SSS Logo" class="navbar-brand">
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                     <ul class="nav navbar-nav nav-tabs" >
                        <li><a href="#about" class="active">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#">Policy</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><span clas="glyphicon glyphicon-log-in"></span> <a href="{{ route('login') }}">Login</a><li>
                        <li><span clas="glyphicon glyphicon-pencil"> </span><a href="{{ route('register') }}">Register</a></li>
                   </ul>
                 </div>
             </div>
        </nav>
                <div class="jumbotron ">
                    <center>
                        <h1>School Security System <strong>SSS</strong></h1>
                        <h3>Integrating Technology into School Security</h3>
                        <p> Securing and insuring student safety at school is our optimate priority</p>
                    </center>
                </div>
  <div class="container">

<!-- Container (About Section) -->
    <div id="about" class="section bg-grey container-fl@endsectionuid">
        <div class="row">
            <div class="col-sm-8">
            <h2>ABOUT SSS</h2><br>
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <br><button class="btn btn-default btn-lg">Get in Touch</button>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo"></span>
            </div>
        </div>
    </div>

    <div class="container-fluid  section">
        <div class="row">
            <div class="col-sm-4">
            <span class="glyphicon glyphicon-globe logo slideanim"></span>
            </div>
            <div class="col-sm-8">
            <h2>Our Values</h2><br>
            <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
            <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey section">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Jos, NIG.</p>
      <p><span class="glyphicon glyphicon-phone"></span> +2348030408642</p>
      <p><span class="glyphicon glyphicon-envelope"></span> sss@gmail.com</p>	   
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>	
    </div>
  </div>
</div>

</div>

<footer class="container-fluid text-center">
  <p>Design by Philip James Ajagabos &copy 2018</p>
</footer>
    </body>
</html>

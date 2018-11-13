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
    <!-- <script src="{{ asset('js/sss.js')}}"></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Bootstrap from cdn -->
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Bootstrap from local  -->
    <!-- <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script> -->

    <script>
        jQuery(document).ready(function(){
            jQuery('#country_id').change(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{('/getStates')}}",
                    method: 'get',
                    data:{
                        country_id : jQuery("#country_id").val()
                    },
                    success: function(result){
                        states = jQuery("#state_id");
                        lgas = jQuery('#lga_id');
                        if(result!=""){
                            states.removeAttr('disabled');
                            states.children("").remove();
                            states.append('<option> </option>');
                            for(state in result){
                                states.append("<option value='"+result[state].id+"'>"+result[state].name + "</option>")
                            }
                            lgas.children("").remove();
                            lgas.attr({
                                disabled: 'disabled',
                                style:'border:red yellow 1px',
                            })
                        }
                        else{
                            states.attr('disabled','disabled');
                            states.children("").remove();
                            states.append('<option> </option>');
                            lgas.children("").remove();
                            lgas.attr({
                                disabled: 'disabled',
                                style:'border:red yellow 1px',
                            })
                        }
                            
                    },
                    error: function(){
                        alert("an error occured");
                    }
                    
                });
            });
            jQuery('#state_id').change(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{('/getLgas')}}",
                    method: 'get',
                    data:{
                        state_id : jQuery("#state_id").val()
                    },
                    success: function(result){
                        lgas = jQuery("#lga_id");
                        if(result!=""){
                            lgas.children("").remove();
                            lgas.removeAttr('disabled');
                            lgas.append('<option> </option>');
                            for(lga in result){
                                lgas.append("<option value='"+result[lga].id+"'>"+result[lga].name + "</option>")
                             }
                        }
                        else{
                            lgas.children("").remove();
                            lgas.attr('disabled','disabled');
                            lgas.append('<option> </option>');
                        }
                        
                    },
                    error: function(){
                        alert("Error retrieving the LGA(s)");
                    }
                    
                });
		    });
            jQuery('#school_id').change(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{('/getClasses')}}",
                    method: 'get',
                    data:{
                        school_id : jQuery("#school_id").val()
                    },
                    success: function(result){
                        classes = jQuery("#class_id");
                        if(result!=""){
                            classes.removeAttr('disabled');
                            classes.children("").remove();
                            classes.append('<option> </option>');
                            for(classe in result){
                                classes.append("<option value='"+result[classe].id+"'>"+result[classe].name + "</option>")
                            };
                        }
                        else{
                            classes.attr('disabled','disabled');
                            classes.children("").remove();
                            classes.append('<option> </option>');
                        }
                    },
                    error: function(){
                        alert("Error retreving Level/Class...!!!");
                    }
                    
                });
            });
        });
    </script>
    <style> 
           *{
            font-family:georgia,garamond,serif;

           } 
           body{
               /* background-image:url("{{asset('images/james.jpg')}}") */
           }
           #app{
             margin:30px 0px 0px 0px !important;
             padding:0px !important;
             /* background-color:lightblue; */

         }

        .topnav {
            /* background-image:url("{{asset('images/james.jpg')}}") ; */
         }
         
         .navbar-default a{
             font-weight:500;
             font-size:120%;
             margin:0px;
         }
         main{
             padding-top:55px;
             /* padding-top:100px; */
         }
         .login-form{
             margin:40px 60px;
         }
         a:hover{
             background-color:deepSkyBlue !important;

         }
         footer{
             padding:10px;
             background-color:#f8f8f8;
         }
         .sidenav{
             margin:0px 0px 0px 0px; #TRLB
         }
        

    </style>

</head>
<body>
    <div id="app">
        <nav class="nav navbar-default navbar-fixed-top topnav" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/home')}}"> 
                        <img  src="{{asset('images/sss9.jpg')}}" alt="SSS Logo" class="img img-circle" height="25" width="100" >
                    </a>
                </div>
                <div class="collapse navbar-collapse"  id="myNavbar">
                    <ul class="nav navbar-nav nav-tabs" >
                    @yield('homelink')
                        <li><a href="#" class="active">About</a></li>
                        <li><a href="#" >Contact    </a></li>
                        <li><a href="#">Policy</a></li>
                    </ul>
                   <ul class="nav navbar-nav navbar-right">
                        
                        <!-- Authentication Links -->
                        @guest
                                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> {{__('Login')}}</a></li>
                                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-pencil"></span> {{__('Register')}}</a></li>
                            @else
                                <li class="dropdown">
                                    <a class= "dropdown-toggle btn" type="button" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span> 
                                    @yield('username')

                                        <!--This is show be designed in layouts topBar staff  -->
                                        @auth('staff')
                                            {{('(staff)')}}
                                        @endauth('staff')
                                      <!-- ends here -->
                                    <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        
                                        @yield('topBar_dropdown')
                                        
                                    </ul>
                                </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
       <main>
            <div class="container-fluid text-center">    
                <div class="row content">
                    <div class="col-sm-2 sidenav left">
                    @yield('left_sidenav')
                    </div>
                    <div class="col-sm-8 text-left main"> 
                    <div class="">
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
        </main>
    </div>        
    <footer class="footer container-primary text-center">
                <p><strong>SSS</strong> &copy; 2018</p> 
     </footer>
    </body>
</html>

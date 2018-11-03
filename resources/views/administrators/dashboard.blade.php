@extends('layouts.sss')
@include('layouts.topBar.admin') 
@include('layouts.sideBar.admin')
@section('content')
<div class="panel panel-primary">
        <div class="panel panel-heading">
              <h4> <strong> {{__('Admin Dashboard')}}</strong></h4>
            </div>
            <div class="panel panel-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}

                    </div>
                @endif
                    <div class="well col-sm-5 ">
                        <ul class="nav nav-default ">
                            <li><a class="links" href="{{route('admin.profile',Auth::user()->id)}}">PROFILE</a></li>
                        </ul>
                    </div>
                    <div class="well col-sm-5 col-sm-offset-2">
                        <ul class="nav nav-default ">
                            <li class=""><a class="links">SECURITY SUGGESTIONS</a></li>
                        </ul>
                    </div>
                    <div class="well col-sm-5">
                        <ul class="nav nav-default ">
                            <li class=""><a class="">COMPLAINS</a></li>
                        </ul>
                    </div>
                  <div class="well col-sm-5 col-sm-offset-2">
                        <ul class="nav nav-default ">
                            <li class=""><a class="">NOTIFICATIONS</a></li>
                        </ul>
                    </div>   
                    <div class="well col-sm-5 col">
                        <ul class="nav nav-default ">
                            <li class=""><a class="">PERMISSION FOR ABSENT</a></li>
                        </ul>
                    </div>  
                    <div class="well col-sm-5 col-sm-offset-2">
                        <ul class="nav nav-default ">
                            <li class=""><a class="">STUDENT ATTTEDANCE</a></li>
                        </ul>
                    </div>  
            </div>
        </div>
    @endsection
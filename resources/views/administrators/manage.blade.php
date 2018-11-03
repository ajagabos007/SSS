@extends('layouts.sss')
@include('layouts.topBar.admin') 
@include('layouts.sideBar.admin')
@section('content')
<div class="panel panel-primary">
    <div class="panel panel-heading"><strong>Admin Management Board</strong></div>
    <div class="panel panel-body">
    <div class="panel panel-default col-sm-5 ">
        <div class="panel panel-heading">
            <strong>Schools</strong>
        </div>
            <div class="panel panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li><a class="links" href="{{route('schools.index')}}"><span class="glyphicon glyphicon-list-alt"></span> View all schools</a></li>
                <li><a class="links" href="{{route('schools.create')}}"><span class="glyphicon glyphicon-plus-sign"></span>  Register new School</a></li>
                <li><a class="links">Update School new activity</a></li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default col-sm-5 col-sm-offset-2">
        <div class="panel panel-heading">
            <strong>Staffs</strong>
        </div>
        <div class="panel panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li class=""><a class="{{route('staffs.index')}}"><span class="glyphicon glyphicon-list-alt"></span> View all Staffs</a></li>
                <li class=" "><a class="" href="{{route('staffs.create')}}"><span class="glyphicon glyphicon-plus-sign"></span> Register New Staff</a></li>
                <li class=" "><a class=""><span class="glyphicon glyphicon-minus-sign"></span> Delete a Staff</a></li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default col-sm-5">
        <div class="panel panel-heading">
            <strong>Guardians</strong>
        </div>
            <div class="panel panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li class=""><a class=""><span class="glyphicon glyphicon-list-alt"></span> View all Guardians</a></li>
                <li class=" "><a class=""><span class="glyphicon glyphicon-plus-sign"></span> Register New Guardians</a></li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default  col-sm-5 col-sm-offset-2">
        <div class="panel panel-heading">
            <strong>Students</strong>
        </div>
            <div class="panel panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li class=""><a class=""><span class="glyphicon glyphicon-list-alt"></span> View all Students</a></li>
                <li class=" "><a class=""><span class="glyphicon glyphicon-plus-sign"></span> Register New Student</a></li>
                <li class=" "><a class=""><span class="glyphicon glyphicon-minus-sign"></span> Delete a Student</a></li>
            </ul>
        </div>
    </div> 
 </div> 
</div> 
@endsection
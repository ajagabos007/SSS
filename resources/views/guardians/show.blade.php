@extends('layouts.sss')
 @include('layouts.topBar.guardian')
@section('content')
<div class="panel panel-primary">
    <div class="panel panel-heading">
        {{__('Guardian Profile')}} 
    </div>
     <div class="panel panel-body">
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="name" value="{{$guardian->name}}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="gender">Gender:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="gender"  value="{{__(   SSS\Gender::find($guardian->id)->name )}}" readonly>
                            
                </div>
            
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="address">Address:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="address" value="{{$guardian->address}}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="email" value="{{$guardian->email}}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phone_number">Phone Number:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control disable" id="phone_number" value="{{$guardian->phone_number}}" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <a class="btn btn-primary" href="{{route('guardian/profile/edit',$guardian->id)}}">Edit profile</a>
                </div>
            </div>
        
        </form>
     </div>
 </div>
 @endsection
  
    
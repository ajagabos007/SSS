@extends('layouts.sss')
@include('layouts.sideBar')
@section('content')
<div class="panel panel-primary">
    <div class="panel panel-heading">
        {{__('Edit Profile')}}
    </div>
     <div class="panel panel-body">
        <form class="form-horizontal" method="POST"  action="{{route('guardian/update')}}" role="form">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" value="{{$guardian->name}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="gender">Gender:</label>
                <div class="col-sm-10">
                <select name="gender_id" class="form-control">
                    <option  value="{{__(  $guardian_gender=SSS\Gender::find($guardian->id)->name )}}" >
                        {{__(   SSS\Gender::find($guardian->id)->name )}} </option>
                    @php 
                        $genders = SSS\Gender::all();

                        foreach($genders as $gender){
                            if($gender->name!=$guardian_gender)
                            echo "<option value='$gender->id'>$gender->name</option>";
                        }
                    @endphp
                </select>                            
                </div>
            
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="address">Address:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="address" value="{{$guardian->address}}" >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="email" value="{{$guardian->email}}" >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phone_number">Phone Number:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control disable" id="phone_number" value="{{$guardian->phone_number}}" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success" href="{{route('guardian/profile/edit',$guardian->id)}}">Update profile</a>
                </div>
            </div>
        
        </form>
     </div>
 </div>
 @endsection
  
    
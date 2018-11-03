@extends('layouts.sss')
@include('layouts.topBar.admin') 
@include('layouts.sideBar.admin')
@section('content')
<div class="panel panel-info">
    <div class="panel panel-heading">
        {{__('Admin Profile')}}
    </div>
     <div class="panel panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{route('admin.profile.update',$administrator)}}">
        @csrf
         <fieldset>
            <legend>Pesonal Details</legend>
            <div class="form-group">
                <label for="title" class=" col-sm-2">Title</label>
                <div class="col-sm-10">
                <select name="country_id" class="form-control" onchange="setState()">
                    <option  value="{{__(  $admin_title=SSS\Title::find($administrator->title_id)->name )}}" >
                        {{__(   SSS\Title::find($administrator->title_id)->name )}} </option>
                    @php 
                        $titles = SSS\Title::all();
        
                        foreach($titles as $title){
                            if($title->name!=$admin_title)
                            echo "<option value='$title->id'>$title->name</option>";
                        }
                    @endphp
                </select>
                 </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="surname">Surname:</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control" value="{{__($administrator->surname)}}">
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="first_name">First name:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="first_name" value="{{__($administrator->first_name)}}">
                </div>
            </div>
            @if(!empty($administrator->last_name))
            <div class="form-group">
                <label class=" col-sm-2" for="lastname">Last name:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="last_name" value="{{__($administrator->last_name)}}">
                </div>
            </div>
            @endif
            <div class="form-group">
                <label class=" col-sm-2" for="date_of_birth">Date of Birth:</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="date_of_birth" value="{{$administrator->date_of_birth}}">
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="gender">Gender:</label>
                <div class="col-sm-10">
                <select name="gender_id" class="form-control">
                    <option  value="{{__(  $admin_gender=SSS\Gender::find($administrator->gender_id)->name )}}" >
                        {{__(   SSS\Gender::find($administrator->gender_id)->name )}} </option>
                    @php 
                        $genders = SSS\Gender::all();

                        foreach($genders as $gender){
                            if($gender->name!=$admin_gender)
                            echo "<option value='$gender->id'>$gender->name</option>";
                        }
                    @endphp
                </select> 
                </div>
            
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="country">Country:</label>
                <div class="col-sm-10">
                <select name="country_id" id="country_id" class="form-control">
                    <option  value="{{__(  $admin_country=SSS\Country::find($administrator->country_id)->id )}}" >
                        {{__(   SSS\Country::find($administrator->country_id)->name )}} </option>
                    @php 
                        $countries = SSS\Country::all();
                        foreach($countries as $country){
                            if($country->id!=$admin_country)
                            echo "<option  value='$country->id'>$country->name</option>";
                        }
                    @endphp
                </select> 
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2" for="state">State:</label>
                <div class="col-sm-10">
                    <select name="state_id" id="state_id" class="form-control"> 
                        <option class="state_options"  value="{{__(  $admin_state=SSS\State::find($administrator->state_id)->id )}}" >
                                {{__(   SSS\State::find($administrator->state_id)->name )}} </option>
                        @php 
                            $country =  SSS\Country::find($administrator->country_id);

                            foreach($country->states as $state){
                                if($state->id!=$admin_state)
                                echo "<option class='state_options' value='$state->id'>$state->name</option>";
                            }
                        @endphp
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2" for="lga">LGA:</label>
                <div class="col-sm-10">
                    <select name="lga_id" id="lga_id" class="form-control"> 
                        <option  value="{{__(  $admin_lga=SSS\Lga::find($administrator->lga_id)->id )}}" >
                                {{__(   SSS\Lga::find($administrator->lga_id)->name )}} </option>
                        @php 
                            $country =  SSS\State::find($administrator->state_id);

                            foreach($country->lgas as $lga){
                                if($lga->id!=$admin_lga)
                                echo "<option value='$lga->id'>$lga->name</option>";
                            }
                        @endphp
                    </select>
                </div>
            </div>
           
            <div class="form-group">
                <label class=" col-sm-2" for="address">Address:</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control" id="address" value="{{$administrator->address}}">
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="email" value="{{$administrator->email}}">
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="phone_number">Phone Number:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="phone_number" value="{{__($administrator->phone_number)}}">
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="phone_number"></label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label><input type="radio" name="optradio" checked onchange="hidePasswordField()">Do not change password</label>
                    </div>
                    <div class="radio primary">
                         <label><input type="radio" name="optradio" onchange="showPasswordField()">Change password</label>
                    </div>
                </div>
            </div>
            <div class="form-group hidden password">
                <label class=" col-sm-2" for="password">New Password:</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="password" value="">
                </div>
            </div>
            <div class="form-group hidden password">
                <label class=" col-sm-2" for="cofirm_password">Confirm Password:</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="confirm_password" value="">
                </div>
            </div>
         </fieldset>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-success" type='submit' >Update profile</button>
                </div>
            </div>

        </form>
     </div>
 </div>
 @endsection
  
@extends('layouts.sss')
@include('layouts.topBar.admin')
@include('layouts.sideBar.admin')
@section('content')
<div class="panel panel-info">
    <div class="panel panel-heading">
        {{__('Admin Profile')}}
    </div>
     <div class="panel panel-body">
        <form class="form-horizontal" role="form">
         <fieldset>
            <legend>Pesonal Details</legend>
            <div class="form-group">
                <label for="title" class=" col-sm-2">Title</label>
                <div class="col-sm-10">
                 <p class="">{{__(SSS\Title::find($administrator->title_id)->name)}}</p>
                 </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="surname">Surname:</label>
                <div class="col-sm-10">
                <p  class="" >{{__($administrator->surname)}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="first_name">First name:</label>
                <div class="col-sm-10">
                <p class="" id="first_name" >{{__($administrator->first_name)}}</p>
                </div>
            </div>
            @if(!empty($administrator->last_name))
            <div class="form-group">
                <label class=" col-sm-2" for="lastname">Last name:</label>
                <div class="col-sm-10">
                <p class="" id="last_name" >{{__($administrator->last_name)}}</p>
                </div>
            </div>
            @endif
            <div class="form-group">
                <label class=" col-sm-2" for="date_of_birth">Date of Birth:</label>
                <div class="col-sm-10">
                <p class=" " id="date_of_birth">{{$administrator->date_of_birth}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="gender">Gender:</label>
                <div class="col-sm-10">
                <p class="" id="gender"> {{__(   SSS\Gender::find($administrator->gender_id)->name )}}</p>
                </div>
            
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="country">Country:</label>
                <div class="col-sm-10">
                <p class=" " id="country">{{__(SSS\Country::find($administrator->country_id)->name)}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="state">State:</label>
                <div class="col-sm-10">
                <p class=" " id="state">{{__(SSS\State::find($administrator->state_id)->name)}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="lga">LGA:</label>
                <div class="col-sm-10">
                <p class=" " id="lga">{{__(SSS\Lga::find($administrator->lga_id)->name)}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="address">Address:</label>
                <div class="col-sm-10">
                <p  class="" id="address" >{{$administrator->address}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                <p class="" id="email" >{{$administrator->email}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="phone_number">Phone Number:</label>
                <div class="col-sm-10">
                <p class=" " id="phone_number">{{__($administrator->phone_number)}}</p>
                </div>
            </div>
         </fieldset>
         <fieldset>
            <legend>Next of Kins</legend>
            <div class="form-group">
                <label class=" col-sm-2" for="surname">Name:</label>
                <div class="col-sm-10">
                <p  class="" >{{__(SSS\Title::find($administrator->next_of_kin_title_id)->name)}} {{__($administrator->next_of_kin_name)}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="relationship">Relationship:</label>
                <div class="col-sm-10">
                <p class="" id="relationship" >{{__(SSS\Relationship::find($administrator->next_of_kin_relationship_id)->name)}}</p>
                </div>
            </div>
            
            <div class="form-group">
                <label class=" col-sm-2" for="date_of_birth">Email:</label>
                <div class="col-sm-10">
                <p class=" " id="date_of_birth">{{$administrator->next_of_kin_email}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="gender">Address:</label>
                <div class="col-sm-10">
                <p class="" id="gender"> {{__($administrator->next_of_kin_address)}}</p>
                </div>
            
            </div>
            <div class="form-group">
                <label class=" col-sm-2" for="phone_number">Phone Number:</label>
                <div class="col-sm-10">
                <p class=" " id="phone_number">{{__($administrator->next_of_kin_phone_number)}}</p>
                </div>
            </div>
          
            <div class="form-group">
                <div class="col-sm-offset-10 col-sm-2">
                <a class="btn btn-primary" href="{{route('admin.profile.edit',$administrator->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit profile</a>
                </div>
            </div>
        
        </form>
     </div>
 </div>
 @endsection
  
    
@extends('layouts.sss')
@include('layouts.topBar.admin')
@include('layouts.sideBar.admin')
@section('content')
   <div class="col-sm-offset-1 panel panel-success">
        <div class="panel panel-heading">
            <strong>Register new School</strong>
        </div>
        <div class="panel panel-body">
            <form class="form-horizontal" method="POST" action="{{route('schools.store')}}">
            @csrf
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="school_type_id">School Type:</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="school_type_id" required>
                             <option> </option>
                            @php 
                                $school_types = SSS\School_type::all();
                                foreach($school_types as $school_type)
                                echo "<option value='$school_type->id'> $school_type->name</option>";
                            @endphp
                         </select>
                    </div>
                </div>
                <input name="administrator_id" id="administrator_id" value="{{ Auth::user('administrator')->id  }}" hidden>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="address">Address:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" id="address" value="" required>
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label col-sm-2" for="country_id">Country:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="country_id" id="country_id" required>
                             <option> </option>
                            @php 
                                $countries = SSS\Country::all();
                                foreach($countries as $country)
                                echo "<option value='$country->id'> $country->name</option>";
                            @endphp
                         </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"  for="state_id">Region/State:</label>
                    <div class="col-sm-10">
                    <Select type="text" class="form-control" name="state_id" id="state_id" value="" disabled="disabled" required> 
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lga_id">LGA:</label>
                    <div class="col-sm-10">
                    <select type="text" class="form-control" name="lga_id" id="lga_id" value=""disabled="disabled">
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-primary" type="submit">Register</button>
                    <button class="btn btn-default" type="reset">Reset</button>
                    </div>
                 </div>
                 
            </form>
        </div>
   </div>
@endsection
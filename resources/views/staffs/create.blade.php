@extends('layouts.sss')
@include('layouts.topBar.admin')
@include('layouts.sideBar.admin')
@section('content')
   <div class="col-sm-offset-1 panel panel-default">
        <div class="panel panel-heading">
            <strong>Staff Registration Form</strong>
        </div>
        <div class="panel panel-body">
            <form class="form-horizontal" method="POST" action="{{route('staffs.store')}}">
            @csrf
                <h4>Personal</h4><hr/>
                 <div class="form-group">
                    <label class="control-label col-sm-2" for="title_id">Title:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="title_id" id="title_id" required>
                            <option> </option>
                            @php
                                $titles = SSS\Title::all();
                                foreach($titles as $title)
                                    echo "<option value='$title->id'> $title->name</option>";
                            @endphp
                        </select>  
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Surname:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="surname" id="surname" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="first_name">First name:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="first_name" id="first_name" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="last_name">Last name:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="last_name" id="last_name" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="gender_id">Gender:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="gender_id" id="gender_id" required>
                            <option> </option>
                            @php
                                $genders = SSS\Gender::all();
                                foreach($genders as $gender)
                                    echo "<option value='$gender->id'> $gender->name</option>";
                            @endphp
                        </select>  
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="date_of_birth">Date of Birth</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="email" value="" required>
                    </div>
                </div>
               

                <div class="form-group">
                    <label class="control-label col-sm-2" for="religion_id">Religion:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="religion_id" id="religion_id" required>
                             <option> </option>
                            @php 
                                $religions = SSS\Religion::all();
                                foreach($religions as $religion)
                                echo "<option value='$religion->id'> $religion->name</option>";
                            @endphp
                         </select>
                    </div>
                </div>

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
                    <label class="control-label col-sm-2" for="school_id">School:</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="school_id" id ="school_id" required>
                             <option> </option>
                            @php 
                                $schools= Auth::user('administrator')->schools;
                                foreach($schools as $school)
                                echo "<option value='$school->id'> $school->name</option>";
                            @endphp
                         </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="class_id">Level/Class:</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="class_id"  id = "class_id" disabled="disabled">
                             <option> </option>
                         </select>
                    </div>
                </div>
                <hr/><h4>Next of Kin</h4> <hr/>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="next_of_kins_title_id">Title:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="next_of_kins_title_id" id="next_of_kins_title_id" required>
                            <option> </option>
                            @php
                                $titles = SSS\Title::all();
                                foreach($titles as $title)
                                    echo "<option value='$title->id'> $title->name</option>";
                            @endphp
                        </select>  
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="next_of_kin_name">Name:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="next_of_kin_name" id="next_of_kin_name" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="next_of_kin_relationship_id">Relationship:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="next_of_kin_relationship_id" id="next_of_kin_relationship_id" required>
                             <option> </option>
                            @php 
                                $relationships = SSS\Relationship::all();
                                foreach($relationships as $relationship)
                                echo "<option value='$relationship->id'> $relationship->name</option>";
                            @endphp
                         </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="next_of_kin_phone_number">Phone Num.</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="next_of_kin_phone_number" id="next_of_kin_phone_number" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="next_of_kin_email">Email:</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" name="next_of_kin_email" id="next_of_kin_email" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="next_of_kin_address">Address.</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="next_of_kin_address" id="next_of_kin_address" value="" required>
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
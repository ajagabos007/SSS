@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h2>Student registration form</h2></div>

                <div class="card-body">
                   
                    <form method="POST" action="#" aria-label="{{ __('Register') }}">
                        @csrf
                        <h4 style="text-align:left;">Personal Details</h4>
                        <hr/>
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Tag id') }}</label>
                            <div class="col-md-6">
                                <input id="tag_id" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('tag_id') }}" required autofocus>

                                @if ($errors->has('tag_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tag_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('surname') }}</label>
                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
   
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}"  autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <label for="gender" class="col-md-4 text-md-right">{{ __('Gender ') }}</label>
                            <div class="col-md-6">
                                @foreach($genders as $gender)
                                <input id="gender" type="radio" class="{{ $errors->has('surname') ? ' is-invalid' : '' }}" 
                                name="gender" value="{{$gender->id}}" required autofocus> {{$gender->name}} &nbsp; &nbsp;
                                @endforeach
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>
                            <div class="col-md-6 ">
                                <input id="date_of_birth" type="date" class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus>
                                @if ($errors->has('date_of_birth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
                            <div class="col-md-6">
                                <input list = "countries" name="country_name" id="country_name"  class="form-control{{ $errors->has('country_name') ? ' is-invalid' : '' }}" name="school_id" value="{{ old('school_id') }}" required autofocus>
                                        <datalist id="countries">
                                        @foreach($countries as $country)
                                           <option value= "{{$country->name}}">
                                        @endforeach
                                        </datalist>
                                @if ($errors->has('country_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State of Origin') }}</label>
                            <div class="col-md-6">
                                <input list = "states" name="state_name" id="country_name"  class="form-control{{ $errors->has('state_name') ? ' is-invalid' : '' }}" name="school_id" value="{{ old('state_name') }}" required autofocus>
                                        <datalist id="states">
                                      {{-- @foreach($countries as $country)
                                           <option value= "{{$country->name}}">
                                        @endforeach --}} 
                                            <option value="state of origing">
                                        </datalist>
                                @if ($errors->has('country_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lgas" class="col-md-4 col-form-label text-md-right">{{ __('LGA.') }}</label>
                            <div class="col-md-6">
                                <input list = "lgas" name="lga_name" id="lga_name"  class="form-control{{ $errors->has('lga_name') ? ' is-invalid' : '' }}" name="lga_name" value="{{ old('lga_name') }}" required autofocus>
                                        <datalist id="lgas">
                                      {{--  @foreach($countries as $country)
                                           <option value= "{{$country->name}}">
                                        @endforeach --}}
                                        <option value="LGA">
                                        </datalist> 
                                @if ($errors->has('lga_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lga_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="school_id" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    
                        <h4 style="text-align:left;">Guidance Details</h4>
                        <hr/>
                         <div class="form-group row">
                            <label for="guidance" class="col-md-4 col-form-label text-md-right">{{ __('Guidance') }}</label>

                            <div class="col-md-6">
                            <select id="guidance" name="guidance_id" value=""  class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="guidance_id"  require autofocus>
                                        @foreach($guidances as $guidance)
                                         <option value="{{$guidance->id}}">
                                            {{$guidance->title_id->title->name}} &nbsp; {{$guidance->name}}
                                         </option>
                                        @endforeach
                            </select>
                                @if ($errors->has('guidance'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('guidance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    

                         <div class="form-group row">
                            <label for="relationship_id" class="col-md-4 col-form-label text-md-right">{{ __('Relationship') }}</label>

                            <div class="col-md-6">
                               <select id="relationship_id" name="relationship_id" value="{{ old('address') }}"  class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="school_id"  require autofocus>
                                        <option> </option>
                                        <option value="">Father</option>
                               </select>

                                @if ($errors->has('relationship'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('relationship_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>              
                        <h4 style="text-align:left;">School Details</h4>
                        <hr/>
                        <div class="form-group row">
                            <label for="school_id" class="col-md-4 col-form-label text-md-right">{{ __('School Name') }}</label>

                            <div class="col-md-6">
                                <input id="school_id" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="school_id" value="{{ old('school_id') }}" required autofocus>

                                @if ($errors->has('school_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('school_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <h4 style="text-align:left;">Acount Login Details</h4>
                        <hr/>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="reset" class="btn btn-default">
                                    {{ __('Reset') }}
                                </button>&nbsp;&nbsp;
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

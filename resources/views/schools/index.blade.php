@extends('layouts.sss')
@include('layouts.topBar.admin')
@include('layouts.sideBar.admin')
@section('content')

  <div class="panel panel-success">
    <div class="panel panel-heading col-sm-12">
      <strong>Schools <strong><span class="badge">{{__( Auth::user('administrator')->schools->count())}}</span>
      <a href="{{route('schools.create')}}" class="btn btn-default col-sm-offset-7">
       <span class="glyphicon glyphicon-registration-mark"></span> Register new School
      </a>
    </div>
    <div class="panel panel-body table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr >
            <th>Name</th>
            <th>Type</th>
            <th>Address </th>
            <th>Staffs</th>
            <th>Guardians</th>
            <th>students</th>
          </tr>
        <thead>
        <tbody>
          @foreach($schools->sortBy('name',SORT_REGULAR) as $school)       
            <tr>
              <td class="">{{__($school->name)}}</td>
              <td class="">{{__(SSS\School_type::find($school->school_type_id)->name)}}</td>
              <td class="">{{__($school->address)}}</td>
              <td class="">{{($school->staff)}}</td>
              <td class="">{{($school->guardian)}}</td>
              <td class="">{{($school->student)}}</td>
            <tr>
           @endforeach
        <tbody>
      </table>
    </div>  
@endsection
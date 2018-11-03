@extends('layouts.sss')
@include('layouts.topBar.admin')
@include('layouts.sideBar.admin')
@section('content')
    <p>This is staffs</p>
  <div class="panel panel-success">
    <div class="panel panel-heading col-sm-12">
      <strong>Staffs <strong><span class="badge">{{('3')}}</span>
      <a href="{{route('staffs.create')}}" class="btn btn-default col-sm-offset-7">
       <span class="glyphicon glyphicon-registration-mark"></span> Register new School
      </a>
    </div>
    <div class="panel panel-body table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr >
            <th>Name</th>
            <th>Email</th>
            <th>School </th>
            <th>role</th>
          </tr>
        <thead>
        <tbody>
          @foreach($staffs->sortBy('name',SORT_REGULAR) as $staff)       
            <tr>
              <td class="">{{__($staff->surname)}}</td>
              <td class="">{{__($staff->email)}}</td>
              <td class="">{{__(SSS\School_type::find($staff->school_id)->name)}}</td>
            <tr>
           @endforeach
        <tbody>
      </table>
    </div>  
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-lg-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Security Organisations <a href="/security_organisations/create" style="float:right"><button class="btn btn-defualt">Add new Organisation</button></a></h3> 
        </div><br/>
        <div class="panel-body">
          <ul class="list-group">
            @foreach($security_organisations as $security_organisation) 
              <li class="list-group-item">
              <strong>{{$loop->index+1}} &nbsp;</strong>
                <a href="/security_organisations/{{$security_organisation->id}}"> {{$security_organisation->name}} </a>
                <a style="float:right" href="/security_organisations/{{$security_organisation->id}}/edit">Edit</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
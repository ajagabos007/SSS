@extends('layouts.sss')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3>Countries <a href="/countries/create" style="float:right"><button class="btn btn-default">Add new country</button></a></h3> 
        </div>
        <br/>
        <div class="panel-body">
          <ul class="list-group">
            @foreach($countries as $country) 
              <li class="list-group-item ">
                <strong>{{$loop->index+1}} &nbsp;</strong>
                  <a href="/countries/{{$country->id}}"> {{$country->name}} </a>
                  <a href="/countries/{{$country->id}}/edit" class="btn btn-primary">Edit</a>
                   <a  class="btn btn-danger"> Delete <a/>                
              </li>
            @endforeach
            {{( $countries->links())}}
  
          </ul>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
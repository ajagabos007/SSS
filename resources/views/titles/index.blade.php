@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-lg-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Titles <a href="/titles/create" style="float:right"><button class="btn btn-defualt">Add new title</button></a></h3> 
        </div><br/>
        <div class="panel-body">
          <ul class="list-group">
            @foreach($titles as $title) 
              <li class="list-group-item">
              <strong>{{$loop->index+1}} &nbsp;</strong>
                <a href="/titles/{{$title->id}}"> {{$title->name}} </a>
                <a style="float:right" href="/titles/{{$title->id}}/edit">Edit</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
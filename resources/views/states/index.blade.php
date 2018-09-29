@extends('layouts.app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">States</div>
  <div class="panel-body">
    <ul class="list-group">
      @foreach($states as $state) 
       <li class="list-group-item"><a href="/states/{{$state->id}}">{{$state->name}}</a></li>
      @endforeach
    </ul>
  </div>
</div>
@endsection
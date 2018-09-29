@extends('layouts.app')
 @section('content')
  <h3>{{$country->name}}</h3>
  <div class="container">
  

    <ul class="list-group">
        @foreach($country->states as $state)

        <li class="list item-group">{{$loop->index+1}} {{$state->name}}<a href="/states/{{$state->id}} ">Edit</a></li>
        @endforeach
    </ul>
 </div>
  @endsection

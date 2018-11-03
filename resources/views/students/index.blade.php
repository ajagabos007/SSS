@extends('layouts.app')
    @section('content')
     <div class="panel panel-default">
         <div class="panel-heading">Students</div>
            <div class="panel-body">
                <ul class="list-group">
                @foreach($students as $student) 
                  <li class="list-group-item"><a href="/students/{{$student->id}}">{{$studnet->surname}}</a></li>
                @endforeach
                <a href="/countries">goto countries</a>
                </ul>
            </div>
        </div>
    @endsection
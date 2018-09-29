@extends('layouts.app')
@section ('content')
 <div class="container">
  <div class="row">
    <div class="col-lg-12 col-lg-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>School Types<a href="/school_types/create" style="float:right"><button class="btn btn-defualt">Add new School Type</button></a></h3> 
        </div><br/>
        <div class="panel-body">
          <ul class="list-group">
            @foreach($school_types as $school_type) 
              <li class="list-group-item">
                <a href="/school_types/{{$school_type->id}}">{{$school_type->name}} </a>
                <a style="float:right" href="/school_types/{{$school_type->id}}/edit">Edit</a>
              </li>
              @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@extends('layouts.app')
@section ('content')
 <div class="container">
  <div class="row">
    <div class="col-lg-12 col-lg-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Genders <a href="/genders/create" style="float:right"><a href="/genders/create" style="float:right"><button class="btn btn-defualt">Add new Gender</button></a></h3> 
        </div><br/>
        <div class="panel-body">
          <ul class="list-group">
            @foreach($genders as $gender) 
              <li class="list-group-item">
                <a href="/genders/{{$gender->id}}">{{$gender->name}} </a>
                <a style="float:right" href="/genders/{{$gender->id}}/edit">Edit</a>
              </li>
              @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

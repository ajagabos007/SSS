@extends('layouts.sss')
@include('layouts.sideBar')
    @section('content')
        <div class="panel panel-success">
        <div class="panel panel-heading">
               <strong> {{__('Guardian Dashboard')}}</strong>
            </div>
            <div class="panel panel-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{__('You are logged in!')}}
            </div>
        </div>
    @endsection
  
    
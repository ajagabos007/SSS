@extends('layouts.app')
 @section('content')
  <h3>{{$security_organisation->name}}</h3>
  <h4>{{$security_organisation->phone_number}}</h4>
  <h4>{{$security_organisation->address}}</h4>
  <h4>{{$security_organisation->email}}</h4>
 @endsection
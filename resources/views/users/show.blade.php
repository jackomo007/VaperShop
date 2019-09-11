@extends('layouts.app')

@section('content')

  <div class="container text-center">
    
    @include("users.user", ["user" => $user])
   
  </div>

@endsection
@extends("layouts.app");

@section("content")
  <div class="container white">
    <h1>Editar Usuario</h1>
    <!-- Formulario -->
    @include('users.form',['user' => $user, 'url' => '/users/'.$user->id, 'method' => 'PATCH'])
  </div>
@endsection
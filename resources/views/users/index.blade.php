@extends("layouts.app");

@section("content")
  <div class="big-padding text-center blue-grey white-text">
    <h1>Clientes</h1>
  </div>
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>Id</td>
          <td>Nome</td>
          <td>Sobrenome</td>
          <td>Telefone</td>

          <td>Ações</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->telephone }}</td>

            <td>
              <a href="{{url('/users/'.$user->id)}}">Ver</a> 
              <a href="{{url('/users/'.$user->id.'/edit')}}">
                Editar
              </a>
               @include('users.delete',['user' => $user])
            </td>

          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
<div class="card product text-left">

        @if(Auth::check() && Auth::user()->admin == true)
  
          <div class="absolute actions">
            <a href="{{url('/users/'.$user->id.'/edit')}}">
              Editar
            </a>
  
            @include('users.delete',['user' => $user])
          </div>
  
        @endif
  
  
        <h1>{{$user->name}} {{$user->surname}} </h1>
        <div class="row">
          <!-- <div class="col-sm-6 col-xs-12">
            @if($user->extension)
            <img src="{{url("/users/images/$user->id.$user->extension")}}" class="product-avatar">
            @endif
          </div> -->
          <div class="col-sm-6 col-xs-12">
            <p>
              <strong>CPF</strong>  
            </p>
            <p>
              {{$user->cpf}}
            </p>
            <p>
                <strong>Endereço</strong>  
            </p>
            <p>
                {{$user->address}}
            </p>
            <p>
                <strong>Telefone</strong>  
            </p>
            <p>
                {{$user->telephone}}
            </p>
          </div> 
        </div>
      </div>
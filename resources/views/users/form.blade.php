{!! Form::open(['url' => $url, 'method' => $method, 'files' => true ]) !!}

  <div class="form-group">
    {{ Form::text('name',$user->name,['class' => 'form-control', 'placeholder' => 'Nome'])  }}
  </div>

  <div class="form-group">
    {{ Form::text('surname',$user->surname,['class' => 'form-control', 'placeholder' => 'Sobrenome'])  }}
  </div>

  <div class="form-group">
        {{ Form::text('cpf',$user->cpf,['class' => 'form-control', 'placeholder' => 'CPF'])  }}
    </div>

    <div class="form-group">
        {{ Form::text('telephone',$user->telephone,['class' => 'form-control', 'placeholder' => 'Telefone'])  }}
    </div>

    <div class="form-group">
    {{ Form::text('cpf',$user->address,['class' => 'form-control', 'placeholder' => 'Endereço'])  }}
    </div>

  <div class="form-group">
    {{ Form::file('cover') }}
  </div>
  
  <div class="form-group text-right">
    <a href="{{url('/users')}}"> Voltar para a lista de Usuarios </a>
    <input type="submit" value="Enviar" class="btn btn-success">
  </div>

{!! Form::close() !!}
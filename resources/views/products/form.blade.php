{!! Form::open(['url' => $url, 'method' => $method, 'files' => true ]) !!}

  <div class="form-group">
    {{ Form::text('title',$product->title,['class' => 'form-control', 'placeholder' => 'Título...'])  }}
  </div>

  <div class="form-group">
    {{ Form::number('pricing',$product->pricing,['class' => 'form-control', 'placeholder' => 'Precio de tu producto en centavos de dólar'])  }}
  </div>

  <div class="form-group">
    {{ Form::file('cover') }}
  </div>

  <div class="form-group">
    {{ Form::textarea('description',$product->description,['class' => 'form-control', 'placeholder' => 'Describe tu producto...'])  }}
  </div>
  
  <div class="form-group text-right">
    <a href="{{url('/products')}}"> Voltar para a lista de produtos </a>
    <input type="submit" value="Enviar" class="btn btn-success">
  </div>

{!! Form::close() !!}
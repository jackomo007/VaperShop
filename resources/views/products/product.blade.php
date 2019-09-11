<div class="card product text-left">

      @if(Auth::check() && $product->user_id == Auth::user()->id)

        <div class="absolute actions">
          <a href="{{url('/products/'.$product->id.'/edit')}}">
            Editar
          </a>

          @include('products.delete',['product' => $product])
        </div>

      @endif


      <h1>{{$product->title}}</h1>
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          @if($product->extension)
          <img src="{{url("/products/images/$product->id.$product->extension")}}" class="product-avatar">
          @endif
        </div> 
        <div class="col-md-2 col-lg-2">
          <p>
            <strong>Descrição</strong>  
          </p>
          <p>
            {{$product->description}}
          </p>
          <p>
              {{$product->pricing}}
          </p>
          @if(Auth::check())
          <p>
           @include("in_shopping_carts.form",["product" => $product])
          </p>
          @endif  
          
        </div> 
      </div>
    </div>
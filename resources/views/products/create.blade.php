@extends("layouts.app");

@section("content")
  <div class="container white">
    <h1>Novo produto</h1>
    <!-- Formulario -->
    @include('products.form',['product' => $product, 'url' => '/products', 'method' => 'POST'])
  </div>
@endsection
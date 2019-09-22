<form action="/carrito" method="POST">
@csrf
@method('DELETE')
<input type="hidden" name="id" value="{{$product->product_id}}">
<button class="btn btn-warning" type="submit">Eliminar</button>
</form>

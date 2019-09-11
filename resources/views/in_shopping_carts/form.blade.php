<form action='/in_shopping_carts' method= 'POST' style="add-to-cart inline-block" >
  <input type="hidden" name="product_id" value="{{$product->id}}">

 Quantidade <input type="number" name="quantity" value='1' class="small input-creado">
    <button type="submit" class="btn btn-info btn-block">Agregar</button>
</form>
<form action="/order" method="POST">
    @csrf
    <input type="hidden" name="shopping_cart" value="{{$shopping_cart}}">
    <div class="loc-srch" style="left: 300px;">
        <button type="submit" class="brd-rd3 red-bg btn btn-danger">Finalizar Compra</button>
    </div>
</form>

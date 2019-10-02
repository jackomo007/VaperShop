@if(isset($price))
<div class="loc-srch" style="left: 300px;" onclick="finalizar({{ $shopping_cart }},{{ $price }})"data-toggle="modal" data-target="#finalizar-compra">
    <button type="submit" class="brd-rd3 red-bg btn btn-warning">Finalizar Compra</button>
</div>
@endif
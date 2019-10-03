function ver_detalles(id) {
    var formData = { id: id };
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/order/' + id,
        type: 'POST',
        data: formData,
        success: function (result) {
            var tamR = result.length;
            $("#detalles_orden").empty();

            for (var i = 0; i < tamR; i++) {
                var nani = '<tr>' +
                    '<td>' +
                    '<p>' + result[i].description + '</p>' +
                    '</td>' +
                    '<td>' +
                    '<p>' + result[i].pricing + '</p>' +
                    '</td>' +
                    '</tr>';
                $("#detalles_orden").append(nani);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

function cerrar_carrito() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/carrito/empty/close',
        type: 'POST',
        success: function () {
            close_session();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

function close_session() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/logout',
        type: 'POST',
        success: function () {
            window.location.href = "/";
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

function pagamento(){
    if (document.getElementById("change").value == 1){
        $("#pagamento").empty();
        var pago = '<br><input name="payment" class="form-control" type="text" placeholder="Indique la cantidad exacta a pagar">';
        $("#pagamento").append(pago);
    }else{
        $("#pagamento").empty();
    }
   
}

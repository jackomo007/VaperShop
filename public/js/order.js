function ver_detalles(id) {
    var formData = { id: id };

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/order/'+id,
        type: 'POST',
        data: formData,
        success: function (result) {
           console.log(result);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

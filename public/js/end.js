function finalizar(id, price) {
    $("#id_cart").empty();
    $("#big-price").empty();

    $("#id_cart").val(id);

    var html = "<h1 itemprop='headline'>" +
        "<sup>S/</sup>" +
        price +
        "</h1 >";
    $("#big-price").append(html);
}

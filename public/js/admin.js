function activo(div) {
    document.getElementById(div).style.color = 'orange';
}

// CATEGORIAS

$("#Admin_wrapper").remove();
$("#tabla_categoria").append("<table id='Admin' class='width:100%' >" +
    "<thead style='background-color: orange; color: white;'>" +
    "<td class='empresa-codigo'><h6 class='mini-title upper'>Código</h6></td>" +
    "<td class='empresa-nome hide-on-small-only'><h6 class='mini-title upper'>Nombre</h6></td>" +
    "<td class='empresa-email hide-on-small-only'><h6 class='mini-title upper'>Descripcion</h6></td>" +
    "<td class='empresa-action hide-on-small-only'></td>" +
    "</thead>" +
    "<tbody>" +
    "</tbody>" +
    "</table>");
var data_table = $("#Admin").DataTable({
    "ajax": {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/categoria",
        dataSrc: '',
        mDataProp: '',
        type: 'GET',
    },
    "columns": [
        { mData: "id" },
        { mData: "name" },
        { mData: "description" },
        { mData: "actions" },
    ],
    order: [],
    columnDefs: [{
        "targets": 'no-sort',
        "orderable": false,
    }],
    select: {
        info: false
    },
    language: {
        "search": '<h6 class="mini-title upper black-text">Buscar: </h6>',
        'searchPlaceholder': "Nombre, Descripcion...",
        "paginate": {
            "previous": '<h6 class="mini-title upper">Anterior</h6>',
            "next": '<h6 class="mini-title upper">Siguiente</h6>'
        },
        "info": '<h6 class="mini-title upper">Mostrando de <span class="wt2">_START_</span> a <span class="wt2">_END_</span> de <span class="wt2">_TOTAL_</span> registros</h6>',
        "infoFiltered": '<h6 class="mini-title upper"><span class="wt2">_TOTAL_</span> resultado(s)</h6>',
        "infoEmpty": '<h6 class="mini-title upper">Ningun resultado</h6>',
        "lengthMenu": '<h6 class="mini-title upper black-text">mostrar</h6>_MENU_',
        "emptyTable": '<h6 class="mini-title upper">Ningun resultado</h6>',
        "loadingRecords": 'Carregando...',
        "zeroRecords": '<h6 class="mini-title upper">Ningun resultado</h6>'

    }
});
$("select").addClass("browser-default");

$(document).on("click", ".editar-categoria", function () {
    event.preventDefault();
    document.getElementById("registrar").style.display = "none";
    document.getElementById("actualizar").style.display = "block";

    $("#cat_id").val("");
    $("#cat_name").val("");
    $("#cat_description").val("");
    $("#previa_categoria").empty();

    $("#cat_id").val($(this).attr("cat-cod"));
    $("#cat_name").val($(this).attr("cat-nome"));
    $("#cat_description").val($(this).attr("cat-description"));
    var image = '<img id="imagen_actual" src="/images/categorias/' + $(this).attr("cat-image") + '" alt="">';
    $("#previa_categoria").append(image);
});


$(document).on("click", ".registrar_categoria", function () {
    event.preventDefault();
    document.getElementById("registrar").style.display = "block";
    document.getElementById("actualizar").style.display = "none";
});


$(document).on("click", ".eliminar_categoria", function () {
    event.preventDefault();

    var id = $(this).attr("cat-cod");
    var formData = { id: id };

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/categoria',
        type: 'DELETE',
        data: formData,
        success: function (result) {
            if (result == 200) {
                document.getElementById("alerta").style.display = "block";
                setTimeout(function () {
                    document.getElementById("alerta").style.display = "none";
                    location.reload();
                }, 3000);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
});

// SUB CATEGORIAS

$("#subCategoria_wrapper").remove();
$("#tabla_sub_categoria").append("<table id='subCategoria' class='width:100%' style='width: 100%;' >" +
    "<thead style='background-color: orange; color: white;'>" +
    "<td class='empresa-codigo'><h6 class='mini-title upper'>Código</h6></td>" +
    "<td class='empresa-nome hide-on-small-only'><h6 class='mini-title upper'>Nombre</h6></td>" +
    "<td class='empresa-email hide-on-small-only'><h6 class='mini-title upper'>Descripcion</h6></td>" +
    "<td class='empresa-action hide-on-small-only'></td>" +
    "</thead>" +
    "<tbody>" +
    "</tbody>" +
    "</table>");
var data_table = $("#subCategoria").DataTable({
    "ajax": {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/sub-categoria",
        dataSrc: '',
        mDataProp: '',
        type: 'GET',
    },
    "columns": [
        { mData: "id" },
        { mData: "name" },
        { mData: "description" },
        { mData: "actions" },
    ],
    order: [],
    columnDefs: [{
        "targets": 'no-sort',
        "orderable": false,
    }],
    select: {
        info: false
    },
    language: {
        "search": '<h6 class="mini-title upper black-text">Buscar: </h6>',
        'searchPlaceholder': "Nombre, Descripcion...",
        "paginate": {
            "previous": '<h6 class="mini-title upper">Anterior</h6>',
            "next": '<h6 class="mini-title upper">Siguiente</h6>'
        },
        "info": '<h6 class="mini-title upper">Mostrando de <span class="wt2">_START_</span> a <span class="wt2">_END_</span> de <span class="wt2">_TOTAL_</span> registros</h6>',
        "infoFiltered": '<h6 class="mini-title upper"><span class="wt2">_TOTAL_</span> resultado(s)</h6>',
        "infoEmpty": '<h6 class="mini-title upper">Ningun resultado</h6>',
        "lengthMenu": '<h6 class="mini-title upper black-text">mostrar</h6>_MENU_',
        "emptyTable": '<h6 class="mini-title upper">Ningun resultado</h6>',
        "loadingRecords": 'Carregando...',
        "zeroRecords": '<h6 class="mini-title upper">Ningun resultado</h6>'

    }
});
$("select").addClass("browser-default");

$.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: '/categoria/all',
    type: 'GET',
    success: function (retorno) {
        var tamR = retorno.length;
        var nani = ' <label>Categoría a la que pertenece la Sub Categoria<sup>*</sup></label>' +
            '<select id="category_id" class="form-control" name="category_id" selected="selected"></select>';
        $("#categoria_padre").append(nani);
        for (var i = 0; i < tamR; i++) {
            var html = '<option value="' + retorno[i].id + '">' + retorno[i].name + '</option>';
            $("#category_id").append(html);
        }
    },
    error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
    }
});


$(document).on("click", ".editar-sub-categoria", function () {
    event.preventDefault();
    document.getElementById("registrar_sub").style.display = "none";
    document.getElementById("actualizar_sub").style.display = "block";

    $("#e_sub_cat_id").val("");
    $("#e_sub_cat_name").val("");
    $("#e_sub_cat_description").val("");

    var categoria = $(this).attr("sub_category_id");

    actualizar_sub_categoria(categoria);

    $("#e_sub_cat_id").val($(this).attr("sub_cat-cod"));
    $("#e_sub_cat_name").val($(this).attr("sub_cat-nome"));
    $("#e_sub_cat_description").val($(this).attr("sub_cat-description"));
});


$(document).on("click", ".registrar_sub_categoria", function () {
    event.preventDefault();
    document.getElementById("registrar_sub").style.display = "block";
    document.getElementById("actualizar_sub").style.display = "none";
});


$(document).on("click", ".eliminar_sub_categoria", function () {
    event.preventDefault();

    var id = $(this).attr("sub_cat-cod");
    var formData = { id: id };

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/sub-categoria',
        type: 'DELETE',
        data: formData,
        success: function (result) {
            if (result == 200) {
                document.getElementById("alerta").style.display = "block";
                setTimeout(function () {
                    document.getElementById("alerta").style.display = "none";
                    location.reload();
                }, 3000);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
});

function actualizar_sub_categoria(categoria) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/categoria/all',
        type: 'GET',
        success: function (retorno) {
            $("#e_categoria_padre").empty();
            var tamR = retorno.length;
            var nani = ' <label>Categoría a la que pertenece la Sub Categoria<sup>*</sup></label>' +
                '<select id="e_sub_cat_category_id" class="form-control" name="e_sub_cat_category_id">' +
                '</select>';
            $("#e_categoria_padre").append(nani);

            for (var i = 0; i < tamR; i++) {
                if (categoria == retorno[i].id) {
                    var actual = '<option value="' + categoria + '">' + retorno[i].name + '</option>';
                    $("#e_sub_cat_category_id").append(actual);
                }
            }

            for (var i = 0; i < tamR; i++) {
                if (categoria != retorno[i].id) {
                    var html = '<option value="' + retorno[i].id + '">' + retorno[i].name + '</option>';
                    $("#e_sub_cat_category_id").append(html);
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });

}

// PRODUCTOS
$("#pricing, #e_pricing").mask('0.000,00', { reverse: true });

$("#Producto_wrapper").remove();
$("#tabla_producto").append("<table id='Producto' class='width:100%' style='width: 100%;' >" +
    "<thead style='background-color: orange; color: white;'>" +
    "<td class='empresa-codigo'><h6 class='mini-title upper'>Código</h6></td>" +
    "<td class='empresa-nome hide-on-small-only'><h6 class='mini-title upper'>Nombre</h6></td>" +
    "<td class='empresa-email hide-on-small-only'><h6 class='mini-title upper'>Precio</h6></td>" +
    "<td class='empresa-action hide-on-small-only'></td>" +
    "</thead>" +
    "<tbody>" +
    "</tbody>" +
    "</table>");
var data_table = $("#Producto").DataTable({
    "ajax": {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/producto",
        dataSrc: '',
        mDataProp: '',
        type: 'GET',
    },
    "columns": [
        { mData: "id" },
        { mData: "title" },
        { mData: "price" },
        { mData: "actions" },
    ],
    order: [],
    columnDefs: [{
        "targets": 'no-sort',
        "orderable": false,
    }],
    select: {
        info: false
    },
    language: {
        "search": '<h6 class="mini-title upper black-text">Buscar: </h6>',
        'searchPlaceholder': "Titulo, Descripcion...",
        "paginate": {
            "previous": '<h6 class="mini-title upper">Anterior</h6>',
            "next": '<h6 class="mini-title upper">Siguiente</h6>'
        },
        "info": '<h6 class="mini-title upper">Mostrando de <span class="wt2">_START_</span> a <span class="wt2">_END_</span> de <span class="wt2">_TOTAL_</span> registros</h6>',
        "infoFiltered": '<h6 class="mini-title upper"><span class="wt2">_TOTAL_</span> resultado(s)</h6>',
        "infoEmpty": '<h6 class="mini-title upper">Ningun resultado</h6>',
        "lengthMenu": '<h6 class="mini-title upper black-text">mostrar</h6>_MENU_',
        "emptyTable": '<h6 class="mini-title upper">Ningun resultado</h6>',
        "loadingRecords": 'Carregando...',
        "zeroRecords": '<h6 class="mini-title upper">Ningun resultado</h6>'

    }
});
$("select").addClass("browser-default");

$.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: '/sub-categoria/all',
    type: 'GET',
    success: function (retorno) {
        var tamR = retorno.length;
        var nani = ' <label>Sub Categoría a la que pertenece el Producto<sup>*</sup></label>' +
            '<select id="sub_category_id" class="form-control" name="sub_category_id"></select>';
        $("#sub_categoria_padre").append(nani);
        for (var i = 0; i < tamR; i++) {
            var html = '<option value="' + retorno[i].id + '">' + retorno[i].name + '</option>';
            $("#sub_category_id").append(html);
        }
    },
    error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
    }
});


$(document).on("click", ".editar-producto", function () {
    event.preventDefault();
    document.getElementById("registrar_producto").style.display = "none";
    document.getElementById("actualizar_producto").style.display = "block";

    $("#e_pro_id").val("");
    $("#e_title").val("");
    $("#e_product_description").val("");
    $("#e_pricing").val("");
    $("#sub_category_id").val("");
    $("#e_quantity").val("");

    var sub_categoria = $(this).attr("sub_category_id");

    $("#e_pro_id").val($(this).attr("pro-cod"));
    $("#e_title").val($(this).attr("pro-title"));
    $("#e_product_description").val($(this).attr("pro-description"));
    $("#e_pricing").val($(this).attr("pro-pricing"));
    $("#e_quantity").val($(this).attr("pro-quan"));

    actualizar_producto(sub_categoria);
});


$(document).on("click", ".registrar_producto", function () {
    event.preventDefault();
    document.getElementById("registrar_pro").style.display = "block";
    document.getElementById("actualizar_pro").style.display = "none";
});


$(document).on("click", ".eliminar_producto", function () {
    event.preventDefault();

    var id = $(this).attr("pro-cod");
    var formData = { id: id };

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/producto',
        type: 'DELETE',
        data: formData,
        success: function (result) {
            if (result == 200) {
                document.getElementById("alerta-producto").style.display = "block";
                setTimeout(function () {
                    document.getElementById("alerta-producto").style.display = "none";
                    location.reload();
                }, 3000);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
});

function actualizar_producto(sub_categoria) {
    $("#productoIMG").empty();
    var id = $("#e_pro_id").val();
    var formData = { id: id };

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/producto/image',
        type: 'POST',
        data: formData,
        success: function (result) {
            var img = '<img width="150" height="200" style="margin: -10%;" src="/images/productos/' + result.image + '" alt="producto" ></img>';
            $("#productoIMG").append(img);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/producto/all',
        type: 'GET',
        success: function (retorno) {
            $("#e_sub_categoria_padre").empty();
            var tamR = retorno.length;
            var nani = ' <label>Sub Categoria a la que pertenece el Producto<sup>*</sup></label>' +
                '<select id="e_sub_category_id" class="form-control" name="e_sub_category_id">' +
                '</select>';
            $("#e_sub_categoria_padre").append(nani);

            for (var i = 0; i < tamR; i++) {
                if (sub_categoria == retorno[i].id) {
                    var actual = '<option value="' + sub_categoria + '">' + retorno[i].name + '</option>';
                    $("#e_sub_category_id").append(actual);
                }
            }

            for (var i = 0; i < tamR; i++) {
                if (sub_categoria != retorno[i].id) {
                    var html = '<option value="' + retorno[i].id + '">' + retorno[i].name + '</option>';
                    $("#e_sub_category_id").append(html);
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

// CARROUSEL
$("#Carrousel_wrapper").remove();
$("#tabla_carrousel").append("<table id='Carrousel' class='width:100%' style='width: 100%;' >" +
    "<thead style='background-color: orange; color: white;'>" +
    "<td class='empresa-codigo'><h6 class='mini-title upper'>Código</h6></td>" +
    "<td class='empresa-nome hide-on-small-only'><h6 class='mini-title upper'>Descripcion</h6></td>" +
    "<td class='empresa-action hide-on-small-only'></td>" +
    "</thead>" +
    "<tbody>" +
    "</tbody>" +
    "</table>");
var data_table = $("#Carrousel").DataTable({
    "ajax": {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/carrousel",
        dataSrc: '',
        mDataProp: '',
        type: 'GET',
    },
    "columns": [
        { mData: "id" },
        { mData: "description" },
        { mData: "actions" },
    ],
    order: [],
    columnDefs: [{
        "targets": 'no-sort',
        "orderable": false,
    }],
    select: {
        info: false
    },
    language: {
        "search": '<h6 class="mini-title upper black-text">Buscar: </h6>',
        'searchPlaceholder': "Descripcion...",
        "paginate": {
            "previous": '<h6 class="mini-title upper">Anterior</h6>',
            "next": '<h6 class="mini-title upper">Siguiente</h6>'
        },
        "info": '<h6 class="mini-title upper">Mostrando de <span class="wt2">_START_</span> a <span class="wt2">_END_</span> de <span class="wt2">_TOTAL_</span> registros</h6>',
        "infoFiltered": '<h6 class="mini-title upper"><span class="wt2">_TOTAL_</span> resultado(s)</h6>',
        "infoEmpty": '<h6 class="mini-title upper">Ningun resultado</h6>',
        "lengthMenu": '<h6 class="mini-title upper black-text">mostrar</h6>_MENU_',
        "emptyTable": '<h6 class="mini-title upper">Ningun resultado</h6>',
        "loadingRecords": 'Carregando...',
        "zeroRecords": '<h6 class="mini-title upper">Ningun resultado</h6>'

    }
});
$("select").addClass("browser-default");

$(document).on("click", ".editar-carrousel", function () {
    event.preventDefault();
    document.getElementById("registrar_carrousel").style.display = "none";
    document.getElementById("actualizar_carrousel").style.display = "block";

    $("#e_car_id").val("");
    $("#e_description").val("");
    $("#carrouselIMG").empty();

    $("#e_car_id").val($(this).attr("car-cod"));
    $("#e_description").val($(this).attr("car-description"));
    var img = '<img width="900" height="200" style="margin-bottom: 5%;margin-top: 0%;max-width: 95%;margin-left: 30%;" src="/images/carrousel/' + $(this).attr("car-image") + '" alt="carrousel" ></img>';
    $("#carrouselIMG").append(img);
});


$(document).on("click", ".registrar_carrousel", function () {
    event.preventDefault();
    document.getElementById("registrar_carrousel").style.display = "block";
    document.getElementById("actualizar_carrousel").style.display = "none";
});


$(document).on("click", ".eliminar_carrousel", function () {
    event.preventDefault();

    var id = $(this).attr("car-cod");
    var formData = { id: id };

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/carrousel',
        type: 'DELETE',
        data: formData,
        success: function (result) {
            if (result == 200) {
                document.getElementById("alerta-carrousel").style.display = "block";
                setTimeout(function () {
                    document.getElementById("alerta-carrousel").style.display = "none";
                    location.reload();
                }, 3000);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
});


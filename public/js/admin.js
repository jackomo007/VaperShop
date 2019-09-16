// CATEGORIAS

$("#Admin_wrapper").remove();
$("#tabla_categoria").append("<table id='Admin' class='width:100%' >" +
    "<thead style='background-color: #4CAF50; color: white;'>" +
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
        url: "http://127.0.0.1:8000/categoria",
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
        "search": '<h6 class="mini-title upper black-text">Pesquisar: </h6>',
        'searchPlaceholder': "Nombre, Descripcion...",
        "paginate": {
            "previous": '<h6 class="mini-title upper">Anterior</h6>',
            "next": '<h6 class="mini-title upper">Próxima</h6>'
        },
        "info": '<h6 class="mini-title upper">Mostrando de <span class="wt2">_START_</span> a <span class="wt2">_END_</span> de <span class="wt2">_TOTAL_</span> linhas</h6>',
        "infoFiltered": '<h6 class="mini-title upper"><span class="wt2">_TOTAL_</span> resultado(s)</h6>',
        "infoEmpty": '<h6 class="mini-title upper">Nenhum resultado</h6>',
        "lengthMenu": '<h6 class="mini-title upper black-text">mostrar</h6>_MENU_',
        "emptyTable": '<h6 class="mini-title upper">Nenhum resultado</h6>',
        "loadingRecords": 'Carregando...',
        "zeroRecords": '<h6 class="mini-title upper">Nenhum resultado</h6>'

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

    $("#cat_id").val($(this).attr("cat-cod"));
    $("#cat_name").val($(this).attr("cat-nome"));
    $("#cat_description").val($(this).attr("cat-description"));
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
        url: 'http://127.0.0.1:8000/categoria',
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
    "<thead style='background-color: #4CAF50; color: white;'>" +
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
        url: "http://127.0.0.1:8000/sub-categoria",
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
        "search": '<h6 class="mini-title upper black-text">Pesquisar: </h6>',
        'searchPlaceholder': "Nombre, Descripcion...",
        "paginate": {
            "previous": '<h6 class="mini-title upper">Anterior</h6>',
            "next": '<h6 class="mini-title upper">Próxima</h6>'
        },
        "info": '<h6 class="mini-title upper">Mostrando de <span class="wt2">_START_</span> a <span class="wt2">_END_</span> de <span class="wt2">_TOTAL_</span> linhas</h6>',
        "infoFiltered": '<h6 class="mini-title upper"><span class="wt2">_TOTAL_</span> resultado(s)</h6>',
        "infoEmpty": '<h6 class="mini-title upper">Nenhum resultado</h6>',
        "lengthMenu": '<h6 class="mini-title upper black-text">mostrar</h6>_MENU_',
        "emptyTable": '<h6 class="mini-title upper">Nenhum resultado</h6>',
        "loadingRecords": 'Carregando...',
        "zeroRecords": '<h6 class="mini-title upper">Nenhum resultado</h6>'

    }
});
$("select").addClass("browser-default");

$.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: 'http://127.0.0.1:8000/categoria/all',
    type: 'GET',
    success: function (retorno) {
        var tamR = retorno.length;
        var nani = ' <label>Categoría a la que pertenece la Sub Categoria<sup>*</sup></label>'+
                    '<select id="category_id" class="form-control" name="category_id"></select>';
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

    $("#sub_cat_id").val("");
    $("#e_sub_cat_name").val("");
    $("#e_sub_cat_description").val("");

    var categoria = $(this).attr("sub_category_id");

    actualizar_sub_categoria(categoria);

    $("#sub_cat_id").val($(this).attr("sub_cat-cod"));
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
        url: 'http://127.0.0.1:8000/sub-categoria',
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

function actualizar_sub_categoria(categoria){
    $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: 'http://127.0.0.1:8000/categoria/all',
    type: 'GET',
    success: function (retorno) {
         $("#e_categoria_padre").empty();
        var tamR = retorno.length;
        var nani = ' <label>Categoría a la que pertenece la Sub Categoria<sup>*</sup></label>'+
                    '<select id="e_sub_cat_category_id" class="form-control" name="e_sub_cat_category_id">'+
                    '</select>';
            $("#e_categoria_padre").append(nani);

        for (var i = 0; i < tamR; i++) {
            if(categoria == retorno[i].id ){
                var actual = '<option value="'+categoria+'">'+retorno[i].name+'</option>';
                $("#e_sub_cat_category_id").append(actual);
            }
        }

        for (var i = 0; i < tamR; i++) {
            var html = '<option value="' + retorno[i].id + '">'+ retorno[i].name +'</option>';
            $("#e_sub_cat_category_id").append(html);
        }
    },
    error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
    }
});

}

// PRODUCTOS
$("#pricing, #e_pricing").mask('0.000,00');

$("#subCategoria_wrapper").remove();
$("#tabla_sub_categoria").append("<table id='subCategoria' class='width:100%' style='width: 100%;' >" +
    "<thead style='background-color: #4CAF50; color: white;'>" +
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
        url: "http://127.0.0.1:8000/sub-categoria",
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
        "search": '<h6 class="mini-title upper black-text">Pesquisar: </h6>',
        'searchPlaceholder': "Nombre, Descripcion...",
        "paginate": {
            "previous": '<h6 class="mini-title upper">Anterior</h6>',
            "next": '<h6 class="mini-title upper">Próxima</h6>'
        },
        "info": '<h6 class="mini-title upper">Mostrando de <span class="wt2">_START_</span> a <span class="wt2">_END_</span> de <span class="wt2">_TOTAL_</span> linhas</h6>',
        "infoFiltered": '<h6 class="mini-title upper"><span class="wt2">_TOTAL_</span> resultado(s)</h6>',
        "infoEmpty": '<h6 class="mini-title upper">Nenhum resultado</h6>',
        "lengthMenu": '<h6 class="mini-title upper black-text">mostrar</h6>_MENU_',
        "emptyTable": '<h6 class="mini-title upper">Nenhum resultado</h6>',
        "loadingRecords": 'Carregando...',
        "zeroRecords": '<h6 class="mini-title upper">Nenhum resultado</h6>'

    }
});
$("select").addClass("browser-default");

$.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: 'http://127.0.0.1:8000/categoria/all',
    type: 'GET',
    success: function (retorno) {
        var tamR = retorno.length;
        var nani = ' <label>Categoría a la que pertenece la Sub Categoria<sup>*</sup></label>'+
                    '<select id="category_id" class="form-control" name="category_id"></select>';
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

    $("#sub_cat_id").val("");
    $("#e_sub_cat_name").val("");
    $("#e_sub_cat_description").val("");

    var categoria = $(this).attr("sub_category_id");

    actualizar_sub_categoria(categoria);

    $("#sub_cat_id").val($(this).attr("sub_cat-cod"));
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
        url: 'http://127.0.0.1:8000/sub-categoria',
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

function actualizar_sub_categoria(categoria){
    $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: 'http://127.0.0.1:8000/categoria/all',
    type: 'GET',
    success: function (retorno) {
         $("#e_categoria_padre").empty();
        var tamR = retorno.length;
        var nani = ' <label>Categoría a la que pertenece la Sub Categoria<sup>*</sup></label>'+
                    '<select id="e_sub_cat_category_id" class="form-control" name="e_sub_cat_category_id">'+
                    '</select>';
            $("#e_categoria_padre").append(nani);

        for (var i = 0; i < tamR; i++) {
            if(categoria == retorno[i].id ){
                var actual = '<option value="'+categoria+'">'+retorno[i].name+'</option>';
                $("#e_sub_cat_category_id").append(actual);
            }
        }

        for (var i = 0; i < tamR; i++) {
            var html = '<option value="' + retorno[i].id + '">'+ retorno[i].name +'</option>';
            $("#e_sub_cat_category_id").append(html);
        }
    },
    error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
    }
});

}

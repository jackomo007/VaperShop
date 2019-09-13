//*AL CARGAR LAS CATEGORIAS SE DISPARA LA FUNCION LISTAR DE ESA CATEGORIA*//
function categorias(){
    $("#marco").empty();
        var conteudo ="<div class='tab-pane fade in active' id='sub-categorias'>"+
            "<div class='tabs-wrp brd-rd5'>"+
                "<div class='dashboard-title'>"+
                    "<h4 itemprop='headline'>EDITA TU CATEGORÍA</h4>"+
                "</div>"+
                "<form class='restaurant-info-form brd-rd5'>"+
                    "<div class='row mrg20'>"+
                        "<div class=' col-md-6 col-sm-6 col-lg-6' >"+
                            "<label>Nombre de Categoría<sup>*</sup></label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<label>Agregar Subcategoría</label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<label></label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<label></label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<label></label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<label>Descripción de la Categoría</label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<div class=' step-buttons' >"+
                                "<a class=' brd-rd3 red-bg'  href=' #'  title=' ' "+
                                    "itemprop=' url' >Guardar Cambio</a>"+
                            "</div>"+
                        "</div>"+
                    "</div>"+
                "</form>"+
            "</div>"+
        "</div>";
        $("#marco").append(conteudo);
        listar_categorias();
}

function sub_categorias(){
    $("#marco").empty();
        var conteudo ="<div class='tab-pane fade in active' id='sub-categorias'>"+
            "<div class='tabs-wrp brd-rd5'>"+
                "<div class='dashboard-title'>"+
                    "<h4 itemprop='headline'>EDITA TU CATEGORÍA</h4>"+
                "</div>"+
                "<form class='restaurant-info-form brd-rd5'>"+
                    "<div class='row mrg20'>"+
                        "<div class=' col-md-6 col-sm-6 col-lg-6' >"+
                            "<label>Nombre de Categoría<sup>*</sup></label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<label>Agregar Subcategoría</label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<label></label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<label></label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<label></label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<label>Descripción de la Categoría</label>"+
                            "<input class=' brd-rd3'  type=' text' >"+
                        "</div>"+
                        "<div class=' col-md-12 col-sm-12 col-lg-12' >"+
                            "<div class=' step-buttons' >"+
                                "<a class=' brd-rd3 red-bg'  href=' #'  title=' ' "+
                                    "itemprop=' url' >Guardar Cambio</a>"+
                            "</div>"+
                        "</div>"+
                    "</div>"+
                "</form>"+
            "</div>"+
        "</div>";
        $("#marco").append(conteudo);
        listar_sub_categorias();
}

function listar_categorias(){
    $("#marco").empty();
    $("#Admin_wrapper").remove();
    $("#tabela").append("<table id='Admin' class='width:100%' >"+
        "<thead style='background-color: #4CAF50; color: white;'>"+
                "<td class='empresa-codigo'><h6 class='mini-title upper'>Código</h6></td>"+
                "<td class='empresa-nome hide-on-small-only'><h6 class='mini-title upper'>Nombre</h6></td>"+
                "<td class='empresa-email hide-on-small-only'><h6 class='mini-title upper'>Descripcion</h6></td>"+
                "<td class='empresa-action hide-on-small-only'></td>"+
            "</thead>"+
        "<tbody>"+
        "</tbody>"+
        "</table>");
    var data_table = $("#Admin").DataTable({
        "ajax": {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "http://10.0.0.193:8000/categoria",
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
        columnDefs: [ {
            "targets"  : 'no-sort',
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
}

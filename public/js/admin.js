
    $("#Admin_wrapper").remove();
    $("#tabla_categoria").append("<table id='Admin' class='width:100%' >"+
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

    $("#subCategoria_wrapper").remove();
    $("#tabla_sub_categoria").append("<table id='subCategoria' class='width:100%' style='width: 100%;' >"+
        "<thead style='background-color: #4CAF50; color: white;'>"+
                "<td class='empresa-codigo'><h6 class='mini-title upper'>Código</h6></td>"+
                "<td class='empresa-nome hide-on-small-only'><h6 class='mini-title upper'>Nombre</h6></td>"+
                "<td class='empresa-email hide-on-small-only'><h6 class='mini-title upper'>Descripcion</h6></td>"+
                "<td class='empresa-action hide-on-small-only'></td>"+
            "</thead>"+
        "<tbody>"+
        "</tbody>"+
        "</table>");
    var data_table = $("#subCategoria").DataTable({
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


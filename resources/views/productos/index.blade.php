@extends('layouts.app')

@section('content')
    <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Nuestros Productos</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Inicio</a></li>
                    <li class="breadcrumb-item active">Nuestros Productos</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="sidebar left">
                                    <div class="widget style2 category_posts wow fadeIn" data-wow-delay="0.2s">
                                        <div class="widget-data">
                                            <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Categorías</h4>
                                            <div class="mini-posts-list">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordian"
                                                                href="#lacteos">
                                                                <span class="badge pull-right"><i
                                                                        class="fa fa-plus"></i></span>
                                                                Lácteos
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="lacteos" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li><a href="#tab1-1" data-toggle="tab">Queso </a></li>
                                                                <li><a href="#tab1-2" data-toggle="tab">Leche en Polvo
                                                                    </a></li>
                                                                <li><a href="#tab1-3" data-toggle="tab">Leche Líquida
                                                                    </a></li>
                                                                <li><a href="#tab1-4" data-toggle="tab">Leche a
                                                                        Granel</a></li>
                                                                <li><a href="#tab1-5" data-toggle="tab">Mantequilla </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordian"
                                                                href="#huevos">
                                                                <span class="badge pull-right"><i
                                                                        class="fa fa-plus"></i></span>
                                                                Huevos
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="huevos" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li><a href="#">Gallina </a></li>
                                                                <li><a href="#">Codorniz </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordian"
                                                                href="#abarrotes">
                                                                <span class="badge pull-right"><i
                                                                        class="fa fa-plus"></i></span>
                                                                Abarrotes
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="abarrotes" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li><a href="#">Aceite </a></li>
                                                                <li><a href="#">Arroz </a></li>
                                                                <li><a href="#">Menestra </a></li>
                                                                <li><a href="#">Azúcar</a></li>
                                                                <li><a href="#">Fideos </a></li>
                                                                <li><a href="#">Café </a></li>
                                                                <li><a href="#">Salsas y Cremas</a></li>
                                                                <li><a href="#">Otros </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordian"
                                                                href="#bebidas">
                                                                <span class="badge pull-right"><i
                                                                        class="fa fa-plus"></i></span>
                                                                Bebidas
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="bebidas" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li><a href="#">Jugos </a></li>
                                                                <li><a href="#">Gaseosas</a></li>
                                                                <li><a href="#">Instantáneas </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordian"
                                                                href="#licores">
                                                                <span class="badge pull-right"><i
                                                                        class="fa fa-plus"></i></span>
                                                                Licores
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="licores" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li><a href="#">Ron </a></li>
                                                                <li><a href="#">Anís </a></li>
                                                                <li><a href="#">Cerveza </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordian"
                                                                href="#aseopersonal">
                                                                <span class="badge pull-right"><i
                                                                        class="fa fa-plus"></i></span>
                                                                Aseo Personal
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="aseopersonal" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li><a href="#">Crema Dental </a></li>
                                                                <li><a href="#">Jabón de Baño </a></li>
                                                                <li><a href="#">Jabón de Mano </a></li>
                                                                <li><a href="#">Shampoo</a></li>
                                                                <li><a href="#">Acondicionador </a></li>
                                                                <li><a href="#">Gelatina para el Cabello </a></li>
                                                                <li><a href="#">Crema para el Cabello </a></li>
                                                                <li><a href="#">Hisopos </a></li>
                                                                <li><a href="#">Desodorante</a></li>
                                                                <li><a href="#">Papel Hiegiénico </a></li>
                                                                <li><a href="#">Toallas Sanitarias</a></li>
                                                                <li><a href="#">Otros </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordian"
                                                                href="#cuidadosparaelbebe">
                                                                <span class="badge pull-right"><i
                                                                        class="fa fa-plus"></i></span>
                                                                Cuidados para el Bebé
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="cuidadosparaelbebe" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li><a href="#">Pañales </a></li>
                                                                <li><a href="#">Toallas Húmedas</a></li>
                                                                <li><a href="#">Shampoo </a></li>
                                                                <li><a href="#">Cremas</a></li>
                                                                <li><a href="#">Otros </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#golosinasydulces">
                                                                <span><i></i></span>
                                                                Golosinas y Dulces
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#detergentes">
                                                                <span><i></i></span>
                                                                Detergentes
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#cereal">
                                                                <span><i></i></span>
                                                                Cereal
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#combosdepata">
                                                                <span><i></i></span>
                                                                Combos de Pata
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#combosdepana">
                                                                <span><i></i></span>
                                                                Combos de Pana
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Sidebar -->
                            </div>

                            <div class="col-md-9 col-sm-12 col-lg-9">
                                <div class="blog-detail-wrapper">
                                    <div class="tab-pane fade in active" id="tab1-1">
                                        <form class="search-dish">
                                            <input type="text" placeholder="Search here">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                        <div class="dishes-list-wrapper">

                                            @foreach ($products as $product)
                                            <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <div class="popular-dish-box style2 wow fadeIn" data-wow-delay="0.2s">
                                                        <div>
                                                            <img src="/images/productos/{{ $product->imageProduct->image }}" alt="producto" >
                                                        </div>
                                                        <div class="popular-dish-info">
                                                            <h4 itemprop="headline"><a href="food-detail.html" title=""
                                                                    itemprop="url">{{ $product->title }}</a></h4>
                                                            <span class="price">S/{{ $product->pricing }}</span>
                                                            <div class="qty-wrap">
                                                                <input class="qty" type="text" value="1">
                                                            </div>
                                                            <a class="brd-rd4 " href="food-detail.html"
                                                                title="Agrega al Carrito" itemprop="url">Agregar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="pagination-wrapper text-center">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item prev"><a class="page-link brd-rd2" href="#"
                                                    itemprop="url">ANTERIOR</a></li>
                                            <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a>
                                            </li>
                                            <li class="page-item active"><span class="page-link brd-rd2">3</span></li>
                                            <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a>
                                            </li>
                                            <li class="page-item">........</li>
                                            <li class="page-item"><a class="page-link brd-rd2" href="#"
                                                    itemprop="url">18</a>
                                            </li>
                                            <li class="page-item next"><a class="page-link brd-rd2" href="#"
                                                    itemprop="url">PRÓXIMA</a></li>
                                        </ul>
                                    </div>

                             </div>
                        </div>
                    </div>
                </div>
        </section>
@endsection

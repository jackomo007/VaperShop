@extends('layouts.app')

@section('content')
    <section>
        <div class="block">
            <div class="fixed-bg" style="background-image: url(/../../../../images/topbg.jpg);"></div>
            <div class="page-title-wrapper text-center">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="page-title-inner">
                        <h1 itemprop="headline">MI CARRITO</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Inicio</a></li>
                <li class="breadcrumb-item active">MI CARRITO</li>
            </ol>
        </div>
    </div>

    <section>
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="row">
                                    
                            <div class="pagination-wrapper" id="carrito">
                                <div class="tabs-wrp brd-rd5">
                                    <h4 itemprop="headline">MI CARRITO DE COMPRAS</h4>
                                    <div class="select-wrap-inner">
                                        <div class="select-wrp2"></div>
                                    </div>
                                    <div class="statement-table">
                                        <table>
                                            <thead>
                                                <tr><th>#</th><th>PRODUCTO</th><th>PRECIO POR UNIDAD</th><th>CANTIDAD</th><th>COSTO TOTAL</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>#1</td><td>LECHE</td><td>S/3.00</td><td>4</td><td><span class="red-clr">S/12.00</span></td></tr>
                                                <tr><td>#2</td><td>LECHE</td><td>S/3.00</td><td>4</td><td><span class="red-clr">S/12.00</span></td></tr>
                                                <tr><td>#3</td><td>LECHE</td><td>S/3.00</td><td>4</td><td><span class="red-clr">S/12.00</span></td></tr>
                                                <tr><td>#4</td><td>LECHE</td><td>S/3.00</td><td>4</td><td><span class="red-clr">S/12.00</span></td></tr>
                                                <tr><td>#5</td><td>LECHE</td><td>S/3.00</td><td>4</td><td><span class="red-clr">S/12.00</span></td></tr>
                                                <tr><td></td></td><td></td><td>TOTAL</td><td>4</td><td><span class="red-clr">S/12.00</span></td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="loc-map2">
                                        <div class="loc-map brd-rd3" id="loc-map"></div>
                                        <div class="loc-srch" style="left: 300px;">
                                            <button href="finalizacompra.html"class="brd-rd3 red-bg">Finalizar Compra</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Section Box -->
    </section>
@endsection

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
                            <div class="tabs-wrp brd-rd5">
                                <div class="statement-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>PRODUCTO</th>
                                                <th>PRECIO POR UNIDAD</th>
                                                <th>CANTIDAD</th>
                                                <th>COSTO TOTAL</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td>{{$product->title}}</td>
                                                    <td>S/ {{$product->price_sale}}</td>
                                                    <td> {{$product->quantity}}</td>
                                                    <td><span class="red-clr">S/ {{$product->price_sale*$product->quantity}}</span></td> 
                                                    <td>@include('carrito.delete', ["product" => $product])</td> 
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Total a pagar:</td> 
                                                <td style="font-size:large">S/ {{$total}}</td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="loc-map2">
                                    <div class="loc-map brd-rd3" id="loc-map"></div>
                                    @if($products->isNotEmpty())
                                        @include('carrito.finalizar', ["shopping_cart" => $product->shopping_cart_id])
                                    @else
                                     <div class="loc-srch" style="left: 300px;">
                                        <button class="btn btn-default"><a href="{{ url('/productos') }}" style="color:red">El carrito esta vacío, haz click aqui para volver a los productos.</a></button>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Section Box -->
    </section>
@endsection

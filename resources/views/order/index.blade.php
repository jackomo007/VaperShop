@extends('layouts.app')

@section('content')
    <section>
        <div class="block">
            <div class="fixed-bg" style="background-image: url(/../../../../images/topbg.jpg);"></div>
            <div class="page-title-wrapper text-center">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="page-title-inner">
                        <h1 itemprop="headline">MIS ORDENES DE COMPRA</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Inicio</a></li>
                <li class="breadcrumb-item active">MIS ORDENES</li>
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
                                                <th>Usuario</th>
                                                <th>Total</th>
                                                <th>Estado Compra</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td>{{$order->user_id}}</td>
                                                    <td>S/ {{$order->total}}</td>
                                                    <td> {{$order->status}}</td>
                                                    <td>
                                                        <a class="btn btn-info" href="{{ route('order.show',$order->id) }}">Ver Detalles</a>
                                                        <a class="btn btn-primary" href="{{ route('order.update',$order->id) }}">Actualizar Estado</a>
                                                        <form style="display: contents;" action="order/{{ $order->id}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="loc-map2">
                                    <div class="loc-map brd-rd3" id="loc-map"></div>
                                    @if($orders->isNotEmpty())
                                        @include('carrito.finalizar', ["shopping_cart" => $order->shopping_cart_id])
                                    @else
                                     <div class="loc-srch" style="left: 300px;">
                                        <button class="btn btn-default"><a href="{{ url('/order') }}" style="color:red">El carrito esta vacío, haz click aqui para volver a los orderos.</a></button>
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

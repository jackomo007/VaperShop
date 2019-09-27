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
                                                    <td>{{$order->shopping_cart->user->name}}</td>
                                                    <td>S/ {{$order->total}}</td>
                                                    <td><select name="estatus_order" id="estatus_order">
                                                        <option value="{{$order->status}}">{{$order->status}}</option>
                                                        <option value="Espera Pagamento">Espera Pagamento</option>
                                                        <option value="Concluido">Conlcuido</option>
                                                    </select></td>
                                                    <td>
                                                        <button type="button" class="btn btn-info" onclick="ver_detalles({{ $order->id }})"data-toggle="modal" data-target="#exampleModal">
                                                            Ver detalles
                                                        </button>
                                                        <a class="btn btn-primary" href="{{ route('order.update',$order->id) }}">Actualizar Estado</a>
                                                        <form style="display: contents;" action="order/{{ $order->id}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger">Eliminar</button>
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
                                        <button class="btn btn-default"><a href="/admin" style="color:red">No hay ordenes de compra realizadas.</a></button>
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Orden de Compra</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div id="detalles_orden" class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
@endsection

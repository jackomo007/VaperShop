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
                <li class="breadcrumb-item"><a href="/" title="" itemprop="url">Inicio</a></li>
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
                                                    <td>
                                                        @if(Auth::user()->admin)
                                                        <form style="display: contents;" action="order/{{ $order->id}}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                        <select name="estatus_order" id="estatus_order">
                                                        <option value="{{$order->status}}">{{$order->status}}</option>
                                                        <option value="Espera Pagamento">Espera Pagamento</option>
                                                        <option value="Concluido">Conlcuido</option>
                                                        </select>
                                                        @else
                                                        {{$order->status}}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(Auth::user()->admin)
                                                         
                                                            <button type="submit" class="btn btn-primary">Actualizar</button>
                                                        </form>
                                                        @endif
                                                         <button type="button" class="btn btn-info" onclick="ver_detalles({{ $order->id }})"data-toggle="modal" data-target="#exampleModal">
                                                            Ver detalles
                                                        </button>
                                                        @if(Auth::user()->admin)
                                                        <form style="display: contents;" action="order/{{ $order->id}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                                        </form>
                                                        @endif
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
                                     @if(Auth::user()->admin)
                                        @if(!$orders->isEmpty())
                                            @include('carrito.finalizar', ["shopping_cart" => $order->shopping_cart_id])
                                        @else
                                        <div class="loc-srch" style="left: 300px;">
                                            <button class="btn btn-default"><a href="/admin" style="color:red">No hay ordenes de compra realizadas.</a></button>
                                        </div>
                                        @endif
                                     @else
                                        @if(!$orders)
                                            @include('carrito.finalizar', ["shopping_cart" => $order->shopping_cart_id])
                                        @else
                                        <div class="loc-srch" style="left: 300px;">
                                            <button class="btn btn-default"><a href="/admin" style="color:red">No hay ordenes de compra realizadas.</a></button>
                                        </div>
                                        @endif
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
                <h5 class="modal-title" style="padding-left: 35%;" id="exampleModalLabel">Orden de Compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table" width="100%">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">
                                Producto
                            </th>
                            <th scope="col">
                                Precio Unitario
                            </th>
                        </tr>
                    </thead>
                    <tbody id="detalles_orden">
                        
                    </tbody>								
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
@endsection

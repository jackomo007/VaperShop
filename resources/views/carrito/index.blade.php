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
                <li class="breadcrumb-item"><a href="/" title="" itemprop="url">Inicio</a></li>
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
                                            @if(sizeof($products) != 0)
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td>{{$product->title}}</td>
                                                        <td>S/ {{$product->price_sale}}</td>
                                                        <td> {{$product->quantity}}</td>
                                                        <td><span class="red-clr">S/ {{$product->price_sale*$product->quantity}}</span></td> 
                                                        <td>@include('carrito.delete', ["product" => $product])</td> 
                                                    </tr>
                                                @endforeach
                                            @endif
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
                                    @if(sizeof($products) != 0)
                                        @include('carrito.finalizar', ["shopping_cart" => $product->shopping_cart_id, "price" => $total])
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

     <!-- Modal -->
    <div class="modal fade" id="finalizar-compra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Finalizar Compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="compra" class="modal-body">
                <form action="/order" method="POST">
                    @csrf
                    <div class="price-header" style="padding: 25px 55px 0px;text-align: center;">
                        <h6 itemprop="headline">EL TOTAL DE SUS COMPRAS</h6>
                        <h3 itemprop="headline">ES</h3>
                        <div class="price-header" id="big-price"></div>
                    </div>
                    <ul class="price-body">
                        <li><input type="hidden" name="id_cart" id="id_cart"></li>
                        <li>
                            <div class="input-field brd-rd2"><i style="margin-left:-5%;" class="fa fa-map-marker"></i> <input
                                    style="border-style: none;box-shadow: none;"
                                    class="form-control"
                                    type="text"
                                    name="address"
                                    placeholder="INDIQUE A QUE DIRECCIÓN A DONDE SE HARÁ LA ENTREGA">
                            </div>
                        </li>
                        <li>
                            <div class="input-field brd-rd2"><i class="fa fa-handshake-o"></i> <input
                                    style="border-style: none;box-shadow: none;"
                                    class="form-control"
                                    type="text"
                                    name="guest"
                                    placeholder="INDIQUE LA PERSONA QUE RECIBIRÁ LA ENTREGA">
                            </div>
                        </li>
                        <li>
                            <div class="input-field brd-rd2">
                                <i class="fa fa-money"></i> 
                                <label>SELECCIONE EL METODO DE PAGO </label><sup>*</sup>
                            </div>
                            <div class="row">
                                <select name="change" id="change" onchange="pagamento()">
                                    <option value="0">Seleccione</option>                                        
                                    <option value="1">Efectivo</option>
                                    <option value="2">Transferencia Bancaria</option>
                                </select>
                            </div>
                            <div id="pagamento" class="row" style="margin-top: 5%;"></div>
                            
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-7"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
                        
                        <div class="col-md-2"><button type="submit" class="btn btn-warning">Finalizar Compra</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

@extends('admin.index')

@section('contenido_admin')
    <section>
        <body onload="activo('pr')">
            <div class="tab-pane fade in active" id="productos">
                <div class="dashboard-wrapper brd-rd5" style="padding:0px">

                    @if (\Session::get('success-product'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p style="margin-left: 30%;">{{ \Session::get('success-product') }}</p>
                        </div>
                    @endif

                    <div id="alerta-producto" class="alert alert-success" style="display:none">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <p style="margin-left: 30%;">Producto Eliminado con Exito!</p>
                    </div>

                    <div id="registrar_producto">
                        <div class="dashboard-title">
                            <h4 itemprop="headline">REGISTRAR PRODUCTOS</h4>
                        </div>

                        <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/producto" enctype="multipart/form-data">
                            @csrf
                            <div class="row mrg20">
                                <div id="sub_categoria_padre"class="col-md-6 col-sm-6 col-lg-6">

                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Nombre del Producto<sup>*</sup></label>
                                    <input id="title" type="text" class="form-control brd-rd3 @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label>Descripción del Producto</label>
                                    <input id="product_description" type="text" class="brd-rd3 @error('product_description') is-invalid @enderror" name="product_description" value="{{ old('product_description') }}" autocomplete="product_description" >
                                    @error('product_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Precio del Producto (Soles)<sup>*</sup></label>
                                <input id="pricing" type="text" class="form-control brd-rd3 @error('pricing') is-invalid @enderror" name="pricing" required value="{{ old('pricing') }}" >
                                @error('pricing')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Imagen del Producto</label>
                                    <input id="imagen_producto" type="file" class=" brd-rd3" name="imagen_producto" >
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="step-buttons">
                                        <button type="submit" class="btn btn-danger">Agregar Producto</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div id="actualizar_producto" style="display:none">
                        <div class="dashboard-title">
                            <h4 itemprop="headline">ACTUALIZAR PRODUCTO</h4>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                                <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/producto">
                                    @csrf
                                    @method('PUT')
                                    <input id="e_pro_id" name="e_pro_id" type="hidden">
                                        <div class="row">
                                            <div id="foto_actual"  class="col-md-4 col-sm-12 col-lg-4" style="margin-left: -25px;margin-right: -25px;">
                                                <div class="reservation-tabs-list brd-rd5">
                                                    <ul class="nav nav-tabs brd-rd5">
                                                        <li class="active">
                                                            <a id="productoIMG" href="#reservation-tab3" data-toggle="tab">

                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-12 col-lg-8">
                                                <div class="reservation-tab-content" style="padding: 20px;">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="reservation-tab1">
                                                                <div class="row mrg20">
                                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                                        <div id="e_sub_categoria_padre" class="select-wrp"></div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                        <label>Nombre del Producto<sup>*</sup></label>
                                                                        <input id="e_title" type="text" class="form-control @error('e_title') is-invalid @enderror" name="e_title" value="{{ old('e_title') }}" required autocomplete="e_title">
                                                                        @error('e_title')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <label>Precio del Producto</label>
                                                                            <input id="e_pricing" type="text" class="brd-rd3 @error('e_pricing') is-invalid @enderror" name="e_pricing" value="{{ old('e_pricing') }}" >
                                                                            @error('e_pricing')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                                        <label>Descripción del Producto</label>
                                                                        <input id="e_product_description" type="text" class="brd-rd3 @error('e_product_description') is-invalid @enderror" name="e_product_description" value="{{ old('e_product_description') }}" autocomplete="e_product_description" >
                                                                        @error('e_product_description')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                                        <label>Actualizar la imagen del Producto</label>
                                                                        <input id="e_imagen_producto" type="file" class=" brd-rd3" name="e_imagen_producto" >
                                                                    </div>

                                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                                        <div class="step-buttons">
                                                                            <button type="submit" class="btn btn-danger">Actualizar Producto</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <button class="btn btn-success registrar_producto">
                                <li style="list-style: none;">
                                    <a data-toggle="tab">
                                        <i class="fa fa-plus"></i>
                                    Nuevo Registro</a>
                                </li>
                            </button>
                        </div>
                    </div>

                    <div id="tabla_producto"></div>

                </div>
            </div>
        </body>
    </section>
@endsection

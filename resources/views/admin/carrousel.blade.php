@extends('admin.index')

@section('contenido_admin')
    <section>
        <body onload="activo('cr')">
            <div class="tab-pane fade in active" id="carrousels">
                <div class="dashboard-wrapper brd-rd5" style="padding:0px">

                    @if (\Session::get('success-carrousel'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p style="margin-left: 30%;">{{ \Session::get('success-carrousel') }}</p>
                        </div>
                    @endif

                    @if (\Session::get('error-carrousel'))
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p style="margin-left: 30%;">{{ \Session::get('error-carrousel') }}</p>
                        </div>
                    @endif

                    <div id="alerta-carrousel" class="alert alert-success" style="display:none">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <p style="margin-left: 30%;">Imagen Eliminada con Exito!</p>
                    </div>

                    <div id="registrar_carrousel">
                        <div class="dashboard-title">
                            <h4 itemprop="headline">REGISTRAR IMAGEN</h4>
                        </div>

                        <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/carrousel" enctype="multipart/form-data">
                            @csrf
                            <div class="row mrg20">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Imagen del Carrousel</label>
                                    <input id="imagen" type="file" class=" brd-rd3" name="imagen" >
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label>Descripción de la Imagen</label>
                                    <input id="description" type="text" class="brd-rd3 @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" >
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                 <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="step-buttons">
                                        <button type="submit" class="btn btn-warning">Registrar Imagen</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div id="actualizar_carrousel" style="display:none">
                        <div class="dashboard-title">
                            <h4 itemprop="headline">ACTUALIZAR IMAGEN</h4>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                                <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/carrousel">
                                    @csrf
                                    @method('PUT')
                                    <input id="e_car_id" name="e_car_id" type="hidden">                                            
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <div class="reservation-tab-content" style="padding: 20px;">
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="reservation-tab1">
                                                <div class="row">
                                                    <div id="foto_actual" style="">
                                                    <a id="carrouselIMG" href="#reservation-tab3" data-toggle="tab"></a>
                                                    </div>
                                                </div>
                                                <div class="row mrg20">
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Actualizar la imagen del Carrousel</label>
                                                    <input id="e_imagen" type="file" class=" brd-rd3" name="e_imagen">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Descripción de la Imagen</label>
                                                    <input id="e_description" type="text" class="brd-rd3 @error('e_description') is-invalid @enderror" name="e_description" value="{{ old('e_description') }}" autocomplete="e_description" >
                                                    @error('e_description')e_description
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="step-buttons">
                                                        <button type="submit" class="btn btn-warning">Actualizar Imagen</button>
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
                            <button class="btn btn-warning registrar_carrousel">
                                <li style="list-style: none;">
                                    <a data-toggle="tab">
                                        <i class="fa fa-plus"></i>
                                    Nuevo Registro</a>
                                </li>
                            </button>
                        </div>
                    </div>

                    <div id="tabla_carrousel"></div>

                </div>
            </div>
        </body>
    </section>
@endsection

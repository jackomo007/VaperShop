@extends('admin.index')

@section('contenido_admin')
    <section>
        <body onload="activo('ca')">
            <div class="tab-pane fade in active" id="categorias">
                <div class="tab-pane fade in active" id="categorias">
                    <div id="bienvenida"class="welcome-note yellow-bg brd-rd5">
                        <h4 itemprop="headline">BIENVENIDO ADMINISTRADOR</h4>
                        <p itemprop="description">Administra tus recursos aquí</p>
                        <img src="{{URL::asset('images/resource/welcome-note-img.png')}}" alt="welcome-note-img.png" itemprop="image">
                        <a class="remove-noti" href="#" title="" itemprop="url"><img src="{{URL::asset('images/close-icon.png')}}" alt="close-icon.png" itemprop="image"></a>
                    </div>
                </div>
                <div class="dashboard-wrapper brd-rd5" style="padding:0px">

                    @if (\Session::get('success-category'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p style="margin-left: 30%;">{{ \Session::get('success-category') }}</p>
                        </div>
                    @endif

                    <div id="alerta" class="alert alert-success" style="display:none">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <p style="margin-left: 30%;">Categoria Eliminada con Exito!</p>
                    </div>

                    <div id="registrar">
                            <div class="dashboard-title">
                            <h4 itemprop="headline">REGISTRA TU CATEGORÍA</h4>
                        </div>
                        <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/categoria" enctype="multipart/form-data">
                            @csrf
                            <div class="row mrg20">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Nombre de Categoría<sup>*</sup></label>
                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label>Descripción de la Categoría</label>
                                    <input id="description" type="text" class="brd-rd3 @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" >
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Imagen de la Categoria</label>
                                    <input id="imagen_categoria" type="file" class=" brd-rd3" name="imagen_categoria" >
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="step-buttons">
                                        <button type="submit" class="btn btn-danger">Agregar Categoria</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div id="actualizar" style="display:none">
                        <div class="dashboard-title">
                            <h4 itemprop="headline">ACTUALIZAR CATEGORÍA</h4>
                        </div>
                        <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/categoria" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input id="cat_id" name="cat_id" type="hidden">
                            <div class="row mrg20">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Nombre de Categoría<sup>*</sup></label>
                                    <input id="cat_name" type="text" class="form-control @error('cat_name') is-invalid @enderror" name="cat_name" value="{{ old('cat_name') }}" required autocomplete="cat_name">

                                    @error('cat_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label>Descripción de la Categoría</label>
                                    <input id="cat_description" type="text" class="brd-rd3 @error('cat_description') is-invalid @enderror" name="cat_description" value="{{ old('cat_description') }}" autocomplete="cat_description" >
                                    @error('cat_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Imagen de la Categoria</label>
                                   <div id="previa_categoria"></div>
                                    <input id="e_imagen_categoria" type="file" class=" brd-rd3" name="e_imagen_categoria" >
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="step-buttons">
                                        <button type="submit" class="btn btn-danger">Actualizar Categoria</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <button class="btn btn-success registrar_categoria">
                                <li style="list-style: none;">
                                    <a data-toggle="tab">
                                        <i class="fa fa-plus"></i>
                                    Nuevo Regitro</a>
                                </li>
                            </button>
                        </div>
                    </div>

                    <div id="tabla_categoria"></div>

                </div>
            </div>
        </body>
    </section>
@endsection

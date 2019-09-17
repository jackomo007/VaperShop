@extends('admin.index')

@section('contenido_admin')
    <section>
         <div class="tab-pane fade in active" id="sub-categorias">
                                     <div class="dashboard-wrapper brd-rd5" style="padding:0px">

                                        @if (\Session::get('success-sub-category'))
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <p style="margin-left: 30%;">{{ \Session::get('success-sub-category') }}</p>
                                            </div>
                                        @endif
                                         <div id="alerta" class="alert alert-success" style="display:none">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <p style="margin-left: 30%;">Categoria Eliminada con Exito!</p>
                                        </div>
                                        <div id="registrar_sub">
                                             <div class="dashboard-title">
                                                <h4 itemprop="headline">REGISTRAR SUB-CATEGORÍA</h4>
                                            </div>
                                            <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/sub-categoria">
                                                @csrf
                                                <div class="row mrg20">
                                                    <div id="categoria_padre"class="col-md-6 col-sm-6 col-lg-6">

                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <label>Nombre de la Sub Categoría<sup>*</sup></label>
                                                        <input id="sub_cat_name" type="text" class="form-control @error('sub_cat_name') is-invalid @enderror" name="sub_cat_name" value="{{ old('sub_cat_name') }}" required autocomplete="sub_cat_name">

                                                        @error('sub_cat_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <label>Descripción de la Categoría</label>
                                                        <input id="sub_cat_description" type="text" class="brd-rd3 @error('sub_cat_description') is-invalid @enderror" name="sub_cat_description" value="{{ old('sub_cat_description') }}" autocomplete="sub_cat_description" >
                                                        @error('sub_cat_description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <div class="step-buttons">
                                                            <button type="submit" class="btn btn-danger">Agregar Sub Categoria</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div id="actualizar_sub" style="display:none">
                                            <div class="dashboard-title">
                                                <h4 itemprop="headline">ACTUALIZAR SUB CATEGORÍA</h4>
                                            </div>
                                            <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/categoria">
                                                @csrf
                                                @method('PUT')
                                                <input id="e_sub_cat_id" name="e_sub_cat_id" type="hidden">
                                                <div class="row mrg20">
                                                     <div id="e_categoria_padre"class="col-md-6 col-sm-6 col-lg-6">

                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <label>Nombre de Sub Categoría<sup>*</sup></label>
                                                        <input id="e_sub_cat_name" type="text" class="form-control @error('e_sub_cat_name') is-invalid @enderror" name="e_sub_cat_name" value="{{ old('e_sub_cat_name') }}" required autocomplete="e_sub_cat_name">

                                                        @error('e_sub_cat_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <label>Descripción de la Sub Categoría</label>
                                                        <input id="e_sub_cat_description" type="text" class="brd-rd3 @error('e_sub_cat_description') is-invalid @enderror" name="e_sub_cat_description" value="{{ old('e_sub_cat_description') }}" autocomplete="e_sub_cat_description" >
                                                        @error('e_sub_cat_description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <div class="step-buttons">
                                                            <button type="submit" class="btn btn-danger">Actualizar Sub Categoria</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <button class="btn btn-success registrar_sub_categoria">
                                                    <li style="list-style: none;">
                                                        <a data-toggle="tab">
                                                            <i class="fa fa-plus"></i>
                                                        Nuevo Registro</a>
                                                    </li>
                                                </button>
                                            </div>
                                        </div>

                                        <div id="tabla_sub_categoria"></div>

                                    </div>
                                </div>
    </section>
@endsection
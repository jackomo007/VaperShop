@extends('layouts.app')

@section('content')
<style>
#Admin_filter label input{
    border-color: black;
}
</style>
    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Inicio</a></li>
                <li class="breadcrumb-item active">Sesion Administrador</li>
            </ol>
        </div>
    </div>

    <section>
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="dashboard-tabs-wrapper">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s">
                                <div class="profile-sidebar-inner brd-rd5">
                                    <div class="user-info red-bg">
                                        <img class="brd-rd50"
                                            src="images/resource/user-avatar.jpg"
                                            alt="user-avatar.jpg" itemprop="image">
                                        <div class="user-info-inner">
                                            <h5 itemprop="headline"><a href="#" title=""
                                                    itemprop="url">ADMINISTRADOR</a></h5>
                                            <span><a href="#" title="" itemprop="url">{{ $user->email }}</a></span>
                                            <a class="brd-rd3 sign-out-btn yellow-bg" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="" itemprop="url">
                                                <i class="fa fa-sign-out"></i> CERRAR SESIÓN</a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#categorias" style="cursor: pointer;" data-toggle="tab"><i class="fa fa-superpowers"></i>CATEGORIAS</a></li>
                                        <li><a href="#sub-categorias" style="cursor: pointer;" data-toggle="tab"><i class="fa fa-superpowers"></i> SUBCATEGORÍAS</a></li>
                                        <li><a  href="#productos" style="cursor: pointer;" data-toggle="tab"><i class="fa fa-shopping-basket"></i>PRODUCTOS</a></li>
                                        <li><a  href="#clientes" style="cursor: pointer;" data-toggle="tab"><i class="fa fa-picture-o"></i>CARROUSEL</a></li>
                                        <li><a  href="#otros" style="cursor: pointer;" data-toggle="tab"><i class="fa fa-cog"></i>OTRAS CONFIGURACIONES</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            <div id="marco" class="tab-content">

                                <div class="tab-pane fade in active" id="categorias">
                                    <div class="dashboard-wrapper brd-rd5" style="padding:0px">
                                        <div class="welcome-note yellow-bg brd-rd5">
                                            <h4 itemprop="headline">BIENVENIDO ADMINISTRADOR</h4>
                                            <p itemprop="description">Administra tus recursos aquí</p>
                                            <img src="images/resource/welcome-note-img.png" alt="welcome-note-img.png" itemprop="image">
                                            <a class="remove-noti" href="#" title="" itemprop="url"><img src="images/close-icon.png" alt="close-icon.png" itemprop="image"></a>
                                        </div>

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
                                            <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/categoria">
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
                                            <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/categoria">
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

                                <div class="tab-pane fade" id="sub-categorias">
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

                                <div class="tab-pane fade" id="productos">
                                    <div class="dashboard-wrapper brd-rd5" style="padding:0px">

                                       @if (\Session::get('success-product'))
                                           <div class="alert alert-success">
                                               <button type="button" class="close" data-dismiss="alert">×</button>
                                               <p style="margin-left: 30%;">{{ \Session::get('success-product') }}</p>
                                           </div>
                                       @endif
                                        <div id="alerta" class="alert alert-success" style="display:none">
                                           <button type="button" class="close" data-dismiss="alert">×</button>
                                           <p style="margin-left: 30%;">Categoria Eliminada con Exito!</p>
                                       </div>
                                       <div id="registrar_sub">
                                            <div class="dashboard-title">
                                               <h4 itemprop="headline">REGISTRAR PRODUCTOS</h4>
                                           </div>
                                           <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/producto">
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
                                                    <label>Precio del Producto (Soles)</label>
                                                    <input id="pricing" type="text" dir="rtl" class="form-control brd-rd3 @error('pricing') is-invalid @enderror" name="pricing" required value="{{ old('pricing') }}" >
                                                    @error('pricing')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                   <div class="col-md-12 col-sm-12 col-lg-12">
                                                       <div class="step-buttons">
                                                           <button type="submit" class="btn btn-danger">Agregar Producto</button>
                                                       </div>
                                                   </div>
                                               </div>
                                           </form>
                                       </div>

                                       <div id="actualizar_sub" style="display:none">
                                           <div class="dashboard-title">
                                               <h4 itemprop="headline">ACTUALIZAR PRODUCTO</h4>
                                           </div>
                                           <form class="restaurant-info-form brd-rd5" style="padding: 30px;" method="POST" action="/product">
                                               @csrf
                                               @method('PUT')
                                               <input id="e_sub_cat_id" name="e_sub_cat_id" type="hidden">
                                               <div class="row mrg20">
                                                <div id="e_sub_categoria_padre"class="col-md-6 col-sm-6 col-lg-6">

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
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Descripción del Producto</label>
                                                    <input id="e_product_description" type="text" class="brd-rd3 @error('e_product_description') is-invalid @enderror" name="e_product_description" value="{{ old('e_product_description') }}" autocomplete="e_product_description" >
                                                    @error('e_product_description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                 <label>Precio del Producto</label>
                                                 <input id="e_pricing" type="number" class="brd-rd3 @error('e_pricing') is-invalid @enderror" name="e_pricing" value="{{ old('e_pricing') }}" >
                                                 @error('e_pricing')
                                                     <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                     </span>
                                                 @enderror
                                             </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="step-buttons">
                                                        <button type="submit" class="btn btn-danger">Actualizar Producto</button>
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

                                <div class="tab-pane fade" id="clientes">
                                    <div class="tabs-wrp account-settings brd-rd5">
                                        <h4 itemprop="headline">CLIENTES REGISTRADOS</h4>
                                        <div class="account-settings-inner">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="profile-info text-center">
                                                        <div class="profile-thumb brd-rd50">
                                                            <img id="profile-display"
                                                                src="images/resource/profile-img1.jpg"
                                                                alt="profile-img1.jpg" itemprop="image">
                                                        </div>
                                                        <div class="profile-img-upload-btn">
                                                            <label
                                                                class="fileContainer brd-rd5 yellow-bg">
                                                                VER PERFIL
                                                                <input id="profile-upload"
                                                                    type="file" />
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="profile-info text-center">
                                                        <div class="profile-thumb brd-rd50">
                                                            <img id="profile-display"
                                                                src="images/resource/profile-img1.jpg"
                                                                alt="profile-img1.jpg" itemprop="image">
                                                        </div>
                                                        <div class="profile-img-upload-btn">
                                                            <label
                                                                class="fileContainer brd-rd5 yellow-bg">
                                                                VER PERFIL
                                                                <input id="profile-upload"
                                                                    type="file" />
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <div class="profile-info text-center">
                                                        <div class="profile-thumb brd-rd50">
                                                            <img id="profile-display"
                                                                src="images/resource/profile-img1.jpg"
                                                                alt="profile-img1.jpg" itemprop="image">
                                                        </div>
                                                        <div class="profile-img-upload-btn">
                                                            <label
                                                                class="fileContainer brd-rd5 yellow-bg">
                                                                VER PERFIL
                                                                <input id="profile-upload"
                                                                    type="file" />
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="otros">
                                    <div class="tabs-wrp account-settings brd-rd5">
                                        <h4 itemprop="headline">VARIAS FUNCIONALIDADES</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

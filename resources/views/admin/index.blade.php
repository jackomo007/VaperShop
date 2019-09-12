@extends('layouts.app')

@section('content')
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
                                            <span><a href="#" title=""
                                                    itemprop="url">{{ $user->email }}</a></span>
                                            <a class="brd-rd3 sign-out-btn yellow-bg" href="#" title=""
                                                itemprop="url"><i class="fa fa-sign-out"></i> CERRAR
                                                SESIÓN</a>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#categorias" data-toggle="tab"><i class="fa fa-superpowers"></i>CATEGORIAS</a></li>
                                        <li><a href="#sub-categorias" data-toggle="tab"><i class="fa fa-superpowers"></i> SUBCATEGORÍAS</a></li>
                                        <li><a href="#productos" data-toggle="tab"><i class="fa fa-shopping-basket"></i>PRODUCTOS</a></li>
                                        <li><a href="#clientes" data-toggle="tab"><i class="fa fa-user-circle-o"></i>CLIENTES</a></li>
                                        <li><a href="#otros" data-toggle="tab"><i class="fa fa-cog"></i>OTRAS CONFIGURACIONES</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            <div class="tab-content">

                                <div class="tab-pane fade in active" id="categorias">
                                    <div class="dashboard-wrapper brd-rd5" style="padding:0px">
                                        <div class="welcome-note yellow-bg brd-rd5">
                                            <h4 itemprop="headline">BIENVENIDO ADMINISTRADOR</h4>
                                            <p itemprop="description">Administra tus recursos aquí</p>
                                            <img src="images/resource/welcome-note-img.png"
                                                alt="welcome-note-img.png" itemprop="image">
                                            <a class="remove-noti" href="#" title="" itemprop="url"><img
                                                    src="images/close-icon.png"
                                                    alt="close-icon.png" itemprop="image"></a>
                                        </div>
                                        <div class="dashboard-title">
                                            <h4 itemprop="headline">REGISTRA TU CATEGORÍA</h4>
                                        </div>
                                        <form class="restaurant-info-form brd-rd5">
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <label>Nombre de Categoría<sup>*</sup></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Agregar Subcategoría</label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Descripción de la Categoría</label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="step-buttons">
                                                        <a class="brd-rd3 red-bg" href="#" title=""
                                                            itemprop="url">Agregar Categoría</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="sub-categorias">
                                    <div class="tabs-wrp brd-rd5">
                                        <div class="dashboard-title">
                                            <h4 itemprop="headline">EDITA TU CATEGORÍA</h4>
                                        </div>
                                        <form class="restaurant-info-form brd-rd5">
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <label>Nombre de Categoría<sup>*</sup></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Agregar Subcategoría</label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Descripción de la Categoría</label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="step-buttons">
                                                        <a class="brd-rd3 red-bg" href="#" title=""
                                                            itemprop="url">Guardar Cambio</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="productos">
                                    <div class="tabs-wrp brd-rd5">
                                        <h4 itemprop="headline">AGREGAR PRODUCTOS</h4>
                                        <form class="restaurant-info-form brd-rd5">
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <label>Nombre de Producto<sup>*</sup></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <label>Precio<sup>*</sup></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Categoría del Producto <sup>*</sup></label>
                                                    <div class="select-wrp">
                                                        <select>
                                                            <option>Lácteos</option>
                                                            <option>Huevos</option>
                                                            <option>Abarrotes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Subcategoría <sup>*</sup></label>
                                                    <div class="select-wrp">
                                                        <select>
                                                            <option>Queso</option>
                                                            <option>Leche en polvo</option>
                                                            <option>Leche Líquida</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Descripción</label>
                                                    <input class="brd-rd3" type="email">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="step-buttons">
                                                        <a class="brd-rd3 red-bg" href="#" title=""
                                                            itemprop="url">Agregar Producto</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- Review List -->
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

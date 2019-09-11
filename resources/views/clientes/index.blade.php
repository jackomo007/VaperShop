@extends('layouts.app')

@section('content')
    <section>
        <div class="block">
            <div class="fixed-bg" style="background-image: url(/../../../../images/topbg.jpg);"></div>
            <div class="page-title-wrapper text-center">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="page-title-inner">
                        <h1 itemprop="headline">MI PERFIL</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Inicio</a></li>
                <li class="breadcrumb-item active">MI PERFIL</li>
            </ol>
        </div>
    </div>

    <section>
        <div class="block less-spacing gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <div class="dashboard-tabs-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-lg-4">
                                        <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="profile-sidebar-inner brd-rd5">
                                                <div class="user-info red-bg">
                                                    <img class="brd-rd50" width="90" height="90" src="/../../../../images/logo2.png" alt="user-avatar.jpg" itemprop="image">
                                                    <div class="user-info-inner">
                                                        <h5 itemprop="headline"><a href="#" title="" itemprop="url">MI CUENTA</a></h5>
                                                        <span><a href="#" title="" itemprop="url">{{ $user->email }}</a></span>
                                                        <a class="brd-rd3 sign-out-btn yellow-bg" href="{{ url('/logout') }}"
                                                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();" title="" itemprop="url"><i class="fa fa-sign-out"></i> CERRAR SESIÓN</a>

                                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                    </div>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#estado" data-toggle="tab"><i class="fa fa-dashboard"></i> ESTADO DE COMPRAS</a></li>
                                                    <li><a href="#shortlists" data-toggle="tab"><i class="fa fa-heart"></i>DETALLES DE COMPRAS EN PROCESO</a></li>
                                                    <li><a href="#account-settings" data-toggle="tab"><i class="fa fa-cog"></i>CONFIGURACIONES DE CUENTA</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="estado">
                                                <div class="dashboard-wrapper brd-rd5">
                                                    <div class="welcome-note yellow-bg brd-rd5">
                                                        <h4 itemprop="headline">SALUDOS {{ $user->name }} BIENVENID@ A TU CUENTA</h4>
                                                        <p itemprop="description">Revisa tus movimientos y las informaciones de tu perfil</p>
                                                        <img src="images/resource/welcome-note-img.png" alt="welcome-note-img.png" itemprop="image">
                                                        <a class="remove-noti" href="#" title="" itemprop="url"><img src="images/close-icon.png" alt="close-icon.png" itemprop="image"></a>
                                                    </div>
                                                    <div class="dashboard-title">
                                                        <h4 itemprop="headline">HISTORIAL DE COMPRAS</h4>
                                                    </div>
                                                    <div class="restaurants-list">
                                                        <div class="style3 brd-rd5 wow fadeInUp" data-wow-delay="0.2s">
                                                            <div class="tabs-wrp brd-rd5">
                                                                <div class="booking-table">
                                                                    <table>
                                                                        <thead>
                                                                            <tr>
                                                                                <th>CÓDIGO DE COMPRA</th>
                                                                                <th>DÍA</th>
                                                                                <th>ESTADO</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <h5 itemprop="headline"><a href="#" title="" itemprop="url">#8589</a></h5>
                                                                                </td>
                                                                                <td>17 agosto 2019</td>
                                                                                <td><span class="brd-rd3 processing">PROCESANDO</span> <a class="detail-link brd-rd50" href="#"
                                                                                        title="" itemprop="url"><i class="fa fa-chain"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <h5 itemprop="headline"><a href="#" title="" itemprop="url">#8589</a></h5>
                                                                                </td>
                                                                                <td>17 agosto 2019</td>
                                                                                <td><span class="brd-rd3 processing">PROCESANDO</span> <a class="detail-link brd-rd50" href="#"
                                                                                        title="" itemprop="url"><i class="fa fa-chain"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <h5 itemprop="headline"><a href="#" title="" itemprop="url">#8589</a></h5>
                                                                                </td>
                                                                                <td>17 agosto 2019</td>
                                                                                <td><span class="brd-rd3 completed">COMPLETADA</span> <a class="detail-link brd-rd50" href="#"
                                                                                        title="" itemprop="url"><i class="fa fa-chain"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <h5 itemprop="headline"><a href="#" title="" itemprop="url">#8589</a></h5>
                                                                                </td>
                                                                                <td>17 agosto 2019</td>
                                                                                <td><span class="brd-rd3 processing">PROCESANDO</span> <a class="detail-link brd-rd50" href="#"
                                                                                        title="" itemprop="url"><i class="fa fa-chain"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <h5 itemprop="headline"><a href="#" title="" itemprop="url">#8589</a></h5>
                                                                                </td>
                                                                                <td>17 agosto 2019</td>
                                                                                <td><span class="brd-rd3 completed">COMPLETADA</span> <a class="detail-link brd-rd50" href="#"
                                                                                        title="" itemprop="url"><i class="fa fa-chain"></i></a></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="shortlists">
                                                <div class="tabs-wrp brd-rd5">
                                                    <h4 itemprop="headline">DETALLES DE COMPRAS ACTUALES</h4>
                                                    <div class="restaurants-list">
                                                        <div class="featured-restaurant-box style3 brd-rd5">
                                                            <div class="featured-restaurant-thumb"><a href="#" title="" itemprop="url"><img
                                                                        src="images/resource/restaurant-logo1-1.jpg" alt="restaurant-logo1-1.png"
                                                                        itemprop="image"></a></div>
                                                            <div class="featured-restaurant-info">
                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">1 litro de leche</a></h4>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> CANTIDAD</li>
                                                                    <li><i class="flaticon-transport"></i> PRECIO POR UNIDAD</li>
                                                                </ul>
                                                            </div>
                                                            <div class="view-menu-liks">
                                                                <a class="brd-rd3" href="#" title="" itemprop="url">S/12.00</a>
                                                            </div>
                                                        </div>
                                                        <div class="featured-restaurant-box style3 brd-rd5">
                                                            <div class="featured-restaurant-thumb"><a href="#" title="" itemprop="url"><img
                                                                        src="images/resource/restaurant-logo1-2.jpg" alt="restaurant-logo1-2.png"
                                                                        itemprop="image"></a></div>
                                                            <div class="featured-restaurant-info">
                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">1 litro de leche</a></h4>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> CANTIDAD</li>
                                                                    <li><i class="flaticon-transport"></i> PRECIO POR UNIDAD</li>
                                                                </ul>
                                                                </div>
                                                                <div class="view-menu-liks">
                                                                    <a class="brd-rd3" href="#" title="" itemprop="url">S/12.00</a>
                                                                </div>
                                                        </div>
                                                        <div class="featured-restaurant-box style3 brd-rd5">
                                                            <div class="featured-restaurant-thumb"><a href="#" title="" itemprop="url"><img
                                                                        src="images/resource/restaurant-logo1-3.jpg" alt="restaurant-logo1-3.png"
                                                                        itemprop="image"></a></div>
                                                            <div class="featured-restaurant-info">
                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">1 litro de leche</a></h4>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> CANTIDAD</li>
                                                                    <li><i class="flaticon-transport"></i> PRECIO POR UNIDAD</li>
                                                                </ul>
                                                                </div>
                                                                <div class="view-menu-liks">
                                                                    <a class="brd-rd3" href="#" title="" itemprop="url">S/12.00</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="pagination-wrapper text-center style2">
                                                        <ul class="pagination justify-content-center">
                                                            <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREV</a></li>
                                                            <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a></li>
                                                            <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a></li>
                                                            <li class="page-item active"><span class="page-link brd-rd2">3</span></li>
                                                            <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a></li>
                                                            <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a></li>
                                                            <li class="page-item">........</li>
                                                            <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">18</a></li>
                                                            <li class="page-item next"><a class="page-link brd-rd2" href="#" itemprop="url">NEXT</a></li>
                                                        </ul>
                                                    </div><!-- Pagination Wrapper -->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="account-settings">
                                                <div class="tabs-wrp account-settings brd-rd5">
                                                    <h4 itemprop="headline">EDITAR PERFIL</h4>
                                                    <div class="account-settings-inner">
                                                        <div class="row">

                                                            <div class="col-md-8 col-sm-8 col-lg-8">
                                                                <div class="profile-info-form-wrap">
                                                                    <form class="profile-info-form" action="/cliente/{{ $user->id }}/edit">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="row mrg20">
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <label>Nombre<sup>*</sup></label>
                                                                                <input class="brd-rd3" type="text" placeholder="Nombre" value="{{ $user->name }}">
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <label>Apellidos <sup>*</sup></label>
                                                                                <input class="brd-rd3" type="text" placeholder="Apellidos" value="{{ $user->surname }}">
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <label>Teléfono<sup>*</sup></label>
                                                                                <input class="brd-rd3" type="text" placeholder="Teléfono" value="{{ $user->phoneNumber }}">
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <label>Dirección<sup>*</sup></label>
                                                                                <input class="brd-rd3" type="text" placeholder="Dirección" value="{{ $user->address }}">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div  style="margin-top:20px" class="col-md-12 col-sm-12 col-lg-12">
                                                                <div class="loc-map2">
                                                                    <div class="loc-map brd-rd3" id="loc-map"></div>
                                                                    <div class="loc-srch">
                                                                        <button class="brd-rd3 red-bg type="submit">Actualizar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Section Box -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

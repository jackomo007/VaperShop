@extends('layouts.app')

@section('content')
    <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Regístrate</h1>
                            <span>Recibe las compras en la comodidad de tu casa</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" title="" itemprop="url">Inicio</a></li>
                    <li class="breadcrumb-item active">Regístrate</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block top-padd30 gray-bg">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="reservation-tabs-wrapper">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 col-lg-3">
                                            <div class="reservation-tabs-list brd-rd5">
                                                <ul class="nav nav-tabs brd-rd5">
                                                    <li class="active">
                                                        <a href="#reservation-tab3" data-toggle="tab">
                                                            <span class="brd-rd50">1</span> Información</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-12 col-lg-9">
                                            <div class="reservation-tab-content">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="reservation-tab1">
                                                            <form class="restaurant-info-form brd-rd5" method="POST" action="{{ route('register') }}">
                                                                @csrf
                                                            <div class="row mrg20">
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Tipo de Identificación <sup>*</sup></label>
                                                                    <div class="select-wrp">
                                                                        <select name="id_type">
                                                                            <option value="1">DNI</option>
                                                                            <option value="2">Pasaporte</option>
                                                                            <option value="3">Cédula</option>
                                                                            <option value="4">Carné de Estranjería</option>
                                                                            <option value="5">Permiso Temporal de Permanencia
                                                                                (PTP)</option>
                                                                            <option value="6">Registro Único de Contribuyentes
                                                                                (RUC)</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Número de Identificación<sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="id_number">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Nombres<sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="name">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Apellidos<sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="surname">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Teléfono Principal<sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="telefone">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Teléfono Secundario</label>
                                                                    <input class="brd-rd3" type="text" name="telefone_secondary">
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Dirección</label>
                                                                    <input class="brd-rd3" type="text" name="address">
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <h4 itemprop="headline">Terminar Inscripción</h4>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Correo Electrónico <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="email" name="email">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Contraseña <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="password" name="password" >
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Repite la Contraseña <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="password" name="password">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Seleccione su foto de perfil</label>
                                                                    <input type="file" name="cover">
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="agrement" id="agrement">
                                                                        <label for="agrement">Acepto los términos y
                                                                            condiciones</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <div class="step-buttons">
                                                                        <input type="submit" value="Enviar" class="btn btn-danger">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
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

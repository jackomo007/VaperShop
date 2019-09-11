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
                    <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Inicio</a></li>
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

                                                        <form class="restaurant-info-form brd-rd5" method="POST" action="/register">
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
                                                                    <input id="id_number" type="text" class=" brd-rd3 @error('id_number') is-invalid @enderror" name="id_number" value="{{ old('id_number') }}" required autocomplete="id_number" autofocus>
                                                                    @error('id_number')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Nombres<sup>*</sup></label>
                                                                    <input id="name" type="text" class=" brd-rd3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Apellidos<sup>*</sup></label>
                                                                    <input id="surname" type="text" class=" brd-rd3 @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                                                                    @error('surname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Teléfono Principal<sup>*</sup></label>
                                                                    <input id="phoneNumber" type="text" class=" brd-rd3 @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber" autofocus>
                                                                    @error('phoneNumber')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Teléfono Secundario</label>
                                                                    <input id="phoneNumber_secondary" type="text" class=" brd-rd3 @error('phoneNumber_secondary') is-invalid @enderror" name="phoneNumber_secondary" value="{{ old('phoneNumber_secondary') }}" required autocomplete="phoneNumber_secondary" autofocus>
                                                                    @error('phoneNumber_secondary')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Dirección</label>
                                                                    <input id="address" type="text" class=" brd-rd3 @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                                                    @error('address')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <h4 itemprop="headline">Terminar Inscripción</h4>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Correo Electrónico <sup>*</sup></label>
                                                                    <input id="email" type="text" class=" brd-rd3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Contraseña <sup>*</sup></label>
                                                                    <input id="password" type="password" class=" brd-rd3 @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Repite la Contraseña <sup>*</sup></label>
                                                                    <input id="password_confirmation" type="password" class=" brd-rd3 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="password_confirmation" autofocus>
                                                                    @error('password_confirmation')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <div class="check-box">
                                                                        <input id="agrement" type="checkbox" class=" brd-rd3 @error('agrement') is-invalid @enderror" name="agrement" value="{{ old('agrement') }}" required autocomplete="password_confirmation" autofocus>
                                                                    @error('agrement')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                        <label for="agrement">Acepto los términos y
                                                                            condiciones</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <div class="step-buttons">
                                                                        <button type="submit" class="btn btn-danger">enviar</button>
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

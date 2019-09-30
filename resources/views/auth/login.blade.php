@extends('layouts.app')

@section('content')
    <section>
         <div class="sign-popup-inner brd-rd5">
                    <div class="sign-popup-title text-center">
                        <h4 itemprop="headline">INICIA SESIÓN</h4>
                    </div>
                        <form class="sign-form" method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input id="email" type="email" placeholder="Correo Electrónico" class="brd-rd3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input id="password" type="password" class="brd-rd3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="form-check" style="margin-bottom: 20px;">
                                    <input class="form-check-input" type="checkbox" name="remember" style="height: 20px;" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" type="submit">INICIA SESIÓN</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a class="sign-btn"  href="{{ url('/registro') }}" title="" itemprop="url">Todavía no eres
                                    miembro?
                                    Regístrate</a>
                                <a class="recover-btn" href="#" title="" itemprop="url">Recuperar mi contraseña</a>
                            </div>
                        </div>
                    </form>
                </div>
    </section>
@endsection

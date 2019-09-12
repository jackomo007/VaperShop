<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VaPerShop') }}</title>

    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/red-color.css') }}">
        <link rel="stylesheet" href="{{ asset('css/yellow-color.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>


</head>
<body itemscope>
    <main>
        <div class="preloader">
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.header')
        <!-- Header -->

        <div class="container">
            @yield('content')
        </div>

        @include('layouts.footer')
        <!-- footer -->

        <!-- Bottom Bar -->
        <div class="log-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="log-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
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
            </div>
        </div>
    </main>

     <!-- Scripts -->
        {{-- <script src="/js/app.js" defer></script> --}}
        <!-- Main Wrapper -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>
        <!-- Slider -->
        <script type="text/javascript" src="/js/bxslider.min.js"></script>
        <script type="text/javascript" src="/js/script.slider.js"></script>
        <!-- jQuery sticky menu -->
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/jquery.sticky.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
            </script>
</body>

</html>

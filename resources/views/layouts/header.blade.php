<header class="stick">
    @if(Auth::check())
        <div class="topbar">
            <div class="container">

                            <img width="50" heigth="80" src="{{ asset('/images/logo.png') }}" alt="logo.png" itemprop="image" style="margin-top: 0.5%;position: fixed;"></a>

                <div class="social1">
                    @if(Auth::user()->admin)
                    <a href="{{ url('/admin') }}" title="Administrar recursos" itemprop="url">Gestion</a>
                    <a href="{{ url('/productos') }}" title="Lista de productos" itemprop="url">Productos</a>
                    @endif
                    <a href="{{ url('/carrito') }}" title="#" itemprop="url">
                        <i class="fa fa-cart-arrow-down" style="font-size: 32px;margin-top: -5px;">
                            @if(isset($productsCount))
                                <p style="color:#000000;font-size:12px;line-height: 0px; background-color: #ffb300;border-radius: 50%;padding: 1em 0.8em;">{{ $productsCount }}</p>
                            @else
                                <p style="color:white;font-size:12px;line-height: 0px; background-color: none;border-radius: 50%;padding: 1em 0.8em;">0</p>
                            @endif
                        </i>
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="topbar">
            <div class="container">
                <div class="topbar-register">
                    <a class="log-popup-btn" href="#" title="Login" itemprop="url">INICIA SESIÓN</a>
                </div>
                <div class="social1">
                    <a href="https://www.facebook.com" title="Facebook" itemprop="url" target="_blank"><i
                            class="fa fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com" title="Instagram" itemprop="url" target="_blank"><i class="fa fa-instagram"></i></a>

                </div>
            </div>
        </div>
    @endif
@if(!Auth::check())
        <!-- Topbar -->
        <div class="logo-menu-sec">
            <div class="container">
                <div class="logo">
                    <h1 itemprop="headline"><a href="{{ url('/') }}" title="Home" itemprop="url"><img
                                src="{{ asset('/images/logo2.png') }}" alt="logo.png" itemprop="image"></a></h1>
                </div>
                <nav>
                    <div class="menu-sec">
                        <ul>
                            <li class="menu-item-has-children"><a href="{{ url('/') }}" title="INICIO" itemprop="url">
                                    INICIO</a>
                            </li>
                            <li class="menu-item-has-children"><a href="{{ url('/productos') }}" title="PRODUCTOS"
                                    itemprop="url">PRODUCTOS</a>
                            </li>
                            <li><a href="{{ url('/contacto') }}" title="CONTÁCTANOS" itemprop="url">CONTÁCTANOS</a></li>
                        </ul>
                        @if(!Auth::check())
                            <a class="red-bg brd-rd4" href="{{ url('/registro') }}" title="REGÍSTRATE" itemprop="url">REGÍSTRATE AQUÍ</a>
                        @endif
                    </div>
                </nav><!-- Navigation -->
            </div>
        </div><!-- Logo Menu Section -->
@endif
</header>
<div class="responsive-header">
    <div class="responsive-logomenu">
        <div class="logo">
            <h1 itemprop="headline"><a href="{{ url('/') }}" title="INICIO" itemprop="url"><img
                        src="{{ asset('/images/logo.png') }}" alt="logo.png" itemprop="image"></a></h1>
        </div>
        <div style="display:inline-flex;margin-top:7%;margin-left:40%;">
            <a href="{{ url('/carrito') }}" title="#" itemprop="url">
                <i class="fa fa-cart-arrow-down" style="font-size: 32px;margin-top: -5px;">
                    @if(isset($productsCount))
                        <p style="color:#000000;font-size:12px;line-height: 0px; background-color: #ffb300;border-radius: 50%;padding: 1em 0.8em;">{{ $productsCount }}</p>
                    @else
                        <p style="color:white;font-size:12px;line-height: 0px; background-color: none;border-radius: 50%;padding: 1em 0.8em;">0</p>
                    @endif
                </i>
            </a>
        </div>
        <span class="menu-btn yellow-bg brd-rd4"><i class="fa fa-align-justify"></i></span>
    </div>
    <div class="responsive-menu">
        <span class="menu-close red-bg brd-rd3"><i class="fa fa-close"></i></span>
        <div class="menu-lst">
           <ul>
                <li><a href="{{ url('/') }}" title="INICIO" itemprop="url">
                        INICIO</a>
                </li>
                <li><a href="{{ url('/productos') }}" title="PRODUCTOS"
                        itemprop="url">PRODUCTOS</a>
                </li>
                <li><a href="{{ url('/contacto') }}" title="CONTÁCTANOS" itemprop="url">CONTÁCTANOS</a></li>
            </ul>
        </div>
        <div class="topbar-register">
            @if(!Auth::check())
            <a class="log-popup-btn" href="#" title="Login" itemprop="url">INICIA SESIÓN</a><br><br>
            <a href="{{ url('/registro') }}" title="REGÍSTRATE" itemprop="url">REGÍSTRATE</a>
            @endif
        </div>
    </div>
</div><!-- Responsive Menu -->

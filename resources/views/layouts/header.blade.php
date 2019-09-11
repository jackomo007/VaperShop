<header class="stick">
    @if(Auth::check())
        <div class="topbar">
            <div class="container">
                {{--  <a class="log-popup-btn" href="#" title="Login" itemprop="url">MI CARRITO</a>  --}}
                <div class="social1">
                    <a href="#" title="Login" itemprop="url">MI CARRITO</a>
                    <a href="#" title="#" itemprop="url" target="_blank"><i class="fa fa-cart-arrow-down">
                    @if(isset($productsCount))
                        <p style="color:white;font-size:12px">{{$productsCount}}</p>
                    @else
                        <p style="color:white;font-size:12px">0</p>
                    @endif
                    </i></a>
                     @if (Route::has('login'))
                             <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Salir
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                    @endif
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
                    @if(Auth::check()) 
                        <a class="red-bg brd-rd4" href="{{ url('/registro') }}" title="REGÍSTRATE" itemprop="url">REGÍSTRATE AQUÍ</a>
                    @endif
                </div>
            </nav><!-- Navigation -->
        </div>
    </div><!-- Logo Menu Section -->
</header>
<div class="responsive-header">
    <div class="responsive-logomenu">
        <div class="logo">
            <h1 itemprop="headline"><a href="{{ url('/') }}" title="INICIO" itemprop="url"><img
                        src="{{ asset('/images/logo.png') }}" alt="logo.png" itemprop="image"></a></h1>
        </div>
        <span class="menu-btn yellow-bg brd-rd4"><i class="fa fa-align-justify"></i></span>
    </div>
    <div class="responsive-menu">
        <span class="menu-close red-bg brd-rd3"><i class="fa fa-close"></i></span>
        <div class="menu-lst">
            <ul>
                <li class="menu-item-has-children"><a href="{{ url('/') }}" title="INICIO" itemprop="url">
                        INICIO</a>
                </li>
                <li class="menu-item-has-children"><a href="{{ url('/productos') }}" title="PRODUCTOS" itemprop="url">PRODUCTOS</a>
                </li>
                <li><a href="{{ url('/productos') }}" title="CONTACTÁNOS" itemprop="url">CONTÁCTANOS</a></li>
            </ul>
        </div>
        <div class="topbar-register">
            <a class="log-popup-btn" href="#" title="Login" itemprop="url">INICIA SESIÓN</a><br><br>
            <a href="{{ url('/registro') }}" title="REGÍSTRATE" itemprop="url">REGÍSTRATE</a>
        </div>
    </div>
</div><!-- Responsive Menu -->
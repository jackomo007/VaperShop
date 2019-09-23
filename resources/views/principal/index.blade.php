@extends('layouts.app')

@section('content')

    @include('layouts.slider') 
    <!-- End slider area -->

    <section>
        <div class="block blackish opac50">
            <div class="fixed-bg" style="background-image: url({{ asset('/images/parallax2.jpg);"></div>
            <div class="restaurant-searching style2 text-center">
                <div class="restaurant-searching-inner">
                    <span>VaPer <i>Shop</i> </span>
                    <h2 itemprop="headline">Recibe tus compras en la comodidad de tu hogar</h2>
                    <form method="POST" action="/productos/search" class="restaurant-search-form2 brd-rd30">
                        @csrf
                        <input class="brd-rd30"  name="search"  type="text" placeholder="QUÉ QUIERES BUSCAR?">
                        <button class="brd-rd30 red-bg" type="submit">BUSCAR</button>
                    </form>
                </div>
            </div><!-- Restaurant Searching -->
        </div>
    </section>
    <!-- top returents -->
    
    <section>
        <div class="block opac35">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="title2-wrapper text-center">
                            <h2 class="sudo-bottom sudo-width70 sudo-bg-yellow" itemprop="headline">Compra con
                                nosotros en 4 sencillos pasos</h2>
                        </div>
                        <div class="remove-ext text-center">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="step-box wow fadeIn" data-wow-delay="0.2s">
                                        <i><img src="/images/resource/setp-img1.png" alt="setp-img1.png"
                                                itemprop="image"> <span class="brd-rd50 red-bg">1</span></i>
                                        <div class="setp-box-inner">
                                            <h4 itemprop="headline">Regístrate o inicia sesión</h4>
                                            <p itemprop="description">Aquí debes tener registrada la dirección de
                                                donde vives para poder realizar la entrega hasta tu casa</p>
                                        </div>
                                    </div>
                                    <!-- Step Box -->
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="step-box wow fadeIn" data-wow-delay="0.4s">
                                        <i><img src="/images/resource/setp-img2.png" alt="setp-img2.png"
                                                itemprop="image"> <span class="brd-rd50 red-bg">2</span></i>
                                        <div class="setp-box-inner">
                                            <h4 itemprop="headline">Escoge los productos que quieras</h4>
                                            <p itemprop="description">Irás añadiendo al carrito de compras los
                                                productos que desees recibir</p>
                                        </div>
                                    </div>
                                    <!-- Step Box -->
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="step-box wow fadeIn" data-wow-delay="0.4s">
                                        <i><img src="/images/resource/setp-img2.png" alt="setp-img2.png"
                                                itemprop="image"> <span class="brd-rd50 red-bg">3</span></i>
                                        <div class="setp-box-inner">
                                            <h4 itemprop="headline">Confirma la dirección</h4>
                                            <p itemprop="description">Puedes enviar los productos a una dirección
                                                donde no residas</p>
                                        </div>
                                    </div>
                                    <!-- Step Box -->
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="step-box wow fadeIn" data-wow-delay="0.6s">
                                        <i><img src="/images/resource/setp-img3.png" alt="setp-img3.png"
                                                itemprop="image"> <span class="brd-rd50 red-bg">4</span></i>
                                        <div class="setp-box-inner">
                                            <h4 itemprop="headline">Confirma todos los datos y le das finalizar
                                                compra</h4>
                                            <p itemprop="description">Listo! Sólo debes esperar a que nuestros
                                                entregadores lleguen a tu casa</p>
                                        </div>
                                    </div><!-- Step Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App Section -->

    <section>
        <div class="block no-padding red-bg">
            <img class="bottom-clouds-mockup" src="/images/resource/clouds2.png" alt="clouds2.png"
                itemprop="image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="app-sec">
                            <div class="row">
                                <div
                                    class="col-md-4 hidden-sm col-md-offset-1 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-1">
                                    <div class="app-mockup text-right overlape-110 wow fadeInUp"
                                        data-wow-delay="0.2s"><img src="/images/resource/app-mockup.png"
                                            alt="app-mockup.png" itemprop="image"></div>
                                </div>
                                <div
                                    class="col-md-6 col-md-offset-1 col-sm-12 col-sm-offset-0 col-lg-6 col-lg-offset-1">
                                    <div class="app-info">
                                        <h4 itemprop="headline">Tienes alguna duda?</h4>
                                        <p itemprop="description">Consultános directamente aquí</p>
                                        <div class="app-download-btns">
                                            <a class="" href="contact.html" title="Contáctanos" itemprop="url"
                                                target="_blank"><img
                                                    src="/images/resource/app-download-btn1.png"
                                                    alt="app-download-btn1.png" itemprop="image"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End App Section -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

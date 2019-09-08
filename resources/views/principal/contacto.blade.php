@extends('layouts.app')

@section('content')
     <section>
        <div class="block">
            <div class="fixed-bg" style="background-image: url(images/topbg.jpg);"></div>
            <div class="page-title-wrapper text-center">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="page-title-inner">
                        <h1 itemprop="headline">Contáctanos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Inicio</a></li>
                <li class="breadcrumb-item active">Contáctanos</li>
            </ol>
        </div>
    </div>

    <section>
        <div class="block less-spacing gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <div class="loc-map" id="loc-map"></div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7802.997037771487!2d-77.02697187735959!3d-12.077986024417157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c88f661a9335%3A0x5887f1eeb47f5609!2sBalconcillo%2C%20La%20Victoria%2C%20Peru!5e0!3m2!1sen!2sbr!4v1567341653258!5m2!1sen!2sbr"
                                width="600" height="450" frameborder="0" style="border:0;"
                                allowfullscreen=""></iframe>
                            <div class="contact-info-sec text-center">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="contact-info-box">
                                            <i class="fa fa-phone-square"></i>
                                            <h5 itemprop="headline">TELÉFONOS</h5>
                                            <p itemprop="description">Teléfono 01: (55) 555 55555</p>
                                            <p itemprop="description">Teléfono 02: (55) 555 55555</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="contact-info-box">
                                            <i class="fa fa-map-marker"></i>
                                            <h5 itemprop="headline">DIRECCIÓN</h5>
                                            <p itemprop="description">5Tth Floor, AH Building, 756 New St
                                                Lima,
                                                Perú.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="contact-info-box">
                                            <i class="fa fa-envelope"></i>
                                            <h5 itemprop="headline">EMAIL</h5>
                                            <p itemprop="description">support@yourdomain.com</p>
                                            <p itemprop="description">hello@yourdomain.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form-wrapper text-center">
                                <div class="contact-form-inner">
                                    <h3 itemprop="headline">Si tienes alguna pregunta o duda <br> No dudes por favor
                                        de enviarnos un mensaje.</h3>
                                    <div id="message"></div>
                                    <form method="post" action="https://html.webinane.com/food-chow/contact.php"
                                        id="contactform">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-6 col-lg-12">
                                                <input id="name" type="text" placeholder="Tu Nombre">
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-lg-12">
                                                <input id="email" type="email" placeholder="Tu Correo Electrónico">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input type="text" placeholder="Asunto">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <textarea id="comments" placeholder="Mensaje"></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button class="brd-rd2" id="submit" type="submit">ENVIAR
                                                    MENSAJE</button>
                                                <img src="assets/images/ajax-loader.gif" class="loader"
                                                    alt="ajax-loader.gif" itemprop="image">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- Contact Form Wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

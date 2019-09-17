@extends('layouts.app')

@section('content')
<style>
#Admin_filter label input{
    border-color: black;
}
</style>
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
                                            src="{{URL::asset('images/resource/user-avatar.jpg')}}"
                                            alt="user-avatar.jpg" itemprop="image">
                                        <div class="user-info-inner">
                                            <h5 itemprop="headline"><a href="#" title=""
                                                    itemprop="url">ADMINISTRADOR</a></h5>
                                            <span><a href="#" title="" itemprop="url">{{ $user->email }}</a></span>
                                            <a class="brd-rd3 sign-out-btn yellow-bg" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="" itemprop="url">
                                                <i class="fa fa-sign-out"></i> CERRAR SESIÓN</a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a  href="{{ url('/admin/categoria') }}" style="cursor: pointer;"><i class="fa fa-superpowers"></i>CATEGORIAS</a></li>
                                        <li ><a  href="{{ url('/admin/sub-categoria') }}"  style="cursor: pointer;" ><i class="fa fa-superpowers"></i> SUBCATEGORÍAS</a></li>
                                        <li><a  href="/admin/sub-categoria" style="cursor: pointer;"><i class="fa fa-shopping-basket"></i>PRODUCTOS</a></li>
                                        <li ><a  style="cursor: pointer;"><i class="fa fa-picture-o"></i>CARROUSEL</a></li>
                                        <li ><a  style="cursor: pointer;"><i class="fa fa-cog"></i>OTRAS CONFIGURACIONES</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            <div id="marco" class="tab-content">

                                    @yield('contenido_admin')
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
    </section>
@endsection

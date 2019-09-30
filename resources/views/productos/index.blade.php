@extends('layouts.app')

@section('content')
    <section>
            <div class="block">
                @if(!isset($image))
                    <div class="fixed-bg" id="banner-product" style="background-image: url(/images/banners_default/compra-donde-quieras.jpg);background-repeat: none;"></div>
                @else
                    <div class="fixed-bg" id="banner-product" style="background-image: url(/images/categorias/{{ $image }});background-repeat: none;"></div>
                @endif
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            {{-- <h1 itemprop="headline">Nuestros Productos</h1> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" title="" itemprop="url">Inicio</a></li>
                    <li class="breadcrumb-item active">Nuestros Productos</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="sidebar left">
                                    <div class="widget style2 category_posts wow fadeIn" data-wow-delay="0.2s">
                                        <div class="widget-data">
                                            <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Categorías</h4>
                                            <div class="mini-posts-list">
                                                @foreach($categories as $category)
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordian"
                                                                    href="#{{$category->name}}">
                                                                    <span class="badge pull-right"><i
                                                                            class="fa fa-plus"></i></span>
                                                                    {{$category->name}}
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="{{$category->name}}" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <ul>
                                                                    @foreach ($category->subCategories as $subCategory)
                                                                        <li>
                                                                            <a href="/productos/{{$subCategory->id}}/filter">{{$subCategory->name}} </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Sidebar -->
                            </div>

                            <div class="col-md-9 col-sm-12 col-lg-9">
                                @if (\Session::get('error-cart'))
                                    <div style="background-color: #d9524f;" class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <p style="color:white">{{ \Session::get('error-cart') }}</p>
                                    </div>
                                @endif
                                <div class="blog-detail-wrapper">
                                    <div class="tab-pane fade in active" id="tab1-1">
                                        <form method="POST" action="/productos/search" class="search-dish">
                                            @csrf
                                            <input class="form-control" style="width: 95%;" type="text" name="search" placeholder="Search here">
                                            <button style="right: 15px;" type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                        <div class="dishes-list-wrapper">

                                            @foreach ($products as $product)
                                            <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <div class="popular-dish-box style2 wow fadeIn" data-wow-delay="0.2s">
                                                        <div>
                                                            <img width="200" height="200" style="margin-left: 10%;" src="/images/productos/{{ $product->imageProduct->image }}" alt="producto" >
                                                        </div>
                                                        <div class="popular-dish-info">
                                                            {{--  <h4 itemprop="headline"><a href="food-detail.html" title=""
                                                                    itemprop="url">{{ $product->title }}</a></h4>  --}}
                                                            <h4 itemprop="headline"><a href="#" title=""
                                                            itemprop="url">{{ $product ? $product->description : '' }}</a></h4>
                                                            <span class="price">S/ {{ $product->pricing }}</span>
                                                            <form action="/carrito" method = 'POST'>
                                                            <div class="qty-wrap">
                                                                <input class="qty" type="text" id="quantity" name="quantity" placeholder="0">
                                                            </div>

                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                <input type="hidden" name="price_sale" value="{{$product->pricing}}">
                                                                <button type="submit" class="btn btn-danger">Agregar al carrito</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="pagination-wrapper text-center">
                                        <ul class="pagination justify-content-center">
                                            {{ $products->links() }}
                                    </div>

                             </div>
                        </div>
                    </div>
                </div>
        </section>
@endsection

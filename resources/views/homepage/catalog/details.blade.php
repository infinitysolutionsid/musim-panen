@extends('welcome')
@section('titlepage',$catalog->product_name.' | Putra Karya Logam Sukses Product Details')
<?php $y = Date('Y'); ?>
@section('deschomepage','')
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>{{$catalog->product_name}}</h1>
        <span>{{$catalog->product_name}} is one of our many products that selled on our company.</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Product</li>
            <li class="breadcrumb-item" aria-current="page">Details</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">{{$catalog->product_name}}</a></li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap" style="padding-top: 20px !important; padding-bottom:0px;">
        <div class="container clearfix">
            <div class="row col-mb-50 mb-0">
                <div class="col-lg-12">
                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>Product Descriptions.</h4>
                    </div>
                    <p>{!!$catalog->description!!}
                    </p>
                </div>
            </div>
        </div>
</section>
<section id="content">
    <div class="content-wrap" style="padding-top: 0px !important;">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
						============================================= -->
                <div class="postcontent col-lg-9 order-lg-last">

                    <!-- Shop
							============================================= -->
                    <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">

                        @if(!$item->isEmpty())
                        @foreach ($item as $item)
                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="{!!asset('media/product/item/'.$item->fileimg)!!}"
                                            alt="{{$item->nama_item}}"></a>
                                    <div class="sale-flash badge badge-secondary p-2">Out of Stock</div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between"
                                            data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark"
                                                data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title">
                                        <h3><a href="#">{{$item->nama_item}}</a></h3>
                                    </div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-md-6 text-center">
                            <h4>Item not founded / added</h4>
                        </div>
                        @endif

                    </div><!-- #shop end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
						============================================= -->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget_links clearfix">

                            <h4>Catalog Categories</h4>
                            <ul>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Pants</a></li>
                                <li><a href="#">Tshirts</a></li>
                                <li><a href="#">Sunglasses</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Watches</a></li>
                            </ul>

                        </div>

                    </div>
                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section>
@endsection

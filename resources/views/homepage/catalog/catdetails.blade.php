@extends('welcome')
@section('titlepage',$catalog->nama_kategori.' | Putra Karya Logam Sukses Product Details')
<?php $y = Date('Y'); ?>
@section('deschomepage','')
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>{{$catalog->nama_kategori}}</h1>
        <span>{{$catalog->nama_kategori}} is one of our many products that selled on our company.</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Product Kategori</li>
            <li class="breadcrumb-item" aria-current="page">Details</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">{{$catalog->nama_kategori}}</a></li>
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
            @if(session('selamat'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="style-msg successmsg">
                        <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Well done!</strong>
                            {{session('selamat')}}
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<section id="content">
    <div class="content-wrap" style="padding-top: 0px !important;">
        <div class="container clearfix">
            @foreach ($items as $itemss)
            <div id="showitemcat{{$itemss->id}}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-body">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">{{$itemss->nama_item}}</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form action="/add-to-cart/{{$itemss->id}}" method="GET">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                {{-- <img class="imgview"
                                                    src="{!!asset('media/product/item/'.$itemss->thumbnails->fileimg)!!}"
                                                    alt="{{$itemss->nama_item}}"> --}}
                                                <div class="fslider" data-pagi="false">
                                                    <div class="flexslider">
                                                        <div class="slider-wrap">
                                                            @foreach($itemss->thumbnails as $tmb)
                                                            <div class="slide"><a
                                                                    href="{!!asset('media/product/item/'.$tmb->fileimg)!!}"
                                                                    title=""><img
                                                                        src="{!!asset('media/product/item/'.$tmb->fileimg)!!}"
                                                                        alt=""></a></div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <p>{!!$itemss->description!!} <br>
                                                    <form class="cart mb-0" method="post" enctype='multipart/form-data'>
                                                        <button type="submit" class="add-to-cart button m-0">Add to
                                                            cart</button><br><br>
                                                    </form> <br> Category:
                                                    <strong>{{$itemss->nama_kategori}}</strong><br>
                                                    Catalog: <strong>{{$itemss->product_name}}</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
						============================================= -->
                <div class="postcontent col-lg-12 order-lg-last">

                    <!-- Shop
							============================================= -->
                    <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">

                        @if(!$itemgal->isEmpty())
                        @foreach ($itemgal as $item)
                        <div class="product col-md-3 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="{!!asset('media/product/item/'.$item->thumbnail->fileimg)!!}"
                                            alt="{{$item->nama_item}}"></a>
                                    <div class="sale-flash badge badge-success p-2">Available</div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between"
                                            data-hover-animate="fadeIn" data-hover-speed="400">
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title">
                                        <h3><a href="#" data-toggle="modal"
                                                data-target="#showitemcat{{$item->id}}">{{$item->nama_item}}</a></h3>
                                    </div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
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
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

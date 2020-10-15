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
    <div class="container">
        <div class="content-wrap" style="padding-top: 20px !important; padding-bottom:0px;">
            <div class="container clearfix">
                <div class="row mb-0">
                    <div class="col-lg-12">
                        <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                            <h4>Product Descriptions.</h4>
                        </div>
                        <p>{!!$catalog->description!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @if(session('selamat'))
        <div class="row">
            <div class="col-lg-12">
                <div class="style-msg successmsg">
                    <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Well done!</strong> {{session('selamat')}}
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<section id="content">
    <div class="content-wrap" style="padding-top: 0px !important;">
        <div class="container clearfix">

            @foreach ($items as $itemss)
            <div id="showitem{{$itemss->id}}" class="modal fade bs-example-modal-lg modalitem" tabindex="-1"
                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                            <div class="col-lg-5">
                                                {{-- @foreach($itemss->thumbnails as $tmb)
                                                <img class="imgview"
                                                    src="{!!asset('media/product/item/'.$tmb->fileimg)!!}" alt="">
                                                @endforeach --}}
                                                {{-- <div class="product-image">
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
                                                </div> --}}
                                                <div class="product-image">
                                                    <div class="fslider" data-pagi="false" data-arrows="false"
                                                        data-thumbs="true">
                                                        <div class="flexslider">
                                                            <div class="slider-wrap" data-lightbox="gallery">
                                                                @foreach($itemss->thumbnails as $tmb)
                                                                <div class="slide"
                                                                    data-thumb="{!!asset('media/product/item/'.$tmb->fileimg)!!}">
                                                                    <a href="{!!asset('media/product/item/'.$tmb->fileimg)!!}"
                                                                        title="Logam Sukses"
                                                                        data-lightbox="gallery-item">
                                                                        <img src="{!!asset('media/product/item/'.$tmb->fileimg)!!}"
                                                                            alt="Logam Sukses">
                                                                    </a>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="sale-flash badge badge-danger p-2">Sale!</div> --}}
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
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
                <div class="postcontent col-lg-9 order-lg-last">

                    <!-- Shop
							============================================= -->
                    <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">

                        @if(!$itemgal->isEmpty())
                        @foreach ($itemgal as $items)
                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    {{-- @if(count($items)==1)

                                    <a href="#" data-toggle="modal" data-target="#showitem{{$items->id}}"><img
                                        src="{!!asset('media/product/item/'.$items->thumbnail->fileimg)!!}"
                                        alt="{{$items->nama_item}}"></a>
                                    <div class="sale-flash badge badge-success p-2">Available</div>
                                    @else --}}
                                    <div class="fslider" data-arrows="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                @foreach($items->thumbnail as $tmbl)
                                                <div class="slide">
                                                    <a href="#">
                                                        <img src="{!!asset('media/product/item/'.$tmbl->fileimg)!!}"
                                                            alt="Item CV Putra Karya Logam Sukses">
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    {{-- @endif --}}
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
                                                data-target="#showitem{{$items->id}}">{{$items->nama_item}}</a></h3>
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
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget_links clearfix">

                            <h4>Catalog Categories</h4>
                            <ul>
                                @if(!$kategori->isEmpty())
                                @foreach ($kategori as $kategoris)
                                <li><a
                                        href="/product/categories/details/{{$kategoris->id}}">{{$kategoris->nama_kategori}}</a>
                                </li>
                                @endforeach
                                @else
                                <li> No categories founded on this catalog</li>
                                @endif
                            </ul>

                        </div>

                    </div>
                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript">
    $('.modalitem').on('shown.bs.modal', function () {
        $('.flexslider.slide').resize();
    });

</script>
@endsection

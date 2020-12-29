@extends('welcome')
@section('titlepage','Gallery | Putra Karya Logam Sukses')
<?php $y = Date('Y'); ?>
@section('deschomepage','')
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Gallery</h1>
        <span>Our gallery documentations</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row my-5">
                <div class="col-4">
                    <h3>Metal Melting Process</h3>
                    <video preload="auto" controls style="display: block; width: 100%;">
                        <source src='{!!asset('homepage/video/IMG_7141.webm')!!}' type='video/webm' />
                        <source src='{!!asset('homepage/video/IMG_7141.mp4')!!}' type='video/mp4' />
                    </video>
                </div>
                <div class="col-4">
                    <h3>Metal Casting Process</h3>
                    <video preload="auto" controls style="display: block; width: 100%;">
                        <source src='{!!asset('homepage/video/IMG_7143.webm')!!}' type='video/webm' />
                        <source src='{!!asset('homepage/video/IMG_7143.mp4')!!}' type='video/mp4' />
                    </video>
                </div>
                <div class="col-4">
                    <h3>Quality Control (Sterntube)</h3>
                    <video preload="auto" controls style="display: block; width: 100%;">
                        <source src='{!!asset('homepage/video/VIDEO-2018-10-26-12-16-52.webm')!!}' type='video/webm' />
                        <source src='{!!asset('homepage/video/VIDEO-2018-10-26-12-16-52.mp4')!!}' type='video/mp4' />
                    </video>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="masonry-thumbs grid-container grid-5" data-big="1" data-lightbox="gallery">
                        @if(!$gallery->isEmpty())
                        @foreach ($gallery as $gallery)
                        <a class="grid-item" href="{!!asset('media/gallery/'.$gallery->img)!!}"
                            data-lightbox="gallery-item"><img src="{!!asset('media/gallery/'.$gallery->img)!!}"
                                alt=""></a>
                        @endforeach
                        @else
                        <h3>No data founded</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

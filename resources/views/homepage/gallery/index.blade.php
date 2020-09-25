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

@extends('welcome')
@section('titlepage','Demonstration | Musim Panen')
<?php $y = Date('Y'); ?>
@section('deschomepage','')
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Videos</h1>
        <span>This page content our video demonstrations.</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Videos</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="col-12">
                    <div class="masonry-thumbs grid-container grid-3" data-big="1" data-lightbox="gallery">
                        <a class="grid-item"><iframe width="560" height="315"
                                src="https://www.youtube.com/embed/28rrlHB5RNU" allowfullscreen></iframe></a>
                        <a class="grid-item"><iframe width="560" height="315"
                                src="https://www.youtube.com/embed/oi-laygZUQI" allowfullscreen></iframe></a>
                        <a class="grid-item"><iframe width="560" height="315"
                                src="https://www.youtube.com/embed/VsWVsm-Fk4w" allowfullscreen></iframe></a>
                        <a class="grid-item"><iframe width="560" height="315"
                                src="https://www.youtube.com/embed/4qzz7ZJkSu0" allowfullscreen></iframe></a>
                        <a class="grid-item"><iframe width="560" height="315"
                                src="https://www.youtube.com/embed/uA3zHp4jpyA" allowfullscreen></iframe></a>
                        <a class="grid-item"><iframe width="560" height="315"
                                src="https://www.youtube.com/embed/cMQyvVRxf7A" allowfullscreen></iframe></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

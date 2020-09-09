@extends('welcome')
@section('titlepage','Musim Panen - About Us')
<?php $y = Date('Y'); ?>
@section('deschomepage','Bagaimana kami memulai usaha dan bisnis panen di Indonesia terkhusus di Medan dan di Jakarta.
Kami Musim Panen.')
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>About Us</h1>
        <span>This is our story, this is our company profile.</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row col-mb-50 mb-0">
                <div class="col-lg-4">
                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>Why choose <span>Us</span>.</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam
                        expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim
                        repellat earum perspiciatis.</p>
                </div>
                <div class="col-lg-4">
                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>Our <span>Mission</span>.</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam
                        expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim
                        repellat earum perspiciatis.</p>
                </div>
                <div class="col-lg-4">
                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>What we <span>Do</span>.</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam
                        expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim
                        repellat earum perspiciatis.</p>
                </div>
            </div>
            <div class="row col-mb-50 mb-0">
                <div class="col-lg-12">
                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>Our <span>History</span>.</h4>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem quisquam earum
                        voluptatibus est placeat eaque dolorum laboriosam laudantium dolor omnis, facere repellendus.
                        Iste magni nobis suscipit, deleniti nesciunt aliquam ducimus. Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi
                        voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

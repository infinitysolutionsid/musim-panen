@extends('welcome')
@section('titlepage','About Us - Putra Karya Logam Sukses')
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
                <div class="col-lg-12">
                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>Our <span>History</span>.</h4>
                    </div>
                    <p>CV. Putra Karya Logam Sukses is a manufacturing company based in Tanjung Balai, North Sumatera,
                        specializes at fishing boats gears. We have been operating in marine industry since 2014
                        continously offering and manufacturing many tools such as anchor, steer, pulleys, nuts,
                        coupling, shaft, stern tube and propeller to repairing propellers for boats.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>Our <span>Vision</span>.</h4>
                    </div>
                    <p>To become number 1 producer and distributor in Indonesia’s Marine industry.</p>
                </div>
                <div class="col-lg-4">
                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>Our <span>Mission</span>.</h4>
                    </div>
                    <p>
                        <ul>
                            <li><strong>Marketplace</strong>: to expand further and finally, cover whole Indonesia
                                market.</li>
                            <li><strong>Quality</strong>: To improve quality from time to time and continuously provide
                                consistent
                                quality to our customers</li>
                            <li><strong>Distribution</strong>: To provide fast and effective delivery to customers</li>
                            <li><strong>Work system</strong>: To work effectively and efficiently to increase
                                productivity and deliver
                                the best to our customers</li>
                        </ul>
                    </p>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>What we <span>Do</span>.</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam
                        expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim
                        repellat earum perspiciatis.</p>
                </div> --}}
            </div>
            <div class="row col-mb-50 mb-0">

            </div>
        </div>
    </div>
</section>
@endsection

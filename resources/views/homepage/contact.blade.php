@extends('welcome')
@section('titlepage','Contact Us - Putra Karya Logam Sukses')
<?php $y = Date('Y'); ?>
@section('deschomepage','Ayo konsultusi untuk upvc di rumah idaman kamu. Jangan ragu. Konsultasi sekarang juga, hubungi
musimpanen.co.id.')
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Contact Us</h1>
        <span>How you can contact us?</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row align-items-stretch col-mb-50 mb-0">
                <!-- Contact Form
						============================================= -->
                <div class="col-lg-6">

                    <div class="fancy-title title-border">
                        <h3>Send us an Email</h3>
                    </div>

                    <div class="form-widget">

                        <div class="form-result"></div>

                        <form id="sendmessaage" action="/send-message" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="">Name <small>*</small></label>
                                    <input type="text" name="name" value="" class="sm-form-control" required />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="">Email <small>*</small></label>
                                    <input type="email" id="" name="email" value="" class="email sm-form-control"
                                        required />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="">Phone</label>
                                    <input type="text" id="" name="nohp" value="" class="sm-form-control" required />
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">Message <small>*</small></label>
                                    <textarea class="sm-form-control" id="" name="message" rows="6"
                                        cols="30"></textarea>
                                </div>
                                <div class="col-12 form-group">
                                    <button form="sendmessaage" type="submit" class="button button-3d m-0">Submit
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 min-vh-50">
                    <div class="gmap h-100" data-latitude="3.6294025" data-longitude="98.6866543"
                        data-markers='[{latitude:3.6294025, longitude:98.6866543, html: "<div class=\"p-2\" style=\"width: 300px;\"><h4 class=\"mb-2\">Hi! We are <span>Envato!</span></h4><p class=\"mb-0\" style=\"font-size:1rem;\">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day.</p></div>", icon:{ image: "images/icons/map-icon-red.png", iconsize: [32, 39], iconanchor: [32,39] } }]'>
                    </div>
                </div>
            </div>
            <div class="row col-mb-50">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-map-marker2"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Our Office<span class="subtitle"> Jalan Perintis KM 10 Jampalan, Asahan - Sumatera
                                    Utara, Indonesia</span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-phone3"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Speak to Us

                                <span class="subtitle">{{$contacts->whatsapp1}}</span>
                                <span class="subtitle">{{$contacts->whatsapp2}}</span>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-email"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Email us<span class="subtitle">info@musimpanen.co.id</span></h3>
                        </div>
                    </div>
                </div>
            </div><!-- Contact Info End -->

        </div>
    </div>
</section>
@endsection

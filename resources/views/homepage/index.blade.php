@extends('welcome')
@section('titlepage','Putra Karya Logam Sukes - Homepages')
<?php $y = Date('Y'); ?>
@section('deschomepage','')
@section('sliderhomepage')
<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-75" data-loop="true">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container">
                    <div class="slider-caption">
                        <div>
                            <h2>Welcome to <span>Putra Karya Logam Sukses</span></h2>
                            <p class="d-none d-sm-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum
                                officia nisi voluptatum accusantium, voluptatibus debitis hic quam exercitationem.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide-bg" style="background-image: url('{!!asset('homepage/images/slider/swiper/1.jpg')!!}');
                    background-position: center top;">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="slider-caption slider-caption-right">
                        <div>
                            <h2>Best Propeller Stock in Indonesia</h2>
                            <p class="d-none d-sm-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Magni.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="video-wrap">
                    <video id="slide-video" poster="demos/construction/images/videos/1.jpg" preload="auto" loop autoplay
                        muted>
                        <source
                            src='https://ak.picdn.net/shutterstock/videos/1024789244/preview/stock-footage-slowmotion-close-up-shot-of-boat-propeller-starts-with-nice-air-bubbles-from-the-engine.webm'
                            type='video/webm' />
                        <source
                            src='https://ak.picdn.net/shutterstock/videos/1024789244/preview/stock-footage-slowmotion-close-up-shot-of-boat-propeller-starts-with-nice-air-bubbles-from-the-engine.webm'
                            type='video/mp4' />
                    </video>
                    <div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="slider-caption">
                        <div>
                            <h2>Premium Constructions</h2>
                            <p class="d-none d-sm-block">You'll be surprised to see the Final Results of your Creation
                                &amp; would crave for more.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide-bg" style="background-image: url('{!!asset('homepage/images/slider/swiper/2.jpg')!!}');
                    background-position: center bottom;">
                </div>
            </div>
        </div>
        <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
        <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
    </div>

</section>
@endsection
@section('content')
<section id="content">
    <div class="content-wrap">

        <div class="promo promo-light promo-full promo-uppercase p-5 bottommargin-lg header-stick">
            <div class="container clearfix">
                <div class="row align-items-center">
                    <div class="col-12 col-lg">
                        <h3 style="letter-spacing: 2px;">We believe that we give you a high quality things.</h3>
                        <span>We strive to provide Our Customers with Top Quality products.</span>
                    </div>
                    <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                        <a href="#" class="button button-large button-circle button-black m-0">Lets Work Together</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container clearfix">
            <div class="row justify-content-left">
                <div class="col-lg-12">
                    <h1>What we do?</h1>
                </div>
            </div>
            <div class="row justify-content-center col-mb-50">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img class="rounded" src="{!!asset('homepage/images/home/1.jpg')!!}" alt="Quality Things">
                        </div>
                        <div class="fbox-content px-0">
                            <h3>We Provide You<span class="subtitle">Our A Qualified Products</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis
                                voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img class="rounded" src="{!!asset('homepage/images/home/2.jpg')!!}"
                                alt="Effective Planning">
                        </div>
                        <div class="fbox-content px-0">
                            <h3>We give you not a<span class="subtitle">just a product also a Solutions</span></h3>
                            <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore
                                totam. Accusamus perspiciatis asperiores labore esse.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img class="rounded" src="{!!asset('homepage/images/home/3.jpg')!!}" alt="Why choose Us?">
                        </div>
                        <div class="fbox-content px-0">
                            <h3>We've got you<span class="subtitle">Covered from a Risk</span></h3>
                            <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora
                                ullam. Vitae delectus quia, consequuntur rerum quo.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container clearfix my-5">
            <div class="row align-items-stretch col-mb-50">
                <div class="col-lg-12 col-md-6 text-center">
                    <h1>Our Advantage</h1>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="{!!asset('homepage/images/icons/building.png')!!}"
                                    alt="Concrete Developments"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Concrete Developments</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                placeat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="{!!asset('homepage/images/icons/bank.png')!!}"
                                    alt="Quality Guarantee"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Quality Guarantee</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                placeat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="{!!asset('homepage/images/icons/traffic-cone.png')!!}"
                                    alt="Smart Servicer"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Smart Servicer</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                placeat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="{!!asset('homepage/images/icons/paper-money.png')!!}"
                                    alt="Cost Effective Solutions"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Cost Effective Solutions</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                placeat.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="section mb-0">
            <h2 class="center mb-0 ls1">Some of all types of our ship/marine propeller:</h2>
        </div>

        <div id="portfolio" class="portfolio row grid-container no-gutters">

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="{!!asset('homepage/images/product/1.jpg')!!}" alt="Compressor & Spares">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn"
                                    data-hover-animate-out="zoomOut" data-hover-speed="350"><i
                                        class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="#">Compressor & Spares</a></h3>
                        <span>Ship - Marine Propeller</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-illustrations">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="{!!asset('homepage/images/product/2.jpg')!!}" alt="Compressor & Spares">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn"
                                    data-hover-animate-out="zoomOut" data-hover-speed="350"><i
                                        class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Compressor & Spares</h3>
                        <span>Ship - Marine Propeller</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-uielements">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="{!!asset('homepage/images/product/3.jpg')!!}" alt="Compressor & Spares">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn"
                                    data-hover-animate-out="zoomOut" data-hover-speed="350"><i
                                        class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Compressor & Spares</h3>
                        <span>Ship - Marine Propeller</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-icons pf-illustrations">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="{!!asset('homepage/images/product/4.jpg')!!}" alt="Compressor & Spares">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn"
                                    data-hover-animate-out="zoomOut" data-hover-speed="350"><i
                                        class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Compressor & Spares</h3>
                        <span>Ship - Marine Propeller</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-media">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="{!!asset('homepage/images/product/5.jpg')!!}" alt="Compressor & Spares">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn"
                                    data-hover-animate-out="zoomOut" data-hover-speed="350"><i
                                        class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Compressor & Spares</h3>
                        <span>Ship - Marine Propeller</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-illustrations">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="{!!asset('homepage/images/product/6.jpg')!!}" alt="Compressor & Spares">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn"
                                    data-hover-animate-out="zoomOut" data-hover-speed="350"><i
                                        class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Compressor & Spares</h3>
                        <span>Ship - Marine Propeller</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-icons">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="{!!asset('homepage/images/product/7.jpg')!!}" alt="Compressor & Spares">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn"
                                    data-hover-animate-out="zoomOut" data-hover-speed="350"><i
                                        class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Compressor & Spares</h3>
                        <span>Ship - Marine Propeller</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="{!!asset('homepage/images/product/8.jpg')!!}" alt="Compressor & Spares">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn"
                                    data-hover-animate-out="zoomOut" data-hover-speed="350"><i
                                        class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Compressor & Spares</h3>
                        <span>Ship - Marine Propeller</span>
                    </div>
                </div>
            </article>

        </div>

        <a href="/enquire-quotation"
            class="button button-3d border-bottom-0 button-full center text-right bottommargin-lg font-weight-light font-primary"
            style="font-size: 26px;">
            <div class="container clearfix">
                Would you like to repair your ship with Us? <strong>Enquire Here</strong> <i class="icon-angle-right"
                    style="top:3px;"></i>
            </div>
        </a>

        <div class="container topmargin-lg cleafix">

            <div class="row col-mb-50">
                <div class="col-md-8">

                    <div class="tabs tabs-justify mb-0 clearfix" id="construction-tabs">

                        <ul class="tab-nav clearfix">
                            <li><a href="#construction-tab-1">Why Us?</a></li>
                            <li><a href="#construction-tab-2">Team</a></li>
                            <li><a href="#construction-tab-3">Our Process</a></li>
                            <li><a href="#construction-tab-4">Locations</a></li>
                        </ul>

                        <div class="tab-container">

                            <div class="tab-content clearfix" id="construction-tab-1">
                                <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec
                                    arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante.
                                    Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor
                                    ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci.
                                    Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et
                                    mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum.
                                    Phasellus ipsum. Nunc tristique tempus lectus.</p>
                                <div class="row col-mb-30">
                                    <div class="col-sm-6 col-lg-4 text-center">
                                        <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span
                                                data-from="100" data-to="8514" data-refresh-interval="50"
                                                data-speed="2500"></span></div>
                                        <h5>Employees</h5>
                                    </div>

                                    <div class="col-sm-6 col-lg-4 text-center">
                                        <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span
                                                data-from="100" data-to="458" data-refresh-interval="50"
                                                data-speed="3500"></span></div>
                                        <h5>Happy Clients</h5>
                                    </div>

                                    <div class="col-sm-6 col-lg-4 text-center">
                                        <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span
                                                data-from="14" data-to="159" data-refresh-interval="15"
                                                data-speed="2700"></span></div>
                                        <h5>Ship Served</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content clearfix" id="construction-tab-2">
                                <img src="{!!asset('homepage/images/team.jpg')!!}" width="260" alt="team"
                                    class="img-thumbnail alignleft">
                                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra
                                    massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget
                                    luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean
                                    aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent
                                    in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare
                                    consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat.
                                    Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis
                                    lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et
                                    purus.</p>
                            </div>
                            <div class="tab-content clearfix" id="construction-tab-3">
                                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate,
                                    pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.
                                    Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia
                                    nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo
                                    pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem
                                    enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                <div class="row col-mb-30">
                                    <div class="col-sm-6 col-md-4">
                                        <ul class="iconlist mb-0">
                                            <li><i class="icon-ok"></i> 100% Assurance</li>
                                            <li><i class="icon-ok"></i> Hard Working</li>
                                            <li><i class="icon-ok"></i> Trustworthy</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <ul class="iconlist mb-0">
                                            <li><i class="icon-ok"></i> Intelligent</li>
                                            <li><i class="icon-ok"></i> Always Curious</li>
                                            <li><i class="icon-ok"></i> Perfectionists</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <ul class="iconlist mb-0">
                                            <li><i class="icon-ok"></i> Friendly &amp; Helpful</li>
                                            <li><i class="icon-ok"></i> Accomodating Nature</li>
                                            <li><i class="icon-ok"></i> Available 24x7</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content clearfix" id="construction-tab-4">

                                <div class="row col-mb-30">
                                    <div class="col-md-7">
                                        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut
                                            pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed
                                            fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut
                                            tempus eros massa ut dolor.</p>
                                        <div class="row col-mb-30">
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Headquarters:</strong><br>
                                                    Pelita IV Gang Aman No 7<br>
                                                    Medan, Indonesia 20236<br>
                                                </address>
                                            </div>
                                            <div class="col-md-6">
                                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (+62) 812
                                                34567889<br>
                                                <abbr title="Email Address"><strong>Email:</strong></abbr>
                                                info@putrakaryalogamsukses.com
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <img src="https://maps.googleapis.com/maps/api/staticmap?center=3.6082496,98.6865577&zoom=12&markers=3.6082496,98.6865577&size=300x180&key=AIzaSyBPHBkHbxlsp255-WwFSBcj4Eq3WUovF00"
                                            alt="Google Map" class="img-thumbnail">
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="widget quick-contact-widget form-widget clearfix">
                        <h4>Quick Quotation Form</h4>
                        <div class="form-result"></div>
                        <form id="quick-contact-form" name="quick-contact-form" action="/" method="post"
                            class="quick-contact-form mb-0">
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>
                            <input type="text" class="required sm-form-control input-block-level"
                                id="quick-contact-form-name" name="quick-contact-form-name" value=""
                                placeholder="Full Name" />
                            <input type="text" class="required sm-form-control email input-block-level"
                                id="quick-contact-form-email" name="quick-contact-form-email" value=""
                                placeholder="Email Address" />
                            <textarea class="required sm-form-control input-block-level short-textarea"
                                id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30"
                                placeholder="Message"></textarea>
                            <input type="text" class="d-none" id="quick-contact-form-botcheck"
                                name="quick-contact-form-botcheck" value="" />
                            <input type="hidden" name="prefix" value="quick-contact-form-">
                            <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit"
                                class="button button-small button-3d m-0" value="submit">Send Email</button>
                        </form>

                    </div>

                </div>
            </div>

            <div class="line"></div>

            <div class="row col-mb-50">
                <div class="col-md-6">
                    <h4>Clients Overview</h4>

                    <p>We prize our Clients more than everything else. We strive to provide Quality Services to all our
                        Clients on a Priority Basis. You are invited to join our Clients List and enjoy our Services. <a
                            href="#">See more...</a></p>

                    <ul class="clients-grid grid-2 grid-sm-3 mb-0">
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/1.png')!!}" alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/2.png')!!}" alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/3.png')!!}" alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/4.png')!!}" alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/5.png')!!}" alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/6.png')!!}" alt="Clients"></a></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h4>Certifications & Awards</h4>

                    <p>Tempat logo logo awards / sertifikat suatu instansi. Ketika di klik akan melihat sertifikat
                        secara detail. <a href="#">See more...</a></p>

                    <ul class="clients-grid grid-2 grid-sm-3 mb-0">
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/7.png')!!}" alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/8.png')!!}" alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/9.png')!!}" alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/10.png')!!}" alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/11.png')!!}" alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img
                                    src="{!!asset('homepage/images/clients/12.png')!!}" alt="Clients"></a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection

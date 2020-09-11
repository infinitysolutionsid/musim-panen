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
                            <h2>Welcome to Canvas</h2>
                            <p class="d-none d-sm-block">Create just what you need for your Perfect Website. Choose from
                                a wide range of Elements &amp; simply put them on your own Canvas.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide-bg"
                    style="background-image: url('demos/construction/images/slider/2.jpg'); background-position: center top;">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="slider-caption slider-caption-right">
                        <div>
                            <h2>Beautifully Flexible</h2>
                            <p class="d-none d-sm-block">Looks beautiful &amp; ultra-sharp on Retina Screen Displays.
                                Powerful Layout with Responsive functionality that can be adapted to any screen size.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="video-wrap">
                    <video id="slide-video" poster="demos/construction/images/videos/1.jpg" preload="auto" loop autoplay
                        muted>
                        <source src='demos/construction/images/videos/1.webm' type='video/webm' />
                        <source src='demos/construction/images/videos/1.mp4' type='video/mp4' />
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
                <div class="swiper-slide-bg"
                    style="background-image: url('demos/construction/images/slider/1.jpg'); background-position: center bottom;">
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
                        <h3 style="letter-spacing: 2px;">Start Planning your New Dream Home with us</h3>
                        <span>We strive to provide Our Customers with Top Notch Support to make their Theme</span>
                    </div>
                    <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                        <a href="#" class="button button-large button-circle button-black m-0">Start Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container clearfix">

            <div class="row justify-content-center col-mb-50">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img class="rounded" src="demos/construction/images/services/1.jpg" alt="Why choose Us?">
                        </div>
                        <div class="fbox-content px-0">
                            <h3>Skilled Professionals.<span class="subtitle">Your Property in Good Hands.</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis
                                voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img class="rounded" src="images/services/1.jpg" alt="Effective Planning">
                        </div>
                        <div class="fbox-content px-0">
                            <h3>Effective Planning.<span class="subtitle">Construction Process Organized.</span></h3>
                            <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore
                                totam. Accusamus perspiciatis asperiores labore esse.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img class="rounded" src="demos/construction/images/services/2.jpg" alt="Why choose Us?">
                        </div>
                        <div class="fbox-content px-0">
                            <h3>Risk Management.<span class="subtitle">We have got you Covered.</span></h3>
                            <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora
                                ullam. Vitae delectus quia, consequuntur rerum quo.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="section parallax dark"
            style="background-image: url('demos/construction/images/slider/1.jpg'); padding: 120px 0;"
            data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

            <div class="fslider testimonial testimonial-full" data-arrows="false" style="z-index: 2;">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide">
                            <div class="testi-image">
                                <a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Similique fugit repellendus expedita excepturi iure provident quia eaque.
                                    Repellendus, vero numquam?</p>
                                <div class="testi-meta">
                                    Steve Jobs
                                    <span>Apple Inc.</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="testi-image">
                                <a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati
                                    id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Collis Ta'eed
                                    <span>Envato Inc.</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="testi-image">
                                <a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum
                                    libero illo rerum!</p>
                                <div class="testi-meta">
                                    John Doe
                                    <span>XYZ Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-wrap" style="z-index: 1;">
                <div class="video-overlay" style="background: rgba(38,144,151,0.9);"></div>
            </div>

        </div>

        <div class="container">

            <div class="row align-items-stretch col-mb-50">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="demos/construction/images/icons/building.png"
                                    alt="Concrete Developments"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Concrete Developments</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                placeat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="demos/construction/images/icons/bank.png"
                                    alt="Finance Assistance"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Finance Assistance</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                placeat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="demos/construction/images/icons/drawer.png"
                                    alt="Interiorly Designed"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Interiorly Designed</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                placeat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="demos/construction/images/icons/paper-money.png"
                                    alt="Cost Effective Solutions"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Cost Effective Solutions</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                placeat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="demos/construction/images/icons/traffic-cone.png"
                                    alt="Smart Builders"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Smart Builders</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                placeat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="demos/construction/images/icons/paint-brush.png"
                                    alt="Quality Infrastructure"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Quality Infrastructure</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                placeat.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="section mb-0">
            <h2 class="center mb-0 ls1">Some of Our Esteemed Projects:</h2>
        </div>

        <div id="portfolio" class="portfolio row grid-container no-gutters">

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="demos/construction/images/projects/1.jpg" alt="The Atmosphere">
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
                        <h3><a href="#">The Atmosphere</a></h3>
                        <span>Chicago, USA</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-illustrations">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="demos/construction/images/projects/2.jpg" alt="Wavelength Structure">
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
                        <h3>Wavelength Structure</h3>
                        <span>Madrid, Spain</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-uielements">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="demos/construction/images/projects/3.jpg" alt="Greenhouse Garden">
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
                        <h3>Greenhouse Garden</h3>
                        <span>Bali, Indonesia</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-icons pf-illustrations">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="demos/construction/images/projects/4.jpg" alt="Industrial Hub">
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
                        <h3>Industrial Hub</h3>
                        <span>Beijing, China</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-media">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="demos/construction/images/projects/5.jpg" alt="Corporate Headquarters">
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
                        <h3>Corporate Headquarters</h3>
                        <span>California, USA</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-illustrations">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="demos/construction/images/projects/6.jpg" alt="Space Station">
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
                        <h3>Space Station</h3>
                        <span>Moscow, Russia</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-icons">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="demos/construction/images/projects/7.jpg" alt="Bent Architecture">
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
                        <h3>Bent Architecture</h3>
                        <span>Melbourne, Australia</span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="demos/construction/images/projects/8.jpg" alt="Lakeview Center">
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
                        <h3>Lakeview Center</h3>
                        <span>Auckland, New Zealand</span>
                    </div>
                </div>
            </article>

        </div>

        <a href="portfolio.html"
            class="button button-3d border-bottom-0 button-full center text-right bottommargin-lg font-weight-light font-primary"
            style="font-size: 26px;">
            <div class="container clearfix">
                Would you like to Build your Dream Home with Us? <strong>Enquire Here</strong> <i
                    class="icon-angle-right" style="top:3px;"></i>
            </div>
        </a>

        <div class="container topmargin-lg cleafix">

            <div class="row col-mb-50">
                <div class="col-md-8">

                    <div class="tabs tabs-justify mb-0 clearfix" id="construction-tabs">

                        <ul class="tab-nav clearfix">
                            <li><a href="#construction-tab-1">Why Us?</a></li>
                            <li><a href="#construction-tab-2">Work Ethic</a></li>
                            <li><a href="#construction-tab-3">Team</a></li>
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
                                    <div class="col-sm-6 col-lg-3 text-center">
                                        <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span
                                                data-from="100" data-to="964" data-refresh-interval="50"
                                                data-speed="2000"></span></div>
                                        <h5>Floors Built</h5>
                                    </div>

                                    <div class="col-sm-6 col-lg-3 text-center">
                                        <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span
                                                data-from="100" data-to="8514" data-refresh-interval="50"
                                                data-speed="2500"></span></div>
                                        <h5>Employees</h5>
                                    </div>

                                    <div class="col-sm-6 col-lg-3 text-center">
                                        <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span
                                                data-from="100" data-to="458" data-refresh-interval="50"
                                                data-speed="3500"></span></div>
                                        <h5>Happy Clients</h5>
                                    </div>

                                    <div class="col-sm-6 col-lg-3 text-center">
                                        <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span
                                                data-from="14" data-to="159" data-refresh-interval="15"
                                                data-speed="2700"></span></div>
                                        <h5>Cities Served</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content clearfix" id="construction-tab-2">
                                <img src="demos/construction/images/projects/3.jpg" width="260" alt="Image"
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
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                </address>
                                            </div>
                                            <div class="col-md-6">
                                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547
                                                632521<br>
                                                <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
                                                <abbr title="Email Address"><strong>Email:</strong></abbr>
                                                info@canvas.com
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <img src="https://maps.googleapis.com/maps/api/staticmap?center=-37.814107,144.963280&zoom=12&markers=-37.814107,144.963280&size=300x180&key=AIzaSyBPHBkHbxlsp255-WwFSBcj4Eq3WUovF00"
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
                        <form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post"
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
                <div class="col-md-5">
                    <h4>Clients Overview</h4>

                    <p>We prize our Clients more than everything else. We strive to provide Quality Services to all our
                        Clients on a Priority Basis. You are invited to join our Clients List and enjoy our Services. <a
                            href="#">See more...</a></p>

                    <ul class="clients-grid grid-2 grid-sm-3 mb-0">
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img src="images/clients/1.png"
                                    alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img src="images/clients/2.png"
                                    alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img src="images/clients/3.png"
                                    alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img src="images/clients/4.png"
                                    alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img src="images/clients/5.png"
                                    alt="Clients"></a></li>
                        <li class="grid-item" style="padding: 20px;"><a href="#"><img src="images/clients/6.png"
                                    alt="Clients"></a></li>
                    </ul>
                </div>

                <div class="col-md-7">
                    <h4>Recent News</h4>

                    <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget posts-md" data-margin="20"
                        data-nav="true" data-pagi="true" data-items-xs="1" data-items-xl="2">

                        <div class="oc-item">
                            <div class="entry">
                                <div class="entry-image">
                                    <a href="demos/construction/images/blog/5.jpg" data-lightbox="image"><img
                                            src="demos/construction/images/blog/5.jpg"
                                            alt="Standard Post with Image"></a>
                                </div>
                                <div class="entry-title title-sm nott">
                                    <h3><a href="#">Upcoming Projects in Australia</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li>10th Feb 2021</li>
                                        <li><a href="#comments">13 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores
                                        quod est tenetur in.</p>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="entry">
                                <div class="entry-image">
                                    <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="demos/construction/images/blog/2.jpg"
                                                        data-lightbox="gallery-item"><img
                                                            src="demos/construction/images/blog/2.jpg"
                                                            alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a href="demos/construction/images/blog/1.jpg"
                                                        data-lightbox="gallery-item"><img
                                                            src="demos/construction/images/blog/1.jpg"
                                                            alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a href="demos/construction/images/blog/3.jpg"
                                                        data-lightbox="gallery-item"><img
                                                            src="demos/construction/images/blog/3.jpg"
                                                            alt="Standard Post with Gallery"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-title title-sm nott">
                                    <h3><a href="#">Real Estate just got a little more Expensive</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li>24th Feb 2021</li>
                                        <li><a href="#comments">21 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem,
                                        dolorem animi nisi autem!</p>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="entry">
                                <div class="entry-image">
                                    <a href="demos/construction/images/blog/4.jpg" data-lightbox="image"><img
                                            src="demos/construction/images/blog/4.jpg"
                                            alt="Standard Post with Image"></a>
                                </div>
                                <div class="entry-title title-sm nott">
                                    <h3><a href="#">Global Excellence Construction Award</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li>5th May 2021</li>
                                        <li><a href="#comments">6 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores
                                        quod est tenetur in.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="line topmargin-sm"></div>

        <div class="section bg-transparent mt-0 p-0 footer-stick">
            <div class="container clearfix">

                <div class="row">
                    <div class="col-lg-7">
                        <img src="demos/construction/images/services/bottom-trust.jpg" alt="Bottom Trust">
                    </div>
                    <div class="col-lg-5 topmargin-sm">
                        <div class="heading-block border-bottom-0">
                            <h2>You're in Good Hands.</h2>
                            <span class="ls1">Five Points that define Our Reliability.</span>
                        </div>

                        <ul class="iconlist iconlist-large iconlist-color">
                            <li><i class="icon-ok"></i> Market Leader since 1915</li>
                            <li><i class="icon-ok"></i> Positive Results within Deadlines</li>
                            <li><i class="icon-ok"></i> 100% Reliability &amp; Guarantee</li>
                            <li><i class="icon-ok"></i> Dedicated Professional Team of 500+</li>
                            <li><i class="icon-ok"></i> Unmatched After Project Completion Support</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

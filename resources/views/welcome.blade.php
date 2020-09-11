<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Bintang Tobing" />
    <meta name="description" content="@yield('deschomepage')">
    <meta name="keywords" content="musim panen, musimpanen, putrakaryalogamsukses.com, cv musim panen">
    <link rel="shortcut icon" href="{!!asset('auth/images/favicon.ico')!!}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('titlepage')</title>
    <script src="https://kit.fontawesome.com/bf3b9c3659.js" crossorigin="anonymous"></script>

    <!-- Stylesheets
	============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/construction/construction.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/construction/css/fonts.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('homepage/css/bootstrap.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/style.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/swiper.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('homepage/css/dark.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/font-icons.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/animate.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/magnific-popup.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('homepage/css/custom.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/colors.php?color=269097')!!}" type="text/css" />


    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Musim Panen",
            "url": "https://putrakaryalogamsukses.com/about-us",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://putrakaryalogamsukses.com/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }

    </script>

    {{-- METAGRAPH FACEBOOK --}}
    <meta property="fb:admins" content="593740541289378">
    <meta property="og:site_name" content="@yield('title')" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="@yield('ogtype')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('deschomepage')" />
    <meta property="og:image"
        content="{!!url('https://res.cloudinary.com/sarjanamalam/image/upload/v1596438013/fbimg_vsmk7u.jpg')!!}')!!}">

    <!--GTAG JS-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68593210-14"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-68593210-14');

    </script> --}}
</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">
        <div id="top-bar">
            <div class="container clearfix">

                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-auto">
                        <p class="mb-0 py-2 text-center text-md-left"><strong>Hotline:</strong> 0123-0000-0000 |
                            <strong>Email:</strong> <a
                                href="mailto:info@putrakaryalogamsukses.com">info@putrakaryalogamsukses.com</a> |
                            <strong><a href="#">Live Chat</a></strong>
                        </p>
                    </div>

                    <div class="col-12 col-md-auto">

                        <!-- Top Links
						============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="#">Locations</a>
                                    <ul class="top-links-sub-menu">
                                        <li class="top-links-item"><a href="#">San Francisco</a></li>
                                        <li class="top-links-item"><a href="#">London</a></li>
                                        <li class="top-links-item"><a href="#">Amsterdam</a></li>
                                    </ul>
                                </li>
                                <li class="top-links-item"><a href="faqs.html">FAQs</a></li>
                                <li class="top-links-item"><a href="contact.html">Contact</a></li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>
                </div>

            </div>
        </div>
        <header id="header" class="header-size-sm" data-sticky-shrink="false">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
					============================================= -->
                    <div id="logo" class="ml-auto ml-lg-0 mr-lg-auto my-3">
                        <a href="/" class="standard-logo"><img src="{!!asset('homepage/images/logo-web.png')!!}"
                                alt="Logam Sukses Logo"></a>
                        <a href="/" class="retina-logo"><img src="{!!asset('homepage/images/logo-web.png')!!}"
                                alt="Logam Sukses Logo"></a>
                    </div><!-- #logo end -->

                    <div class="header-misc d-none d-lg-flex">

                        <ul class="header-extras">
                            <li>
                                <i class="i-plain icon-call m-0"></i>
                                <div class="he-text">
                                    Call Us
                                    <span>(1) 22 54215821</span>
                                </div>
                            </li>
                            <li>
                                <i class="i-plain icon-line2-envelope m-0"></i>
                                <div class="he-text">
                                    Email Us
                                    <span>info@putrakaryalogamsukses.com</span>
                                </div>
                            </li>
                            <li>
                                <i class="i-plain icon-line-clock m-0"></i>
                                <div class="he-text">
                                    We'are Open
                                    <span>Mon - Sat, 10AM to 6PM</span>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

            <div id="header-wrap">
                <div class="container">
                    <div
                        class="header-row justify-content-between flex-row-reverse flex-lg-row justify-content-lg-left">

                        <div class="header-misc">

                            <!-- Top Search
							============================================= -->
                            <div id="top-search" class="header-misc-icon">
                                <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                            </div><!-- #top-search end -->
                            <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                                <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span
                                        class="top-cart-number">5</span></a>
                                <div class="top-cart-content">
                                    <div class="top-cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="top-cart-items">
                                        <div class="top-cart-item">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="images/shop/small/1.jpg"
                                                        alt="Blue Round-Neck Tshirt" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <div class="top-cart-item-desc-title">
                                                    <a href="#">Blue Round-Neck Tshirt with a Button</a>
                                                    <span class="top-cart-item-price d-block">$19.99</span>
                                                </div>
                                                <div class="top-cart-item-quantity">x 2</div>
                                            </div>
                                        </div>
                                        <div class="top-cart-item">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="images/shop/small/6.jpg"
                                                        alt="Light Blue Denim Dress" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <div class="top-cart-item-desc-title">
                                                    <a href="#">Light Blue Denim Dress</a>
                                                    <span class="top-cart-item-price d-block">$24.99</span>
                                                </div>
                                                <div class="top-cart-item-quantity">x 3</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-cart-action">
                                        <span class="top-checkout-price">$114.95</span>
                                        <a href="#" class="button button-3d button-small m-0">View Cart</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu with-arrows">

                            <ul class="menu-container">
                                <li class="menu-item current"><a class="menu-link" href="demo-construction.html">
                                        <div>Home</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-construction-about-us.html">
                                        <div>About Us</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-construction-projects.html">
                                        <div>Products</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item"><a class="menu-link"
                                                href="demo-construction-projects-2.html">
                                                <div>Besi</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link"
                                                href="demo-construction-projects-3.html">
                                                <div>Ship</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link"
                                                href="demo-construction-projects.html">
                                                <div>Marine Proper</div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="demo-construction-investors.html">
                                        <div>Contact Us</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                        <form class="top-search-form" action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header>
        @yield('sliderhomepage')

        @yield('content')


        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark">
            <div class="container">

                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row col-mb-50">
                        <div class="col-lg-8">

                            <div class="row col-mb-50">
                                <div class="col-md-4">
                                    <div class="widget clearfix">
                                        <img src="{!!asset('homepage/images/logo-white.png')!!}"
                                            alt="Logam Sukses Image Logo" class="footer-logo">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam architecto
                                            repellat deserunt eum nostrum sed eos id.</p>
                                        <div
                                            style="background: url('{!!asset('homepage/images/world-map.png')!!}') no-repeat center center; background-size: 100%;">
                                            <address>
                                                <strong>Kantor Kami:</strong><br>
                                                Jalan Cemara No. 167<br>
                                                Medan, Indonesia<br>
                                            </address>
                                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (061) 000 000<br>
                                            <abbr title="Email Address"><strong>Email:</strong></abbr>
                                            info@putrakaryalogamsukses.com
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
			============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row col-mb-30">
                        <?php $y = Date('Y') ?>
                        <div class="col-md-6 text-center text-md-left">
                            Copyrights &copy; {{$y}} - Musim Panen.co.id | All Rights Reserved by <a
                                href="https://infinitysolutions.co.id">Infinity Solutions</a>.<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy
                                    Policy</a>
                            </div>
                        </div>

                        <div class="col-md-6 text-center text-md-right">
                            <div class="d-flex justify-content-center justify-content-md-end">
                                <a href="#" class="social-icon si-small si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                            </div>

                            <div class="clear"></div>

                            <i class="icon-envelope2"></i> info@putrakaryalogamsukses.com <span
                                class="middot">&middot;</span> <i class="icon-headphones"></i> +62 61 000 000 <span
                                class="middot"></span>
                        </div>

                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="{!!asset('homepage/js/jquery.js')!!}"></script>
    <script src="{!!asset('homepage/js/plugins.min.js')!!}"> </script>
    <!-- Footer
        Scripts=============================================-->
    <script src="{!!asset('homepage/js/functions.js')!!}">
    </script>

    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBPHBkHbxlsp255-WwFSBcj4Eq3WUovF00"></script>
</body>

</html>

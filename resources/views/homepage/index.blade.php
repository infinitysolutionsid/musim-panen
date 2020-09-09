@extends('welcome')
@section('titlepage','Musim Panen.co.id')
<?php $y = Date('Y'); ?>
@section('deschomepage','')
@section('sliderhomepage')
<section id="slider" class="slider-element revslider-wrap include-header h-auto">
    <div class="slider-inner">
        <div id="rev_slider_679_1_wrapper" class="rev_slider_wrapper fullwidth-container" style="padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
            <div id="rev_slider_679_1" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
                <ul>
                    <!-- SLIDE  -->
                    <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500"
                        data-thumb="{!!asset('homepage/images/slider/swiper/3.jpg')!!}" data-delay="10000"
                        data-saveperformance="off" data-title="Responsive Design">
                        <!-- MAIN IMAGE -->
                        <img src="{!!asset('homepage/images/slider/swiper/3.jpg')!!}" alt="kenburns1"
                            data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on"
                            data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                            data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0"
                            data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text text-uppercase"
                            data-x="middle" data-hoffset="0" data-y="top" data-voffset="215"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800" data-start="1000" data-easing="easeOutQuad" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
                            data-endspeed="1000" data-endeasing="Power4.easeIn"
                            style="z-index: 3; white-space: nowrap;">Welcome to</div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                            data-x="middle" data-hoffset="0" data-y="top" data-voffset="230"
                            data-fontsize="['60','50','40','34']"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800" data-start="1200" data-easing="easeOutQuad" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
                            data-endspeed="1000" data-endeasing="Power4.easeIn"
                            style="z-index: 3; white-space: nowrap;">CV MUSIM PANEN</div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text" data-x="middle"
                            data-hoffset="0" data-y="top" data-voffset="340"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800" data-start="1400" data-easing="easeOutQuad"
                            data-width="['650','650','480','360']" data-splitin="none" data-splitout="none"
                            data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000"
                            data-textAlign="center" data-endeasing="Power4.easeIn"
                            style="z-index: 3; max-width: 650px; white-space: normal;">CV Musim Panen adalah perusahaan
                            yang bergerak di bidang panen sawit dan panen lain lain.</div>
                    </li>
                    <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500"
                        data-thumb="{!!asset('homepage/images/slider/swiper/1.jpg')!!}" data-delay="10000"
                        data-saveperformance="off" data-title="Responsive Design">
                        <!-- MAIN IMAGE -->
                        <img src="{!!asset('homepage/images/slider/swiper/1.jpg')!!}" alt="kenburns1"
                            data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on"
                            data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                            data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0"
                            data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text text-uppercase"
                            data-x="middle" data-hoffset="0" data-y="top" data-voffset="215"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800" data-start="1000" data-easing="easeOutQuad" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
                            data-endspeed="1000" data-endeasing="Power4.easeIn"
                            style="z-index: 3; white-space: nowrap;">Welcome to cv musim panen</div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                            data-x="middle" data-hoffset="0" data-y="top" data-voffset="230"
                            data-fontsize="['60','50','40','34']"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800" data-start="1200" data-easing="easeOutQuad" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
                            data-endspeed="1000" data-endeasing="Power4.easeIn"
                            style="z-index: 3; white-space: nowrap;">We always serve you the best</div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text" data-x="middle"
                            data-hoffset="0" data-y="top" data-voffset="340"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800" data-start="1400" data-easing="easeOutQuad"
                            data-width="['650','650','480','360']" data-splitin="none" data-splitout="none"
                            data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000"
                            data-textAlign="center" data-endeasing="Power4.easeIn"
                            style="z-index: 3; max-width: 650px; white-space: normal;">Serving you with our best
                            services is a number one for us.</div>
                    </li>
                    <li class="dark" data-transition="slideup" data-slotamount="1" data-masterspeed="1500"
                        data-thumb="{!!asset('homepage/images/slider/swiper/2.jpg')!!}" data-delay="10000"
                        data-saveperformance="off" data-title="Unlimited Possibilities">
                        <!-- MAIN IMAGE -->
                        <img src="{!!asset('homepage/images/slider/swiper/2.jpg')!!}" alt="kenburns6"
                            data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on"
                            data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                            data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0"
                            data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text text-uppercase"
                            data-x="middle" data-hoffset="0" data-y="top" data-voffset="215"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800" data-start="1000" data-easing="easeOutQuad" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
                            data-endspeed="1000" data-endeasing="Power4.easeIn"
                            style="z-index: 3;  white-space: nowrap;">Mengapa memilih bekerja sama dengan kami?</div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                            data-x="middle" data-hoffset="0" data-y="top" data-voffset="230"
                            data-fontsize="['60','50','40','34']"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800" data-start="1200" data-easing="easeOutQuad" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
                            data-endspeed="1000" data-endeasing="Power4.easeIn"
                            style="z-index: 3;  white-space: nowrap;">Tanggung Jawab yang Luar Biasa</div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text" data-x="middle"
                            data-hoffset="0" data-y="top" data-voffset="340" data-width="['650','650','480','360']"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800" data-start="1400" data-easing="easeOutQuad" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
                            data-textAlign="center" data-endspeed="1000" data-endeasing="Power4.easeIn"
                            style="z-index: 3;  max-width: 650px; white-space: normal;">Apapun yang kita telah janjikan.
                            Kami akan selalu berusaha untuk selalu bertangguh jawab akan pekerjaan kami.</div>

                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>
@endsection
@section('content')
<div class="section header-stick">
    <div class="container clearfix">
        <div class="row">

            <div class="col-lg-9">
                <div class="heading-block bottommargin-sm">
                    <h3>Kami ahli dalam produk panen</h3>
                </div>

                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus asperiores expedita
                    corporis omnis. Nesciunt, fugiat maxime? Eius adipisci amet nisi autem, voluptatibus soluta quia,
                    vel sapiente vero repudiandae minus tenetur.</p>
            </div>

            <div class="col-lg-3">
                <a href="#" class="button button-3d button-dark button-large btn-block center"
                    style="margin-top: 30px;">Lihat produk kami</a>
            </div>

        </div>
    </div>
</div>
<div class="container clearfix">

    <div class="row justify-content-center col-mb-50">
        <div class="col-sm-6 col-lg-4">
            <div class="feature-box media-box">
                <div class="fbox-media">
                    <img src="https://www.pkpberdikari.id/wp-content/uploads/2019/03/1517383091_panen.jpg"
                        alt="Why choose Us?">
                </div>
                <div class="fbox-content px-0">
                    <h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem,
                        facilis
                        nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis
                        mollitia.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="feature-box media-box">
                <div class="fbox-media">
                    <img src="https://posmetropadang.co.id/wp-content/uploads/2020/04/okkk-17.jpg" alt="Why choose Us?">
                </div>
                <div class="fbox-content px-0">
                    <h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
                    <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae,
                        atque
                        tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="feature-box media-box">
                <div class="fbox-media">
                    <img src="https://img.okezone.com/content/2020/05/09/1/2211551/petani-dan-penyuluh-manggarai-timur-rayakan-puncak-panen-raya-di-tengah-pandemi-Ftf2la3Jbk.jpeg"
                        alt="Why choose Us?">
                </div>
                <div class="fbox-content px-0">
                    <h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
                    <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur,
                        labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium
                        ea
                        modi ut.</p>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container clearfix my-5">
    <div class="row justify-content-center">
        <div class="heading-block text-center">
            <h3>Katalog Besar Produk Kami</h3>
        </div>
    </div>
    <div class="row justify-content-center col-mb-50 m-b-0">
        <div class="col-sm-6 col-lg-4">
            <div class="feature-box text-center media-box fbox-bg">
                <div class="fbox-media">
                    <a href=""><img
                            src="https://cdn-radar.jawapos.com/uploads/radarkediri/news/2019/02/28/baru-enam-kecamatan-yang-panen-padi_m_122191.jpg"
                            alt=""></a>
                </div>
                <div class="fbox-content">
                    <h3>Panen Padi<span class="subtitle">Contoh Katalog Produk Hasil Panen</span></h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="feature-box text-center media-box fbox-bg">
                <div class="fbox-media">
                    <a href=""><img
                            src="https://ecs7.tokopedia.net/img/cache/700/product-1/2017/9/8/87863118/87863118_51f833ce-c1e1-4475-9357-6247bde06e80_500_375.jpg"
                            alt=""></a>
                </div>
                <div class="fbox-content">
                    <h3>Panen Sawit<span class="subtitle">Contoh Katalog Produk Hasil Panen</span></h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="feature-box text-center media-box fbox-bg">
                <div class="fbox-media">
                    <a href=""><img
                            src="https://img.alinea.id/img/content/2018/05/06/4867/kementan-bangun-fasilitas-penyimpanan-untuk-hasil-panen-48W1pwApEz.jpg"
                            alt=""></a>
                </div>
                <div class="fbox-content">
                    <h3>Panen Hasil Padi<span class="subtitle">Contoh Katalog Produk Hasil Panen</span></h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="feature-box text-center media-box fbox-bg">
                <div class="fbox-media">
                    <a href=""><img
                            src="https://ecs7.tokopedia.net/img/cache/700/product-1/2017/9/8/87863118/87863118_51f833ce-c1e1-4475-9357-6247bde06e80_500_375.jpg"
                            alt=""></a>
                </div>
                <div class="fbox-content">
                    <h3>Panen Sawit<span class="subtitle">Contoh Katalog Produk Hasil Panen</span></h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="feature-box text-center media-box fbox-bg">
                <div class="fbox-media">
                    <a href=""><img
                            src="https://img.alinea.id/img/content/2018/05/06/4867/kementan-bangun-fasilitas-penyimpanan-untuk-hasil-panen-48W1pwApEz.jpg"
                            alt=""></a>
                </div>
                <div class="fbox-content">
                    <h3>Panen Hasil Padi<span class="subtitle">Contoh Katalog Produk Hasil Panen</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container clearfix my-5">
    <div class="row">
        <div class="heading-block text-left">
            <h3>Galeri Kami</h3>
        </div>
    </div>
    <div class="masonry-thumbs grid-container grid-6" data-big="3" data-lightbox="gallery">
        <a href="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
            class="grid-item" data-lightbox="gallery-item">
            <img src="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
                alt="">
        </a>
        <a href="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
            class="grid-item" data-lightbox="gallery-item">
            <img src="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
                alt="">
        </a>
        <a href="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
            class="grid-item" data-lightbox="gallery-item">
            <img src="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
                alt="">
        </a>
        <a href="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
            class="grid-item" data-lightbox="gallery-item">
            <img src="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
                alt="">
        </a>
        <a href="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
            class="grid-item" data-lightbox="gallery-item">
            <img src="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
                alt="">
        </a>
        <a href="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
            class="grid-item" data-lightbox="gallery-item">
            <img src="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
                alt="">
        </a>
        <a href="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
            class="grid-item" data-lightbox="gallery-item">
            <img src="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
                alt="">
        </a>
        <a href="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
            class="grid-item" data-lightbox="gallery-item">
            <img src="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
                alt="">
        </a>
        <a href="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
            class="grid-item" data-lightbox="gallery-item">
            <img src="https://risetcdn.jatimtimes.com/images/2020/05/08/Foto-ilustrasi.-Sumber-httpswww.officialkhabar.com75cb199b38da2c88.md.jpg"
                alt="">
        </a>
    </div>
</div>
<div class="container clearfix my-5">
    <div class="promo promo-border text-center p-4 p-md-5 mb-5">
        <div class="row align-items-center">
            <div class="col-12 col-lg">
                <h3>Telepon kami hari ini di <span>+62 812 888 888</span> atau <br> email kami di
                    <span>info@musimpanen.co.id</span></h3>
                <span>Kami akan memberikan penawaran terbaik dan kita akan membuat kerja sama yang baik hari ini.</span>
            </div>
            <div class="col-12 mt-4">
                <a href="#" class="button button-large button-rounded m-0">Tunggu apalagi?</a>
            </div>
        </div>
    </div>
</div>
<div class="section footer-stick">
    <h3 class="center">Our Partners & Clients</h3>
    <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30"
        data-nav="true" data-pagi="false" data-autoplay="5000" data-items-xs="3" data-items-sm="3" data-items-md="5"
        data-items-lg="6" data-items-xl="7">
        <div class="oc-item">
            <a href="">
                <img src="https://dp-teknologi.co.id/wp-content/uploads/2019/11/logo_arcserve.png" alt="">
            </a>
        </div>
        <div class="oc-item">
            <a href="">
                <img src="https://dp-teknologi.co.id/wp-content/uploads/2019/11/logo_arcserve.png" alt="">
            </a>
        </div>
        <div class="oc-item">
            <a href="">
                <img src="https://dp-teknologi.co.id/wp-content/uploads/2019/11/logo_arcserve.png" alt="">
            </a>
        </div>
        <div class="oc-item">
            <a href="">
                <img src="https://dp-teknologi.co.id/wp-content/uploads/2019/11/logo_arcserve.png" alt="">
            </a>
        </div>
        <div class="oc-item">
            <a href="">
                <img src="https://dp-teknologi.co.id/wp-content/uploads/2019/11/logo_arcserve.png" alt="">
            </a>
        </div>
        <div class="oc-item">
            <a href="">
                <img src="https://dp-teknologi.co.id/wp-content/uploads/2019/11/logo_arcserve.png" alt="">
            </a>
        </div>
        <div class="oc-item">
            <a href="">
                <img src="https://dp-teknologi.co.id/wp-content/uploads/2019/11/logo_arcserve.png" alt="">
            </a>
        </div>

    </div>
</div>
@endsection

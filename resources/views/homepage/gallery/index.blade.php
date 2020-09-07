@extends('welcome')
@section('titlepage','Gallery | Musim Panen')
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
                        <a class="grid-item"
                            href="https://static.toiimg.com/thumb/72975551.cms?width=680&height=512&imgsize=881753"
                            data-lightbox="gallery-item"><img
                                src="https://static.toiimg.com/thumb/72975551.cms?width=680&height=512&imgsize=881753"
                                alt=""></a>
                        <a class="grid-item" href="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg"
                            data-lightbox="gallery-item"><img
                                src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt=""></a>
                        <a class="grid-item" href="https://www.freedigitalphotos.net/images/img/homepage/394230.jpg"
                            data-lightbox="gallery-item"><img
                                src="https://www.freedigitalphotos.net/images/img/homepage/394230.jpg" alt=""></a>
                        <a class="grid-item"
                            href="https://media.istockphoto.com/photos/child-hands-formig-heart-shape-picture-id951945718?k=6&m=951945718&s=612x612&w=0&h=ih-N7RytxrTfhDyvyTQCA5q5xKoJToKSYgdsJ_mHrv0="
                            data-lightbox="gallery-item"><img
                                src="https://media.istockphoto.com/photos/child-hands-formig-heart-shape-picture-id951945718?k=6&m=951945718&s=612x612&w=0&h=ih-N7RytxrTfhDyvyTQCA5q5xKoJToKSYgdsJ_mHrv0="
                                alt=""></a>
                        <a class="grid-item" href="https://www.w3schools.com/w3css/img_forest.jpg"
                            data-lightbox="gallery-item"><img src="https://www.w3schools.com/w3css/img_forest.jpg"
                                alt=""></a>
                        <a class="grid-item"
                            href="https://cdn.pixabay.com/photo/2016/11/29/05/45/astronomy-1867616__340.jpg"
                            data-lightbox="gallery-item"><img
                                src="https://cdn.pixabay.com/photo/2016/11/29/05/45/astronomy-1867616__340.jpg"
                                alt=""></a>
                        <a class="grid-item"
                            href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQa6OYyb2iUlMX5XdN2964_fV7UKNjRsoPyhw&usqp=CAU"
                            data-lightbox="gallery-item"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQa6OYyb2iUlMX5XdN2964_fV7UKNjRsoPyhw&usqp=CAU"
                                alt=""></a>
                        <a class="grid-item"
                            href="https://1.bp.blogspot.com/-MdaQwrpT4Gs/Xdt-ff_hxEI/AAAAAAAAQXE/oOgnysGd9LwoFLMHJ0etngKzXxmQkWc5ACLcBGAsYHQ/s400/Beautiful-Backgrounds%2B%2528122%2529.jpg"
                            data-lightbox="gallery-item"><img
                                src="https://1.bp.blogspot.com/-MdaQwrpT4Gs/Xdt-ff_hxEI/AAAAAAAAQXE/oOgnysGd9LwoFLMHJ0etngKzXxmQkWc5ACLcBGAsYHQ/s400/Beautiful-Backgrounds%2B%2528122%2529.jpg"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

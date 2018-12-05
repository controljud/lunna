@extends('layouts.web')

@section('content')
    @include('banner')
    <!--================Home Gallery Area =================-->
    <section class="home_gallery_area p_120">
        <div class="container">
            <div class="isotope_fillter">
                <ul class="gallery_filter list">
                    <li class="active" data-filter="*"><a href="#">Todas</a></li>
                    <li data-filter=".ap"><a href="#">Casamentos</a></li>
                    <li data-filter=".unp"><a href="#">Ensaios externos</a></li>
                    <li data-filter=".unv"><a href="#">Estúdio</a></li>
                    <li data-filter=".unv"><a href="#">Newborn</a></li>
                </ul>
            </div>
        </div>
        <div class="container box_1620">
            <div class="gallery_f_inner row imageGallery1">
                <div class="col-lg-3 col-md-4 col-sm-6 ap">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-1.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 unv">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-2.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-2.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 unp ap">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-3.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-3.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 unp">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-4.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-4.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 unv">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-5.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-5.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ap">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-6.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-6.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 unp">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-7.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-7.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 unp">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-8.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-8.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 unv">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-9.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-9.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 unp">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-10.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-10.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ap">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-11.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-11.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 unv">
                    <div class="h_gallery_item">
                        <img src="img/gallery/gallery-12.jpg" alt="">
                        <div class="hover">
                            <a href="#"><h4>Spreading Peace to world</h4></a>
                            <a class="light" href="img/gallery/gallery-12.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button_more">
                <a class="btn theme_btn" href="#">Load More Images</a>
            </div>
        </div>
    </section>
    <!--================End Home Gallery Area =================-->
@endsection
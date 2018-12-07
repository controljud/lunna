<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href='{{asset("img/favicon.png")}}' type="image/png">
    <title>{{$configuration->title}}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href='{{asset("css/bootstrap.css")}}'>
    <link rel="stylesheet" href='{{asset("vendors/linericon/style.css")}}'>
    <link rel="stylesheet" href='{{asset("css/font-awesome.min.css")}}'>
    <link rel="stylesheet" href='{{asset("vendors/owl-carousel/owl.carousel.min.css")}}'>
    <link rel="stylesheet" href='{{asset("vendors/lightbox/simpleLightbox.css")}}'>
    <link rel="stylesheet" href='{{asset("vendors/nice-select/css/nice-select.css")}}'>
    <link rel="stylesheet" href='{{asset("vendors/animate-css/animate.css")}}'>
    <!-- main css -->
    <link rel="stylesheet" href='{{asset("css/style.css")}}'>
    <link rel="stylesheet" href='{{asset("css/responsive.css")}}'>
</head>
<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{asset('')}}"><img src="{{asset('img/logo.png')}}" alt="" class="img-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{asset('')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{asset('gallery')}}">Galeria</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços</a>
                        <ul class="dropdown-menu">
                            <!-- TODO - Retornar as categorias cadastradas -->
                            <li class="nav-item"><a class="nav-link" href="{{asset('marriage')}}">Casamentos</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('external')}}">Ensaios externos</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('studio')}}">Estúdio</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('newborn')}}">Newborn</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{asset('about')}}">Sobre nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{asset('contact')}}">Contato</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--================Header Menu Area =================-->

@yield('content')

<!--================Instagram Area =================-->
<section class="instagram_area top_pad">
    <div class="container box_1620">
        <div class="insta_btn">
            <a class="btn theme_btn" href="#">Nos siga no Instagram</a>
        </div>
        <div class="instagram_image row m0">
            <a href="#"><img src="img/instagram/ins-1.jpg" alt=""></a>
            <a href="#"><img src="img/instagram/ins-2.jpg" alt=""></a>
            <a href="#"><img src="img/instagram/ins-3.jpg" alt=""></a>
            <a href="#"><img src="img/instagram/ins-4.jpg" alt=""></a>
            <a href="#"><img src="img/instagram/ins-5.jpg" alt=""></a>
            <a href="#"><img src="img/instagram/ins-6.jpg" alt=""></a>
        </div>
    </div>
</section>
<!--================End Instagram Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area p_120">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h3>Sobre nós</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore </p>
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </aside>
            </div>
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget news_widget">
                    <div class="f_title">
                        <h3>Newsletter</h3>
                    </div>
                    <p>Stay updated with our latest trends</p>
                    <div id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                            <div class="input-group d-flex flex-row">
                                <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                            </div>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </aside>
            </div>
            <div class="col-lg-2">
                <aside class="f_widget social_widget">
                    <div class="f_title">
                        <h3>Nos siga</h3>
                    </div>
                    <p>Let us be social</p>
                    <ul class="list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='{{asset("js/jquery-3.2.1.min.js")}}'></script>
<script src='{{asset("js/popper.js")}}'></script>
<script src='{{asset("js/bootstrap.min.js")}}'></script>
<script src='{{asset("js/stellar.js")}}'></script>
<script src='{{asset("vendors/lightbox/simpleLightbox.min.js")}}'></script>
<script src='{{asset("vendors/nice-select/js/jquery.nice-select.min.js")}}'></script>
<script src='{{asset("vendors/isotope/imagesloaded.pkgd.min.js")}}'></script>
<script src='{{asset("vendors/isotope/isotope-min.js")}}'></script>
<script src='{{asset("vendors/owl-carousel/owl.carousel.min.js")}}'></script>
<script src='{{asset("js/jquery.ajaxchimp.min.js")}}'></script>
<script src='{{asset("js/mail-script.js")}}'></script>
<script src='{{asset("js/theme.js")}}'></script>
</body>
</html>
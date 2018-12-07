<!--================Home Banner Area =================-->
<style>
    .home_banner_area .banner_inner .overlay {
        background: url({{asset($configuration->img_header_path)}}) no-repeat scroll center center;
    }
</style>
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>{{$configuration->title}}</h2>
                <p>{{$configuration->description}}</p>
                <a href="#" class="btn theme_btn">Explore nossa Galeria</a>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
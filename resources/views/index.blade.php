@extends('layouts.web')

@section('content')
    @include('banner_index')

    <!--================Testimonials Area =================-->
    <section class="testimonials_area p_120">
        <div class="container">
            <div class="row testimonials_inner">
                <div class="col-lg-6">
                    <div class="c_feedback_text">
                        <h4>Client’s Feedback</h4>
                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="t_slider owl-carousel">
                        <div class="item">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/testimonials/test-1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
                                    <h4>Mark Alviro Wiens</h4>
                                    <h6>CEO at Google</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/testimonials/test-1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
                                    <h4>Mark Alviro Wiens</h4>
                                    <h6>CEO at Google</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Testimonials Area =================-->
@endsection
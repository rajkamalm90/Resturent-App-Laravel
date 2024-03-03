@extends('forntend.layout.main')

@section('main-container')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- about part start-->
    <section class="about_part about_bg">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-4 col-lg-5 offset-lg-1">
                    <div class="about_img">
                <img src="{{ asset('forntend/img/about.png') }}" alt="">
                    </div>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <div class="about_text">
                        <h5>Our History</h5>
                        <h2>Where The Food’s As Good As The Root Beer.</h2>
                        <h4>Satisfying people hunger for simple pleasures</h4>
                        <p>May over was. Be signs two. Spirit. Brought said dry own firmament lesser best sixth deep
                            abundantly bearing, him, gathering you
                            blessed bearing he our position best ticket in month hole deep </p>
                        <a href="#" class="btn_3">Read More <img src="{{ asset('frontend/img/icon/left_2.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->

    <!--::review_part start::-->
    <section class="review_part gray_bg section_padding">
        <div class="container">
            <!-- Testimonials and feedback section -->
        </div>
    </section>
    <!--::review_part end::-->

    <!--::chefs_part start::-->
    <section class="chefs_part blog_item_section section_padding">
        <div class="container">
            <!-- Team members section -->
        </div>
    </section>
    <!--::chefs_part end::-->

@endsection

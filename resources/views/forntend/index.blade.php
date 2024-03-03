@extends("forntend.layout.main")

@section('main-container')     
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Expensive but the best</h5>
                            <h1>Deliciousness jumping into the mouth</h1>
                            <p>Together creeping heaven upon third dominion be upon won't darkness rule land
                                behold it created good saw after she'd Our set living. Signs midst dominion
                                creepeth morning</p>
                            <div class="banner_btn">
                                <div class="banner_btn_iner">
                                    <a href="#" class="btn_2">Reservation <img src="{{ asset('forntend/img/icon/left_1.svg') }}" alt=""></a>
                                </div>
                                <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube video_popup">
                                    <span><img src="{{ asset('forntend/img/icon/play.svg') }}" alt=""></span> Watch our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--::exclusive_item_part start::-->
    <section class="exclusive_item_part blog_item_section">
        <div class="container">
            <div class="row">
                <!-- ... ( HTML code) -->
                 <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Popular Dishes</p>
                        <h2>Our Exclusive Items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('forntend/img/food_item/food_item_1.png') }}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Indian Burger</h3>
                            <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                            <a href="#" class="btn_3">Read More <img src="{{ asset('forntend/img/icon/left_2.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- ... ( HTML code) -->

                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('forntend/img/food_item/food_item_2.png')}}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Cremy Noodles</h3>
                            <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                            <a href="#" class="btn_3">Read More <img src="{{ asset('forntend/img/icon/left_2.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{asset('img/food_item/food_item_3.png' )}} "alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Honey Meat</h3>
                            <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                            <a href="#" class="btn_3">Read More <img src="{{asset('img/icon/left_2.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 d-none d-sm-block d-lg-none">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{asset('img/food_item/food_item_1.png')}}"alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Cremy Noodles</h3>
                            <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                            <a href="#" class="btn_3">Read More <img src="{{asset('img/icon/left_2.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        

    <!--::exclusive        start     Add html  code:-->

    <!-- about part start -->
    <section class="about_part">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- ... (other HTML code) -->
                <div class="col-sm-4 col-lg-5 offset-lg-1">
                    <div class="about_img">
                        <img src="{{ asset('forntend/img/about.png') }}" alt="">
                    </div>
                </div>
                <!-- ... (other HTML code) -->
            </div>
        </div>
    </section>
    <!-- about part end -->

    <!-- intro_video_bg start -->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row">
                <!-- ... (other HTML code) -->
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start -->

    <!-- food_menu start -->
    <section class="food_menu gray_bg">
        <div class="container">
            <div class="row justify-content-between">
                <!-- ... (other HTML code) -->
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <!-- ... (other HTML code) -->
                        <div class="tab-pane fade show active single-member" id="Special" role="tabpanel" aria-labelledby="Special-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="{{ asset('forntend/img/food_menu/single_food_1.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Pork Sandwich</h3>
                                            <p>They're wherein heaven seed hath nothing</p>
                                            <h5>$40.00</h5>
                                        </div>
                                    </div>
                                    <!-- ... (other HTML code) -->
                                </div>
                                <!-- ... (other HTML code) -->
                            </div>
                        </div>
                        <!-- ... (other HTML code) -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- food_menu part end -->


<!--::chefs_part start::-->
<section class="chefs_part blog_item_section section_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <p>Team Member</p>
                    <h2>Our Experience Chefs</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="{{ asset('forntend/img/team/chefs_1.png') }}" alt="">
                    </div>
                    <div class="single_blog_text text-center">
                        <h3>Adam Billiard</h3>
                        <p>Chef Master</p>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat similar code for other chefs -->
        </div>
    </div>
</section>
<!--::chefs_part end::-->

<!--::regervation_part start::-->
<section class="regervation_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <p>Reservation</p>
                    <h2>Book A Table</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="regervation_part_iner">
                    <form>
                        <!-- Form fields here (similar to your existing HTML) -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::regervation_part end::-->

<!--::review_part start::-->
<section class="review_part gray_bg section_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <p>Testimonials</p>
                    <h2>Customers Feedback</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-11">
                <div class="client_review_part owl-carousel">
                    <!-- Repeat similar code for customer reviews -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--::review_part end::-->


<!--::review_part end::-->
<!--::review_part start::-->
<section class="review_part gray_bg section_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <p>Testimonials</p>
                    <h2>Customers Feedback</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-11">
                <div class="client_review_part owl-carousel">
                    <div class="client_review_single media">
                        <div class="client_img align-self-center">
                            <img src="img/client/client_1.png" alt="">
                        </div>
                        <div class="client_review_text media-body">
                            <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                god dea earth light for life may itself shall whales made they're blessed whales
                                also made from give
                                may saying meat. There from heaven it lights face had an amazing place</p>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                    </div>
                    <!-- Repeat similar code for other customer reviews -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--::review_part end::-->

<!--::exclusive_item_part start::-->
<section class="blog_item_section blog_section section_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <p>Recent News</p>
                    <h2>Latest From Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="{{ asset('forntend/img/blog/blog_1.png') }}" alt="">
                    </div>
                    <div class="single_blog_text">
                        <div class="date">
                            <a href="#" class="date_item">Apr 06, 2019 </a>
                            <a href="#" class="date_item"> <span>#</span> Food News </a>
                        </div>
                        <h3><a href="blog.html">Adama kind deep gathering first over after his great</a></h3>
                        <a href="#" class="btn_3">Read More <img src="{{ asset('forntend/img/icon/left_1.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- Repeat similar code for other blog items -->
        </div>
    </div>
</section>
<!--::exclusive_item_part end::-->

@endsection


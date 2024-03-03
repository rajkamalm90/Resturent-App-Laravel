@extends('forntend.layout.main')
@section('main-container')   
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Food Menu</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--::chefs_part start::-->
<!-- food_menu start-->
<section class="food_menu gray_bg">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="section_tittle">
                    <p>Popular Menu</p>
                    <h2>Delicious Food Menu</h2>
                </div>
            </div>
        
            <div class="col-lg-6">
                <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist">
                    <a class="active" id="Special-tab" data-toggle="tab" href="#Special" role="tab"
                        aria-controls="Special" aria-selected="false">Special <img src="img/icon/play.svg"
                            alt="play"></a>
                    <!-- Add other tabs if needed -->
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active single-member" id="Special" role="tabpanel" aria-labelledby="Special-tab">
            
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="{{ url('uploads/' . $product->image) }}" class="mr-3" alt="{{ $product->name }}" height="150px" width="200px">
            
                                        <div class="media-body align-self-center">
                                            <h3>{{ $product->name }}</h3>
                                            <p>{{ $product->description }}</p>
                                            <h5>Rupees{{ number_format($product->price, 2) }}</h5>
<button class="btn btn-primary" onclick="window.location.href='{{ route('elements', ['id' => $product->id]) }}'">Shop Now</button>



                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
            
                    </div>
                </div>
            </div>
            
              <!-- ... (remaining code) ... -->

                            <!-- End of provided code -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- intro_video_bg start-->
<section class="intro_video_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro_video_iner text-center">
                    <h2>Expect The Best</h2>
                    <div class="intro_video_icon">
                        <a id="play-video_1" class="video-play-button popup-youtube"
                            href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                            <span class="ti-control-play"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

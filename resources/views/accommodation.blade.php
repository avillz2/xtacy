@extends('layouts.app1')

@section('content')
 <!-- INNER PAGE BANNER -->
 <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(front/images/banner/1.jpg);">
    <div class="overlay-main bg-black opacity-07"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="text-white  font-80 font-weight-900">OUR ROOMS</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="/">Home</a></li>
                        <li>Our Room</li>
                    </ul>
                </div>

            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->
  <!-- ROOMS SLIDER START -->
  <div class="section-full p-tb90 bg-gray">
    <div class="container">

        <!-- TITLE START -->
        <div class="section-head text-center">
            <h2 class="m-b5" data-title="Suites">Our Rooms & Suites</h2>
            <div class="wt-separator-outer">
                <div class="wt-separator bg-primary"></div>
            </div>
        </div>
        <!-- TITLE END -->

        <div class="text-center">
            <ul class="btn-filter-wrap2">
                <li class="btn-filter btn-active" data-filter="*">All Rooms</li>
                <li class="btn-filter" data-filter=".col-1">Classic</li>
                <li class="btn-filter" data-filter=".col-1">Superior</li>
                <li class="btn-filter" data-filter=".col-3">Delux</li>
                <li class="btn-filter" data-filter=".col-4">Executive </li>
            </ul>
        </div>
    </div>

    <div class="container-fluid">
        <!-- IMAGE CAROUSEL START -->
        <div class="section-content">
            <div class="owl-carousel owl-carousel-filter2 owl-btn-bottom-center">
                <!-- COLUMNS 1 -->
                <div class="item col-1">
                    <div class="room-rent-section-outer">
                        <div class="room-rent-section">
                            <div class="rooms-pic-section">
                                <div class="wt-media">
                                    <img src="front/images/rooms/pic1.jpg" alt="">
                                    <div class="overlay-bx-3"></div>
                                    <h3 class="m-b0 wt-title">Classic Balcony Room</h3>
                                </div>

                            </div>
                            <div class="room-info-section text-black">
                                <span>$299.00/night</span>
                                <ul class="clearfix">
                                    <li><i class="fa fa-expand"></i> <strong>Size:</strong> 30m² </li>
                                    <li><i class="fa fa-user"></i> <strong>Adult:</strong> 3 </li>
                                    <li><i class="fa fa-eye"></i> <strong>View:</strong> balcony </li>
                                </ul>
                            </div>
                        </div>
                        <a href="room-detail.html" class="btn-half site-button button-lg"><span>More</span><em></em></a>
                    </div>
                </div>

                <!-- COLUMNS 2 -->
                 <div class="item col-2">
                    <div class="room-rent-section-outer">
                        <div class="room-rent-section">
                            <div class="rooms-pic-section">
                                <div class="wt-media">
                                    <img src="front/images/rooms/pic2.jpg" alt="">
                                    <div class="overlay-bx-3"></div>
                                    <h3 class="m-b0 wt-title">Superior Double Room</h3>
                                </div>

                            </div>
                            <div class="room-info-section text-black">
                                <span>$399.00/night</span>
                                <ul class="clearfix">
                                    <li><i class="fa fa-expand"></i> <strong>Size:</strong> 30m² </li>
                                    <li><i class="fa fa-user"></i> <strong>Adult:</strong> 3 </li>
                                    <li><i class="fa fa-eye"></i> <strong>View:</strong> balcony </li>
                                </ul>
                            </div>
                        </div>
                        <a href="room-detail.html" class="btn-half site-button button-lg"><span>More</span><em></em></a>
                    </div>
                </div>

                <!-- COLUMNS 3 -->
                <div class="item col-3">
                    <div class="room-rent-section-outer">
                        <div class="room-rent-section">
                            <div class="rooms-pic-section">
                                <div class="wt-media">
                                    <img src="front/images/rooms/pic3.jpg" alt="">
                                    <div class="overlay-bx-3"></div>
                                    <h3 class="m-b0 wt-title">Balcony Double Room</h3>
                                </div>

                            </div>
                            <div class="room-info-section text-black">
                                <span>$299.00/night</span>
                                <ul class="clearfix">
                                    <li><i class="fa fa-expand"></i> <strong>Size:</strong> 30m² </li>
                                    <li><i class="fa fa-user"></i> <strong>Adult:</strong> 3 </li>
                                    <li><i class="fa fa-eye"></i> <strong>View:</strong> balcony </li>
                                </ul>
                            </div>
                        </div>
                        <a href="room-detail.html" class="btn-half site-button button-lg"><span>More</span><em></em></a>
                    </div>
                </div>

                <!-- COLUMNS 4 -->
                <div class="item col-4">
                    <div class="room-rent-section-outer">
                        <div class="room-rent-section">
                            <div class="rooms-pic-section">
                                <div class="wt-media">
                                    <img src="front/images/rooms/pic4.jpg" alt="">
                                    <div class="overlay-bx-3"></div>
                                    <h3 class="m-b0 wt-title">Delux Double Room</h3>
                                </div>

                            </div>
                            <div class="room-info-section text-black">
                                <span>$299.00/night</span>
                                <ul class="clearfix">
                                    <li><i class="fa fa-expand"></i> <strong>Size:</strong> 30m² </li>
                                    <li><i class="fa fa-user"></i> <strong>Adult:</strong> 3 </li>
                                    <li><i class="fa fa-eye"></i> <strong>View:</strong> balcony </li>
                                </ul>
                            </div>
                        </div>
                        <a href="room-detail.html" class="btn-half site-button button-lg"><span>More</span><em></em></a>
                    </div>
                </div>

                <!-- COLUMNS 5 -->
                <div class="item col-3">
                    <div class="room-rent-section-outer">
                        <div class="room-rent-section">
                            <div class="rooms-pic-section">
                                <div class="wt-media">
                                    <img src="front/images/rooms/pic5.jpg" alt="">
                                    <div class="overlay-bx-3"></div>
                                    <h3 class="m-b0 wt-title">Classic Balcony Room</h3>
                                </div>

                            </div>
                            <div class="room-info-section text-black">
                                <span>$299.00/night</span>
                                <ul class="clearfix">
                                    <li><i class="fa fa-expand"></i> <strong>Size:</strong> 30m² </li>
                                    <li><i class="fa fa-user"></i> <strong>Adult:</strong> 3 </li>
                                    <li><i class="fa fa-eye"></i> <strong>View:</strong> balcony </li>
                                </ul>
                            </div>
                        </div>
                        <a href="room-detail.html" class="btn-half site-button button-lg"><span>More</span><em></em></a>
                    </div>
                </div>

                <!-- COLUMNS 6 -->
                <div class="item col-2">
                    <div class="room-rent-section-outer">
                        <div class="room-rent-section">
                            <div class="rooms-pic-section">
                                <div class="wt-media">
                                    <img src="front/images/rooms/pic6.jpg" alt="">
                                    <div class="overlay-bx-3"></div>
                                    <h3 class="m-b0 wt-title">Superior Double Room</h3>
                                </div>

                            </div>
                            <div class="room-info-section text-black">
                                <span>$299.00/night</span>
                                <ul class="clearfix">
                                    <li><i class="fa fa-expand"></i> <strong>Size:</strong> 30m² </li>
                                    <li><i class="fa fa-user"></i> <strong>Adult:</strong> 3 </li>
                                    <li><i class="fa fa-eye"></i> <strong>View:</strong> balcony </li>
                                </ul>
                            </div>
                        </div>
                       <a href="room-detail.html" class="btn-half site-button button-lg"><span>More</span><em></em></a>
                    </div>
                </div>

                <!-- COLUMNS 7 -->
                <div class="item col-1">
                    <div class="room-rent-section-outer">
                        <div class="room-rent-section">
                            <div class="rooms-pic-section">
                                <div class="wt-media">
                                    <img src="front/images/rooms/pic7.jpg" alt="">
                                    <div class="overlay-bx-3"></div>
                                    <h3 class="m-b0 wt-title">Delux Double Room</h3>
                                </div>

                            </div>
                            <div class="room-info-section text-black">
                                <span>$299.00/night</span>
                                <ul class="clearfix">
                                    <li><i class="fa fa-expand"></i> <strong>Size:</strong> 30m² </li>
                                    <li><i class="fa fa-user"></i> <strong>Adult:</strong> 3 </li>
                                    <li><i class="fa fa-eye"></i> <strong>View:</strong> balcony </li>
                                </ul>
                            </div>
                        </div>
                        <a href="room-detail.html" class="btn-half site-button button-lg"><span>More</span><em></em></a>
                    </div>
                </div>

                <!-- COLUMNS 8 -->


            </div>
        </div>
    </div>

 </div>
<!-- ROOMS  SLIDER END -->

@endsection

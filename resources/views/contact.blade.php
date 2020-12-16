@extends('layouts.app1')

@section('content')

<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(front/images/banner/4.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white  font-80 font-weight-900">Contact Us</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- SECTION CONTENTG START -->
    <div class="section-full p-tb80">
        <!-- LOCATION BLOCK-->
        <div class="container">

            <!-- GOOGLE MAP & CONTACT FORM -->
            <div class="section-content">
                <!-- CONTACT FORM-->
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-info text-black m-b30">
                            <!-- TITLE START -->
                            <div class="section-head text-left">
                                <h2 class="m-b5">Contact Info</h2>
                            </div>
                            <!-- TITLE END -->
                            <div class="wt-icon-box-wraper left p-b40">
                                <div class="icon-xs"><i class="fa fa-phone"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0 font-weight-500">Phone number</h5>
                                    <p>(456) 789 10 12</p>
                                </div>
                            </div>

                            <div class="wt-icon-box-wraper left p-b40">
                                <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0 font-weight-500">Email address</h5>
                                    <p>demo@gmail.com</p>
                                </div>
                            </div>

                            <div class="wt-icon-box-wraper left">
                                <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0 font-weight-500">Address info</h5>
                                    <p>55/11 Land Street, Modern New Yourk City, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <form class="contact-form cons-contact-form" method="post" action="http://thewebmax.com/sharan/form-handler.php">
                            <div class="contact-one m-b30">

                                <!-- TITLE START -->
                                <div class="section-head text-left">
                                    <h2 class="m-b5">Get In Touch</h2>
                                </div>
                                <!-- TITLE END -->

                                <div class="form-group">
                                    <input name="username" type="text" required class="form-control" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <textarea name="message" rows="4" class="form-control " required placeholder="Message"></textarea>
                                </div>

                                <div class="text-right">
                                    <button name="submit" type="submit" value="Submit" class="btn-half site-button button-lg m-b15">
                                            <span>Submit</span><em></em>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="gmap-outline">
                <div id="gmap_canvas2" class="google-map"></div>
            </div>
        </div>
   </div>

    <!-- SECTION CONTENT END -->

@endsection

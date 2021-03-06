
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mannatthemes.com/dastone/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2020 21:38:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dastone - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="bassets/images/favicon.ico">

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <!-- App css -->
        <link href="{{asset('/bassets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/bassets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/bassets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/bassets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/bassets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="{{asset('/bassets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{asset('/bassets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{asset('/bassets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">


                <li>
                        <a href="/admin"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Home</span><span class="badge badge-soft-success menu-arrow">New</span></a>
                    </li>

                    <li>
                        <a href="#"><i class="ti-control-record"></i>Booking <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="/admin/addbooking">Add Booking</a></li>
                            <li><a href="/admin/booking">Booking List</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Room T <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="/admin/addroomt">Add Room T</a></li>
                            <li><a href="/admin/roomt">Room T List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-control-record"></i>User<span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="/admin/adduser">Add User</a></li>
                            <li><a href="/admin/user">User List</a></li>

                        </ul>
                    </li>

                   <!-- <li>
                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Email Template <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="email-templates-alert.html">Alert Email</a></li>
                            <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                            <li><a href="email-templates-billing.html">Billing Email</a></li>
                        </ul>
                    </li>   -->

                    <li>
                        <a href="/admin/setting"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Setting</span><span class="badge badge-soft-success menu-arrow">New</span></a>
                    </li>


                </ul>

                <div class="update-msg text-center">
                    <a href="javascript: void(0);" class="float-right close-btn text-muted" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h5 class="mt-3">Mannat Themes</h5>
                    <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                    <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                </div>
            </div>
        </div>
        <!-- end left-sidenav-->


        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- Navbar -->
                <nav class="navbar-custom">
                    <ul class="list-unstyled topbar-nav float-right mb-0">
                        <li class="dropdown hide-phone">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="search" class="topbar-icon"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right dropdown-lg p-0">
                                <!-- Top Search Bar -->
                                <div class="app-search-topbar">
                                    <form action="#" method="get">
                                        <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="bell" class="align-self-center topbar-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">

                                <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                    Notifications <span class="badge badge-primary badge-pill">2</span>
                                </h6>
                                <div class="notification-menu" data-simplebar>
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">2 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">10 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="bassets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">40 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="users" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">1 hr ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="bassets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">2 hrs ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ml-1 nav-user-name hidden-sm">Nick</span>
                                <img src="bassets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle thumb-xs" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i> Settings</a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="#"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->

                    <ul class="list-unstyled topbar-nav mb-0">
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li>
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-soft-primary" href="#" role="button"><i class="fas fa-plus mr-2"></i>New Task</a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->
                           <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">


                    @include('inc.messages')
                    @yield('content')


                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2020 Dastone <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
                </div>
                <!-- end page content -->
                </div>
                <!-- end page-wrapper -->




                <!-- jQuery  -->
                <script src="{{asset('/bassets/js/jquery.min.js')}}"></script>
                <script src="{{asset('/bassets/js/bootstrap.bundle.min.js')}}"></script>
                <script src="{{asset('/bassets/js/metismenu.min.js')}}"></script>
                <script src="{{asset('/bassets/js/waves.js')}}"></script>
                <script src="{{asset('/bassets/js/feather.min.js')}}"></script>
                <script src="{{asset('/bassets/js/simplebar.min.js')}}"></script>
                <script src="{{asset('/bassets/js/moment.js')}}"></script>
                <script src="{{asset('/bassets/plugins/daterangepicker/daterangepicker.js')}}"></script>

                <script src="{{asset('/bassets/plugins/apex-charts/apexcharts.min.js')}}"></script>
                <script src="{{asset('/bassets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
                <script src="{{asset('/bassets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
                <script src="{{asset('/bassets/pages/jquery.analytics_dashboard.init.js')}}"></script>

                <!-- App js -->
                <script src="{{asset('/bassets/js/app.js')}}"></script>

                </body>


                <!-- Mirrored from mannatthemes.com/dastone/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2020 21:38:59 GMT -->
                </html>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ableproadmin.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 00:08:12 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>AMPos Landing Page</title>
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('landing/images/favicon.ico')}}" type="image/png" sizes="16x16">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('landing/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('landing/css/animate.c')}}ss">
    <!-- lavalamp css -->
    <link rel="stylesheet" href="{{asset('landing/css/jquery.lavalamp.c')}}ss">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('landing/css/owl.carousel.min.c')}}ss">
    <!-- popup -->
    <link rel="stylesheet" href="{{asset('landing/css/magnific-popup.c')}}ss">
    <!-- Main Style css -->
    <link rel="stylesheet" href="{{asset('landing/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('landing/font/icon/icon.css')}}" />
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 1629434, hjsv: 6 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body>
    <!-- [ Navbar ] Start -->
    <nav class="navbar navbar-expand-lg navbar-dark" role="navigation">
        <div class="container">
            <a class="navbar-brand">
                <img src="{{asset('landing/logo/logo-2-dark.png')}}" alt="AMPos Logo" style="width: auto; height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav my-2 my-lg-0" id="navlist">
                    <li class="nav-item">
                        <a class="nav-link " href="#features">Why AMPos?</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ Navbar ] end -->

    <!-- [ Header ] Start -->
    <header id="main" class="header">
        <div class="container">
            <div class="row mb-4 d-flex align-items-center">
                <div class="col-lg-4">
                    <span class="ml-3">Aplikasi POS LSP</span>
                    <h1 class="text-white">AMPos 1.0</h1>
                    <p class="mt-3 mb-4">Nikmati transaksi dengan mudah, dengan AMPos.</p>
                    <a href="{{route('login')}}" class="btn btn-danger mr-3">Mulai</a>
                </div>
                <div class="col-lg-8 text-right">
                    <div class="video-moke">
                        <img src="{{asset('landing/images/header/moke.png')}}" alt="" class="img-fluid">
                        <div class="video embed-responsive embed-responsive-16by9">
                            <img src="{{asset('assets/images/custom/landing-1.png')}}" alt="" class="embed-responsive-item">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="r-w-block">
            <div class="r-w"></div>
            <div class="r-w"></div>
        </div>
    </header>
    <!-- [ Header ] End -->
    <!-- [ features ] Start -->
    <section id="features" class="features">
        <div class="container">
            <div class="row text-center feature-border">
                <div class="col-sm-3">
                    <div class="bg-featured__Items m-auto"></div>
                    <h3 class="mt-4">Featured Items</h3>
                </div>
                <div class="col-sm-3">
                    <div class="bg-featured___Author m-auto"></div>
                    <h3 class="mt-4">Featured Author</h3>
                </div>
                <div class="col-sm-3">
                    <div class="bg-featured_Trend m-auto"></div>
                    <h3 class="mt-4">Trending Item</h3>
                </div>
                <div class="col-sm-3">
                    <div class="bg-featured_rate m-auto"></div>
                    <h3 class="mt-4">Top Rated</h3>
                </div>
            </div>
        </div>
        <div class="container title">
            <h2><span>Why</span> AMPos?</h2>
            <div class="bg-text">AMPos?</div>
            <div class="row  justify-content-center">
                <div class="col-md-6">
                    <p class="mb-0">8+ Admin Panels included with full RTL support too</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feature-block">
                        <div class="bg-able_profits m-auto"></div>
                        <h4 class="mb-3 mt-4">Dashboard of 2019</h4>
                        <p>Latest, trending new design makes Able Pro a unique Bootstrap admin template for 2018. Use
                            new ideas to make complete dashboard template work with any type of project needs.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-block">
                        <div class="bg-able_vector m-auto"></div>
                        <h4 class="mb-3 mt-4">Made for perfomance</h4>
                        <p>Speed, Easy to customize, Flexible to use are 3 top most key factors for any Admin Template.
                            We are happy to say that Able Pro achieves those performance factors. Not said by us “i.e.
                            our customer’s words”.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-block">
                        <div class="bg-able_website m-auto"></div>
                        <h4 class="mb-3 mt-4">Error-free code</h4>
                        <p>Error Prohibited!! Yes, we care your project with the complete testing of design &
                            performance in all major modern devices, which makes Able Pro a standard Admin Dashboard
                            template all time.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-block">
                        <div class="bg-able_marketer m-auto"></div>
                        <h4 class="mb-3 mt-4">On time Support</h4>
                        <p>Problem? Write to us – using <a href="https://phoenixcoded.ticksy.com/" target="_blank"> our
                                support desk.</a> 99% query resolution in first response within 1 day of time. 70% first
                            response within 30mins. 95% users are
                            satisfied with support quality & response time.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-block">
                        <div class="bg-able_download m-auto"></div>
                        <h4 class="mb-3 mt-4">Always updated</h4>
                        <p>Plug-ins update available? No worries, we always update our package timeply with latest
                            Plug-ins/technology & get update notification on Email with Detailed changelogs, version
                            history from our item page.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-block">
                        <div class="bg-able_manage m-auto"></div>
                        <h4 class="mb-3 mt-4">Effective Documentation</h4>
                        <p>Online Separate help documentation for both Bootstrap HTML & Angular version. We frequently
                            made updates on our documentation for your less stress & hassle free development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ features ] Ends -->

    <!-- [ demos ] Start -->
    <section id="demos" class="demos theme-alt-bg">
        <div class="container title">
            <h2><span>Explore</span> Demos</h2>
            <div class="bg-text">Demos</div>
            <div class="row  justify-content-center">
                <div class="col-md-6">
                    <p class="mb-0">Quick start skeleton version included in package</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- 1.Vertical -->
                <div class="col-md-6 col-lg-4">
                    <div class="layouts-block">
                        <img src="assets/images/demo/layout-default.jpg" alt="layout image" class="img-fluid">
                        <div class="hover-data">
                            <a href="bootstrap/default/index.html" class="btn btn-sm btn-primary mr-1"
                                target="_blank">HTML</a>
                            <a href="angular/default/index.html" class="btn btn-sm btn-danger mr-1"
                                target="_blank">Angular</a>
                            <a href="react/default/index.html" class="btn btn-sm btn-info" target="_blank">React</a>
                        </div>
                    </div>
                    <p class="mb-1 mt-2"><small>Default</small></p>
                    <h5 class="">Vertical Layout</h5>
                </div>
                <!-- 2.Horizontal -->
                <div class="col-md-6 col-lg-4">
                    <div class="layouts-block">
                        <img src="assets/images/demo/horizontal.jpg" alt="layout image" class="img-fluid">
                        <div class="hover-data">
                            <a href="bootstrap/default/layout-horizontal.html" class="btn btn-sm btn-primary mr-1"
                                target="_blank">HTML</a>
                            <a href="angular/default/layout/horizontal.html" class="btn btn-sm btn-danger mr-1"
                                target="_blank">Angular</a>
                            <a href="react/default/layout/horizontal.html" class="btn btn-sm btn-info"
                                target="_blank">React</a>
                        </div>
                    </div>
                    <p class="mb-1 mt-2"><small>Horizontal</small></p>
                    <h5 class="">Horizontal Layout</h5>
                </div>
                <!-- 3.RTL -->
                <div class="col-md-6 col-lg-4">
                    <div class="layouts-block">
                        <img src="assets/images/demo/layout-rtl.jpg" alt="layout image" class="img-fluid">
                        <div class="hover-data">
                            <a href="bootstrap/default/layout-rtl.html" class="btn btn-sm btn-primary mr-1"
                                target="_blank">HTML</a>
                            <a href="angular/default/layout/vertical-rtl.html" class="btn btn-sm btn-danger mr-1"
                                target="_blank">Angular</a>
                            <a href="react/default/layout/v-rtl.html" class="btn btn-sm btn-info"
                                target="_blank">React</a>
                        </div>
                    </div>
                    <p class="mb-1 mt-2"><small>Right to Left full support</small></p>
                    <h5 class="">RTL Layout</h5>
                </div>
                <!-- 3.Dark -->
                <div class="col-md-6 col-lg-4">
                    <div class="layouts-block">
                        <img src="assets/images/demo/layout-dark.jpg" alt="layout image" class="img-fluid">
                        <div class="hover-data">
                            <a href="bootstrap/default/layout-dark.html" class="btn btn-sm btn-primary mr-1"
                                target="_blank">HTML</a>
                            <a href="angular/default/layout/dark.html" class="btn btn-sm btn-danger mr-1"
                                target="_blank">Angular</a>
                            <a href="react/default/layout/dark.html" class="btn btn-sm btn-info"
                                target="_blank">React</a>
                        </div>
                    </div>
                    <p class="mb-1 mt-2"><small>Dark Version</small></p>
                    <h5 class="">Dark Layout</h5>
                </div>
                <!-- 5.Horizontal RTL -->
                <div class="col-md-6 col-lg-4">
                    <div class="layouts-block">
                        <img src="assets/images/demo/layout-horizontal-rtl.jpg" alt="layout image" class="img-fluid">
                        <div class="hover-data">
                            <a href="bootstrap/default/layout-horizontal-rtl.html" class="btn btn-sm btn-primary mr-1"
                                target="_blank">HTML</a>
                            <a href="angular/default/layout/horizontal-rtl.html" class="btn btn-sm btn-danger mr-1"
                                target="_blank">Angular</a>
                            <a href="react/default/layout/horizontal-rtl.html" class="btn btn-sm btn-info"
                                target="_blank">React</a>
                        </div>
                    </div>
                    <p class="mb-1 mt-2"><small>Horizontal Right to Left - full support</small></p>
                    <h5 class="">Horizontal Layout</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- [ demos ] end -->

    <!-- [ Pages ] Start -->
    <section class="pages">
        <div class="container title">
            <h2><span>Different</span> Pages</h2>
            <div class="bg-text">Pages</div>
            <div class="row  justify-content-center">
                <div class="col-md-6">
                    <p class="mb-0">Able Pro admin contains most commonly used pages to develop any applications
                        dashboard which will ease the developer's efforts.</p>
                </div>
            </div>
        </div>
        <div class="page-block">
            <div id="page-slider" class="owl-carousel page-slider">
                <div class="item">
                    <div class="page-block">
                        <img src="assets/images/pages/img-page-1.jpg" alt="" class="img-fluid">
                        <div class="hover-block">
                            <a href="bootstrap/default/auth-signup-img-side.html" target="_blank"
                                class="btn btn-primary">Authentication</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="page-block">
                        <img src="assets/images/pages/img-page-2.jpg" alt="" class="img-fluid">
                        <div class="hover-block">
                            <a href="bootstrap/default/maint-offline-ui.html" target="_blank"
                                class="btn btn-primary">Offline</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="page-block">
                        <img src="assets/images/pages/img-page-3.jpg" alt="" class="img-fluid">
                        <div class="hover-block">
                            <a href="bootstrap/default/task-board.html" target="_blank" class="btn btn-primary">Task</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="page-block">
                        <img src="assets/images/pages/img-page-4.jpg" alt="" class="img-fluid">
                        <div class="hover-block">
                            <a href="bootstrap/default/email_inbox.html" target="_blank"
                                class="btn btn-primary">Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Pages ] end -->

    <!-- [ application ] Start -->
    <section class="application theme-alt-bg">
        <div class="container title">
            <h2><span>Useful</span> Applications</h2>
            <div class="bg-text">Application</div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="mb-0">Able pro admin template comes with very useful applications like chat, taskboard,
                        calendar and more.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane show active" id="pills-social" role="tabpanel"
                            aria-labelledby="pills-social-tab">
                            <a href="bootstrap/default/hospital-dashboard.html" target="_blank"><img
                                    src="assets/images/application/img-app-1.jpg" alt="fb-wall" class="img-fluid"></a>
                        </div>
                        <div class="tab-pane" id="pills-Task" role="tabpanel" aria-labelledby="pills-Task-tab">
                            <a href="bootstrap/default/project-dashboard.html" target="_blank"><img
                                    src="assets/images/application/img-app-2.jpg" alt="task-detail"
                                    class="img-fluid"></a>
                        </div>
                        <div class="tab-pane" id="pills-Todo" role="tabpanel" aria-labelledby="pills-Todo-tab">
                            <a href="bootstrap/default/member-membership.html" target="_blank"><img
                                    src="assets/images/application/img-app-3.jpg" alt="todo" class="img-fluid"></a>
                        </div>
                        <div class="tab-pane" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab">
                            <a href="bootstrap/default/help-dashboard.html" target="_blank"><img
                                    src="assets/images/application/img-app-4.jpg" alt="gallery-advance"
                                    class="img-fluid"></a>
                        </div>
                        <div class="tab-pane" id="pills-search" role="tabpanel" aria-labelledby="pills-search-tab">
                            <a href="bootstrap/default/school-dashboard.html" target="_blank"><img
                                    src="assets/images/application/img-app-5.jpg" alt="search-result"
                                    class="img-fluid"></a>
                        </div>
                        <div class="tab-pane" id="pills-Job" role="tabpanel" aria-labelledby="pills-Job-tab">
                            <a href="bootstrap/default/crypto-dashboard.html" target="_blank"><img
                                    src="assets/images/application/img-app-6.jpg" alt="job-find" class="img-fluid"></a>
                        </div>
                        <div class="tab-pane" id="pills-Job1" role="tabpanel" aria-labelledby="pills-Job-tab1">
                            <a href="bootstrap/default/ecom-product-details.html" target="_blank"><img
                                    src="assets/images/application/img-app-7.jpg" alt="job-find" class="img-fluid"></a>
                        </div>
                    </div>
                    <ul class="nav nav-pills nav-fill mt-5" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-social-tab" data-toggle="pill" href="#pills-social"
                                role="tab" aria-controls="pills-social" aria-selected="true">Hospital</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Task-tab" data-toggle="pill" href="#pills-Task" role="tab"
                                aria-controls="pills-Task" aria-selected="false">Project & CRM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Todo-tab" data-toggle="pill" href="#pills-Todo" role="tab"
                                aria-controls="pills-Todo" aria-selected="false">Membership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-gallery-tab" data-toggle="pill" href="#pills-gallery"
                                role="tab" aria-controls="pills-gallery" aria-selected="false">Helpdesk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-search-tab" data-toggle="pill" href="#pills-search" role="tab"
                                aria-controls="pills-search" aria-selected="false">School</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Job-tab" data-toggle="pill" href="#pills-Job" role="tab"
                                aria-controls="pills-Job" aria-selected="false">Crypto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Job-tab1" data-toggle="pill" href="#pills-Job1" role="tab"
                                aria-controls="pills-Job1" aria-selected="false">E-Commerce</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- [ application ] end -->

    <!-- [ Widget ] Start -->
    <section class="widget">
        <div class="container title">
            <h2><span>Advance</span> Widget</h2>
            <div class="bg-text">Widget</div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="mb-0">Able pro admin template comes with very useful applications like chat, taskboard,
                        calendar and more.</p>
                </div>
            </div>
        </div>
        <div class="widget-scroll"></div>
    </section>
    <!-- [ Widget ] end -->

    <!-- [ Customizer ] Start -->
    <section class="customizer theme-alt-bg">
        <div class="container title">
            <h2><span>Live</span> Customizer</h2>
            <div class="bg-text">Customizer</div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="mb-0">Make your own layout with tons of options through Live Customizer.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-5">
                    <div class="cust-block d-flex align-items-center">
                        <div><span class="num">01</span></div>
                        <div>
                            <h3 class="mb-3">Live Customizer</h3>
                            <p class="mb-0">Make your own layout with tons of options through Live Customizer.</p>
                        </div>
                    </div>
                    <div class="cust-block d-flex align-items-center">
                        <div><span class="num">02</span></div>
                        <div>
                            <h3 class="mb-3">Export it</h3>
                            <p class="mb-0">Click on Export button. Provide valid licence key. That's it..</p>
                        </div>
                    </div>
                    <div class="cust-block d-flex align-items-center mb-0">
                        <div><span class="num">03</span></div>
                        <div>
                            <h3 class="mb-3">Use it</h3>
                            <p class="mb-0">Use the page directly into your project without any further effort..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <img src="assets/images/Customizer.gif" alt="image-app" class="img-fluid lc-img">
                </div>
            </div>
        </div>
    </section>
    <!-- [ Customizer ] end -->

    <!-- [ Component ] Start -->
    <section class="component">
        <div class="container title">
            <h2><span>Helpful</span> Components</h2>
            <div class="bg-text">Component</div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="mb-0">Ready to use different types of components.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="comp-block">
                        <div class="bg-help_table  m-auto"></div>
                        <div class="bg-h_table  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Data Table</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_map  m-auto"></div>
                        <div class="bg-h_map  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Maps</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_download  m-auto"></div>
                        <div class="bg-h_download  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Downloads</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_rating  m-auto"></div>
                        <div class="bg-h_star  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Rating</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_chart  m-auto"></div>
                        <div class="bg-h_chart  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Charts</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_alert  m-auto"></div>
                        <div class="bg-h_alert  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Alerts</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_editer  m-auto"></div>
                        <div class="bg-h_editor  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Editors</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_icon  m-auto"></div>
                        <div class="bg-h_icon  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Icons</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_badge  m-auto"></div>
                        <div class="bg-h_badge  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Badges</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_process  m-auto"></div>
                        <div class="bg-h_search1  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Progress</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_upload  m-auto"></div>
                        <div class="bg-h_upload  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">File Upload</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_tool  m-auto"></div>
                        <div class="bg-h_tool  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Typography</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_calendar  m-auto"></div>
                        <div class="bg-h_calendar  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Calenders</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_tap  m-auto"></div>
                        <div class="bg-h_tab  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Tabs & Pills</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_search  m-auto"></div>
                        <div class="bg-h_modal m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Search</span>
                    </div>
                    <div class="comp-block">
                        <div class="bg-help_modal  m-auto"></div>
                        <div class="bg-h_progress  m-auto h-img"></div>
                        <span class="mt-3 comp-title d-block">Modals</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Component ] end -->

    <!-- [ call to action ] Start -->
    <div class="c-a-wave-block">
        <img src="assets/images/wave2.png" alt="" class="img-fluid" />
    </div>
    <section class="c-action">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="c-a-icon">
                        <div class="bg-review_star"></div>
                    </div>
                    <h2 class="mt-2">50+</h2>
                    <span class="mb-0 c-a-cont">5* Ratings & Reviews</span>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="c-a-icon">
                        <div class="bg-review_customer"></div>
                    </div>
                    <h2 class="mt-2">1.5k+</h2>
                    <span class="mb-0 c-a-cont">Happy Customers</span>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="c-a-icon">
                        <div class="bg-review_code"></div>
                    </div>
                    <h2 class="mt-2">3k+</h2>
                    <span class="mb-0 c-a-cont">Hours of codes</span>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="c-a-icon">
                        <div class="bg-review_member"></div>
                    </div>
                    <h2 class="mt-2">10+</h2>
                    <span class="mb-0 c-a-cont">Team Members</span>
                </div>
            </div>
        </div>
    </section>
    <!-- [ call to action ] end -->

    <!-- [ Key Features ] Start -->
    <section class="k-features theme-alt-bg">
        <div class="container title">
            <h2><span>Key</span> Features</h2>
            <div class="bg-text">Features</div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="mb-0">Below are key features of Able Pro Bootstrap admin template with detail description.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_ui m-auto"></div>
                        <span class="k-f-title">1000+ UI Elements</span>
                        <div class="h-data">
                            <P class="mb-0">We've cover everything in terms of UI elements in Able Pro</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_form m-auto"></div>
                        <span class="k-f-title">500+ Form Elements</span>
                        <div class="h-data">
                            <P class="mb-0">Buttons, Dropdowns, Icons, Accordion etc...</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_marketing m-auto"></div>
                        <span class="k-f-title">200+ Pages</span>
                        <div class="h-data">
                            <P class="mb-0">Dashboards, Auth, Maintenance,Font Icons, Apps Pages included.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_contract_ m-auto"></div>
                        <span class="k-f-title">200+ Plugins</span>
                        <div class="h-data">
                            <P class="mb-0">3'rd Party plugins is well integrated your development time.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_widget m-auto"></div>
                        <span class="k-f-title">150+ Widgets</span>
                        <div class="h-data">
                            <P class="mb-0">Ready to use widgets designed for your project needs.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_chart m-auto"></div>
                        <span class="k-f-title">70+ Charts</span>
                        <div class="h-data">
                            <P class="mb-0">amChart, D3, eCharts, Google charts, Float, Morris, nvd3, peity, rickshaw,
                                sparkline and many more...</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_layout m-auto"></div>
                        <span class="k-f-title">25+ Page Layouts</span>
                        <div class="h-data">
                            <P class="mb-0">Vertical, Horizontal, Boxed, Fixed & tons of menu options.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_analytics m-auto"></div>
                        <span class="k-f-title">5+ Applications</span>
                        <div class="h-data">
                            <P class="mb-0">Social, Task, To-do, Gallery, Search Application pages.</P>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-3 col-md-6">
                        <div class="k-f-block">
                            <div class="bg-key_web m-auto"></div>
                            <span class="k-f-title">Web Devlopment</span>
                            <div class="h-data">
                                <P class="mb-0">Each pages have ready to use components.</P>
                            </div>
                        </div>
                    </div>-->
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_landing m-auto"></div>
                        <span class="k-f-title">Landing Page</span>
                        <div class="h-data">
                            <P class="mb-0">Enhance your website with integrated bonus Front end Landing Page design.
                            </P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_browser m-auto"></div>
                        <span class="k-f-title">Responsive Design</span>
                        <div class="h-data">
                            <P class="mb-0">Able pro adapt in evry devices without matter of its resolution.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_project m-auto"></div>
                        <span class="k-f-title">Detail Documentation</span>
                        <div class="h-data">
                            <P class="mb-0">Separate documentation for Angular and HTML version.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_update m-auto"></div>
                        <span class="k-f-title">Lifetime Updates</span>
                        <div class="h-data">
                            <P class="mb-0">We guaranteed gives you live time upto date package.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_speed m-auto"></div>
                        <span class="k-f-title">Speed Performance</span>
                        <div class="h-data">
                            <P class="mb-0">We carefully optimised Able pro for GTMetrix, Pingdom, W3 passed scores.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_support m-auto"></div>
                        <span class="k-f-title">5 star Support</span>
                        <div class="h-data">
                            <P class="mb-0">Best rated Ticksy support across whole marketplace.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="k-f-block">
                        <div class="bg-key_strategy m-auto"></div>
                        <span class="k-f-title"> Vast App Extension</span>
                        <div class="h-data">
                            <P class="mb-0">Ready to integrate Extensions - Apps for your different purpose usage in
                                project.</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Key Features ] end -->

    <!-- [ Technology ] Start -->
    <section class="technology theme-alt-bg">
        <div class="container title">
            <h2><span>App</span> Use</h2>
            <div class="bg-text">Technology</div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="mb-0">Below are technology which are use in Able Pro Bootstrap admin template with detail
                        description.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="tech-block">
                        <div class="m-auto">
                            <img src="{{asset('landing/laravel.png')}}" alt="Laravel" style="width: 116px; height: 88px; background: -10px -299px;">
                        </div>
                        <h3 class="mb-4 mt-3">Laravel</h3>
                        <p class="mb-0">Build applications and reuse your code and abilities to build apps for any
                            deployment target. For web, mobile web, native mobile and native desktop.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="tech-block">
                        <div class="bg-bootstrap m-auto"></div>
                        <h3 class="mb-4 mt-3">Bootstrap 4</h3>
                        <p class="mb-0">Bootstrap is the most popular HTML, CSS, and JS framework in the world for
                            building responsive, mobile-first projects on the web.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="tech-block">
                        <div class="m-auto">
                            <img src="{{asset('landing/javascript.png')}}" alt="Javascript" style="width: 150px; height: 88px; background: -10px -299px;">
                        </div>
                        <h3 class="mb-4 mt-3">Javascript</h3>
                        <p class="mb-0">Saas is the most popular HTML, CSS, and JS framework in the world for building
                            responsive, mobile-first projects on the web.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Technology ] end -->

    <!-- [ Reviews ] Start -->
    <section class="reviews">
        <div class="container title">
            <h2><span>Genuine</span> Reviews</h2>
            <div class="bg-text">Reviews</div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="mb-0">See why we are #1 out of 600+ admin themes</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="comt-block main">
                        <div class="row">
                            <div class="col">
                                <div class="bg-quote"></div>
                            </div>
                            <div class="col">
                                <div class="bg-star_5 float-right"></div>
                            </div>
                        </div>
                        <p class="mb-3">“ I really appreciate the effort you guys have put into making things so
                            organized and smart. your theme is awesome! ”</p>
                        <h5 class="text-theme text-right mb-0"><span>- TJ </span>(3 licence purchased)</h5>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div id="reviews-slider" class="owl-carousel page-slider">
                        <div class="item">
                            <div class="comt-block">
                                <div class="row">
                                    <div class="col">
                                        <div class="bg-star_5"></div>
                                    </div>
                                    <div class="col">
                                        <h6 class="mb-0 text-right">7 days ago...</h6>
                                    </div>
                                </div>
                                <p class="mb-3 mt-2">Really <span>Good Admin</span>, It completely servs my need and
                                    what i want for my project. No exceptions using CodedThemes product. Thump us !!!
                                </p>
                                <h6 class="mb-3">Momennoor, Egypt</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="comt-block">
                                <div class="row">
                                    <div class="col">
                                        <div class="bg-star_5"></div>
                                    </div>
                                    <div class="col">
                                        <h6 class="mb-0 text-right">2 days ago...</h6>
                                    </div>
                                </div>
                                <p class="mb-3 mt-2"><span>An excellent theme</span>. It contains everything you need to
                                    open complex projects. Incredible development and even better support!</p>
                                <h6 class="mb-3">Vihtora, Ukraine</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="comt-block">
                                <div class="row">
                                    <div class="col">
                                        <div class="bg-star_5"></div>
                                    </div>
                                    <div class="col">
                                        <h6 class="mb-0 text-right">2 days ago...</h6>
                                    </div>
                                </div>
                                <p class="mb-3 mt-2"><span>Excellent template</span>. Very complete - the design is very
                                    cool and the quality of code is excellent. Compliments</p>
                                <h6 class="mb-3">Ab69aho, Italy</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="comt-block">
                                <div class="row">
                                    <div class="col">
                                        <div class="bg-star_5"></div>
                                    </div>
                                    <div class="col">
                                        <h6 class="mb-0 text-right">2 days ago...</h6>
                                    </div>
                                </div>
                                <p class="mb-3 mt-2"><span>Top quality</span>- Regular updates - Clean n Neat code -
                                    Saves lots of developing time - Powerful documentation - Package contain seperate
                                    layouts so <span>no need to change in code.</span></p>
                                <h6 class="mb-3">VishalMG, India</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Reviews ] end -->

    <!-- [ Footer ] Start -->
    <footer class="theme-bg">
        <div class="container b-footer">
            <div class="col-md-12 col-lg-12">
                <ul class="list-unstyled">
                    <li><img src="{{asset('landing/logo/logo-dark.png')}}" alt="" style="width: auto; height: 50px;"></li>
                    <li class="mt-3 mb-3 d-flex align-items-center">
                        <div class="bg-mail_new mr-2"></div><a class="d-inline-block"
                            href="http://phoenixcoded.net/support">agungmubarok24@gmail.com</a>
                    </li>
                    <li class="mt-3 mb-3 d-flex align-items-center">
                        <div class="bg-call mr-2"></div><a class="d-inline-block"
                            href="mailto:phoenixcoded.gmail.com">081318651188</a>
                    </li>
                </ul>
            </div>
            <span class="bottom-tag">AMPos</span>
            <center>
                <p>
                    © 2020 
                    <a href="" target="_blank">AMPos</a>. 
                    Exclusively on 
                    <a href="" target="_blank">SMK Negeri 10 Jakarta</a>
                </p>
            </center>
        </div>
    </footer>
    <!-- [ Footer ] end -->

    <!-- Jquery and Js Plugins -->
    <script src="{{asset('landing/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('landing/js/script.min.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90716026-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-90716026-1');
    </script>


</body>

</html>
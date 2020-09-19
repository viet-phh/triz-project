<!doctype html>
<html lang="en">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="pxdraft">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Triz Project">
    <meta name="description" content="Triz Project">
    <!-- title -->
    <title>Triz Project</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('homepage/img/logo.svg')}}">
    <!-- plugin CSS -->
    <link href="{{asset('homepage/plugin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('homepage/plugin/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('homepage/plugin/et-line/style.css')}}" rel="stylesheet">
    <link href="{{asset('homepage/plugin/themify-icons/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('homepage/plugin/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('homepage/plugin/owl-carousel/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('homepage/plugin/magnific/magnific-popup.css')}}" rel="stylesheet">
    <!-- theme css -->
    <link href="{{asset('homepage/style/master.css')}}" rel="stylesheet">
    @yield('csslink')
</head>
<!-- Body Start -->

<body data-spy="scroll" data-target="#navbar-collapse-toggle" data-offset="98">
    <!-- Preload -->
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>
    <!-- End Preload -->
    <!-- Header -->
    @if (Request::is('/'))
    <header class="header-nav header-white">
    @else
    <header class="header-nav header-height header-dark header-bg">
    @endif
        <div class="fixed-header-bar">
            <!-- Header Nav -->
            <div class="navbar navbar-main navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img class="logo-dark" alt="" title="" src="{{asset('homepage/img/logo.svg')}}">
                        <img class="logo-light" alt="" title="" src="{{asset('homepage/img/logo-light.svg')}}">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-collapse-overlay" id="navbar-main-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link {!! isset($homepage) ? 'active':'' !!}" href="/">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {!! isset($about) ? 'active':'' !!}" href="/about">Về chúng tôi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dịch vụ</a>
                            </li>
                            <li class="nav-item mm-in px-dropdown">
                                <a class="nav-link" href="#">Lean</a>
                                <i class="fa fa-angle-down px-nav-toggle"></i>
                                <ul class="px-dropdown-menu mm-dorp-in">
                                    <li><a href="about-us-classic.html">Something</a></li>
                                    <li><a href="about-us-classic.html">Something</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mm-in px-dropdown">
                                <a class="nav-link" href="#">6Sigma</a>
                                <i class="fa fa-angle-down px-nav-toggle"></i>
                                <ul class="px-dropdown-menu mm-dorp-in">
                                    <li><a href="about-us-classic.html">Something</a></li>
                                    <li><a href="about-us-classic.html">Something</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mm-in px-dropdown">
                                <a class="nav-link" href="#">TRIZ</a>
                                <i class="fa fa-angle-down px-nav-toggle"></i>
                                <ul class="px-dropdown-menu mm-dorp-in">
                                    <li><a href="about-us-classic.html">Something</a></li>
                                    <li><a href="about-us-classic.html">Something</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mm-in px-mega">
                                <a class="nav-link" href="javascript:void(0)">Tài liệu</a>
                                <i class="fa fa-angle-down px-nav-toggle"></i>
                                <div class="px-mega-menu mm-dorp-in">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h6 class="mm-title">Lean</h6>
                                                <ul class="mm-link">
                                                    <li><a href="accordions.html"><i class="ti-layout-accordion-separated"></i> Accordions</a></li>
                                                    <li><a href="blockquote.html"><i class="ti-quote-left"></i> Blockquote</a></li>
                                                    <li><a href="button.html"><i class="ti-mouse"></i> Button</a></li>
                                                    <li><a href="call-to-action.html"><i class="ti-headphone-alt"></i> Call to action</a></li>
                                                    <li><a href="client-carousel.html"><i class="ti-layout-slider"></i> Client carousel</a></li>
                                                    <li><a href="clients.html"><i class="ti-layout-slider"></i> Clients</a></li>
                                                    <li><a href="columns.html"><i class="ti-layout-column3-alt"></i> Columns</a></li>
                                                    <li><a href="video.html"><i class="ti-video-camera"></i> Video</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <h6 class="mm-title">6Sigma</h6>
                                                <ul class="mm-link">
                                                    <li><a href="counters.html"><i class="ti-timer"></i> Counters</a></li>
                                                    <li><a href="google-map.html"><i class="ti-location-pin"></i> Google map</a></li>
                                                    <li><a href="heading.html"><i class="ti-text"></i> Heading</a></li>
                                                    <li><a href="highlights.html"><i class="ti-underline"></i> Highlights</a></li>
                                                    <li><a href="icon-with-text.html"><i class="ti-layout-media-left"></i> Icon with text</a></li>
                                                    <li><a href="interactive-banners.html"><i class="ti-image"></i> Interactive banners</a></li>
                                                    <li><a href="lists.html"><i class="ti-list"></i> Lists</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <h6 class="mm-title">Triz</h6>
                                                <ul class="mm-link">
                                                    <li><a href="message-box.html"><i class="ti-layout-media-right-alt"></i> Message box</a></li>
                                                    <li><a href="pie-chart.html"><i class="ti-pie-chart"></i> Pie chart</a></li>
                                                    <li><a href="pricing-table.html"><i class="ti-layout-grid2-thumb"></i> Pricing table</a></li>
                                                    <li><a href="process-bar.html"><i class="icon-hourglass"></i> Process bar</a></li>
                                                    <li><a href="process-step.html"><i class="ti-stats-up"></i> Process step</a></li>
                                                    <li><a href="seperators.html"><i class="ti-layout-line-solid"></i> Seperators</a></li>
                                                    <li><a href="social-icons.html"><i class="ti-signal"></i> Social icons</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {!! isset($contact) ? 'active' :'' !!}" href="/contact">Liên hệ</a>
                            </li>
                        </ul>
                        <a class="d-none d-lg-inline-block m-btn m-btn-radius m-btn-theme2nd m-btn-sm m-20px-l" href="#">Đăng nhập</a>
                    </div>
                </div>
            </div>
            <!-- End Header Nav -->
        </div>
    </header>
    <!-- Header End -->
    <!-- Main -->
    @yield('content')
    <!-- End Main -->
    <!-- Footer-->
    <!-- Section -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="h1 m-15px-b">Quotes</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ml-auto align-self-center p-50px-tb lg-p-50px-tb">
                    <div class="owl-carousel owl-nav-arrow-bottom" data-items="1" data-nav-dots = "true" data-center="true" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0" data-autoplay="true">
                        <div class="m-30px-b text-center ">
                            <div class="avatar-220 m-auto-lr border-radius-50 m-20px-b">
                                <img src="{{asset('homepage/img/avatra-1.jpg')}}" title="" alt="">
                            </div>
                            <h6 class="font-4">Owner of Quote</h6>
                            <p class="font-2">I wanted to move from Wordpress to an HTML site for page load speed reasons. After looking at a dozen packages, I decided "Tony" had what I needed.</p>
                        </div>
                        <div class="m-30px-b text-center">
                            <div class="avatar-220 m-auto-lr border-radius-50 m-20px-b">
                                <img src="{{asset('homepage/img/avatra-2.jpg')}}" title="" alt="">
                            </div>
                            <h6 class="font-2">Owner of Quote</h6>
                            <p class="font-2">I wanted to move from Wordpress to an HTML site for page load speed reasons. After looking at a dozen packages, I decided "Tony" had what I needed.</p>
                        </div>
                        <div class="m-30px-b text-center">
                            <div class="avatar-220 m-auto-lr border-radius-50 m-20px-b">
                                <img src="{{asset('homepage/img/avatra-3.jpg')}}" title="" alt="">
                            </div>
                            <h6 class="font-2">Owner of Quote</h6>
                            <p class="font-2">I wanted to move from Wordpress to an HTML site for page load speed reasons. After looking at a dozen packages, I decided "Tony" had what I needed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
    @if(Request::is('/'))
    <!-- Section -->
    <section class="section bg-no-repeat bg-right-center gray-bg" style="background-image: url(static/img/effect/map-bg-2.png);">
        <div class="container">
            <div class="row md-m-25px-b m-40px-b">
                <div class="col-lg-8">
                    <h3 class="h1 m-15px-b">Bạn cần giúp đỡ?</h3>
                    <p class="m-0px font-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis temporibus alias similique beatae error velit cum nesciunt ullam consequatur perferendis laboriosam numquam optio animi, quibusdam minima molestiae harum doloribus officiis!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 m-15px-tb">
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="#">
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="contact-name" type="text" name="name" placeholder="Rachel Roth" data-constraints="@Required" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="contact-email" type="email" name="email" placeholder="name@example.com" data-constraints="@Required" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input id="contact-subject" type="text" name="subject" placeholder="Subject" data-constraints="@Required" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="contact-message" name="message" rows="3" placeholder="Hi there, I would like to ..." data-constraints="@Required"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="m-btn m-btn-theme m-btn-radius w-100" type="submit" name="send">Gửi</button>
                                <div class="snackbars" id="form-output-global"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 m-15px-tb ml-auto">
                    <h5 class="m-20px-b body-color">Liên hệ ngay!</h5>
                    <div class="h1 theme-color"></div>
                    <div class="media align-items-center p-10px-tb">
                        <div class="icon-40 theme-bg-alt border-radius-50 theme-color">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="media-body p-15px-l">
                            <h6 class="h4 m-0px">+01 856 965 8595</h6>
                        </div>
                    </div>
                    <div class="media align-items-center p-10px-tb">
                        <div class="icon-40 theme-bg-alt border-radius-50 theme-color">
                            <i class="fas fa-map"></i>
                        </div>
                        <div class="media-body p-15px-l">
                            <h6 class="h4 m-0px">301 The Greenhouse, Custard Factory, LD, E2 8DY.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- End Section -->
    <footer class="medium-dark-bg footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 m-15px-tb">
                        <img src="{{asset('homepage/img/logo-light.svg')}}" title="" alt="">
                    </div>
                    <div class="col-6 col-lg-2 m-15px-tb">
                        <!-- <h5 class="white-color footer-title">
                            Useful
                        </h5> -->
                        <ul class="list-unstyled links-white footer-link-1">
                            <li>
                                <a href="/">Trang chủ</a>
                            </li>
                            <li>
                                <a href="#">Về chúng tôi</a>
                            </li>
                            <li>
                                <a href="#">Dịch vụ</a>
                            </li>
                            <li>
                                <a href="/contact">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 m-15px-tb">
                        <!-- <h5 class="white-color footer-title">
                            Services
                        </h5> -->
                        <ul class="list-unstyled links-white footer-link-1">
                            <li>
                                <a href="#">Lean</a>
                            </li>
                            <li>
                                <a href="#">6Sigma</a>
                            </li>
                            <li>
                                <a href="#">Triz</a>
                            </li>
                            <li>
                                <a href="#">Tài liệu</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 m-15px-tb">
                        <h5 class="white-color footer-title">
                            Nhận thông tin mới nhất
                        </h5>
                        <form>
                            <div class="d-flex flex-column flex-md-row m-5px-b">
                                <input type="email" class="form-control m-5px-r md-m-0px-r md-m-10px-b" placeholder="example@gmail.com">
                                <button class="m-btn m-btn-theme2nd m-btn-radius flex-shrink-0" type="submit">Đăng kí</button>
                            </div>
                            <!-- <p class="white-color-light m-0px font-small p-10px-t">New UI kits or big discounts. Never spam.</p> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom border-style top light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-right m-5px-tb">
                        <!-- <ul class="nav justify-content-center justify-content-md-start links-white font-small footer-link-1">
                            <li><a href="#">Privace &amp; Policy</a></li>
                            <li><a href="#">Faq's</a></li>
                            <li><a href="#">Get a Quote</a></li>
                        </ul> -->
                    </div>
                    <div class="col-md-6 text-center text-md-right m-5px-tb">
                        <p class="m-0px font-small white-color-light">© 2020 copyright all right reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- jquery -->
    <script src="{{asset('homepage/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('homepage/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <!-- end jquery -->
    <!-- appear -->
    <script src="{{asset('homepage/plugin/appear/jquery.appear.js')}}"></script>
    <!-- end appear -->
    <!--bootstrap-->
    <script src="{{asset('homepage/plugin/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('homepage/plugin/bootstrap/js/bootstrap.js')}}"></script>
    <!--end bootstrap-->
    <!-- End -->
    <!-- custom js -->
    <script src="{{asset('homepage/js/custom.js')}}"></script>
    <!-- end -->
</body>
<!-- end body -->

</html>

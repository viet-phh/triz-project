@extends('layouts.app')
@section('content')
<main>
    <!-- Home Banner -->
    <section class="effect-section theme-bg parallax" style="background-image: url(homepage/img/bg-1.jpg);">
        <div class="mask black-bg opacity-7"></div>
        <!-- <div class="effect-1 opacity-8">
            <img src="{{asset('homepage/img/effect/style-1.svg')}}" title="" alt="" class="svg_img theme-color">
        </div>
        <div class="effect-4 opacity-8">
            <img src="{{asset('homepage/img/effect/style-1.svg')}}" title="" alt="" class="svg_img theme-color">
        </div> -->
        <div class="container">
            <div class="row full-screen align-items-center p-100px-tb justify-content-center">
                <div class="col-lg-8 m-15px-tb text-center">
                    <h6 class="m-10px-b white-color">- Build like a Pro</h6>
                    <h1 class="display-4 m-10px-b white-color"><span class="font-w-300">It's time to amplify</span><br>your online business</h1>
                    <p class="font-2 white-color-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis aliquid fugiat consequatur perferendis. Expedita, dolore. Illo error pariatur eligendi repudiandae, unde est quasi magnam modi repellendus beatae possimus minus iusto.</p>
                    <div class="p-20px-t m-btn-wide">
                        <a class="m-btn m-btn-radius m-btn-t-white m-10px-r" href="#">
                            <span class="m-btn-inner-text">Sign Up</span>
                            <span class="m-btn-inner-icon arrow"></span>
                        </a>
                        <a class="m-btn m-btn-radius m-btn-white" href="#">
                            <span class="m-btn-inner-text">Free Try</span>
                            <span class="m-btn-inner-icon arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Banner -->
    <!-- Section -->
    <section class="section effect-section">
        <div class="effect-2">
            <img src="{{asset('homepage/img/effect/style-2.svg')}}" title="" alt="" class="svg_img gray-color">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 m-15px-tb text-center">
                    <img src="{{asset('homepage/img/about-1.png')}}" title="" alt="">
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <h3 class="h1">Lorem ipsum dolor sit amet consectetur</h3>
                    <p class="font-2 p-0px-t">Lorem ipsum dolor sit amet, consectetur adipiscing elitd do eiusmod tempor incididunt ut lore magna aliqua.</p>
                    <div class="border-left-2 border-color-theme p-25px-l m-35px-t">
                        <h6 class="font-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatem nisi quibusdam sapiente sequi esse dolor temporibus non repudiandae molestias</p>
                    </div>
                    <div class="p-20px-t">
                        <a class="m-btn m-btn-radius m-btn-theme" href="#">
                            <span class="m-btn-inner-text">Về chúng tôi</span>
                            <span class="m-btn-inner-icon arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
    <!-- Section -->
    <section class="section gray-bg">
        <div class="container">
            <div class="row md-m-25px-b m-40px-b justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="h1 m-15px-b p-15px-b after-50 theme-after">Các ứng dụng của chúng tôi</h3>
                    <p class="m-0px font-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptatibus culpa et, aliquam error accusamus soluta maiores eos pariatur explicabo nisi dolore provident sapiente deleniti maxime, ipsam aliquid tenetur minus.</p>
                </div>
            </div>
            <div class="portfolio-filter-01 m-15px-t m-20px-b md-m-10px-b">
                <ul class="filter justify-content-center nav">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".branding">Branding</li>
                    <li data-filter=".photoshop">Photoshop</li>
                    <li data-filter=".fashion">Fashion</li>
                    <li data-filter=".product">Product</li>
                </ul>
            </div>
            <div class="portfolio-content grid-gutter-lg grid-col-3 lightbox-gallery">
                <div class="grid-item product fashion">
                    <div class="portfolio-box-01">
                        <div class="portfolio-info">
                            <h5><a href="#">Momb ios App</a></h5>
                            <span>Broadcasting ios App</span>
                            <div class="btn-bar">
                                <a href="{{asset('homepage/img/portfolio-1.jpg')}}" class="m-link-white gallery-link">
                                    View
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-img">
                            <img src="{{asset('homepage/img/portfolio-1.jpg')}}" title="" alt="">
                        </div>
                    </div>
                </div> <!-- grid item -->
                <div class="grid-item branding fashion">
                    <div class="portfolio-box-01">
                        <div class="portfolio-info">
                            <h5><a href="#">Momb ios App</a></h5>
                            <span>Broadcasting ios App</span>
                            <div class="btn-bar">
                                <a href="{{asset('homepage/img/portfolio-2.jpg')}}" class="m-link-white gallery-link">
                                    View
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-img">
                            <img src="{{asset('homepage/img/portfolio-2.jpg')}}" title="" alt="">
                        </div>
                    </div>
                </div> <!-- grid item -->
                <div class="grid-item branding photoshop">
                    <div class="portfolio-box-01">
                        <div class="portfolio-info">
                            <h5><a href="#">Momb ios App</a></h5>
                            <span>Broadcasting ios App</span>
                            <div class="btn-bar">
                                <a href="{{asset('homepage/img/portfolio-3.jpg')}}" class="m-link-white gallery-link">
                                    View
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-img">
                            <img src="{{asset('homepage/img/portfolio-3.jpg')}}" title="" alt="">
                        </div>
                    </div>
                </div> <!-- grid item -->
                <div class="grid-item branding photoshop">
                    <div class="portfolio-box-01">
                        <div class="portfolio-info">
                            <h5><a href="#">Momb ios App</a></h5>
                            <span>Broadcasting ios App</span>
                            <div class="btn-bar">
                                <a href="{{asset('homepage/img/portfolio-4.jpg')}}" class="m-link-white gallery-link">
                                    View
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-img">
                            <img src="{{asset('homepage/img/portfolio-4.jpg')}}" title="" alt="">
                        </div>
                    </div>
                </div> <!-- grid item -->
                <div class="grid-item product photoshop">
                    <div class="portfolio-box-01">
                        <div class="portfolio-info">
                            <h5><a href="#">Momb ios App</a></h5>
                            <span>Broadcasting ios App</span>
                            <div class="btn-bar">
                                <a href="{{asset('homepage/img/portfolio-5.jpg')}}" class="m-link-white gallery-link">
                                    View
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-img">
                            <img src="{{asset('homepage/img/portfolio-5.jpg')}}" title="" alt="">
                        </div>
                    </div>
                </div> <!-- grid item -->
                <div class="grid-item product photoshop">
                    <div class="portfolio-box-01">
                        <div class="portfolio-info">
                            <h5><a href="#">Momb ios App</a></h5>
                            <span>Broadcasting ios App</span>
                            <div class="btn-bar">
                                <a href="{{asset('homepage/img/portfolio-6.jpg')}}" class="m-link-white gallery-link">
                                    View
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-img">
                            <img src="{{asset('homepage/img/portfolio-6.jpg')}}" title="" alt="">
                        </div>
                    </div>
                </div> <!-- grid item -->
            </div> <!-- portfolio-content -->
        </div>
    </section>
    <!-- End Section -->
    <!-- Section -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center md-m-25px-b m-40px-b">
                <div class="col-lg-8 text-center">
                    <h3 class="h1 m-15px-b">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h3>
                    <p class="m-0px font-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, impedit vero eum quas, dolor molestias itaque</p>
                </div>
            </div>
            <div class="tab-style-5">
                <div class="row justify-content-center m-35px-b">
                    <div class="col-lg-10">
                        <ul class="nav nav-fill nav-tabs">
                            <li class="nav-item">
                                <a href="#tab5__sec1" data-toggle="tab" class="nav-link active box-shadow-lg">
                                    <span>Lean</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab_5_sec2" data-toggle="tab" class="nav-link box-shadow-lg">
                                    <span>6Sigma</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab_5_sec3" data-toggle="tab" class="nav-link box-shadow-lg">
                                    <span>Triz</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <!-- start tab content -->
                    <div id="tab5__sec1" class="tab-pane fade in active show">
                        <div class="row align-items-center justify-content-around">
                            <div class="col-lg-5 m-15px-tb">
                                <label class="theme-bg-alt font-small font-w-500 p-20px-lr p-5px-tb theme-color border-radius-15 m-15px-b">Lean</label>
                                <h3 class="h1">Lorem ipsum dolor</h3>
                                <p class="font-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis officia illum aliquid repellat quod neque.</p>
                                <ul class="list-type-01 theme">
                                    <li>
                                        <h6>Built with customization</h6>
                                        <p>Get the ultimate tool and learn how to grow your audience and build an online business.</p>
                                    </li>
                                    <li>
                                        <h6>Quality design and thoughfully</h6>
                                        <p>Get the ultimate tool and learn how to grow your audience and build an online business.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 m-15px-tb">
                                <img class="max-width-120" src="{{asset('homepage/img/ai-3.png')}}" title="" alt="">
                            </div>
                            <div class="p-20px-t">
                                <a class="m-btn m-btn-radius m-btn-theme" href="#">
                                    <span class="m-btn-inner-text">Chi tiết</span>
                                    <span class="m-btn-inner-icon arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div id="tab_5_sec2" class="tab-pane fade in">
                    <div class="row align-items-center justify-content-around">
                            <div class="col-lg-5 m-15px-tb">
                                <label class="theme-bg-alt font-small font-w-500 p-20px-lr p-5px-tb theme-color border-radius-15 m-15px-b">6Sigma</label>
                                <h3 class="h1">Lorem ipsum dolor</h3>
                                <p class="font-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis officia illum aliquid repellat quod neque.</p>
                                <ul class="list-type-01 theme">
                                    <li>
                                        <h6>Built with customization</h6>
                                        <p>Get the ultimate tool and learn how to grow your audience and build an online business.</p>
                                    </li>
                                    <li>
                                        <h6>Quality design and thoughfully</h6>
                                        <p>Get the ultimate tool and learn how to grow your audience and build an online business.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 m-15px-tb">
                                <img class="max-width-120" src="{{asset('homepage/img/ai-3.png')}}" title="" alt="">
                            </div>
                            <div class="p-20px-t">
                                <a class="m-btn m-btn-radius m-btn-theme" href="#">
                                    <span class="m-btn-inner-text">Chi tiết</span>
                                    <span class="m-btn-inner-icon arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div id="tab_5_sec3" class="tab-pane fade in">
                    <div class="row align-items-center justify-content-around">
                            <div class="col-lg-5 m-15px-tb">
                                <label class="theme-bg-alt font-small font-w-500 p-20px-lr p-5px-tb theme-color border-radius-15 m-15px-b">Triz</label>
                                <h3 class="h1">Lorem ipsum dolor</h3>
                                <p class="font-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis officia illum aliquid repellat quod neque.</p>
                                <ul class="list-type-01 theme">
                                    <li>
                                        <h6>Built with customization</h6>
                                        <p>Get the ultimate tool and learn how to grow your audience and build an online business.</p>
                                    </li>
                                    <li>
                                        <h6>Quality design and thoughfully</h6>
                                        <p>Get the ultimate tool and learn how to grow your audience and build an online business.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 m-15px-tb">
                                <img class="max-width-120" src="{{asset('homepage/img/ai-3.png')}}" title="" alt="">
                            </div>
                            <div class="p-20px-t">
                                <a class="m-btn m-btn-radius m-btn-theme" href="#">
                                    <span class="m-btn-inner-text">Chi tiết</span>
                                    <span class="m-btn-inner-icon arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
    <!-- Section -->
    <section class="section gray-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 m-15px-tb">
                    <div class="p-45px-r lg-p-0px-r">
                        <h2 class="h1 m-15px-b">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                        <p class="font-2 m-20px-b">We are committed to customers success from start to finish. Our input helps make their solutions stand out from the crowd.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since.</p>
                        <div class="p-10px-t">
                            <a class="m-btn m-btn-radius m-btn-theme" href="#">
                                <span class="m-btn-inner-text">Xem thêm</span>
                                <span class="m-btn-inner-icon arrow"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-15px-tb ml-auto">
                    <img class="max-width-120 box-shadow-lg" src="{{asset('homepage/img/screen-1.png')}}" title="" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 m-15px-tb">
                    <img class="max-width-120 float-lg-right box-shadow-lg" src="{{asset('homepage/img/screen-2.jpg')}}" title="" alt="">
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="p-45px-l lg-p-0px-l">
                        <h3 class="h2 m-15px-b">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                        <p class="font-2">Quibusdam similique quam corporis sequi adipisicing elit lorem ipsum dolor sit amet, consectetur. Tempora, ab officiis ducimus commodi, id, voluptates suscipit quasi nisi. Qui, explicabo quod laborum alias vero aliquid.</p>
                        <div class="p-10px-t">
                            <a class="m-btn m-btn-radius m-btn-theme" href="#">
                                <span class="m-btn-inner-text">Xem thêm</span>
                                <span class="m-btn-inner-icon arrow"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section -->
    <section class="section gray-bg">
        <div class="container">
            <div class="row justify-content-center md-m-25px-b m-40px-b">
                <div class="col-lg-8 text-center">
                    <h3 class="h1 m-15px-b">Chủ đề nổi bật</h3>
                    <p class="m-0px font-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dignissimos, facilis soluta voluptatum quas sapiente distinctio sit, repudiandae itaque ipsum necessitatibus odio magnam blanditiis recusandae sint iure quibusdam voluptatem vitae.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 m-15px-tb">
                    <div class="card blog-grid-1">
                        <div class="blog-img">
                            <a href="#">
                                <img src="{{asset('homepage/img/blog-1.jpg')}}" title="" alt="">
                            </a>
                            <span class="date">25 <span>April</span></span>
                        </div>
                        <div class="card-body blog-info">
                            <h5>
                                <a href="#">I like the body. I like to design everything to do with the body.</a>
                            </h5>
                            <p class="m-0px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                            <div class="btn-bar">
                                <a class="m-link-theme" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-15px-tb">
                    <div class="card blog-grid-1">
                        <div class="blog-img">
                            <a href="#">
                                <img src="{{asset('homepage/img/blog-2.jpg')}}" title="" alt="">
                            </a>
                            <span class="date">25 <span>April</span></span>
                        </div>
                        <div class="card-body blog-info">
                            <h5>
                                <a href="#">Unlimited power and customization possibilities.</a>
                            </h5>
                            <p class="m-0px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                            <div class="btn-bar">
                                <a class="m-link-theme" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-15px-tb">
                    <div class="card blog-grid-1">
                        <div class="blog-img">
                            <a href="#">
                                <img src="{{asset('homepage/img/blog-3.jpg')}}" title="" alt="">
                            </a>
                            <span class="date">25 <span>April</span></span>
                        </div>
                        <div class="card-body blog-info">
                            <h5>
                                <a href="#">Redesigned, how you build landing page!</a>
                            </h5>
                            <p class="m-0px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                            <div class="btn-bar">
                                <a class="m-link-theme" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

</main>
@endsection

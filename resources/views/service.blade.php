@extends('layouts.app')
@section('content')
<!-- Section -->
<section class="section">
    <div class="container">
        <div class="row md-m-25px-b m-45px-b justify-content-center text-center">
            <div class="col-lg-8">
                <h3 class="h1 m-20px-b p-20px-b theme-after after-50px">Giải pháp tốt nhất cho bạn</h3>
                <p class="m-0px font-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel delectus quaerat temporibus accusamus totam praesentium</p>
            </div>
        </div>
        <div class="tab-style-4">
            <ul class="nav nav-fill nav-tabs">
                <li class="nav-item">
                    <a href="#tab3_sec1" data-toggle="tab" class="active">
                        <div class="icon"><i class="icon-chat"></i></div>
                        <span>Discussion</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tab3_sec2" data-toggle="tab">
                        <div class="icon"><i class="icon-tools"></i></div>
                        <span>Creative Concept</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tab3_sec3" data-toggle="tab">
                        <div class="icon"><i class="icon-megaphone"></i></div>
                        <span>Production</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab3_sec1" class="tab-pane fade in active show">
                    <div class="row align-items-center justify-content-between p-25px-t md-p-15px-t">
                        <div class="col-lg-6 text-center">
                            <img src="{{asset('homepage/img/ai-4.svg')}}" title="" alt="">
                        </div>
                        <div class="col-lg-5">
                            <h2 class="h2 m-15px-b">Welcome to Raino Digital Marketing</h2>
                            <p class="m-25px-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                            <div class="media m-30px-b">
                                <div class="icon-60 dots-icon border-radius-5 border-color-theme border-all-1 theme-color">
                                    <i class="icon-desktop"></i>
                                    <span class="dots"><i class="dot dot1"></i><i class="dot dot2"></i><i class="dot dot3"></i></span>
                                </div>
                                <div class="media-body p-20px-l">
                                    <h6>Web Development</h6>
                                    <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="icon-60 dots-icon border-radius-5 border-color-theme border-all-1 theme-color">
                                    <i class="icon-tools"></i>
                                    <span class="dots"><i class="dot dot1"></i><i class="dot dot2"></i><i class="dot dot3"></i></span>
                                </div>
                                <div class="media-body p-20px-l">
                                    <h6>Logo & Identity</h6>
                                    <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab3_sec2" class="tab-pane fade in">
                    <div class="row align-items-center justify-content-between p-25px-t md-p-15px-t">
                        <div class="col-lg-5">
                            <h2 class="h2 m-15px-b">Welcome to Raino Digital Marketing</h2>
                            <p class="m-25px-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                            <div class="media m-30px-b">
                                <div class="icon-60 dots-icon border-radius-5 border-color-theme border-all-1 theme-color">
                                    <i class="icon-desktop"></i>
                                    <span class="dots"><i class="dot dot1"></i><i class="dot dot2"></i><i class="dot dot3"></i></span>
                                </div>
                                <div class="media-body p-20px-l">
                                    <h6>Web Development</h6>
                                    <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="icon-60 dots-icon border-radius-5 border-color-theme border-all-1 theme-color">
                                    <i class="icon-tools"></i>
                                    <span class="dots"><i class="dot dot1"></i><i class="dot dot2"></i><i class="dot dot3"></i></span>
                                </div>
                                <div class="media-body p-20px-l">
                                    <h6>Logo & Identity</h6>
                                    <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="{{asset('homepage/img/ai-4.svg')}}" title="" alt="">
                        </div>
                    </div>
                </div>
                <div id="tab3_sec3" class="tab-pane fade in">
                    <div class="row align-items-center justify-content-between p-25px-t md-p-15px-t">
                        <div class="col-lg-6 text-center">
                            <img src="{{asset('homepage/img/ai-4.svg')}}" title="" alt="">
                        </div>
                        <div class="col-lg-5">
                            <h2 class="h2 m-15px-b">Welcome to Raino Digital Marketing</h2>
                            <p class="m-25px-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                            <div class="media m-30px-b">
                                <div class="icon-60 dots-icon border-radius-5 border-color-theme border-all-1 theme-color">
                                    <i class="icon-desktop"></i>
                                    <span class="dots"><i class="dot dot1"></i><i class="dot dot2"></i><i class="dot dot3"></i></span>
                                </div>
                                <div class="media-body p-20px-l">
                                    <h6>Web Development</h6>
                                    <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="icon-60 dots-icon border-radius-5 border-color-theme border-all-1 theme-color">
                                    <i class="icon-tools"></i>
                                    <span class="dots"><i class="dot dot1"></i><i class="dot dot2"></i><i class="dot dot3"></i></span>
                                </div>
                                <div class="media-body p-20px-l">
                                    <h6>Logo & Identity</h6>
                                    <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <h3 class="h1 m-15px-b p-15px-b after-50 theme2nd-after">Sản phẩm của chúng tôi</h3>
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
@endsection

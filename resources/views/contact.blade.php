@extends('layouts.app')
@section('content')
<main>
    <section class="p-40px-tb gray-bg"></section>
    <!-- Section -->
    <section class="section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-15px-tb">
                    <div class="box-shadow min-h-350px p-65px-tb p-40px-lr hover-top white-bg">
                        <div class="m-30px-b only-icon-70 theme-color">
                            <i class="icon-map"></i>
                        </div>
                        <h5 class="m-15px-b">Địa chỉ liên hệ</h5>
                        <p class="m-0px">301 The Greenhouse, Custard Factory, LD, E2 8DY.</p>
                    </div>
                </div>
                <div class="col-lg-4 m-15px-tb">
                    <div class="box-shadow min-h-350px p-65px-tb p-40px-lr hover-top white-bg">
                        <div class="m-30px-b only-icon-70 theme-color">
                            <i class="icon-chat"></i>
                        </div>
                        <h5 class="m-15px-b">Liên hệ trực tiếp qua</h5>
                        <p class="m-0px">Phone: 1-800-222-000</p>
                        <p class="m-0px">Phone: 1-800-222-000</p>
                    </div>
                </div>
                <div class="col-lg-4 m-15px-tb">
                    <div class="box-shadow min-h-350px p-65px-tb p-40px-lr hover-top white-bg">
                        <div class="m-30px-b only-icon-70 theme-color">
                            <i class="icon-envelope"></i>
                        </div>
                        <h5 class="m-15px-b">Email cho chúng tôi</h5>
                        <p class="m-0px links-dark">
                            <a href="mailto:info@domain.com">info@gmail.com</a><br>
                            <a href="mailto:support@domain.com">support@gmail.com</a><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Banner -->
    <!-- Section -->
    <section class="section">
        <div class="container">
            <div class="row md-m-25px-b m-40px-b justify-content-center">
                <div class="col-lg-7 text-center">
                    <h3 class="h1 m-15px-b p-15px-b after-50 theme-after">Gửi yêu cầu của bạn!</h3>
                    <p class="m-0px font-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-8">
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="static/plugin/mail/bat/rd-mailform.php">
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="contact-name">Họ và tên</label>
                                    <input id="contact-name" type="text" name="name" placeholder="Rachel Roth" data-constraints="@Required" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="contact-email">Địa chỉ Email</label>
                                    <input id="contact-email" type="email" name="email" placeholder="name@example.com" data-constraints="@Required" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="contact-company">Nơi học tập/làm việc (optional)</label>
                                    <input type="text" name="contact-company" class="form-control" id="contact-company">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="contact-phone">Số điện thoại (optional)</label>
                                    <input type="tel" name="contact-phone" class="form-control" id="contact-phone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-message">Tin nhắn</label>
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
            </div>
        </div>
    </section>
    <!-- End Section -->
    <!-- Section -->
    <div class="map-sm">
        <div class="embed-responsive embed-responsive-16by9 h-90">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.9231691877226!2d107.57100271529974!3d16.47942758862866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a6d4db373851%3A0xa9fb611ae3cb69ca!2zMjgsIDQgVHLhuqduIFF1w70gQ8OhcCwgVGh14bqtbiBUaMOgbmgsIFRow6BuaCBwaOG7kSBIdeG6vywgVGjhu6thIFRoacOqbiBIdeG6vywgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1599997058301!5m2!1sen!2s" allowfullscreen=""></iframe>
        </div>
    </div>
</main>

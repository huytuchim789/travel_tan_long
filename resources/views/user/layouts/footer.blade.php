<footer class="bg-dark type-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <h3><span style="font-weight: normal;">Hanoi</span><b>Tour</b></h3>
                    <br>
                    <div class="f_text color-grey-7">Traveller ’s BD là một nền tảng mà khách du lịch có thể dễ dàng tìm thấy chuyến đi đến đó mà không gặp bất kỳ khó khăn nào. Tại đây họ có thể tìm thấy rất nhiều địa điểm du lịch được nhiều đại lý đăng tải.</div>
                    <div class="footer-share">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-pinterest"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
                <div class="footer-block">
                    <h6>Địa điểm mới</h6>
                    <div class="f_news clearfix">
                        <a class="f_news-img black-hover" href="#">
                            <img class="img-responsive" src="{{ asset('user/img/home_6/news_1.jpg') }}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="f_news-content">
                            <a class="f_news-tilte color-white link-red" href="#">Hà Nội</a>
                            <span class="date-f">Tháng 2 16, 2022</span>
                            <a href="#" class="r-more">Xem thêm</a>
                        </div>
                    </div>
                    <div class="f_news clearfix">
                        <a class="f_news-img black-hover" href="#">
                            <img class="img-responsive" src="{{ asset('user/img/home_6/news_2.jpg') }}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="f_news-content">
                            <a class="f_news-tilte color-white link-red" href="#">Đà Nẵng</a>
                            <span class="date-f">Tháng 3 18, 2022</span>
                            <a href="#" class="r-more">Xem thêm</a>
                        </div>
                    </div>
                    <div class="f_news clearfix">
                        <a class="f_news-img black-hover" href="#">
                            <img class="img-responsive" src="{{ asset('user/img/home_6/news_1.jpg') }}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="f_news-content">
                            <a class="f_news-tilte color-white link-red" href="#">Sài Gòn</a>
                            <span class="date-f">Tháng 4 22, 2022</span>
                            <a href="#" class="r-more">Xem thêm</a>
                        </div>
                    </div>                          
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <h6>Tags:</h6>
                    <a href="#" class="tags-b">Máy Bay</a>
                    <a href="#" class="tags-b">Du lịch</a>
                    <a href="#" class="tags-b">sale</a>
                    <a href="#" class="tags-b">Du Thuyền</a>
                    <a href="#" class="tags-b">Ô tô</a>
                    <a href="#" class="tags-b">Khách sạn</a>
                    <a href="#" class="tags-b">Tours</a>
                    <a href="#" class="tags-b">Đặt vé</a>
                    <a href="#" class="tags-b">Quốc gia</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <h6>Thông tin liên hệ</h6>
                    <div class="contact-info">
                        <div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span>Email: sales@hanoitourist.vn</span></div>
                        <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a href="tel:93123456789">01521468423</a></div>
                        <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="mailto:">tanlong01@gmail.com</a></div>                  
                        <div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a href="#">Website: http://hanoitourist.vn</a></div>                  

                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="footer-link bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <span>&copy; 2022 All rights reserved. Tân Long</span>
                    </div>
                    <ul>
                        <li><a class="link-aqua" href="{{ route('privacy') }}">Chính sách </a></li>
                        <li><a class="link-aqua" href="{{ route('about') }}">Về chúng tôi</a></li>
                        <li><a class="link-aqua" href="{{ route('blog') }}">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>                                                                                                                    
<script src="{{ asset('user/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('user/js/idangerous.swiper.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.viewportchecker.min.js') }}"></script>
<script src="{{ asset('user/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('user/js/all.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>

@section('footer')
    @show
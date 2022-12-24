@include('web/layouts/head')
@include('web/layouts/header')
<body>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>About Us</h4>
                    <div class="breadcrumb__links">
                        <a href="{{url('/home')}}">Home</a>
                        <span>About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about__pic">
                    <img src="{{asset('img/about-banner.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Nguồn Gốc</h4>
                    <p class="text-justify">Nhay' Coffee được thành lập vào năm 2020, bắt nguồn từ tình yêu dành cho  Việt Nam, cà phê và cộng đồng nơi đây.
                        Ngay từ  ngày đầu tiên, mục tiêu của chúng tôi là  phục vụ và đóng góp cho sự phát triển của Việt Nam.
                        Phát triển cộng đồng bằng cách tăng cường kết nối và  gắn bó giữa mọi người.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Dịch Vụ</h4>
                    <p class="text-justify">Nhay' Coffee là không gian của chúng tôi nên mọi thứ ở đây đều thuận tiện cho chúng tôi.
                        Đừng giữ trong lòng, hãy nói ra điều bạn mong muốn với Nhay' Coffee để cùng nhau trở nên tuyệt vời hơn.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Cơ Hội</h4>
                    <p class="text-justify">Là điểm hội tụ của cộng đồng,
                        Nhay' Coffee luôn tìm kiếm những thành viên mới
                        với mong muốn không ngừng hoàn thiện một không gian dành cho tất cả mọi người.
                        Chúng mình luôn chào đón bạn trở thành một phần của Nhay' Coffee
                        để cùng nhau siết chặt thêm những kết nối và sự gắn bó giữa người với người.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="testimonial__text">
                    <span class="icon_quotations"></span>
                    <p>“Trong màu đen của cà phê tinh ý sẽ thấy được nét sóng sánh của màu nâu đỏ, sau vị đắng ngắm lòng là dư vị ngòn ngọt lạ kì của vị hương.
                        Nhìn đời qua lăng kính phân kì sẽ thấy ngỡ ngàng sự hòa quyện của một tập hợp bao nhiêu là màu sắc, thoang thoảng trong kí ức bao trùm cả không gian những mùi vị của yêu thương. ”
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__pic">
                            <img src="{{asset('img/NHAY COFFEE.jpg')}}" alt="">
                        </div>
                        <div class="testimonial__author__text">
                            <h5>Nhay' Coffee</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="testimonial__pic set-bg" data-setbg="{{asset('img/about/testimonial-pic.jpg')}}"></div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Counter Section Begin -->
<section class="counter spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">102</h2>
                    </div>
                    <span>Khách Hàng<br /> Của Chúng Tôi</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">30</h2>
                    </div>
                    <span>Tổng Số <br />Danh Mục</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">102</h2>
                    </div>
                    <span>Tại <br />Quốc Gia</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">98</h2>
                        <strong>%</strong>
                    </div>
                    <span>Khách Hàng <br />Hài Lòng</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->

<!-- Team Section Begin -->
<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Đội Của Chúng Tôi</span>
                    <h2>Hãy Gặp Gỡ Đội Của Chúng Tôi</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img  src="{{asset('img/CEO.jpg')}}" alt="" style="width: 270px; height: 360px;">
                    <h4>Nguyễn Nam Phong</h4>
                    <span>C.E.O </span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="{{asset('img/Manager.jpg')}}" alt="" style="width: 270px; height: 360px;">
                    <h4> Trịnh Văn Đức</h4>
                    <span>Manager</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Client Section Begin -->
<section class="clients spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Đối Tác</span>
                    <h2>Happy Clients</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="{{asset('img/clients/client-1.png')}}" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="{{asset('img/clients/client-2.png')}}" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="{{asset('img/clients/client-3.png')}}" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="{{asset('img/clients/client-4.png')}}" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="{{asset('img/clients/client-5.png')}}" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="{{asset('img/clients/client-6.png')}}" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="{{asset('img/clients/client-7.png')}}" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="{{asset('img/clients/client-8.png')}}" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- Client Section End -->
</body>
@include('web/layouts/footer')

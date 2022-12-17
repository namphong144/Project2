@include('web/layouts/head')
@include('web/layouts/header')

<body>

<!-- Map Begin -->
<div class="map">
    <iframe src="https://www.google.com/maps/place/43+P.+V%E1%BB%8Dng+H%C3%A0,+L%C3%BD+Th%C3%A1i+T%E1%BB%95,+Ho%C3%A0n+Ki%E1%BA%BFm,+H%C3%A0+N%E1%BB%99i,+Vietnam/@21.0323226,105.8547244,17z/data=!4m13!1m7!3m6!1s0x3135abc1a0fbed9b:0xa46eab55c1e186ff!2zNDMgUC4gVuG7jW5nIEjDoCwgTMO9IFRow6FpIFThu5UsIEhvw6BuIEtp4bq_bSwgSMOgIE7hu5lpLCBWaWV0bmFt!3b1!8m2!3d21.0323176!4d105.8569184!3m4!1s0x3135abc1a0fbed9b:0xa46eab55c1e186ff!8m2!3d21.0323176!4d105.8569184?hl=en" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <span>THÔNG TIN</span>
                        <h2>Liên hệ chúng tôi</h2>
                        <p>Nhay' - Cà Phê Đóng Chai Buôn Mê Thuột</p>
                    </div>
                    <ul>
                        <li>
                            <h4>Hà Nội</h4>
                            <p>43 Vọng Hà, P. Lý Thái Tổ, Hoàn Kiếm, Hà Nội <br/>035 334 0494</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

</body>
@include('web/layouts/footer')

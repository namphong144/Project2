@include('web/layouts/head')
@include('web/layouts/header')

<body>

<!-- Map Begin -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0092074565155!2d105.85472971485453!3d21.03231758599648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abc1a0fbed9b%3A0xa46eab55c1e186ff!2zNDMgUC4gVuG7jW5nIEjDoCwgTMO9IFRow6FpIFThu5UsIEhvw6BuIEtp4bq_bSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1671433328705!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

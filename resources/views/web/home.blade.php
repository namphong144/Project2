@include('web/layouts/head')
@include('web/layouts/header')

<body>
<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
        </div>
    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="{{asset('img/icon/search.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('img/icon/heart.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('img/icon/cart.png')}}" alt=""> <span>0</span></a>
        <div class="price">0 VNĐ</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>COFFEE BY VIETNAM</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="img/hero/Hero2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>NHAY COFFEE</h6>
                            <h2>A CUP OF COFFEE A DAY KEEP YOUR STRESS AWAY</h2>
                            <p>SINCE 2022</p>
                            <a href="{{url('/home/shop')}}" class="primary-btn">Mua Ngay<span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="https://www.facebook.com/nhaycoffee/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/nhaycoffee/" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="img/hero/Hero1.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>ENJOY AND JOY</h6>
                            <h2>NHAY COFFEE</h2>
                            <p>SINCE 2022</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
<br>
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter=".cf-bottle">Cà phê mới</li>
{{--                    <li data-filter=".cf-powder">Cà phê bột</li>--}}
{{--                    <li data-filter=".hot-sales">Bán chạy</li>--}}
                </ul>
            </div>
        </div>
        <div class="row product__filter ">
            @forelse($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix cf-bottle">
                    <div class="product__item">
                        <a href="/home/detail/{{$product->id}}">
                        <div class="product__item__pic set-bg" data-setbg="{{$product->image}}">
                            <span class="label">New</span>
                        </div>
                        <div class="product__item__text">
                            <h6>{{ $product->name }}</h6>
                            <h5>{{number_format($product->price, 0, '', ',')}}{{'đ'}}</h5>
                        </div>
                        </a>
                    </div>
                </div>
            @empty
                <tr>
                    <td>Không có dữ liệu</td>
                </tr>
            @endforelse
        </div>
    </div>
</section>
<!-- Product Section End -->


<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Instagram</h2>
                <div class="embedsocial-hashtag" data-ref="1a77254e37fbd005ca157a4a843ac56ddeb361bc"> <a class="feed-powered-by-es feed-powered-by-es-feed-new" href="https://embedsocial.com/social-media-aggregator/" target="_blank" title="Widget by EmbedSocial"> Widget by EmbedSocial<span>→</span> </a> </div> <script> (function(d, s, id) { var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js); }(document, "script", "EmbedSocialHashtagScript")); </script>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>Fashion New Trends</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('img/icon/calendar.png')}}}" alt=""> 16 February 2020</span>
                        <h5>What Curling Irons Are The Best Ones</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('img/icon/calendar.png')}}" alt=""> 21 February 2020</span>
                        <h5>Eternity Bands Do Last Forever</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="{{asset('img/icon/calendar.png')}}" alt=""> 28 February 2020</span>
                        <h5>The Health Benefits Of Sunglasses</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->


</body>
@include('web/layouts/footer')





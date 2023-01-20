@include('web/layouts/head')
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>COFFEE BY VIETNAM</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">

                            <a href="">
                                @foreach($users as $customer)
                                    @if($customer -> isAdmin == 0) {{ $customer->name }} @endif
                                @endforeach
                            </a>
                            <button type="button" class="btn btn-outline-light btn-sm" onclick="myFunction()">Đăng xuất</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{url('/home')}}"><img style="height: 170px; width: 170px" src="{{asset('img/NHAY COFFEE.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{url('/home')}}">Trang chủ</a></li>
                        <li><a href="{{url('/home/shop')}}">Sản phẩm</a>
                            <ul class="dropdown">
                                <li><a href="#">Cà phê bột</a>
                                    <ul>
                                        <li class="dropdown-item"><a href="#">Cà phê Chồn</a></li>
                                        <li class="dropdown-item"><a href="#">Cà phê số 2</a></li>
                                    </ul>
                                </li>


                                <li><a href="#">Cà phê đóng chai </a></li>
                            </ul>
                        </li>
                        <li><a href="#">Trang</a>
                            <ul class="dropdown">
                                <li><a href="{{url('/home/about-blog')}}">Giới Thiệu</a></li>
                                <li><a href="#">Shop Details</a></li>
                                <li><a href="{{url('/home/cart')}}">Giỏ Hàng</a></li>
                                <li><a href="{{url('/home/check-out')}}">Thanh Toán</a></li>
                                <li><a href="#">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/home/blog')}}">Bài viết</a></li>
                        <li><a href="{{url('/home/contact')}}">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{asset('img/icon/search.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/icon/heart.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/icon/cart.png')}}" alt=""> <span>{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span></a>
                    <div class="price">{{number_format(\Gloudemans\Shoppingcart\Facades\Cart::total(), 0, '', ',')}} VNĐ</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<body>
<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="{{asset('/login')}}">Đăng nhập/Đăng ký</a>
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
<script>

    function myFunction() {
        if (confirm("Bạn có muốn đăng xuất?")) {
            location.href = '{{'/login'}}';
        }
    }
</script>

</body>
@include('web/layouts/footer')






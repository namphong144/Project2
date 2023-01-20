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
                            <a href="{{asset('/login')}}">Đăng nhập/Đăng ký</a>
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
<!-- Header Section End -->

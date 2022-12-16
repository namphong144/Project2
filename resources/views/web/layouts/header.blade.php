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
                    <a href="resources/views/web/home.blade.php"><img style="height: 170px; width: 170px" src="{{asset('img/NHAY COFFEE.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="resources/views/web/home.blade.php">Trang chủ</a></li>
                        <li><a href="#">Sản phẩm</a>
                            <ul class="dropdown">
                                <li><a href="#">Cà phê bột</a>
                                    <ul>
                                        <li class="dropdown-item"><a href="#">Cà phê Chồn</a></li>
                                        <li class="dropdown-item"><a href="#">Cà phê số 2</a></li>
                                    </ul>
                                </li>


                                <li><a href="#">Shop Details</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Trang</a>
                            <ul class="dropdown">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Shop Details</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#">Check Out</a></li>
                                <li><a href="#">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Bài viết</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{asset('img/icon/search.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/icon/heart.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/icon/cart.png')}}" alt=""> <span>0</span></a>
                    <div class="price">0 VNĐ</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->

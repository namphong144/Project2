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
{{--                        <div class="header__top__links">--}}
{{--                            <a href="#">Sign in</a>--}}
{{--                            --}}
{{--                            <a href="#">FAQs</a>--}}
{{--                        </div>--}}
                        <div class="header__top__hover">
                            <div class="dropdown">
                                <li style="  list-style-type: none;" class="nav-item account" data-toggle="dropdown">
                                    <a class="nav-link text-light text-uppercase" href="#" style="color: white;display:inline-block">
                                        @if (Auth::check())
                                            @auth
                                                <a class="nav-link text-light text-uppercase" href="#"
                                                   style="display:inline-block">{{Auth::user()->name}}</a>
                                            @else
                                            @endauth
                                        @else
                                            <a class="nav-link text-light text-uppercase" href="#" style="display:inline-block">Tài
                                                khoản</a>
                                        @endif
                                    </a>
                                </li>
                                <ul class="dropdown" style="margin-left: 20px; margin-top: 10px">
                                @if (Auth::check())
                                    @auth
                                        <div>
                                            <li><a class="dropdown-item text-left" style="font-size: 16px" href="">Thông tin tài khoản</a></li>

                                            <li><a class="dropdown-item text-left" style="font-size: 16px" href="{{ url('/logout') }}">Đăng
                                                    xuất</a></li>
                                        </div>
                                    @else
                                    @endauth
                                @else
                                    <div>
                                        <li><a class="dropdown-item text-left " style="font-size: 16px" href="{{ url('/register') }}">Đăng
                                            ký</a></li>
                                        <li><a class="dropdown-item text-left " style="font-size: 16px" href="{{ url('/login') }}">Đăng
                                            nhập</a></li>
                                    </div>
                                @endif
                                </ul>


                            </div>
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
            <div class="col-lg-6 col-md-6 " >
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
                                <?php
                                    $shipping_id = \Illuminate\Support\Facades\Session::get('shipping_id');
                                    if(\Illuminate\Support\Facades\Auth::check()  && $shipping_id==NULL){
                                        ?>
                                <li><a href="{{url('/home/check-out')}}">Thanh Toán</a></li>
                                <?php
                                    }elseif (\Illuminate\Support\Facades\Auth::check() && $shipping_id!=NULL){
                                        ?>
                                <li><a href="{{url('/payment')}}">Thanh Toán</a></li>
                                <?php

                                }else{
                                        ?>
                                <li><a href="{{url('/login')}}">Thanh Toán</a></li>

                                    <?php

                                }
                                ?>

                            </ul>
                        </li>
                        <li><a href="{{url('/home/blog')}}">Bài viết</a></li>
                        <li><a href="{{url('/home/contact')}}">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option row">
                    <div class="shop__sidebar__search col-md-7" style="margin-top: -5px">
                        <form action="#">
                            <input name="kw" class="form-control" type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
{{--                    <a href="#" class="search-switch"><img src="{{asset('img/icon/search.png')}}" alt=""></a>--}}
{{--                    <a href="#"><img src="{{asset('img/icon/heart.png')}}" alt=""></a>--}}
                    <a href="{{url('/home/cart')}}"><img src="{{asset('img/icon/cart.png')}}" alt=""> <span>{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span></a>
                    <div class="price">{{\Gloudemans\Shoppingcart\Facades\Cart::total(0, ',', '.').' '.'đ'}}</div>

                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
    <script>

        function myFunction() {
            if (confirm("Bạn có muốn đăng xuất?")) {
                location.href = '{{'/login'}}';
            }
        }
    </script>
</header>
<!-- Header Section End -->

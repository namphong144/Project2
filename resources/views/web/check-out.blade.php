@include('web/layouts/head')
@include('web/layouts/header')
<body>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Thanh Toán</h4>
                    <div class="breadcrumb__links">
                        <a href="{{url('/home')}}">Trang Chủ</a>
                        <a href="{{url('/home/shop')}}">Sản Phẩm</a>
                        <span>Thanh Toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form action="#">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
{{--                        <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click--}}
{{--                                here</a> to enter your code</h6>--}}
                        <h6 class="checkout__title">CHI TIẾT THANH TOÁN</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Họ và tên đệm<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Tên<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Quốc Gia<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>Địa Chỉ<span>*</span></p>
                            <input type="text" placeholder="Số nhà" class="checkout__input__add">
                            <input type="text" placeholder="Đường">
                        </div>
                        <div class="checkout__input">
                            <p>Quận/Huyện<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>Tỉnh/Thành Phố<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>Postcode / ZIP<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p> Số điện thoại <span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
{{--                        <div class="checkout__input__checkbox">--}}
{{--                            <label for="acc">--}}
{{--                                Create an account?--}}
{{--                                <input type="checkbox" id="acc">--}}
{{--                                <span class="checkmark"></span>--}}
{{--                            </label>--}}
{{--                            <p>Create an account by entering the information below. If you are a returning customer--}}
{{--                                please login at the top of the page</p>--}}
{{--                        </div>--}}
{{--                        <div class="checkout__input">--}}
{{--                            <p>Account Password<span>*</span></p>--}}
{{--                            <input type="text">--}}
{{--                        </div>--}}
{{--                        <div class="checkout__input__checkbox">--}}
{{--                            <label for="diff-acc">--}}
{{--                                Note about your order, e.g, special noe for delivery--}}
{{--                                <input type="checkbox" id="diff-acc">--}}
{{--                                <span class="checkmark"></span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
                        <div class="checkout__input">
                            <p>Ghi chú<span>*</span></p>
                            <input type="text"
                                   placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt cho giao hàng.">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4 class="order__title">ĐƠN HÀNG CỦA BẠN</h4>
                            <div class="checkout__order__products"> Sản Phẩm <span> Đơn Giá </span></div>
                            <ul class="checkout__total__products">
                                <li>01. Vanilla salted caramel <span>$ 300.0</span></li>
                                <li>02. German chocolate <span>$ 170.0</span></li>
                                <li>03. Sweet autumn <span>$ 170.0</span></li>
                                <li>04. Cluten free mini dozen <span>$ 110.0</span></li>
                            </ul>
                            <ul class="checkout__total__all">
                                <li>Subtotal <span>$750.99</span></li>
                                <li>Total <span>$750.99</span></li>
                            </ul>
{{--                            <div class="checkout__input__checkbox">--}}
{{--                                <label for="acc-or">--}}
{{--                                    Create an account?--}}
{{--                                    <input type="checkbox" id="acc-or">--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="checkout__input__checkbox">--}}
{{--                                <label for="payment">--}}
{{--                                    Check Payment--}}
{{--                                    <input type="checkbox" id="payment">--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="checkout__input__checkbox">--}}
{{--                                <label for="paypal">--}}
{{--                                    Paypal--}}
{{--                                    <input type="checkbox" id="paypal">--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
                            <button type="submit" class="site-btn">Thanh Toán</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
</body>
@include('web/layouts/footer')

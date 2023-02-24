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
            <form  action="{{url('/save-checkout-customer')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
{{--                        <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click--}}
{{--                                here</a> to enter your code</h6>--}}
                        <h6 class="checkout__title">Điền thông tin gửi hàng</h6>
                        <div class="checkout__input">
                            <p>Họ và tên<span>*</span></p>
                            <input type="text" name="shipping_name" class="checkout__input__add">

                        </div>
                        <div class="checkout__input">
                            <p>Địa Chỉ<span>*</span></p>
                            <input type="text" name="shipping_address" class="checkout__input__add">

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p> Số điện thoại <span>*</span></p>
                                    <input type="number" name="shipping_number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Ghi chú<span>*</span></p>
                            <input type="text" name="notes"
                                   placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt cho giao hàng.">
                        </div>
                        <input type="submit" value="Gửi" name="send_order" class="btn btn-dark">

                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

</body>
@include('web/layouts/footer')

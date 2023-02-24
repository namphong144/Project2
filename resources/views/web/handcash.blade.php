@include('web/layouts/head')
@include('web/layouts/header')
<body>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Giỏ Hàng</h4>
                    <div class="breadcrumb__links">
                        <a href="{{url('/home')}}">Trang Chủ</a>
                        <a href="{{url('/home/shop')}}">Sản Phẩm</a>
                        <span>Giỏ Hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="col">
            <div class="row-lg-8 text-center">
                <h1 class="checkout__title text-success">Đặt hàng thành công !</h1>
                <h3>Cảm ơn bạn đặt hàng và mua sản phẩm của Nháy Coffee, chúng mình sẽ liên hệ với bạn sớm nhất!</h3>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
</body>
@include('web/layouts/footer')

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
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                        <tr>
                            <th>Sản Phẩm</th>
                            <th>Số Lượng</th>
                            <th>Đơn Giá</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="product__cart__item">
                                <div class="product__cart__item__pic">
                                    <img src="img/shopping-cart/cart-1.jpg" alt="">
                                </div>
                                <div class="product__cart__item__text">
                                    <h6>T-shirt Contrast Pocket</h6>
                                    <h5>$98.49</h5>
                                </div>
                            </td>
                            <td class="quantity__item">
                                <div class="quantity">
                                    <div class="pro-qty-2">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                            </td>
                            <td class="cart__price">$ 30.00</td>
                            <td class="cart__close"><i class="fa fa-close"></i></td>
                        </tr>
                        <tr>
                            <td class="product__cart__item">
                                <div class="product__cart__item__pic">
                                    <img src="img/shopping-cart/cart-2.jpg" alt="">
                                </div>
                                <div class="product__cart__item__text">
                                    <h6>Diagonal Textured Cap</h6>
                                    <h5>$98.49</h5>
                                </div>
                            </td>
                            <td class="quantity__item">
                                <div class="quantity">
                                    <div class="pro-qty-2">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                            </td>
                            <td class="cart__price">$ 32.50</td>
                            <td class="cart__close"><i class="fa fa-close"></i></td>
                        </tr>
                        <tr>
                            <td class="product__cart__item">
                                <div class="product__cart__item__pic">
                                    <img src="img/shopping-cart/cart-3.jpg" alt="">
                                </div>
                                <div class="product__cart__item__text">
                                    <h6>Basic Flowing Scarf</h6>
                                    <h5>$98.49</h5>
                                </div>
                            </td>
                            <td class="quantity__item">
                                <div class="quantity">
                                    <div class="pro-qty-2">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                            </td>
                            <td class="cart__price">$ 47.00</td>
                            <td class="cart__close"><i class="fa fa-close"></i></td>
                        </tr>
                        <tr>
                            <td class="product__cart__item">
                                <div class="product__cart__item__pic">
                                    <img src="img/shopping-cart/cart-4.jpg" alt="">
                                </div>
                                <div class="product__cart__item__text">
                                    <h6>Basic Flowing Scarf</h6>
                                    <h5>$98.49</h5>
                                </div>
                            </td>
                            <td class="quantity__item">
                                <div class="quantity">
                                    <div class="pro-qty-2">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                            </td>
                            <td class="cart__price">$ 30.00</td>
                            <td class="cart__close"><i class="fa fa-close"></i></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="#">Tiếp Tục Mua Hàng</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="#"><i class="fa fa-spinner"></i>Cập Nhật Giỏ Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Mã Giảm Giá</h6>
                    <form action="#">
                        <input type="text" placeholder="Mã giảm giá">
                        <button type="submit">Áp Dụng</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Hóa Đơn</h6>
                    <ul>
                        <li>Tổng Giá Trị Hóa Đơn<span>$ 169.50</span></li>
                        <li>Tổng Tiền Thanh Toán<span>$ 169.50</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Thanh Toán</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
</body>
@include('web/layouts/footer')

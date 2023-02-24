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
                    <?php
                        $content = \Gloudemans\Shoppingcart\Facades\Cart::content();
                    ?>
                    <table>
                        <thead>
                        <tr>
                            <th>Sản Phẩm</th>
                            <th>Đơn Giá</th>
                            <th>Số Lượng</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($content as $product)
                        <tr>
                            <td class="product__cart__item">
                                <div class="product__cart__item__pic" >
                                    <img src='{{asset($product->options->image)}}' width="50px">
                                </div>
                                <div class="product__cart__item__text">
                                    <h6>{{$product->name}}</h6>
                                </div>
                            </td>
                            <td class="cart__price">{{number_format($product->price, 0, '', '.')}}{{'đ'}}</td>
                            <td class="quantity__item">
                                <div class="quantity">
                                    <form style="text-align: center;" action="{{url('/update-cart-quantity')}}" method="POST" >
                                            @csrf
                                            <input class="d-inline form-control w-25" type="text" name="quantity" value="{{$product->qty}}">
                                            <input type="hidden" value="{{$product->rowId}}" name="rowId_cart" class="form-control">
                                            <input type="submit" value="Cập nhật" name="update_qty" class="d-inline btn btn-dark btn-sm" style="margin-left: 10px">
                                    </form>
                                </div>

                            </td>

                            <td class="cart__close"><a href="{{url('/delete-to-cart/'.$product->rowId)}}"><i class="fa fa-close"></i></a></td>
                        </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="{{url('/home/shop')}}">Tiếp Tục Mua Hàng</a>
                        </div>
                    </div>
{{--                    <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                        <div class="continue__btn update__btn">--}}
{{--                            <a href="#"><i class="fa fa-spinner"></i> Cập Nhật Giỏ Hàng</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-lg-4">
{{--                <div class="cart__discount">--}}
{{--                    <h6>Mã Giảm Giá</h6>--}}
{{--                    <form action="#">--}}
{{--                        <input type="text" placeholder="Mã giảm giá">--}}
{{--                        <button type="submit">Áp Dụng</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
                <div class="cart__total">
                    <h6>Hóa Đơn</h6>
                    <ul>
                        <li>Tổng Giá Trị Hóa Đơn<span>{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal(0, ',', '.').' '.'đ'}}</span></li>
                        <li>Thuế<span>{{\Gloudemans\Shoppingcart\Facades\Cart::tax(0, ',', '.').' '.'đ'}}</span></li>
                        <li>Tổng Tiền Thanh Toán<span>{{\Gloudemans\Shoppingcart\Facades\Cart::total(0, ',', '.').' '.'đ'}}</span></li>
                    </ul>
                    @if (Auth::check())
                        @auth
                            <div>
                                <a href="{{url('/check-out')}}" class="primary-btn">Thanh Toán</a>
                            </div>
                        @else
                        @endauth
                    @else
                        <div>
                            <a href="{{url('/login')}}" class="primary-btn">Thanh Toán</a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
</body>
@include('web/layouts/footer')

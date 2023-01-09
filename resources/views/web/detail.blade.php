@include('web/layouts/head')
@include('web/layouts/header')
<body>
<!-- Shop Details Section Begin -->
<section class="shop-details">
    <div class="product__details__pic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__breadcrumb">
                        <a href="./index.html">Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Product Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product__details__content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5">
                    <img src='{{asset($product->image)}}' alt="">
                </div>
                <div class="col-lg-4">
                    <div class="product__details__text">

                        <h4>{{ $product->name }}</h4>
                        <h3>{{number_format($product->price, 0, '', ',')}}{{'đ'}}</h3>
                        <p>{{$product->description}}</p>
                        <div class="product__details__cart__option">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                            <a href="#" class="primary-btn">add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
</section>
<!-- Shop Details Section End -->
</body>
@include('web/layouts/footer')

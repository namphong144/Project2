@extends('layouts.base')
@section('title', 'Chi tiết đơn hàng')
@section('content')
    <section class="content-header">
        <h1>
            Thông tin khách hàng
        </h1>
    </section>
    <table id ="tableOrders" class="table table-light table-hover table-bordered table-responsive-md text-center">
        <thead>
        <tr class ="table-primary text-center">
            <th class = "col-2">Tên khách hàng</th>
            <th class = "col-2">Số điện thoại</th>
            <th class = "col-2">Email</th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->number}}</td>
                <td>{{$customer->email}}</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <section class="content-header">
        <h1>
            Thông tin vận chuyển
        </h1>
    </section>
    <table id ="tableOrders" class="table table-light table-hover table-bordered table-responsive-md text-center">
        <thead>
        <tr class ="table-primary text-center">
            <th class = "col-2">Tên người đặt hàng/nhận hàng</th>
            <th class = "col-1">Địa chỉ</th>
            <th class = "col-2">Số điện thoại</th>
            <th class = "col-2">Hình thức thanh toán</th>
            <th class = "col-2">Ghi chú</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td>{{$shipping->shipping_name}}</td>
            <td>{{$shipping->shipping_address}}</td>
            <td>{{'0'}}{{$shipping->shipping_number}}</td>
            <td>@if($payment->payment_method == 1)
                    Chuyển khoản
                @else
                    Tiền mặt/COD
                @endif
            </td>
            <td>{{$shipping->notes}}</td>
        </tr>
        </tbody>
    </table>
    <br><br>
    <section class="content-header">
        <h1>
            Liệt kê
        </h1>
    </section>
    <table id ="tableOrders" class="table table-light table-hover table-bordered table-responsive-md text-center">
        <thead>
        <tr class ="table-primary text-center">
            <th class = "col-1">STT</th>
            <th class = "col-2">Tên sản phẩm</th>
            <th class = "col-1">Số lượng</th>
            <th class = "col-2">Giá</th>
            <th class = "col-2">Tổng tiền</th>
        </tr>
        </thead>
        <tbody>
        @php
        $i=0;
        $total=0;
        @endphp
        @foreach($order_details as $key => $details)
            @php
            $i++;
            $subtotal =$details->product_price*$details->product_sales_quantity;
            $total += $subtotal;
            @endphp
        <tr>
            <td>{{$i}}</td>
            <td>{{$details->product_name}}</td>
            <td>{{$details->product_sales_quantity}}</td>
            <td>{{number_format($details->product_price, 0, '', '.')}}{{'đ'}}

            </td>
            <td>{{number_format($details->product_price*$details->product_sales_quantity, 0, '', '.')}}{{'đ'}}</td>
        </tr>
        @endforeach
        <tr>
            <td>Thanh Toán: {{number_format($total, 0, '', ',')}}{{'đ'}}</td>
        </tr>
        </tbody>
    </table>
@endsection







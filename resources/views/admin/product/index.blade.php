@extends('layouts.base')

@section('content')
    <br>
    <a href="{{url('admin/products/create')}}"> <button type="submit" class="btn btn-success">Thêm sản phẩm</button></a>
    <a href="{{url('admin/products/brand')}}"> <button type="submit" class="btn btn-success">Thêm hãng</button></a>
    <br>
    <br>
    <form action="">
        <input name="kw" class="form-control" type="text" placeholder="Nhập từ khóa cần tìm kiếm">
        <button type="submit" hidden class="btn btn-primary">Tìm</button>
    </form>

    <br>
    <table class="table table-light table-hover table-bordered table-responsive-md">
        <tr class ="table-primary text-center">
            <th class = "col-1">Mã sản phẩm</th>
            <th class = "col-5">Sản phẩm</th>
{{--            <th class = "col-3">Hãng</th>--}}
            <th class = "col-2">Giá</th>
            <th class = "col-2">Hành động</th>
        </tr>
        @forelse($products as $product)
            <tr class =" text-center">
                <td>{{ $product->id }}</td>
                <td>
                    <a href="{{ url('admin/products/'.$product->id) }}">
                        {{$product->name}}
                        <br>
                        <img width="150px" src="{{asset($product->image)}}">
                    </a>
                </td>
{{--                <td>@forelse($brands as $brand)--}}

{{--                        @if($product->id_brand == $brand->id) {{$brand->name}} @endif--}}
{{--                    @empty--}}
{{--                        {{"Không có hãng"}}--}}
{{--                    @endforelse--}}
{{--                </td>--}}
                <td>
                    {{number_format($product->price, 0, '', ',')}}{{'đ'}}</td>
                <td>
                    <form method="PUT" action="{{url('/admin/products/'.$product->id.'/edit')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                    <br>
                    <form onsubmit="return confirm('Bạn có muốn xoá?')" method="POST" action="{{url('/admin/products/'.$product->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xoá</button>
                    </form>
                </td>
            </tr>
        @empty
        <tr>
            <td>Không có dữ liệu</td>
        </tr>
        @endforelse
    </table>

    {{$products->links()}}
@endsection

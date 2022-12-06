@extends('layouts.base')

@section('content')
    <a href="{{url('admin/products/create')}}">Thêm sản phẩm</a>
    <br>
    <form action="">
        <input name="kw" class="form-control" type="text" placeholder="Nhập từ khóa cần tìm kiếm">
        <button type="submit" hidden class="btn btn-primary">Tìm</button>
    </form>
    <br>
    <table class="table table-bordered table-striped table-responsive-md">
        <tr class ="table-primary text-center">
            <th>Mã sản phẩm</th>
            <th>Sản phẩm</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}
                    <br>
                    <img width="150px" src="{{$product->image}}">
                </td>
                <td>{{ $product ->price}}</td>
                <td>
                    Sửa
                    / Xóa
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

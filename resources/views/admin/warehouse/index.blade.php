@extends('layouts.base')

@section('title', 'Quản lý kho')
@section('content')
    <br>
    <a href="{{url('admin/warehouses/import')}}"> <button type="submit" class="btn btn-success">Nhập kho</button></a>
    <br>
    <br>
    <form action="">
        <input name="kw" class="form-control" type="text" placeholder="Nhập tên mã  cần tìm kiếm">
        <button type="submit" hidden class="btn btn-primary">Tìm</button>
    </form>

    <br>
    <table class="table table-light table-hover table-bordered table-responsive-md">
        <tr class ="table-primary text-center">
            <th class = "col-1">Mã kho</th>
            <th class = "col-5">Địa chỉ</th>
            <th class = "col-2">Mã cửa hàng</th>
            <th class = "col-2">Hành động</th>
        </tr>
        @forelse($warehouses as $warehouse)
            <tr class =" text-center">
                <td>{{ $warehouse-> id }}</td>
                <td>{{ $warehouse-> address }}</td>
                <td>{{ $warehouse-> id_shop }}</td>
                <td>
                    <form method="PUT" action="{{url('/admin/warehouses/'.$warehouse->id.'/edit')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                    <br>
                    <form onsubmit="return confirm('Bạn có muốn xoá?')" method="POST" action="{{url('/admin/warehouses/'.$warehouse->id)}}">
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

    {{$warehouses->links()}}
@endsection

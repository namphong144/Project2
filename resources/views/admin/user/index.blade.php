@extends('layouts.base')

@section('content')
    <br>
    <a href="{{url('admin/users/create')}}"> <button type="submit" class="btn btn-success">Thêm tài khoản</button></a>
    <br>
    <br>
    <form action="">
        <input name="name" class="form-control" type="text" placeholder="Nhập tên tài khoản cần tìm kiếm">
        <button type="submit" hidden class="btn btn-primary">Tìm</button>
    </form>

    <br>
    <table class="table table-light table-hover table-bordered table-responsive-md">
        <tr class ="table-primary text-center">
            <th class = "col-1">ID</th>
            <th class = "col-2">Tên tài khoàn</th>
            {{--            <th class = "col-3">Hãng</th>--}}
            <th class = "col-1">Giới tính</th>
            <th class = "col-2">Ngày sinh</th>
            <th class = "col-4">Địa chỉ</th>
            <th class = "col-4">Email</th>
            <th class = "col-4">Số điện thoại</th>
            <th class = "col-3">Hành động</th>
        </tr>
        @forelse($users as $user)
            <tr class ="text-center">
                <td>{{ $user->id }}</td>
                <td>{{$user->name}} </td>
                <td>
                @if($user->gender == 1)
                    {{'Nam'}}
                    @elseif($user->gender == 2)
                    {{'Nữ'}}
                    @endif</td>
                <td>{{$user->dob}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->number}}</td>
                <td>
                    <form method="PUT" action="{{url('/admin/users/'.$user->id.'/edit')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                    <br>
                    <form onsubmit="return confirm('Bạn có muốn xoá?')" method="POST" action="{{url('/admin/users/'.$user->id)}}">
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

    {{$users->links()}}
@endsection

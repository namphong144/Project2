@extends('layouts.base')

@section('title', 'Chi tiết sản phẩm')

@section('content_header','Sản phẩm có id = '.$product->id)

@section('content')

    @if($product == null)
        <h1>Sản phẩm không tồn tại</h1>
    @else
        <table class="table table-light table-hover table-bordered table-responsive-md">
            <tr class="table-primary text-center">
                <th>Mã sản phẩm</th>
                <th>Sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Giá</th>
                <th>Mô tả</th>
            </tr>
            <tr class =" text-center">
                <td>{{$product->id}}</td>
                <td>
                    {{$product->name}}
                    <br>
                    <img width="150px" src="{{asset($product->image)}}">
                </td>
                <td>
                    @forelse($types as $type)

                        @if($product->id_type == $type->id) {{$type->name}} @endif
                    @empty
                    {{'Không có loại sản phẩm'}}
                    @endforelse
                </td>
                <td>
                    {{number_format($product->price, 0, '', ',')}}{{'đ'}}
                </td>
                <td colspan="3">
                    {{$product->description}}
                </td>
            </tr>




        </table>
    @endif

@endsection

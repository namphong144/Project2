@extends('layouts.base')
@section('title','Quản lý sản phẩm')
@section('content')
    <br>
    <a href="{{url('admin/products/create')}}"> <button type="submit" class="btn btn-success">Thêm sản phẩm</button></a>
    <a href="{{url('admin/products/type')}}"> <button type="submit" class="btn btn-success">Thêm loại sản phẩm</button></a>
    <br>
    <br>
    <br>
    <table id ="tableProducts" class="table table-light table-hover table-bordered table-responsive-md">
        <thead>
        <tr class ="table-primary text-center">
            <th class = "col-1">Mã sản phẩm</th>
            <th class = "col-5">Sản phẩm</th>
{{--            <th class = "col-3">Loại sản phẩm</th>--}}
            <th class = "col-2">Giá</th>
            <th class = "col-2">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr class =" text-center">
                <td>{{ $product->id }}</td>
                <td>
                    <a href="{{ url('admin/products/'.$product->id.'/edit') }}">
                        {{$product->name}}
                        <br>
                        <img width="150px" src="{{asset($product->image)}}">
                    </a>
                </td>
{{--                <td>@forelse($types as $type)--}}

{{--                        @if($product->id_type == $type->id) {{$type->name}} @endif--}}
{{--                    @empty--}}
{{--                        {{"Không có loại sản phẩm"}}--}}
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
        </tbody>
    </table>

    {{$products->links()}}
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src ="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src= "https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tableProducts').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
@endpush

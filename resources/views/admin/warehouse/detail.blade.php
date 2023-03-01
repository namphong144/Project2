@extends('layouts.base')

@section('title', 'Nhập kho chi tiết')
@section('content')
    <br>
    <a href="{{url('admin/warehouses/create')}}"> <button type="submit" class="btn btn-success">Thêm nhập kho chi tiết</button></a>
    <br>    <br>
    <br>
    <table id = "tableDetail" class="table table-light table-hover table-bordered table-responsive-md">
        <thead>
        <tr class ="table-primary text-center">
            <th class = "col-1">Mã nhập kho chi tiết</th>
            <th class = "col-2">Mã nhập kho</th>
            <th class = "col-1">Số lượng</th>
            <th class = "col-2">Mã & tên sản phẩm</th>
            <th class = "col-1">Giá nhập</th>
            <th class = "col-2">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @forelse($detail_import_warehouses as $detail_import_warehouse)
            <tr class =" text-center">
                <td>{{ $detail_import_warehouse-> id }}</td>
                <td>{{ $detail_import_warehouse-> id_import }}</td>
                <td>{{ $detail_import_warehouse-> quantity }}</td>
                <td>
                    {{ $detail_import_warehouse-> id_product }} {{'-'}}
                    @forelse($products as $product)
                        @if($detail_import_warehouse->id_product == $product->id) {{$product->name}} @endif
                    @empty
                        {{'Không có tên và mã sản phẩm'}}
                    @endforelse
                </td>

                <td>{{number_format($detail_import_warehouse-> import_price, 0, '', ',')}}{{'đ'}}</td>
                <td>

{{--                    <form method="PUT" action="{{url('/admin/warehouses/'.$detail_import_warehouse->id.'/edit')}}">--}}
{{--                        @csrf--}}
{{--                        @method('PUT')--}}
{{--                        <button type="submit" class="btn btn-primary">Sửa</button>--}}
{{--                    </form>--}}
{{--                    <br>--}}
{{--                    <br>--}}
                    {{--<form onsubmit="return confirm('Bạn có muốn xoá?')" method="POST" action="{{url('/admin/warehouses/'.$detail_import_warehouse->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xoá</button>
                    </form>--}}
                </td>
            </tr>
        @empty
            <tr>
                <td>Không có dữ liệu</td>
            </tr>
        @endforelse
        </tbody>
    </table>

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
            $('#tableDetail').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
@endpush

@extends('layouts.base')

@section('title', 'Quản lý nhập kho')
@section('content')
    <br>
    <a href="{{url('admin/warehouses/import/create')}}"> <button type="submit" class="btn btn-success">Thêm nhập kho</button></a>
    <br>
    <br>


    <br>
    <table id ="tableImport" class="table table-light table-hover table-bordered table-responsive-md">
        <thead>
        <tr class ="table-primary text-center">
            <th class = "col-1">Mã nhập kho</th>
            <th class = "col-2">Ngày nhập</th>
            <th class = "col-1">Mã người nhập</th>
            <th class = "col-2">Mã kho</th>
            <th class = "col-1">Mã nhà cung cấp</th>
            <th class = "col-4">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @forelse($import_warehouses as $import_warehouse)
            <tr class =" text-center">
                <td>{{ $import_warehouse-> id }}</td>
                <td>{{ $import_warehouse-> import_date }}</td>
                <td>{{ $import_warehouse-> id_admin }}</td>
                <td>{{ $import_warehouse-> id_warehouse }}</td>
                <td>{{ $import_warehouse-> id_vendor }}</td>
                <td>
                    <a href="{{url('/admin/warehouses/'.$import_warehouse->id.'/detail')}}"> <button type="submit" class="btn btn-success">Nhập kho chi tiết</button></a>
{{--                    <form method="PUT" action="{{url('/admin/warehouses/'.$import_warehouse->id.'/edit')}}">--}}
{{--                        @csrf--}}
{{--                        @method('PUT')--}}
{{--                        <button type="submit" class="btn btn-primary">Sửa</button>--}}
{{--                    </form>--}}
                    <br>
                    <br>
                    <form onsubmit="return confirm('Bạn có muốn xoá?')" method="POST" action="{{url('/admin/warehouses/import'.$import_warehouse->id)}}">
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

    {{$import_warehouses->links()}}
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
            $('#tableImport').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
@endpush

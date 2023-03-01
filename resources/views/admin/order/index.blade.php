@extends('layouts.base')
@section('title', 'Quản lý đơn hàng')
@section('content')
    <section class="content-header">
        <h1>
            Danh sách đơn hàng
        </h1>
    </section>
        <table id ="tableOrders" class="table table-light table-hover table-bordered table-responsive-md text-center">
            <thead>
            <tr class ="table-primary text-center">
                <th class = "col-2">Tên người đặt</th>
                <th class = "col-1">Tổng hóa đơn</th>
                <th class = "col-2">Trạng thái</th>
                <th class = "col-2">Hành động</th>
            </tr>
            </thead>
                            <tbody>
                            @forelse($all_order as $order)
                                <tr>
                                    <td>{{ $order->name }}</td>
                                    <td>{{number_format((float)$order->order_total, 3, '.', '')}}{{'đ'}}</td>
                                    <td>Hoàn Thành</td>
                                    <td>
                                        <a href="{{url('/admin/view-order/'.$order->id)}}"><button type="submit" class="btn btn-success">Xem</button></a>
                                        <br><br>
{{--                                        <a onclick="return confirm('Bạn có muốn xóa đơn hàng không?')" href="{{url('/admin/delete-order/'.$order->id)}}"><button type="submit" class="btn btn-danger">Xóa</button></a>--}}
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
            $('#tableOrders').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
@endpush




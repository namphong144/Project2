@extends('layouts.base')

@section('title', 'Quản lý đơn hàng')
@section('content')

    <br>
    <table id ="tableOrders" class="table table-light table-hover table-bordered table-responsive-md">
        <thead>
        <tr class ="table-primary text-center">
            <th class = "col-1">Mã đơn hàng</th>
            <th class = "col-1">Ngày mua</th>
            <th class = "col-2">Tình trạng đơn hàng</th>
            <th class = "col-2">Hình thức thanh toán</th>
            <th class = "col-4">Tên khách hàng</th>
            <th class = "col-2">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @forelse($orders as $order)
            <tr class =" text-center">
                <td>{{ $order-> id }}</td>
                <td>{{ $order-> purchase_date }}</td>
                <td>{{ $order-> status }}</td>
                <td>@forelse($payments as $payment)

                        @if($order->id_payment == $payment->id) {{$payment->name}} @endif
                    @empty
                        {{'Không có hình thức thanh toán'}}
                    @endforelse
                </td>
                <td>@forelse($users as $user)

                        @if($order->id_user == $user->id) {{$user->name}} @endif
                    @empty
                        {{'Không có tên khách hàng'}}
                    @endforelse
                </td>
                <td>
                    <form method="PUT" action="{{url('/admin/orders/'.$order->id.'/edit')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                    <br>
                    <form onsubmit="return confirm('Bạn có muốn xoá?')" method="POST" action="{{url('/admin/orders/'.$order->id)}}">
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

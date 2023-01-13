@extends('layouts.base')
@section('title','Thêm nhập kho mới')

@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Mã nhập kho</label>
                    <input name="id" class="form-control" type="text" placeholder="Nhập mã nhập kho" required>
                </div>
                <div class="col" >
                    <label>Ngày nhập</label>
                    <input name="import_date" type="text" class="form-control" placeholder="YYYY-MM-DD"  required />
                </div>
                <div class="col">
                    <label>Tên người nhập</label>
                    <select name="id_admin" class="form-control">
                        @forelse($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @empty
                            <option>Không có tên</option>
                        @endforelse
                    </select>
                </div>
                <div class="col">
                    <label>Mã kho</label>
                    <select name="id_warehouse" class="form-control">
                        @forelse($warehouses as $warehouse)
                            <option value="{{$warehouse->id}}">{{$warehouse->id}}</option>
                        @empty
                            <option>Không có id</option>
                        @endforelse
                    </select>
                </div>
                <div class="col">
                    <label>Mã nhà cung cấp</label>
                    <select name="id_vendor" class="form-control">
                        @forelse($vendors as $vendor)
                            <option value="{{$vendor->id}}">{{$vendor->id}}</option>
                        @empty
                            <option>Không có id</option>
                        @endforelse
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col text-right">
                    <button type="submit" class="btn btn-primary">Thêm nhập kho</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('css')

    @endsection
@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    <!-- Include jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function(){
            var date_input=$('input[name="import_date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            var options={
                format: 'yyyy-mm-dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            };
            date_input.datepicker(options);
        })
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection

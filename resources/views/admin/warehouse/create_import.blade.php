@extends('layouts.base')
@section('title','Thêm nhập kho mới')

@section('content')
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
                <div class="col">
                    <label>Ngày nhập</label>
                    <input name ="import_date" type="text" class="date form-control" placeholder="YYYY-MM-DD" style="width: 200px" required />
                    <script type="text/javascript">
                        $(".date").datepicker({
                            format: "yyyy-mm-dd",
                        });
                    </script>
                </div>
                <div class="col">
                    <label>Mã người nhập</label>
                    <select name="id_admin" class="form-control">
                        @forelse($users as $admin)
                            <option value="{{$admin->id}}">{{$admin->id}}</option>
                        @empty
                            <option>Không có id</option>
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

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection

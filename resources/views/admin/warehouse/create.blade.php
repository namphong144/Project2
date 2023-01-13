@extends('layouts.base')
@section('title','Thêm nhập kho chi tiết mới')

@section('content')
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Mã nhập kho</label>
                    <select name="id_import" class="form-control" type="text">
                        @forelse($import_warehouses as $import_warehouse)
                            <option value="{{$import_warehouse->id}}">{{$import_warehouse->id}}</option>
                        @empty
                            <option>Không có id</option>
                        @endforelse
                    </select>
                </div>
                <div class="col">
                    <label>Số lượng</label>
                    <input name="quantity" class="form-control" type="number" placeholder="Nhập số lượng" required>
                </div>
                <div class="col">
                    <label>Tên sản phẩm</label>
                    <select name="id_product" class="form-control">
                        @forelse($products as $product)
                            <option value="{{$product->id}}">{{$product->id}}{{' - '}}{{$product->name}}</option>
                        @empty
                            <option>Không có id</option>
                        @endforelse
                    </select>
                </div>
                <div class="col">
                    <label>Giá nhập</label>
                    <input name="import_price" class="form-control" type="number" placeholder="Nhập giá" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col text-right">
                    <button type="submit" class="btn btn-primary">Thêm</button>
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

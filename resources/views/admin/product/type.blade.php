@extends('layouts.base')
@section('title','Thêm loại mới')

@section('content')
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Mã loại sản phẩm</label>
                    <input name="id" class="form-control" type="text" placeholder="Nhập mã loại sản phẩm" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Tên loại sản phẩm</label>
                    <input name="name" class="form-control" type="text" placeholder="Nhập tên loại sản phẩm" required>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <textarea id="editor" name="description"></textarea>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col text-right">
                    <button type="submit" class="btn btn-primary">Thêm loại</button>
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


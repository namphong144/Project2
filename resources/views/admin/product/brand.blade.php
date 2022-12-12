@extends('layouts.base')
@section('title','Thêm hãng mới')

@section('content')
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Tên hãng</label>
                    <input name="name" class="form-control" type="text" placeholder="Nhập tên sản phẩm" required>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <textarea id="editor" name="description"></textarea>
            </div>
            <br>
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Thêm hãng</button>
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

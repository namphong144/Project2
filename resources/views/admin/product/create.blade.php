@extends('layouts.base')
@section('title','Thêm sản phẩm mới')

@section('content')
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Mã sản phẩm</label>
                    <input name="id" class="form-control" type="text" placeholder="Nhập mã sản phẩm" required>
                </div>
                <div class="col">
                    <label>Tên sản phẩm</label>
                    <input name="name" class="form-control" type="text" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="col">
                    <label>Giá sản phẩm</label>
                    <input name="price" class="form-control" type="number" placeholder="Nhập giá sản phẩm" required
                           min="0">
                </div>
                <div class="col">
                    {{--                     Chon hang--}}
                    <label>Chọn loại sản phẩm</label>
                    <select name="type" class="form-control">
                        @forelse($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @empty
                            <option>Không có loại</option>
                        @endforelse
                    </select>
                </div>
            </div>
            <br>
            <div class="row">

                <div class="col">
                    <input name="image" type="file" class="form-control-file">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <textarea id="editor" name="description"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col text-right">
                    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
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

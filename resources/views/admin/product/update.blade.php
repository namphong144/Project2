@extends('layouts.base')
@section('title','Sửa sản phẩm')

@section('content_header','Sản phẩm có id = '.$product->id)
@section('content')
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label>Tên sản phẩm</label>
                    <input name="name" value="{{ $product->name }}" class="form-control" type="text" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="col">
                    <label>Giá sản phẩm</label>
                    <input name="price" value="{{ $product->price }}" class="form-control" type="number" placeholder="Nhập giá sản phẩm" required
                           min="0">
                </div>
                <div class="col">
                    {{--                     Chon hang--}}
                    <label>Chọn hãng</label>
                    <select name="brand" class="form-control">

                            @forelse($brands as $brand)

                                <option @if($product->id_brand == $brand->id) {{"selected"}} @endif  value="{{$brand->id}}">{{$brand->name}}</option>
                            @empty
                                <option>Không có hãng</option>
                            @endforelse

                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <img width="150px" src="{{asset($product->image)}}">

                    <input value="{{asset($product->image)}}" name="image" type="file" class="form-control-file" >

                </div>
            </div>
            <br>
            <div class="row">
                <textarea id="editor" name="description">{{ $product->description }}</textarea>
            </div>
            <br>
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
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

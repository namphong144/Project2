@extends('layouts.base')
@section('title','Sửa địa chỉ kho')

@section('content_header','Kho có id = '.$warehouse->id)
@section('content')
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="container">
            <div class="col">
                <div class="col">
                    <label>Mã kho</label>
                    <input name="id" value="{{ $warehouse->id }}" class="form-control" type="text" placeholder="Nhập mã kho" readonly>
                </div>
                <br>
                <div class="col">
                    <label>Địa chỉ kho</label>
                    <input name="address" value="{{ $warehouse->address }}" class="form-control" type="text" placeholder="Nhập địa chỉ" required
                           min="0">
                </div>
                <br>

            </div>
            <br>
            <div class="col">
                <div class="col text-right">
                    <button type="submit" class="btn btn-primary">Sửa kho</button>
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

    <link
        href=
            "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <link
        href=
            "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet"
    />
    <script src=
                "https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js">
    </script>
    <script src=
                "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>
    <script src=
                "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js">
    </script>

@endsection

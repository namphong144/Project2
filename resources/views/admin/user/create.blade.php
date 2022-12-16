@extends('layouts.base')
@section('title','Thêm tài khoản nhân viên mới')

@section('content')
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="col">
                <div class="col">
                    <label>Tên tài khoản</label>
                    <input name="name" class="form-control" type="text" placeholder="Nhập tên tài khoản" required>
                </div>
                <br>
                <div class="col">
                    <label>Email</label>
                    <input name="email" class="form-control" type="email" placeholder="Nhập email" required
                           min="0">
                </div>
                <br>
                <div class="col">
                    <label>Mật khẩu</label>
                    <input name="password" class="form-control" type="password" placeholder="Nhập mật khẩu" required
                           min="0">
                </div>
                <br>
                <div class="col">
                    <label>Giới tính</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="nam" value="1" checked>
                        <label class="form-check-label" for="nam">
                            Nam
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="nu" value="2">
                        <label class="form-check-label" for="nu">
                            Nữ
                        </label>
                    </div>
                </div>
                <div class="col">
                    <label>Ngày sinh</label>
                    <input name ="dob" type="text" class="date form-control" placeholder="YYYY-MM-DD" style="width: 200px" required />
                    <script type="text/javascript">
                        $(".date").datepicker({
                            format: "yyyy-mm-dd",
                        });
                    </script>

                </div>
                <br>
                <div class="col">
                    <label>Địa chỉ</label>
                    <input name="address" class="form-control" type="text" placeholder="Nhập địa chỉ" required
                           min="0">
                </div>
                <br>
                <div class="col">
                    <label>Số điện thoại</label>
                    <input name="number" class="form-control" type="number" placeholder="Nhập số điện thoại" required
                           min="0">
                </div>
            </div>
            <br>
            <div class="col">
                <div class="col text-right">
                    <button type="submit" class="btn btn-primary">Thêm tài khoản</button>
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

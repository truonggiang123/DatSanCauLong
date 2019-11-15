@extends('backend.layout.master')
@section('title')
Thêm Loại
@endsection

@section('Chucnang')
chức năng thêm loại sân
@endsection

@section('content')
  <form name="scl_loai_san" id="scl_loai_san" action="{{ route('backend.LoaiSan.store') }}" method="post"  enctype="multipart/form-data">
       {{ csrf_field() }}
     <div class="form-group">
         <label for="LS_ten">Tên Loại Sân</label>
         <input name="LS_ten" id="LS_ten" class="form-control" type="text"  placeholder="Vui lòng nhập vào tên loại sân">
     </div>
     <div class="form-group">
         <label for="LS_chieudai">Chiều dài loại sân</label>
         <input name="LS_chieudai" id="LS_chieudai" class="form-control" type="text" placeholder="Vui lòng nhập vào chiều dài loại sân">
     </div>
     <div class="form-group">
         <label for="LS_chieurong">Chiều rộng loại sân</label>
         <input name="LS_chieurong" id="LS_chieurong" class="form-control" type="text" placeholder="Vui lòng nhập vào chiều rộng loại sân">
     </div>
     <div class="form-group">
         <label for="LS_duongcheo">Đường chéo loại sân</label>
         <input name="LS_duongcheo" id="LS_duongcheo" class="form-control" type="text" placeholder="Vui lòng nhập vào đường chéo loại sân">
     </div>
     <div class="form-group">
         <label for="LS_mota">Mô tả loại sân</label>
         <input name="LS_mota" id="LS_mota" class="form-control" type="text" placeholder="Vui lòng nhập vào mô tả">
     </div>
     <button type="submit" class="btn btn-primary">Hoàn thành thêm</button>
  </form>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $("#scl_loai_san").validate({
            rules: {
                LS_ten: {
                    required: true,
                    minlength: 2,
                    maxlength: 50
                },
                LS_chieudai: {
                    required: true,
                    minlength: 2,
                    maxlength: 50
                },
                LS_chieurong: {
                    required: true,
                    minlength: 2,
                    maxlength: 50
                },
                LS_mota: {
                    required: true,
                    minlength: 2,
                    maxlength: 400
                },
                LS_duongcheo: {
                    required: true,
                    minlength: 2,
                    maxlength: 20
                },
            },
            messages: {
                LS_ten: {
                    required: "Vui lòng nhập Tên loại sân",
                    minlength: "Tên Tên loại sân phải có ít nhất 2 ký tự",
                    maxlength: "Tên Tên loại sân không được vượt quá 50 ký tự"
                },
                LS_chieudai: {
                    required: "Vui lòng nhập chiều dài loại sân",
                    minlength: "Tên chiều dài loại sân phải có ít nhất 2 ký tự",
                    maxlength: "Tên chiều dài loại sân không được vượt quá 50 ký tự"
                },
                LS_chieurong: {
                    required: "Vui lòng nhập chiều rộng loại sân",
                    minlength: "Tên chiều rộng loại sân phải có ít nhất 2 ký tự",
                    maxlength: "Tên chiều rộng loại sân không được vượt quá 50 ký tự"
                },
                LS_mota: {
                    required: "Vui lòng nhập mô tả ",
                    minlength: "Tên mô tả phải có ít nhất 3 ký tự",
                    maxlength: "Tên mô tả không được vượt quá 400 ký tự"
                },
                LS_duongcheo: {
                    required: "Vui lòng nhập đường chéo loại sân ",
                    minlength: "Tên đường chéo loại sân phải có ít nhất 2 ký tự",
                    maxlength: "Tên đường chéo loại sân không được vượt quá 400 ký tự"
                },
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                // Thêm class `invalid-feedback` cho field đang có lỗi
                error.addClass("invalid-feedback");
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }
                // Thêm icon "Kiểm tra không Hợp lệ"
                if (!element.next("span")[0]) {
                    $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>")
                        .insertAfter(element);
                }
            },
            success: function(label, element) {
                // Thêm icon "Kiểm tra Hợp lệ"
                if (!$(element).next("span")[0]) {
                    $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>")
                        .insertAfter($(element));
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });
    });
</script>
@endsection
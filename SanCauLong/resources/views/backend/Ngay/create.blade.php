@extends('backend.layout.master')
@section('title')
Thêm ngày
@endsection

@section('Chucnang')
chức năng thêm ngày
@endsection

@section('content')
  <form name="scl_ngay" id="scl_ngay" action="{{ route('backend.Ngay.store') }}" method="post"  enctype="multipart/form-data">
       {{ csrf_field() }}
     <div class="form-group">
         <label for="N_Ngay">Ngày</label>
         <input name="N_Ngay" id="N_Ngay" class="form-control" type="date" data-date="" data-date-format="YYYY MM DD" placeholder="Vui lòng nhập vào ngày">
     </div>
     <button type="submit" class="btn btn-primary">Hoàn thành thêm</button>
  </form>
@endsection
@section('script')
<script>
  $(document).ready(function() {
    $("#scl_ngay").validate({
      rules: {
        N_Ngay: {
          required: true,
          minlength: 3,
          maxlength: 50
        },
      },
      messages: {
        N_Ngay: {
          required: "Vui lòng nhập tên Chủ đề",
          minlength: "Tên Chủ đề phải có ít nhất 3 ký tự",
          maxlength: "Tên Chủ đề không được vượt quá 50 ký tự"
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
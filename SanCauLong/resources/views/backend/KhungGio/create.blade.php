@extends('backend.layout.master')
@section('title')
Thêm Khung Giờ
@endsection

@section('Chucnang')
chức năng thêm Khung Giờ
@endsection

@section('content')
  <form name="scl_khung_gio" id="scl_khung_gio" action="{{ route('backend.KhungGio.store') }}" method="post"  enctype="multipart/form-data">
       {{ csrf_field() }}
     <div class="form-group">
         <label for="kg_gioBD">Giờ bắt đầu</label>
         <input name="kg_gioBD" id="kg_gioBD" class="form-control" type="text"  placeholder="Vui lòng nhập vào giờ bắt đầu">
     </div>
     <div class="form-group">
         <label for="kg_gioKT">Giờ kết thúc</label>
         <input name="kg_gioKT" id="kg_gioKT" class="form-control" type="text" placeholder="Vui lòng nhập vào giờ kết thúc ">
     </div>
     <div class="form-group">
         <label for="mangay_id">Ngày</label>
         <select class="form-control" name="mangay_id" id="mangay_id">
          @foreach($Ngay as $NgayHienthi)
            <option value="{{$NgayHienthi->id}}">{{date('d-m-Y', strtotime($NgayHienthi->N_Ngay))}}</option>
          @endforeach
          </select>
     </div>
     <button type="submit" class="btn btn-primary">Hoàn thành thêm</button>
  </form>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $("#scl_khung_gio").validate({
            rules: {
              kg_gioBD: {
                    required: true,
                    minlength: 3,
                    maxlength: 50
                },
              kg_gioKT: {
                    required: true,
                    minlength: 3,
                    maxlength: 50
                },
            },
            messages: {
                kg_gioBD: {
                    required: "Vui lòng nhập Khung giờ bắt đầu",
                    minlength: "Tên Khung giờ phải có ít nhất 3 ký tự",
                    maxlength: "Tên Khung giờ không được vượt quá 50 ký tự"
                },
                kg_gioKT: {
                    required: "Vui lòng nhập Khung giờ kết thúc",
                    minlength: "Tên Khung giờ phải có ít nhất 3 ký tự",
                    maxlength: "Tên Khung giờ không được vượt quá 50 ký tự"
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
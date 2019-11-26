@extends('frontend.layout.masterFrontend')
@section('title')
Hiển thị đặt sân
@endsection

@section('Chucnang')
Nhập thông tin khách hàng
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <h3>Thông tin sân bạn muốn đặt là:</h3>
        <div> 
            <h5>Tên Sân</h5>
            <span>{{ $santimduoc ->S_ten }}</span>
            <h5>Mô tả Sân</h5>
            <span>{{ $santimduoc ->mota }}</span>
            <h5>Hình ảnh sân</h5>
            <img class="img-thumbnail" src="{{ asset('storage/uploads/'.$santimduoc->hinhanhsan) }}" alt="hình ảnh sân" width="250" height="250">
        </div>

    </div>
    <div class="col-6">
<form name="hienthidatsan" id="hienthidatsan" action="{{ route('backend.datsan.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="DS_ten">Tên</label>
        <input name="DS_ten" id="DS_ten" class="form-control" type="text" placeholder="Quý khách vui lòng nhập vào tên">
    </div>
    <div class="form-group">
        <label for="DS_SDT">Số điện thoại</label>
        <input name="DS_SDT" id="DS_SDT" class="form-control" type="text" placeholder="Quý khách vui lòng nhập vào số điện thoại" >
    </div>
    <div class="form-group">
        <label for="mota">Hình thức thanh toán</label>
        <select class="form-control" name="hinhthucthanhtoan" id="hinhthucthanhtoan">
            <option value="Thanh toán khi tới sân">Thanh toán khi tới sân</option>
            <option value="Thanh toán bằng tài khoảng ngân hàng">Thanh toán bằng tài khoảng ngân hàng</option>
            <option value="Thanh toán bằng ví điện tử">Thanh toán bằng ví điện tử</option>
        </select>
    </div>
    <input name="masan"  type="hidden" value="{{ $santimduoc->id }}">
    <button type="submit" class="btn btn-primary">Đặt Sân</button>
</form>
</div>
</div>
@endsection
@section('script-frontend')
<script>
    $(document).ready(function() {
        $("#hienthidatsan").validate({
            rules: {
                DS_ten: {
                    required: true,
                    minlength: 1,
                    maxlength: 50
                },
                DS_SDT: {
                    required: true,
                    minlength: 9,
                    number:true,
                    maxlength: 50
                },
            },
            messages: {
                DS_ten: {
                    required: "Vui lòng nhập tên của bạn",
                    minlength: "Tên bạn phải có ít nhất 1 ký tự",
                    maxlength: "Tên Khung giờ không được vượt quá 50 ký tự"
                },
                DS_SDT: {
                    required: "Vui lòng nhập số điện thoại",
                    minlength: "Số điện thoại phải có ít nhất 9 ký tự",
                    number:"Số điện thoại không được chứa chử",
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
@extends('backend.layout.master')
@section('title')
Thêm Sân
@endsection

@section('Chucnang')
chức năng thêm Sân
@endsection

@section('content')
<form name="scl_san" id="scl_san" action="{{ route('backend.San.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="S_ten">Tên Sân</label>
        <input name="S_ten" id="S_ten" class="form-control" type="text" placeholder="Vui lòng nhập vào tên Sân">
    </div>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input name="S_tinhtrangsan" type="radio" class="form-check-input" value="1">Sân còn trống
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input name="S_tinhtrangsan" type="radio" class="form-check-input" value="0">Sân đã được đặt
            </label>
        </div>
    </div>   

    <div class="form-group">
        <label for="hinhanhsan">Hình ảnh sân</label>
        <input name="hinhanhsan" id="hinhanhsan" class="form-control" type="file" placeholder="Vui lòng nhập vào số điện thoại">
    </div>
    <div class="form-group">
        <label for="mota">Mô tả</label>
        <input name="mota" id="mota" class="form-control" type="text">
    </div>
    <div class="form-group">
        <label for="ma_KG">Thời Gian</label>
        <select class="form-control" name="ma_KG" id="ma_KG">
            @foreach($KG as $Khunggio)
            <option value="{{$Khunggio->id}}">{{ $Khunggio->kg_gioBD." ".$Khunggio->kg_gioKT." ".date('d-m-Y',strtotime($Khunggio->ngay->N_Ngay))}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="ma_loai_san">Loại Sân</label>
        <select class="form-control" name="ma_loai_san" id="ma_KG">
            @foreach($LoaiSan as $loaisanluachon)
            <option value="{{$loaisanluachon->id}}">{{$loaisanluachon->LS_ten}}</option>
            @endforeach
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Hoàn thành thêm</button>
</form>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $("#scl_san").validate({
            rules: {
                S_ten: {
                    required: true,
                    minlength: 2,
                    maxlength: 50
                },
                hinhanhsan: {
                    required: true,
                    minlength: 2,
                    maxlength: 50
                },
                mota: {
                    required: true,
                    minlength: 2,
                    maxlength: 50
                },
                
            },
            messages: {
                S_ten: {
                    required: "Vui lòng nhập Tên sân",
                    minlength: "Tên Tên sân phải có ít nhất 2 ký tự",
                    maxlength: "Tên Tên sân không được vượt quá 50 ký tự"
                },
                hinhanhsan: {
                    required: "Vui lòng nhập hình ảnh sân",
                    minlength: "Tên hình ảnh sân phải có ít nhất 2 ký tự",
                    maxlength: "Tên hình ảnh sân không được vượt quá 50 ký tự"
                },
                mota: {
                    required: "Vui lòng nhập mô tả sân",
                    minlength: "Tên mô tả sân phải có ít nhất 2 ký tự",
                    maxlength: "Tên mô tả sân không được vượt quá 50 ký tự"
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
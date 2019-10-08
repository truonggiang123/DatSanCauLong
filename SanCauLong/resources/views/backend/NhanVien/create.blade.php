@extends('backend.layout.master')
@section('title')
Thêm Nhân viên
@endsection

@section('Chucnang')
chức năng thêm nhân viên
@endsection

@section('content')
<form name="scl_nhan_vien" id="scl_nhan_vien" action="{{ route('backend.NhanVien.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="NV_ten">Tên Nhân viên</label>
        <input name="NV_ten" id="NV_ten" class="form-control" type="text" placeholder="Vui lòng nhập vào tên Nhân viên">
    </div>
    <div class="form-group">
        <label for="NV_diachi">Địa chỉ</label>
        <input name="NV_diachi" id="NV_diachi" class="form-control" type="text" placeholder="Vui lòng nhập vào địa chỉ nhân viên">
    </div>
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="NV_gioitinh" value="Nam">Nam
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="NV_gioitinh" value="Nữ">Nữ
            </label>
        </div>
        <div class="form-check disabled">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="NV_gioitinh" value="Khác" >Khác
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="NV_sodienthoai">Số điện thoại</label>
        <input name="NV_sodienthoai" id="NV_sodienthoai" class="form-control" type="text" placeholder="Vui lòng nhập vào số điện thoại">
    </div>
    <div class="form-group">
        <label for="NV_hinhanh">Hình ảnh</label>
        <input name="NV_hinhanh" id="NV_hinhanh" class="form-control" type="file">
    </div>
    <button type="submit" class="btn btn-primary">Hoàn thành thêm</button>
</form>
@endsection
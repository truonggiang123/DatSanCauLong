@extends('backend.layout.master')
@section('title')
Quản Lí Nhân Viên
@endsection

@section('Chucnang')
Danh mục Nhân Viên
@endsection

@section('content')
<a class="btn btn-info" href="#">Thêm Nhân Viên</a>
<table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên </th>
            <th>Địa chỉ</th>
            <th>Giới tính</th>
            <th>Số điện thoại</th>
            <th>Hình ảnh</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($NhanVien as $nhanVienChucNang)
        <tr>

            <td>{{$nhanVienChucNang->id}}</td>
            <td>{{$nhanVienChucNang->NV_ten}}</td>
            <td>{{$nhanVienChucNang->NV_diachi}}</td>
            <td>{{$nhanVienChucNang->NV_gioitinh}}</td>
            <td>{{$nhanVienChucNang->NV_sodienthoai}}</td>
            <td></td>
            <td class="d-flex justify-content-left">
                <a class="btn btn-info" href="#">Sửa</a>
                <form style="margin-left:5px;" class="form-inline" action="#" method="post">
                    <input class="btn btn-info" type="submit" value="Xóa" />
                </form>
            </td>

        </tr>
        @endforeach

    <tbody>
</table>


@endsection
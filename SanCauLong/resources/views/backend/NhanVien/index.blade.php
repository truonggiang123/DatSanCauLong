@extends('backend.layout.master')
@section('title')
Quản Lí Nhân Viên
@endsection

@section('Chucnang')
Danh mục Nhân Viên
@endsection

@section('content')
<a class="btn btn-info" href="{{ route('backend.NhanVien.create') }}">Thêm Nhân Viên</a>
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

            <td style="vertical-align:middle;">{{$nhanVienChucNang->id}}</td>
            <td style="vertical-align:middle;">{{$nhanVienChucNang->NV_ten}}</td>
            <td style="vertical-align:middle;">{{$nhanVienChucNang->NV_diachi}}</td>
            <td style="vertical-align:middle;">{{$nhanVienChucNang->NV_gioitinh}}</td>
            <td style="vertical-align:middle;">{{$nhanVienChucNang->NV_sodienthoai}}</td>
            <td style="vertical-align:middle;"><img class="img-fluid" style="with:100px;height:100px;" src="{{ asset('storage/uploads/'.$nhanVienChucNang->NV_hinhanh)}}" alt="Hình ảnh nhân viên"> </td>
            <td   class="d-flex justify-content-center">
                <a style="margin-top: 35px;" class="btn btn-info" href="{{ route('backend.NhanVien.edit',['id'=>$nhanVienChucNang->id]) }}">Sửa</a>
                <form style="margin-left:5px;" class="form-inline" action="#" method="post">
                    <input style="margin-top: 35px;" class="btn btn-info" type="submit" value="Xóa" />
                </form>
            </td>

        </tr>
        @endforeach

    <tbody>
</table>


@endsection
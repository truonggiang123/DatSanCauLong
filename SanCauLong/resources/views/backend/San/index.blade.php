@extends('backend.layout.master')
@section('title')
Quản Lí Sân
@endsection

@section('Chucnang')
Danh mục Sân
@endsection

@section('content')
<a class="btn btn-info" href="#">Thêm Sân</a>
<table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên </th>
            <th>Tình Trạng</th>
            <th>Mô tả</th>
            <th>Loại Sân</th>
            <th>Khung Giờ</th>
            <th>Hình ảnh</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($San as $SanChucNang)
        <tr>

            <td>{{$SanChucNang->id}}</td>
            <td>{{$SanChucNang->S_ten}}</td>
            <td>
                @if($SanChucNang->S_tinhtrangsan==1)
                Còn Trống
                @else
                Đã được đặt
                @endif
            </td>
            <td>{{$SanChucNang->mota}}</td>
            <td>{{$SanChucNang->loaisan->LS_ten}}</td>
            <td>{{$SanChucNang->khunggio->kg_gioBD." ".$SanChucNang->khunggio->kg_gioKT." ".$SanChucNang->khunggio->ngay->N_Ngay}}</td>
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
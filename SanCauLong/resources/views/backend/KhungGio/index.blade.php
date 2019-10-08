@extends('backend.layout.master')
@section('title')
Quản Lí Khung Giờ
@endsection

@section('Chucnang')
Danh mục Khung Giờ
@endsection

@section('content')
<a class="btn btn-info" href="{{  route('backend.KhungGio.create') }}">Thêm Khung Giờ</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Mã Khung Giờ</th>
            <th>Giờ Bắt Đầu</th>
            <th>Giờ Kết Thúc</th>
            <th>Ngày</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($KhungGio as $KhungGioChucNang)
        <tr>

            <td>{{$KhungGioChucNang->id}}</td>
            <td>{{$KhungGioChucNang->kg_gioBD}}</td>
            <td>{{$KhungGioChucNang->kg_gioKT}}</td>
            <td>{{date('d-m-Y', strtotime($KhungGioChucNang->ngay->N_Ngay))}}</td>
            <td class="d-flex justify-content-left">
                <a class="btn btn-info" href="#">Sửa Khung Giờ</a>
                <form style="margin-left:5px;" class="form-inline" action="#" method="post">
                    <input class="btn btn-info" type="submit" value="Xóa Khung Giờ"/>
                </form>
            </td>
        </tr>
        @endforeach

    <tbody>
</table>


@endsection
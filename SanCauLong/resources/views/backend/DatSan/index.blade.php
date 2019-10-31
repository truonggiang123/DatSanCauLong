@extends('backend.layout.master')
@section('title')
Quản Lí Đặt Sân
@endsection

@section('Chucnang')
Danh mục Đặt Sân
@endsection

@section('content')
<table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th>Tên Sân</th>
            <th>Khung Giờ</th>
            <th>Ngày</th>
            <th>Hình thức thanh toán</th>
            <th>Tên khách hàng</th>
            <th>Số điện thoại khách hàng</th>
            <th>Tên nhân viên quản lí</th>
        </tr>
    </thead>
    <tbody>
        @foreach($DatSan as $DatSanChucNang)
        
        <tr>
            <td>{{$DatSanChucNang->san->S_ten}}</td>
            <td>{{$DatSanChucNang->san->khunggio->kg_gioBD." ".$DatSanChucNang->san->khunggio->kg_gioKT}}</td>
            <td>{{date('d-m-Y', strtotime($DatSanChucNang->san->khunggio->ngay->N_Ngay))}}</td>
            <td>{{$DatSanChucNang->DS_hinhthucthanhtoan}}</td>
            <td>{{$DatSanChucNang->DS_ten_khach_hang}}</td>
            <td>{{$DatSanChucNang->DS_SDT}}</td>
            <td>{{$DatSanChucNang->nhanvien->NV_ten}}</td>

        </tr>
        @endforeach

    <tbody>
</table>


@endsection
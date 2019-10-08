@extends('backend.layout.master')
@section('title')
Quản Lí Sân
@endsection

@section('Chucnang')
Danh mục Sân
@endsection

@section('content')
<a class="btn btn-info" href="{{ route('backend.San.create') }}">Thêm Sân</a>
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

            <td style="vertical-align:middle;">{{$SanChucNang->id}}</td>
            <td style="vertical-align:middle;">{{$SanChucNang->S_ten}}</td>
            <td style="vertical-align:middle;">
                @if($SanChucNang->S_tinhtrangsan==1)
                Còn Trống
                @else
                Đã được đặt
                @endif
            </td>
            <td style="vertical-align:middle;">{{$SanChucNang->mota}}</td>
            <td style="vertical-align:middle;">{{$SanChucNang->loaisan->LS_ten}}</td>
            <td style="vertical-align:middle;">{{$SanChucNang->khunggio->kg_gioBD." ".$SanChucNang->khunggio->kg_gioKT." ".$SanChucNang->khunggio->ngay->N_Ngay}}</td>
            <td style="vertical-align:middle;">
                <img style="width:100px;height:100px" src="{{ asset('storage/uploads/'.$SanChucNang->hinhanhsan) }}" alt="Hình ảnh sân">
            </td>
            <td class="d-flex justify-content-left">
                <a style="margin-top:35px;" class="btn btn-info" href="#">Sửa</a>
                <form style="margin-left:5px;" class="form-inline" action="#" method="post">
                    <input style="margin-top:35px;" class="btn btn-info" type="submit" value="Xóa" />
                </form>
            </td>

        </tr>
        @endforeach

    <tbody>
</table>


@endsection
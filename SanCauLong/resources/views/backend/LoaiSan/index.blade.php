@extends('backend.layout.master')
@section('title')
Quản Lí Loại Sân
@endsection

@section('Chucnang')
Danh mục Loại Sân
@endsection

@section('content')
<a class="btn btn-info" href="{{ route('backend.LoaiSan.create') }}">Thêm Loại Sân</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Mã Loại Sân</th>
            <th>Tên</th>
            <th>Chiều dài</th>
            <th>Chiều rộng</th>
            <th>Đường chéo</th>
            <th>Mô tả</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($LoaiSan as $LoaiSanChucNang)
        <tr>

            <td>{{$LoaiSanChucNang->id}}</td>
            <td>{{$LoaiSanChucNang->LS_ten}}</td>
            <td>{{$LoaiSanChucNang->LS_chieudai}}</td>
            <td>{{$LoaiSanChucNang->LS_chieurong}}</td>
            <td>{{$LoaiSanChucNang->LS_duongcheo}}</td>
            <td>{{$LoaiSanChucNang->LS_mota}}</td>
            <td class="d-flex justify-content-left">
                <a class="btn btn-info" href="{{ route('backend.LoaiSan.edit', ['id'=> $LoaiSanChucNang->id] ) }}">Sửa Loại Sân</a>
                <form style="margin-left:5px;" class="form-inline" action="{{ route('backend.LoaiSan.destroy', ['id'=> $LoaiSanChucNang->id] ) }}" method="post">
                   {{ csrf_field() }}
                     <!-- gửi 1 input value='DELETE' để route có thể bắt đc delete -->
                    <input type="hidden" name="_method" value="DELETE" />
                    <input class="btn btn-info" type="submit" value="Xóa Loại Sân" />
                </form>
            </td>

        </tr>
        @endforeach

    <tbody>
</table>


@endsection
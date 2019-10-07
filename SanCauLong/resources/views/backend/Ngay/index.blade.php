@extends('backend.layout.master')
@section('title')
Quản Lí ngày
@endsection

@section('Chucnang')
Danh mục Ngày
@endsection

@section('content')
<a class="btn btn-info" href="{{ route('backend.Ngay.create')}}">Thêm Ngày</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Mã Ngày</th>
            <th>Ngày</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Ngay as $Ngaychucnang)
        <tr>

            <td>{{$Ngaychucnang->id}}</td>
            <td>{{ date('d-m-Y', strtotime($Ngaychucnang->N_Ngay)) }}</td>
            <td class="d-flex justify-content-left">
                <a class="btn btn-info" href="#">Sửa Ngày</a>
                <form style="margin-left:5px;" class="form-inline" action="#" method="post">
                    <input class="btn btn-info" type="submit" value="Xóa"/>
                </form>
            </td>

        </tr>
        @endforeach

    <tbody>
</table>


@endsection
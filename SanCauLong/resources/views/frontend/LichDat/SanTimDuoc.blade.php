@extends('frontend.layout.masterFrontend')
@section('title')
Sân tìm được
@endsection

@section('Chucnang')
Danh Sách Sân tìm được
@endsection

@section('content')
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
        @foreach($Sankq as $SanChucNang)
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
            <td style="vertical-align:middle;">{{$loaisankq->LS_ten}}</td>
            <td style="vertical-align:middle;">{{$Khunggiokq->kg_gioBD." ".$Khunggiokq->kg_gioKT}}</td>
            <td style="vertical-align:middle;">
                <img style="width:100px;height:100px" src="{{ asset('storage/uploads/'.$SanChucNang->hinhanhsan) }}" alt="Hình ảnh sân">
            </td>
            <td>
            <form action="" method="post">
              {{csrf_field()}}
              <input class="btn btn-success" type="submit" value="Đặt Sân này">
            </form>
            </td>
        </tr>
        @endforeach

    <tbody>
</table>
@endsection
@extends('backend.layout.master')
@section('title')
Quản Lí Sân
@endsection

@section('Chucnang')
Danh mục Sân
@endsection

@section('content')
<!-- gửi dử liệu vào model DatSan backend để người quản trị có thể xem dử liệu -->
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
                <a style="margin-top:35px;" class="btn btn-info" href="{{ route('backend.San.edit', ['id'=>$SanChucNang->id]) }}">Sửa</a>
                <form style="margin-left:5px;" class="form-inline" id="formdelete" action="{{ route('backend.San.destroy', ['id'=>$SanChucNang->id]) }}" method="post">
                {{ csrf_field() }}
                     <!-- gửi 1 input value='DELETE' để route có thể bắt đc delete -->
                    <input type="hidden" name="_method" value="DELETE" />
                    <input style="margin-top:35px;" class="btn btn-info btn-delete" type="submit" value="Xóa" />
                </form>
            </td>

        </tr>
        @endforeach

    <tbody>
</table>
@section('script')
<script>
    $(document).ready(function() {
        $('.btn-delete').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Bạn có chắc thực hiện xóa?',
                text: "Khi xóa thành công không thể phục hồi được",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'XÓA!'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Đã xóa thành công!',
                        'Sản phẩm đã được xóa.',
                        'success'
                    )
                    // Submit form
                    $(this).parent('#formdelete').submit();
                }
            });
        });
    });
</script>
@endsection


@endsection
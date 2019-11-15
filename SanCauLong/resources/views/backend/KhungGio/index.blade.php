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
                <a class="btn btn-info" href="{{ route('backend.KhungGio.edit',['id'=>$KhungGioChucNang->id]) }}">Sửa Khung Giờ</a>
                <form style="margin-left:5px;" class="form-inline" id="formdelete" action="{{ route('backend.KhungGio.destroy',['id'=>$KhungGioChucNang->id]) }}" method="post">
                {{ csrf_field() }}
                     <!-- gửi 1 input value='DELETE' để route có thể bắt đc delete -->
                    <input type="hidden" name="_method" value="DELETE" />
                    <input class="btn btn-info btn-delete" type="submit" value="Xóa Khung Giờ"/>
                </form>
            </td>
        </tr>
        @endforeach

    <tbody>
</table>


@endsection
@section('script')
<script>
    $(document).ready(function() {
        // Gọi thử SweetAlert
        //Swal.fire('Hello world!');
        $('.btn-delete').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Bạn có chắc thực hiện thao tác không?',
                text: "Khi xóa thành công không thể phục hồi được",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Thực hiện XÓA!'
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

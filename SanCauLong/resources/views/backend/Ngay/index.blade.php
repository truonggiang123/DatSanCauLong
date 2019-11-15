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
                <!-- chức năng sửa với ['id'=> $Ngaychucnang->id] là lấy ra id của ngày tại thời điểm click truyền vào route -->
                <a class="btn btn-info" href="{{ route('backend.Ngay.edit', ['id'=> $Ngaychucnang->id] ) }}">Sửa Ngày</a>
                <form style="margin-left:5px;" class="form-inline" id="formdelete"  method="post" action="{{ route('backend.Ngay.destroy',['id'=>$Ngaychucnang->id]) }}">
                {{ csrf_field() }}
                     <!-- gửi 1 input value='DELETE' để route có thể bắt đc delete -->
                    <input type="hidden" name="_method" value="DELETE" />
                    <input class="btn btn-info btn-delete" type="submit" value="Xóa"/>
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

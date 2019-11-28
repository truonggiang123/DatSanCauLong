@extends('backend.layout.master')
@section('title')
Quản Lí Đặt Sân
@endsection

@section('Chucnang')
Danh mục Đặt Sân
@endsection

@section('content')
<!-- tìm khách hàng đặt tên theo số điện thoại -->
<div>
<input class="form-control" name="timsdt" id="timsdt" type="text" placeholder="Nhập vào số điện thoại khách hàng" />
</div>
<table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th>Tên Sân</th>
            <th>Khung Giờ</th>
            <th>Ngày</th>
            <th>Hình thức thanh toán</th>
            <th>Tên khách hàng</th>
            <th>Số điện thoại khách hàng</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody id="thanBang">
        @foreach($DatSan as $DatSanChucNang)
        
        <tr>
            <td>{{$DatSanChucNang->san->S_ten}}</td>
            <td>{{$DatSanChucNang->san->khunggio->kg_gioBD." ".$DatSanChucNang->san->khunggio->kg_gioKT}}</td>
            <td>{{date('d-m-Y', strtotime($DatSanChucNang->san->khunggio->ngay->N_Ngay))}}</td>
            <td>{{$DatSanChucNang->DS_hinhthucthanhtoan}}</td>
            <td>{{$DatSanChucNang->DS_ten_khach_hang}}</td>
            <td>{{$DatSanChucNang->DS_SDT}}</td>
            <td class="d-flex justify-content-left">
                <form style="margin-left:5px;" class="form-inline" id="formdelete" action="{{ route('backend.DatSan.destroy', ['id'=>$DatSanChucNang->id]) }}" method="post">
                    {{ csrf_field() }}
                    <!-- gửi 1 input value='DELETE' để route có thể bắt đc delete -->
                    <input type="hidden" name="masan" value="{{ $DatSanChucNang->san->id }}"/>
                    <input type="hidden" name="_method" value="DELETE" />
                    <input style="margin-top:10px;" class="btn btn-info btn-delete" type="submit" value="Đã thanh toán" />
                </form>
            </td>

        </tr>
        @endforeach

    <tbody>
</table>
@section('script')

  <script>
  $(document).ready(function(){
  $("#timsdt").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#thanBang tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection

@endsection
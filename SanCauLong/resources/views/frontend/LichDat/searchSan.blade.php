@extends('frontend.layout.masterFrontend')
@section('title')
Tìm Sân
@endsection

@section('Chucnang')
Vui lòng nhập Thông tin phù hợp
@endsection

@section('content')
    
<form action="" method="post">
{{ csrf_field() }}
<!-- ô chọn ngày trong cơ sở dử liệu -->
<div class="form-group">
  <label for="N_Ngay">Vui lòng chọn ngày bạn muốn:</label>
  <select class="form-control" id="sel1" name="ngay">
    <option value="">Chọn ngày</option>
    @foreach($ngay as $luachonngay)
       <option value="{{ $luachonngay->id }}">{{ date('d-m-Y', strtotime($luachonngay->N_Ngay)) }}</option>
    @endforeach
  </select>
</div>
<!-- ô chọn khung giờ theo ngày trong csdl -->
<div class="form-group">
  <label for="kg_gioBD">Chọn Khung giờ:</label>
  <select class="form-control" id="khunggio" name="khunggio">
    <!-- xử lí javascript để lấy khung giờ theo ngày -->
    <option value="">Chọn Khung Giờ</option>
  </select>
</div>

<!-- ô chọn loại sân lấy ra từ cơ sở dử liệu -->
<div class="form-group">
  <label for="sel1">Chọn loại sân:</label>
  <select class="form-control" id="sel1" name="loaisan">
    @foreach($loaisan as $luachonloaisan)
       <option value="{{ $luachonloaisan->id }}">{{ $luachonloaisan->LS_ten }}</option>
    @endforeach
  </select>
</div>

<input type="submit" class="btn btn-primary" value="Tìm Sân">
</form>
@endsection
@section('script')

  <script>
   $(document).ready(function() {
    $.ajaxSetup({
    beforeSend: function(xhr, type) {
        if (!type.crossDomain) {
            xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        }
    },
});
        $("#sel1").change(function(event){
           ngay = $("#sel1").val();
           $.post("{{ route('frontend.user.khunggio') }}", {"ngay": ngay}, function(data){
           $("#khunggio").html(data);
        });
        
        
        });
   });
</script>
@endsection
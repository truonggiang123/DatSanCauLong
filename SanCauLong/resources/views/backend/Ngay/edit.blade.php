@extends('backend.layout.master')
@section('title')
Thêm ngày
@endsection

@section('Chucnang')
chức năng thêm ngày
@endsection

@section('content')
  <form name="scl_ngay" id="scl_ngay" action="{{ route('backend.Ngay.update', ['id'=>$ngayChinhSua->id] ) }}" method="post"  enctype="multipart/form-data">
       {{ csrf_field() }}
     <div class="form-group">
         <label for="N_Ngay">Ngày</label>
         <input value="{{ $ngayChinhSua->N_Ngay }}" name="N_Ngay" id="N_Ngay" class="form-control" type="date" data-date="" data-date-format="YYYY MM DD">
     </div>
     <button type="submit" class="btn btn-primary">Hoàn thành sửa</button>
  </form>
@endsection
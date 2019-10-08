@extends('backend.layout.master')
@section('title')
Thêm Khung Giờ
@endsection

@section('Chucnang')
chức năng thêm Khung Giờ
@endsection

@section('content')
  <form name="scl_khung_gio" id="scl_khung_gio" action="{{ route('backend.KhungGio.store') }}" method="post"  enctype="multipart/form-data">
       {{ csrf_field() }}
     <div class="form-group">
         <label for="kg_gioBD">Giờ bắt đầu</label>
         <input name="kg_gioBD" id="kg_gioBD" class="form-control" type="text"  placeholder="Vui lòng nhập vào giờ bắt đầu">
     </div>
     <div class="form-group">
         <label for="kg_gioKT">Giờ kết thúc</label>
         <input name="kg_gioKT" id="kg_gioKT" class="form-control" type="text" placeholder="Vui lòng nhập vào giờ kết thúc ">
     </div>
     <div class="form-group">
         <label for="mangay_id">Ngày</label>
         <select class="form-control" name="mangay_id" id="mangay_id">
          @foreach($Ngay as $NgayHienthi)
            <option value="{{$NgayHienthi->id}}">{{date('d-m-Y', strtotime($NgayHienthi->N_Ngay))}}</option>
          @endforeach
          </select>
     </div>
     <button type="submit" class="btn btn-primary">Hoàn thành thêm</button>
  </form>
@endsection
@extends('backend.layout.master')
@section('title')
Sửa Khung Giờ
@endsection

@section('Chucnang')
Chức năng sửa Khung Giờ
@endsection

@section('content')
  <form name="scl_khung_gio" id="scl_khung_gio" action="{{ route('backend.KhungGio.update',['id'=> $khungGio->id] ) }}" method="post"  enctype="multipart/form-data">
       {{ csrf_field() }}
     <div class="form-group">
         <label for="kg_gioBD">Giờ bắt đầu</label>
         <input value="{{$khungGio->kg_gioBD}}" name="kg_gioBD" id="kg_gioBD" class="form-control" type="text" >
     </div>
     <div class="form-group">
         <label for="kg_gioKT">Giờ kết thúc</label>
         <input value="{{$khungGio->kg_gioKT}}" name="kg_gioKT" id="kg_gioKT" class="form-control" type="text">
     </div>
     <div class="form-group">
         <label for="mangay_id">Ngày</label>
         <select class="form-control" name="mangay_id" id="mangay_id">
          @foreach($Ngay as $NgayHienthi)
          @if($khungGio->mangay_id ==  $NgayHienthi->id)
          <option value="{{$NgayHienthi->id}}" selected>{{date('d-m-Y', strtotime($NgayHienthi->N_Ngay))}}</option>
          @else
          <option value="{{$NgayHienthi->id}}">{{date('d-m-Y', strtotime($NgayHienthi->N_Ngay))}}</option>
          @endif
          @endforeach
          </select>
     </div>
     <button type="submit" class="btn btn-primary">Hoàn thành thêm</button>
  </form>
@endsection
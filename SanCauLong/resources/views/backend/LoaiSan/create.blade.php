@extends('backend.layout.master')
@section('title')
Thêm Loại
@endsection

@section('Chucnang')
chức năng thêm loại sân
@endsection

@section('content')
  <form name="scl_loai_san" id="scl_loai_san" action="{{ route('backend.LoaiSan.store') }}" method="post"  enctype="multipart/form-data">
       {{ csrf_field() }}
     <div class="form-group">
         <label for="LS_ten">Tên Loại Sân</label>
         <input name="LS_ten" id="LS_ten" class="form-control" type="text"  placeholder="Vui lòng nhập vào tên loại sân">
     </div>
     <div class="form-group">
         <label for="LS_chieudai">Chiều dài loại sân</label>
         <input name="LS_chieudai" id="LS_chieudai" class="form-control" type="text" placeholder="Vui lòng nhập vào chiều dài loại sân">
     </div>
     <div class="form-group">
         <label for="LS_chieurong">Chiều rộng loại sân</label>
         <input name="LS_chieurong" id="LS_chieurong" class="form-control" type="text" placeholder="Vui lòng nhập vào chiều rộng loại sân">
     </div>
     <div class="form-group">
         <label for="LS_duongcheo">Đường chéo loại sân</label>
         <input name="LS_duongcheo" id="N_Ngay" class="form-control" type="text" placeholder="Vui lòng nhập vào đường chéo loại sân">
     </div>
     <div class="form-group">
         <label for="LS_mota">Mô tả loại sân</label>
         <input name="LS_mota" id="LS_mota" class="form-control" type="text" placeholder="Vui lòng nhập vào mô tả">
     </div>
     <button type="submit" class="btn btn-primary">Hoàn thành thêm</button>
  </form>
@endsection
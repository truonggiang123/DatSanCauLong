@extends('backend.layout.master')
@section('title')
Thêm Sân
@endsection

@section('Chucnang')
chức năng thêm Sân
@endsection

@section('content')
<form name="scl_nhan_vien" id="scl_nhan_vien" action="{{ route('backend.San.update', ['id'=>$San->id]) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="S_ten">Tên Sân</label>
        <input value="{{ $San->S_ten }}" name="S_ten" id="S_ten" class="form-control" type="text">
    </div>
    <div class="form-group">
        @if($San->S_tinhtrangsan==1)
        <div class="form-check">
            <label class="form-check-label">
                <input name="S_tinhtrangsan" type="radio" class="form-check-input" value="1" checked>Sân còn trống
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input name="S_tinhtrangsan" type="radio" class="form-check-input" value="0">Sân đã được đặt
            </label>
        </div>
        @else
        <div class="form-check">
            <label class="form-check-label">
                <input name="S_tinhtrangsan" type="radio" class="form-check-input" value="1">Sân còn trống
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input name="S_tinhtrangsan" type="radio" class="form-check-input" value="0" checked>Sân đã được đặt
            </label>
        </div>
        @endif

    </div>   

    <div class="form-group">
        <img class="img-fluid" src="{{ asset('storage/uploads/'.$San->hinhanhsan) }}" alt="">
        <label for="hinhanhsan">Hình ảnh sân</label>
        <input name="hinhanhsan" id="hinhanhsan" class="form-control" type="file" placeholder="Vui lòng nhập vào số điện thoại">
    </div>
    <div class="form-group">
        <label for="mota">Mô tả</label>
        <input value="{{$San->mota }}" name="mota" id="mota" class="form-control" type="text">
    </div>
    <div class="form-group">
        <label for="ma_KG">Thời Gian</label>
        <select class="form-control" name="ma_KG" id="ma_KG">
            @foreach($KG as $Khunggio)
            @if($San->ma_KG == $Khunggio->id)
            <option selected value="{{$Khunggio->id}}">{{ $Khunggio->kg_gioBD." ".$Khunggio->kg_gioKT." ".date('d-m-Y',strtotime($Khunggio->ngay->N_Ngay))}}</option>
            @else
            <option value="{{$Khunggio->id}}">{{ $Khunggio->kg_gioBD." ".$Khunggio->kg_gioKT." ".date('d-m-Y',strtotime($Khunggio->ngay->N_Ngay))}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="ma_loai_san">Loại Sân</label>
        <select class="form-control" name="ma_loai_san" id="ma_KG">
            @foreach($LoaiSan as $loaisanluachon)
            @if($San->ma_loai_san==$loaisanluachon->id)
            <option selected value="{{$loaisanluachon->id}}">{{$loaisanluachon->LS_ten}}</option>
            @else
            <option value="{{$loaisanluachon->id}}">{{$loaisanluachon->LS_ten}}</option>
            @endif
            @endforeach
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Hoàn thành thêm</button>
</form>
@endsection
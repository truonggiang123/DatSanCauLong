@extends('frontend.layout.masterFrontend')
@section('title')
Hiển thị đặt sân
@endsection

@section('Chucnang')
Nhập thông tin khách hàng
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <h3>Thông tin sân bạn muốn đặt là:</h3>
        <div> 
            <h5>Tên Sân</h5>
            <span>{{ $santimduoc ->S_ten }}</span>
            <h5>Mô tả Sân</h5>
            <span>{{ $santimduoc ->mota }}</span>
            <h5>Hình ảnh sân</h5>
            <img class="img-thumbnail" src="{{ asset('storage/uploads/'.$santimduoc->hinhanhsan) }}" alt="hình ảnh sân" width="250" height="250">
        </div>

    </div>
    <div class="col-6">
<form name="hienthidatsan" id="hienthidatsan" action="" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="DS_ten">Tên</label>
        <input name="DS_ten" id="DS_ten" class="form-control" type="text" placeholder="Quý khách vui lòng nhập vào tên">
    </div>
    <div class="form-group">
        <label for="DS_SDT">Số điện thoại</label>
        <input name="DS_SDT" id="DS_SDT" class="form-control" type="text" placeholder="Quý khách vui lòng nhập vào số điện thoại" >
    </div>
    <div class="form-group">
        <label for="mota">Hình thức thanh toán</label>
        <select class="form-control" name="hinhthucthanhtoan" id="hinhthucthanhtoan">
            <option value="Thanh toán khi tới sân">Thanh toán khi tới sân</option>
            <option value="Thanh toán bằng tài khoảng ngân hàng">Thanh toán bằng tài khoảng ngân hàng</option>
            <option value="Thanh toán bằng ví điện tử">Thanh toán bằng ví điện tử</option>
        </select>
    </div>
    <input name="masan"  type="hidden" value="{{ $santimduoc->id }}">
    <button type="submit" class="btn btn-primary">Đặt Sân</button>
</form>
</div>
</div>
@endsection
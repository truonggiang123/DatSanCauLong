@extends('frontend.layout.masterFrontend')
@section('title')
Đặt sân thành công!
@endsection

@section('Chucnang')

@endsection

@section('content')
<div class="alert alert-success" role="alert">
    <strong>Chúc mừng!</strong> Bạn đã đặt sân thành công vui lòng đến sân đọc số điện thoại và hoàn thành thanh toán</br>
    Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi!</br>
    Bạn có thể đặt thêm sân ở đây
    <a href="{{ route('frontend.user.home') }}" class="btn btn-success">Chọn ngày khác</a>
  </div>

@endsection
@extends('frontend.layout.masterFrontend')
@section('title')
Lỗi Tìm Sân
@endsection

@section('Chucnang')
Lỗi Tìm Sân
@endsection

@section('content')

<div class="alert alert-danger">
    <strong>xin lỗi</strong> Ngày của bạn chọn đã hết sân hoặc sân đã được đặt hết vui lòng chọn ngày khác.
    <a href="{{ route('frontend.user.home') }}" class="btn btn-success">Chọn ngày khác</a>
  </div>


@endsection
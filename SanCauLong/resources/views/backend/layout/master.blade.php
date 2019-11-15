<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sân cầu long| @yield('title') </title>
    <link href="{{  asset('vendor/bootstrap/css/bootstrap.min.css')  }}" type="text/css" rel="stylesheet" />
    <script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

</head>

<body>

    <!-- Thanh tiêu đề -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('storage/imageFronent/home.png') }}" alt="logo" style="width:40px;">
        </a>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 3</a>
            </li>
        </ul>
        <!-- chức năng tìm kiếm trên nav -->

        <form class="form-inline  ml-auto" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Tìm chức Năng">
            <button class="btn btn-success" type="submit">Xem</button>
        </form>
    </nav>

    <div class="container-fluid" style="margin-top:66px;">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 bg-primary" >
                <div class="dropdown d-flex justify-content-center" style="margin-top:30px;">
                    <button type="button" class="btn btn-secondary  dropdown-toggle" style="position:fixed" data-toggle="dropdown">
                        Thông Tin Về Sân
                    </button>
                    <div class="dropdown-menu">
                        <a href="{{ route('backend.Ngay.index') }}" class="dropdown-item btn btn-secondary  btn-block" role="button">Ngày</a>
                        <a href="{{ route('backend.KhungGio.index') }}" class="dropdown-item btn btn-secondary  btn-block" role="button">Khung Giờ</a>
                        <a href="{{ route('backend.LoaiSan.index') }}" class="dropdown-item btn btn-secondary  btn-block" role="button">Loại Sân</a>
                        <a href="{{ route('backend.San.index') }}" class="dropdown-item btn btn-secondary  btn-block" role="button">Sân</a>
                        <a href="{{ route('backend.DatSan.index') }}" class="dropdown-item btn btn-secondary  btn-block" role="button">Đặt Sân</a>
                        <a href="{{ route('backend.NhanVien.index') }}" class="dropdown-item btn btn-secondary  btn-block" role="button">Nhân Viên</a>
                    </div>
                </div>
            </div>
            <!-- End sidebar -->
            <!-- Content -->
            <main role="main" class="col-md-10 ml-sm-auto px-4" style="margin-top:10px;">
               
                    <p>
                        <b>@yield('Chucnang')</b>
                    </p>
                    @yield('content')
                <div class="row" style="margin-top:30px">
                    <div class="col-md-12 d-flex justify-content-center">
                        <p>&#64 giang</p>
                    </div>
                <!--End footer -->
                </div>
            </main>
            <!-- End content -->
            <!-- footer -->

        </div>


    </div>
     <!-- validate javascript -->
   <script src="{{ asset('vendor/jquery_validation/jquery.validate.min.js') }}"></script>
    <!-- chức năng javascript cho từng trang -->
    @yield('script')
</body>

</html>
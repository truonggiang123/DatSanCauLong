<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sân cầu long| @yield('title') </title>
    <link href="{{  asset('vendor/bootstrap/css/bootstrap.min.css')  }}" type="text/css" rel="stylesheet" />
    <script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <style>
        #content{
            background-image: url("{{  asset('storage/imageFronent/cauLong2.jpg') }}") ;
            min-height:700px;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top:66px;
            padding-top: 50px;
        }
        #container{
            background-color: white;
            margin-top:10px;
            padding: 10px;
        }
    </style>    
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
                <a class="nav-link" href="#">Thông tin Sân cầu long</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Thông tin liên hệ</a>
            </li>
        </ul>
        <!-- chức năng tìm kiếm trên nav -->

    </nav>

    <div id="content" class="container-fluid" >
            <!-- Content -->
            <div id="container" class="container border rounded border-secondary" role="main" class="col-md-10 ml-sm-auto px-4" >
                    <p>
                        <b>@yield('Chucnang')</b>
                    </p>
                    @yield('content')
                
              </div>
            <!-- End content -->
            <!-- footer -->



           <div class="row" style="margin-top:30px">
                    <div class="col-md-12 d-flex justify-content-center">
                        <p>&#64 giang</p>
                    </div>
                <!--End footer -->
                </div>
    </div>

    @yield('script')


</body>

</html>
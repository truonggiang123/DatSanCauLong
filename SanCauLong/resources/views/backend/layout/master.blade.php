<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sân cầu long| @yield('title') </title>
    <link href="{{  asset('vendor/Bootstrap/css/bootstrap.min.css')  }}" type="text/css" rel="stylesheet" />

</head>

<body>

    <!-- Thanh tiêu đề -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src="bird.jpg" alt="logo" style="width:40px;">
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
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </nav>

    <div class="container-fluid" style="margin-top:59px;">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 bg-primary">
                <p> 
                    say ládihiuw
                </p>
            </div>
            <!-- End sidebar -->
            <!-- Content -->
            <main role="main" class="col-md-9 ml-sm-auto px-4">
                 @yield('content')
            </main>
            <!-- End content -->
        </div>
    </div>

    <script src="{{ asset('vendor/Bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/Jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('vendor/Popper/popper.min.js') }}"></script>


</body>

</html>
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
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-3">
        
            </div>
            <div class="col-sm-9">
              fdasfjas;f
            </div>

        </div>

        <div class="row">
            <div class="col-sm-3">
                 
            </div>
            <div class="col-sm-9">
                    @yield('content')
            </div>

        </div>

        <div class="row">
            <div class="col-sm">
                &#64 giang
            </div>

        </div>
















    </div>

    <script src="{{ asset('vendor/Bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/Jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('vendor/Popper/popper.min.js') }}"></script>


</body>

</html>
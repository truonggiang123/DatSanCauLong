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
            <div class="col-md-2 bg-primary">
            <h4 style="text-align: center;"  class="display-8">Quản lí</h4>
            <div class="dropdown d-flex justify-content-center" style="margin-top:30px;">
            <button type="button" class="btn btn-secondary  dropdown-toggle" data-toggle="dropdown" >
                Thông Tin Về Sân
            </button>
                <div class="dropdown-menu">
                        <a href="#"  class="dropdown-item btn btn-secondary  btn-block" role="button">Ngày</a>
                        <a href="#"  class="dropdown-item btn btn-secondary  btn-block" role="button">Khung Giờ</a>
                        <a href="#"  class="dropdown-item btn btn-secondary  btn-block" role="button">Loại Sân</a>
                        <a href="#"  class="dropdown-item btn btn-secondary  btn-block" role="button">Sân</a>
                        <a href="#"  class="dropdown-item btn btn-secondary  btn-block" role="button">Đặt Sân</a>
                        <a href="#"  class="dropdown-item btn btn-secondary  btn-block" role="button">Nhân Viên</a>
                </div>
            </div>
            </div>
            <!-- End sidebar -->

            <!-- Content -->
            <main role="main" class="col-md-10 ml-sm-auto px-4" style="margin-top:59px;">
            <p>
                @yield('Chucnang')
            </p>
                @yield('content')
                Bài Mẫu Số 1: Hãy Viết Một Đoạn Văn Miêu Tả Cảnh Sông Nước
Bến sông quê hương lúc chiều về.

Chiều về là lúc bến sông quê tôi tấp nập nhất.

Đoàn thuyền chở các bà, các chị từ chợ huyện, chợ tỉnh về cập bến. Các bà các chị được đàn con ùa ra đón. Con lớn đỡ cho mẹ gánh hàng. Con nhỏ vòi mẹ chia quà. Tiếng cười nói rộn ràng cả một khúc sông. Rồi ai về nhà nây. Con thuyền neo vào bến đỗ. Đây cũng là lúc bọn trẻ chăn trâu lùa trâu xuống tắm. Bọn trẻ tắm cho trâu, rồi bọn trẻ giỡn nước. Chúng té nước cho nhau. Chúng chơi trò đánh trận. Một đứa kiếm đâu được trái bóng tròn. Thế là chúng ném bóng cho nhau. Một ý kiến được cả bọn chấp nhận: chơi bóng nước. Chúng chia làm hai phe, chuyền bóng cho nhau. Phe nào chuyền được 6 chuyền là thắng. Phe thua phải cõng phe thắng chạy dọc con sông suốt từ bến tắm đến tận gốc đa. Bến sông quê tôi cứ rộn ràng như vậy cho đến lúc mặt trời lặn phía chân ười mới có chút bình lặng.

Bên cạnh Hãy viết một đoạn văn miêu tả cảnh sông nước các em cần tìm hiểu thêm những nội dung khác như Lập dàn ý bài văn miêu tả một cảnh sông nước hay phần Lập dàn ý miêu tả một khu vui chơi, giải trí mà em thích nhằm củng cố kiến thức của mình.

 

Bài Mẫu Số 2: Hãy Viết Một Đoạn Văn Miêu Tả Cảnh Sông Nước
Quê nội của em đẹp bởi có con sông chảy qua làng. Quanh năm cần mẫn, dòng sông chở nặng phù sa bồi đắp cho ruộng lúa. Buổi sớm tinh mơ, dòng nước mờ mờ phẳng lặng chảy. Giữa trưa, mặt sông nhấp nhô ánh bạc lẫn màu xanh nước biếc. Chiều tà, dòng nước trở thành màu khói trong, hơi tối âm âm. Hai bên bờ sông, luỹ tre làng nối vai nhau che rợp bóng mát cho đôi bờ. Sông đẹp nhất vào những đêm trăng. Bóng trăng lồng vào nước, luỹ tre làng in bóng trên dòng sông, vài chiếc thuyền neo trên bờ cát. Cảnh vật hữu tình đẹp như tranh vẽ.

 

Bài Mẫu Số 3: Hãy Viết Một Đoạn Văn Miêu Tả Cảnh Sông Nước
Dưới chân Tháp Bà Ponaga, dòng sông Cái hiền hoà chảy ra biển. Hai bên bờ sông, nhà cửa lô nhô. Lác đác, vài cụm dừa mọc choài ra sông, tàu lá lao xao trong gió. Giữa sông, cù lao Hải Đảo rợp bóng dừa như một ốc đảo xanh lục giữa làn nước xanh lam. Cầu Bóng bắc qua sông nườm nượp xe cộ. Dưới chân cầu, nơi con sông đổ ra biển là cầu Cá. Thuyền đi biển sơn hai màu xanh đỏ, đậu san sát gần một mỏm đá nối lên như hòn non bộ. Vài chiếc tàu máy chạy trên sông. Tiếng còi ô tô gay gắt lẫn tiếng ghe máy chạy ì ầm làm dòng sông ồn ã lên. Nắng trưa bàng bạc lên dòng sông, mặt nước sông như dát một thứ ánh kim xanh biếc màu trời. Con sông, cửa biển và bến thuyền gắn bó bao đời là một trong những cảnh đẹp của thành phố Nha Trang được nhiều người biết đến.

 

Bài Mẫu Số 4: Hãy Viết Một Đoạn Văn Miêu Tả Cảnh Sông Nước
Nhà bà ngoại nhìn ra bến phà. Sáng sớm nhìn ra bờ sông, con nước đục ngầu phù sa, hiền hòa chảy. Trên mặt nước, từng đám lục bình trôi dập dềnh, những cánh hoa phơn phớt tím, rung rinh trong gió. Thỉnh thoảng, vài con thuyền chở đầy hàng hóa xuôi theo dòng nước, vài chiếc xà lan nặng nề chở cát, tưởng như sắp bị dòng sông nuốt chửng. Hai bên bờ sông, dãy dừa nước lao xao, ẩn hiện sau đó là vài nóc nhà. Náo động nhất có lẽ là bến phà. Từng chuyến phà lớn, chở đầy người và xe cộ, hàng hóa chăm chỉ qua lại hai bờ sông. Hai bên bờ, hành khách chờ xuống phà, tiếng người xen lẫn tiếng xe, tạo thành dòng âm thanh ồn ào, náo nhiệt,... Nắng sớm mai lấp lóa như dát vàng mặt nước. Dòng sông vẫn cuồn cuộn chảy đỏ sậm phù sa, mang nặng nghĩa tình của con sông đối với người và đất miền Tây.
                
                <div class="row" style="margin-top:30px">
                    <div class="col-md-12 d-flex justify-content-center">
                        <p>&#64 giang</p>
                    </div>
                </div>
                <!--End footer -->
               
            </main>
            <!-- End content -->
             <!-- footer -->
            
        </div>


    </div>




</body>

</html>
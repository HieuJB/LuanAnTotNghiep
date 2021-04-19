<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>ADMIN</title>
</head>
<body style="background-color: #e9ecefe8;">
    {{View::make('Navbar')}}
    <div class="container">
       <div class="header_container">
           <div class="text_home">
            
           </div>
           <div class="info_home">
            <p>Trang chức năng | Tài khoản:ADMIN
                <a href="/logout">Đăng xuất</a>
            </p>
           </div>
       </div>
       <div class="tinhnang">
            <div class="trangcanhan" style="width: 24%;" >
                <div class="trangcanhan_img">
                <img id="quiz_test" src="{{asset('img/logo3.png')}}">
                </div>
                <a href="admin/quanlytaikhoan"><button style="width: 70%;" type="button" class="btn btn-primary">QUẢN LÝ TÀI KHOẢN</button></a>
            </div>
            <div class="trangcanhan" style="width: 24%;">
                <div class="trangcanhan_img">
                <img id="quiz_test" src="{{asset('img/lichsu1.png')}}">
                </div>
                <a href="admin/themcauhoi"><button style="width: 70%;" type="button" class="btn btn-primary">QUẢN LÝ ĐỀ THI</button></a>
            </div>
            <div class="trangcanhan" style="width: 24%;">
                <div class="trangcanhan_img">
                <img id="quiz_test" src="{{asset('img/logogame.png')}}">
                </div>
                <a href="admin/trochoi"><button style="width: 70%;" type="button" class="btn btn-primary">QUẢN LÝ TRÒ CHƠI</button></a>
            </div>
            <div class="trangcanhan" style="width: 24%;">
                <div class="trangcanhan_img">
                <img id="quiz_test" src="{{asset('img/lichsu4.png')}}">
                </div>
                <a href="admin/trangxephang"><button style="width: 70%;" type="button" class="btn btn-primary">BẢNG XẾP HẠNG</button></a>
            </div>
       </div>
    </div>
    <p></p>
    {{View::make('footer')}}
</body>
</html>
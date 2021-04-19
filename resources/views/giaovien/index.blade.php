<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Trang chủ</title>
</head>
<body style="background-color: #e9ecefe8;">
    {{View::make('Navbar')}}
    <!-- @if(Session::has('email'))
    <h1>{{Session::get('email')}}</h1>
    @endif -->
    <!-- <a href="/logout">Logout</a> -->
    <div class="container">
       <div class="header_container">
           <div class="text_home">
            
           </div>
           <div class="info_home">
            <p>Trang thông tin | Tài khoản:@if(Session::has('email1'))
                {{Session::get('email1')}}
                <a href="/logout">Đăng xuất</a>
                @endif
            </p>
           </div>
       </div>
       <div class="tinhnang">
            <div style="width:24%;" class="trangcanhan">
                <div class="trangcanhan_img">
                <img id="quiz_test" src="{{asset('img/194931.png')}}">
                </div>
                <a href="/giaovien/sinhvien"><button type="button" class="btn btn-primary">SINH VIÊN</button></a>
            </div>
            <div style="width:24%" class="trangcanhan">
                <div class="trangcanhan_img">
                <img id="quiz_test" src="{{asset('img/logo_bao_cao.png')}}">
                </div>
                {{--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    ĐIỂM DANH
                </button>  --}}
                <a href="/giaovien/themcauhoi"><button type="button" class="btn btn-primary">ĐIỂM DANH</button></a>
            </div>
            <div style="width:24%" class="trangcanhan">
                <div class="trangcanhan_img">
                <img id="quiz_test" src="{{asset('img/logo_okmen.png')}}">
                </div>
                {{--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    ĐIỂM DANH
                </button>  --}}
                <a href="/giaovien/btvn"><button type="button" class="btn btn-primary">GIAO BÀI TẬP</button></a>
            </div>
            <div style="width:24%" class="trangcanhan">
                <div class="trangcanhan_img">
                <img id="quiz_test" src="{{asset('img/task.png')}}">
                </div>
                {{--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    ĐIỂM DANH
                </button>  --}}
                <a href="/full-calender"><button type="button" class="btn btn-primary">CÔNG VIỆC</button></a>
            </div>
       </div>
    </div>
    <p></p>
    {{View::make('footer')}}
    </div>
  </div>
</div>
</body>
</html>
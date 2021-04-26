<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
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
            <p>Trang thông tin | Tài khoản:@if(Session::has('email'))
                {{Session::get('email')}}
                <a href="/logout">Đăng xuất</a>
                @endif
            </p>
           </div>
       </div>
       <div class="tinhnang">
            <div class="trangcanhan" style="width: 20%;">
                <div class="trangcanhan_img">
                <img style="width: 90%;"  src="{{asset('img/lambaithi.png')}}">
                </div>
                <a href="home/trangcanhan"><button id="btn_sub" type="button" class="btn btn-primary">CÁ NHÂN</button></a>
            </div>
            <div class="trangcanhan" style="width: 20%;">
              <div class="trangcanhan_img">
              <img id="quiz_test" src="{{asset('img/youtube.png')}}">
              </div>
              <a href="home/khoahoc"><button type="button" id="btn_sub" class="btn btn-primary">KHÓA HỌC</button></a>
            </div>
            <div class="trangcanhan" style="width: 20%;">
                <div class="trangcanhan_img">
                <img id="quiz_test" src="{{asset('img/pro5.png')}}">
                </div>
                <button type="button" id="btn_sub" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    LÀM BÀI THI
                </button>
                {{--  <a href="home/thuchanh"><button type="button" class="btn btn-primary">LÀM BÀI THI</button></a>  --}}
            </div>
            <div class="trangcanhan" style="width: 20%;">
                <div class="trangcanhan_img">
                <img id="quiz_test" src="{{asset('img/lichsu4.png')}}">
                </div>
                <a href="home/trangdiemso"><button type="button" id="btn_sub" class="btn btn-primary">LỊCH SỬ</button></a>
            </div>
            <div class="trangcanhan" style="width: 20%;">
              <div class="trangcanhan_img">
              <img  id="quiz_test" src="{{asset('img/logogame.png')}}">
              </div>
              <a href="/game"><button type="button" id="btn_sub" class="btn btn-primary">QUIZ GAME</button></a>
          </div>
       </div>
    </div>
    <p></p>
    {{View::make('footer')}}


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DẠNG ĐỀ THI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="show_phanloai" method="POST">
      @csrf
      <div class="modal-body">
            <div class="input-group mb-3">
                <select class="custom-select" name="phanloai" id="inputGroupSelect02">
                @foreach($data_phanloai as $data)
                    <option value="{{$data->ansPL}}">{{$data->ansPL}}</option>
                    @endforeach
                </select>
                 
            </div>
      </div>
      <div class="modal-footer">
        {{--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  --}}
         <button type="submit" class="btn btn-primary">LÀM BÀI THI</button>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
<style>
  #btn_sub{
    font-size: 14px;
  }
</style>
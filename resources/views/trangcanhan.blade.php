<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang cá nhân</title>
</head>
<body>
    {{View::make('Navbar')}}
    <span>
        @if(Session::get('thatbai'))
        <div class="alert alert-danger succ" role="alert">
            {{Session::get('thatbai')}}
          </div>
        @endif
    </span>
    <span>
        @if(Session::get('thanhcong'))
        <div class="alert alert-success succ" role="alert">
            {{Session::get('thanhcong')}}
          </div>
        @endif
    </span>
    <div class="container">
        <div class="header_container">
            <div class="text_home">
            
            </div>
            <div class="info_home">
             <p>Trang cá nhân | Tài khoản:@if(Session::has('email'))
                 {{Session::get('email')}}
                 <a href="/home">Trang chủ</a>
                 @endif
             </p>
            </div>
        </div>
        <div class="tinhnang">
            <div class="trangcanhan" style="width: 50%;">
                <img src="{{asset('img/lambaithi.png')}}">
            </div>
           <div class="update_tcn"> 
               <!-- <form action="/ss" method="POST">
                @csrf
                   <button type="submit">dasdsa</button>
               </form>                -->
                   <form action="/updatecanhan" method="POST">
                       @csrf
                       <p></p>
                       <P>THÔNG TIN CÁ NHÂN</P>
                       <input hidden value="{{$userss->id}}" name="id" >
                       <div class="form-group">
                         <label for="">Họ Tên</label>
                        <input type="text"
                           class="form-control" value="{{$userss->name}}" name="name" >
                       </div>
                       <div style="display: none;" class="form-group">
                        <label for="">Email</label>
                        <input type="text"
                          class="form-control" value="{{$userss->email}}" name="email" >
                      </div> 
                      <input hidden value="{{$userss->password}}" name="matkhaucu">
                      <div class="form-group">
                        <label for="">Mật khẩu cũ</label>
                        <input type="password"
                          class="form-control" value="" name="nhapmatkhaucu"placeholder="Nhập mật khẩu cũ trước khi cập nhật">
                      </div> 
                       <div class="form-group">
                        <label for="">Mật khẩu mới</label>
                        <input type="password"
                          class="form-control" value="" name="matkhau" placeholder="Nhập mật khẩu mới">
                      </div>
                      <button type="submit" class="btn btn-primary succc">CẬP NHẬT</button>
                   </form>
           </div>
       </div>
    </div>
    <p></p>
    {{View::make('footer')}}
</body>
</html>
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
   <span>
    @if(Session::get('fail'))
        <div class="alert alert-danger succ" role="alert">
        {{'Tên tài khoản và email đã có người đăng ký đã có người đăng ký'}}
        </div>
    @endif
    @if(Session::get('fail1'))
        <div class="alert alert-danger succ" role="alert">

        {{'Vui lòng nhập đầy đủ thông tin'}}
        </div>
    @endif
    </span>
    <span>@error('email')
        <div class="alert alert-danger" role="alert">
            {{'Định dạng email sai!!!'}}
          </div>   
    @enderror</span>
    <span>@error('matkhau')
        <div class="alert alert-danger" role="alert">
            {{'Mật khẩu phải lớn hơn 5 và nhỏ hơn 12 kí tự'}}
          </div>   
    @enderror</span>
    @if(Session::get('Saimk'))
        <div class="alert alert-danger succ" role="alert">
        {{Session::get('Saimk')}}
        </div>
    @endif
    @if(Session::get('thatbai'))
    <div class="alert alert-danger succ" role="alert">
    {{Session::get('thatbai')}}
    </div>
    @endif
    @if(Session::get('thanhcong'))
    <div class="alert alert-success succ" role="alert">
    {{Session::get('thanhcong')}}
    </div>
    @endif
    @if(Session::get('thanhcong_xacthuc'))
        <div class="alert alert-success succ" role="alert">
        {{Session::get('thanhcong_xacthuc')}}
        </div>
    @endif
   <div class="body_index">
       <div class="login">
            <div class="form_login">
                <form action="/dangnhap" method="POST">
                    @csrf
                    <div style="height: 90px;"  class="logo_form_login">
                        <img  style="height: 90px;" src="{{asset('img/logo5.png')}}">
                    </div>
                    <div class="form-group">
                      <input type="text"
                        class="form-control" name="tendangnhap" id="" aria-describedby="helpId" placeholder="Nhập tên đăng nhập">
                    </div>
                    <div class="form-group">
                        <input type="password"
                          class="form-control" name="matkhau" id="" aria-describedby="helpId" placeholder="Nhập mật khẩu">
                    </div>
                    <button style="width: 50%; margin-left: 25%; margin-right: 25%;" type="submit" class="btn btn-primary submit_form">Đăng Nhập</button>
                    
                    <span>Bạn chưa có tài khoản? <a href="" data-toggle="modal" data-target="#exampleModal">Đăng ký ngay</a></span>
                    <span><a href="" data-toggle="modal" data-target="#exampleModal_quenmatkhau">Quên mật khẩu</a></span>

                  </form>
            </div> 
       </div>
       <div class="notification">
            <div class="form_noti">
                <div class="header_noti">
                    <p>THÔNG BÁO MỚI NHẤT</p>
                </div>
                <div class="text_noti">
                    <p>1. Hướng dẫn sử dụng website cho thí sinh tự do</p>
                    <p>2. Hướng dẫn sinh viên sử dụng hệ thống quản lý đào tạo</p>
                    <p>3. Hướng dẫn sinh viện thực hiện điểm danh</p>
                    <p>4. Hướng dẫn sinh viên sử dụng hệ thống</p>
                    <p>5. Hướng dẫn giảng viên sử dụng hệ thống</p>
                    <p>6. Nếu bạn là admin xin hãy nhấn vào <a href="" data-toggle="modal" data-target="#exampleModal1">đây</a></p>
                    <p>7. Nếu bạn là khách xin hãy nhấn vào <a href="/khach">đây</a></p>
                </div>
            </div>
       </div>
   </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form class="modal-content" id="form_id" action="dangky" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Đăng ký</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="">Họ Tên</label>
                <input type="text"
                  class="form-control" name="hoten"  placeholder="Mời nhập họ tên">
              </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text"
              class="form-control" name="email"  placeholder="Mời nhập email">
          </div>
          <div class="form-group">
            <label for="">Nghề Nghiệp</label>
                  <div class="input-group mb-3">
                    <select class="custom-select" name="nghenghiep" id="inputGroupSelect01">
                      <option selected>Lựa chọn...</option>
                      <option value="gv">Giáo viên</option>
                      <option value="sv">Sinh Viên</option>
                    </select>
                </div>
          </div>
          <div class="form-group">
            <label for="">Tên đăng nhập</label>
            <input type="text"
              class="form-control" name="tendangnhap"  placeholder="Mời nhập tên đăng nhập">
          </div>
          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password"
              class="form-control" name="matkhau"  placeholder="Mời nhập mật khẩu">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Đăng ký</button>
        </div>
        </form>
      </div>
    </div>
  </div>



<!-- Modal ADMIN -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content" id="form_id" action="adminlogin" method="POST">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADMIN ĐĂNG NHẬP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Tên đăng nhập</label>
          <input type="text"
            class="form-control" name="tendangnhap"  placeholder="Mời nhập họ tên">
        </div>
        <div class="form-group">
          <label for="">Mật khẩu</label>
          <input type="password"
            class="form-control" name="matkhau"  placeholder="Mời nhập mật khẩu">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal quen mat khau -->
<div class="modal fade" id="exampleModal_quenmatkhau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content" id="" action="/quenmatkhau" method="POST">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">QUÊN MẬT KHẨU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email_quenmatkhau"  placeholder="Mời nhập email đăng ký...">
          </div>
          </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">XÁC THỰC</button>
      </div>
      </form>
    </div>
  </div>
</div>





  {{View::make('footer')}}
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
    
</script>
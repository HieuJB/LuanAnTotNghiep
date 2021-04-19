<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{View::make('Navbar')}}
    <div class="container">
     @if(Session::has('themthanhcong'))
        <div class="alert alert-success succ" role="alert">  
        {{Session::get('themthanhcong')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
          </div>
        @endif
        @if(Session::has('thatbai'))
        <div class="alert alert-danger" role="alert">  
        {{Session::get('thatbai')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        @endif
        <div class="header_container">
        <p></p>
            <div class="text_home">
             
            </div>
            <div class="info_home">
             <p>Trang giao bài tập | Tài khoản:{{Session::get('email1')}}
                 <a href="/giaovien">Trang chủ</a>
             </p>
            </div>
        </div>
        <p></p>
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        BÀI TẬP ĐÃ GIAO
        </button>
        <form id="alomen" action="/yeucau_btnvn" method="POST"  enctype="multipart/form-data">
            @csrf
            
            <p></p>
            <div class="form-group row">
                <label for="example-datetime-local-input"  class="col-2 col-form-label">Môn học:</label>
                <div class="col-10">    
                    <select class="form-control"name="monhoc" id="example-datetime-local-input">
                    @foreach($data_tmh as $data_tmh)
                        <option>{{$data_tmh->tenmonhoc}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
        
            <div class="form-group row">
                <label for="example-datetime-local-input"  class="col-2 col-form-label">Mã học phần:</label>
                <div class="col-10">
                    <select class="form-control"name="mhp" id="example-datetime-local-input">
                    @foreach($data_mhp as $data_mhp)
                        <option>{{$data_mhp->mahocphan}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input"  class="col-2 col-form-label">Tiêu đề:</label>
                <div class="col-10">
                  <input class="form-control" name="tieude" type="text" value="" placeholder="Nhập tiêu đề tại đây..." id="example-text-input">
                </div>
              </div>
            <div class="form-group row">
                <label for="example-text-input"  class="col-2 col-form-label">Nội dung:</label>
                <div class="col-10">
                  <input style="height:100px"  name="noidung" class="form-control" placeholder="Nhập nội dung tại đây..." type="text" value="" id="example-text-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-datetime-local-input" class="col-2 col-form-label">Ngày hạn cuối:</label>
                <div class="col-10">
                  <input class="form-control" type="date" value="" name="ngayhancuoi" id="example-datetime-local-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-datetime-local-input" class="col-2 col-form-label">Giờ hạn cuối:</label>
                <div class="col-10">
                  <input class="form-control" type="text" value="" placeholder="Nhập theo định dạng 24h... 14:00
                  " name="giohancuoi" id="example-datetime-local-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-datetime-local-input" class="col-2 col-form-label">File đính kèm:</label>
                <div class="col-10">
                    <input type="file" class="form-control" name="file" id="customFile" />
                </div>
            </div>

            <button style="width: 14%; text-align: center;" type="submit" class="btn btn-primary">GỬI</button>
        </form>
    </div>
   

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BÀI TẬP ĐÃ GIAO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/bt_dagiao" method="POST">
      @csrf
      <div class="modal-body">
            <div class="form-group ">
                <label for="exampleInputEmail1">MÔN HỌC:</label>
                <div class="input-group mb-3">
                <select class="custom-select"name="monhoc" id="inputGroupSelect01">
                @foreach($data_btvn_mh as $data_btvn_mh)
                    <option value="{{$data_btvn_mh->monhoc}}">{{$data_btvn_mh->monhoc}}</option>
                 @endforeach
                </select>
                </div>
            </div>
            <div class="form-group ">
                <label for="exampleInputEmail1">MÃ HỌC PHẦN:</label>
                <div class="input-group mb-3">
                <select class="custom-select" name="mhp" id="inputGroupSelect01">
                 @foreach($data_btvn_mhp as $data_btvn_mhp)
                    <option value="{{$data_btvn_mhp->mhp}}">{{$data_btvn_mhp->mhp}}</option>
                @endforeach
                </select>
                </div>
            </div>
            <div class="form-group ">
                <label for="exampleInputEmail1">TIÊU ĐỀ:</label>
                <div class="input-group mb-3">
                <select class="custom-select" name="tieude" id="inputGroupSelect01">
                 @foreach($data_btvn_td as $data_btvn_td)
                    <option value="{{$data_btvn_td->tieude}}">{{$data_btvn_td->tieude}}</option>
                @endforeach
                </select>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">XEM DANH SÁCH</button>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
<style>
   
    
</style>

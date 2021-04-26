<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body style="background-color: whitesmoke;" >
    {{View::make('Navbar')}}
    <div class="container">
       <div class="header_container">
           <div class="text_home">
            
           </div>
           <div class="info_home">
            <p>Trang quản lý video | Tài khoản:ADMIN
                <a href="/admin">Trang chủ</a>
            </p>
           </div>
       </div>
    </div>
    <div class="container">
        <h1 style="text-align: center;">TRANG QUẢN LÝ KHÓA HỌC</h1>
    
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            THÊM KHÓA HỌC
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">THÊM KHÓA HỌC</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="/themkhoahoc" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="modal-body">
                  <div class="form-group">
                    <label for="">Tiêu đề khóa học</label>
                    <input type="text"
                      class="form-control" name="tieude" id="" aria-describedby="helpId" placeholder="Nhập tiêu đề khóa học">
                  </div>
                  <div class="form-group">
                    <label for="">Mô tả khóa học</label>
                    <input type="text"
                      class="form-control" name="mota" id="" aria-describedby="helpId" placeholder="Nhập mô tả khóa học">
                  </div>
                  <div class="form-group">
                    <label for="">Link khóa học</label>
                    <input type="text"
                      class="form-control" name="link" id="" aria-describedby="helpId" placeholder="Nhập link khóa học">
                  </div>
                  <div class="form-group">
                    <label for="">Hình ảnh khóa học</label>
                    <input type="file"
                      class="form-control" name="file" id="" aria-describedby="helpId" placeholder="">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Thêm khóa học</button>
                </div>
            </form>
              </div>
            </div>
          </div>
          <p></p>
        <div class="row">
            @foreach($data as $data)
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img style="height: 200px;" src="{{asset('img_imp/'.$data->file)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->tieude}}</h5>
                        <p class="card-text" style="height: 80px;">{{$data->mota}}</p>
                        <a href="themvideo/{{$data->id}}" class="btn btn-primary">XEM VIDEO</a>
                    </div>
                </div>
            </div>
            @endforeach
    
        </div>
    
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<style>
    .card{
        margin-bottom: 20px;
        -webkit-box-shadow: 10px 15px 24px -4px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 15px 24px -4px rgba(0,0,0,0.75);
        box-shadow: 10px 15px 24px -4px rgba(0,0,0,0.75);
    }
</style>
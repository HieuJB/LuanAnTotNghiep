<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Trang của khách</title>
</head>
<body>
    {{View::make('Navbar')}}
    <div class="container">
        <div class="header_container">
            <div class="text_home">
             <p>Hệ: Đại học CQ  NH: 2020-2021  HK: 1</p>
            </div>
            <div class="info_home">
             <p>Trang khách | Tài khoản: Khách
                 <a href="/index">Trang chủ</a>
             </p>
            </div>
        </div>
    <h1 style="text-align: center;">TRANG KHÁCH</h1>
    <h4 style="text-align: center;">Xin vui lòng chọn đề thi</h4>
    <div class="form-group" style="width: 20%; margin-left: 40%;margin-right: 40%;">
        <form action="/khach/khachlambai" method="POST">
            @csrf
        <select class="form-control" name="id_soHL" id="exampleFormControlSelect1">
            @foreach($data as $data)
            <option value="{{$data->SoHL}}">{{$data->name}}</option>
            @endforeach  
        </select>
    
    </div>
      <button style="width: 20%; margin-left: 40%;margin-right: 40%;" type="submit" class="btn btn-primary">LÀM BÀI</button>
    </div>
</form>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
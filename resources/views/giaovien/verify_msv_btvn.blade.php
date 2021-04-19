<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    @if(Session::has('thatbai'))
        <div style="text-align: center; width: 40%; margin-left: 30%; margin-right: 30%;" class="alert alert-danger alert-dismissible fade show" role="alert">
            {{Session::get('thatbai')}}
        </div>
    @endif
        <form id="form_verify" action="/verify_msv_btvn" method="POST">
        @csrf
        <div class="form-group">
        <h5 style="text-align: center; margin-top: 50px;">VUI LÒNG NHẬP MÃ SINH VIÊN ĐỂ XÁC NHẬN</h5>
        <label for="">MÃ SINH VIÊN:</label>
        <input type="text"
            class="form-control" name="msv" id="" aria-describedby="helpId" placeholder="Vui lòng nhập mã sinh viên tại đây...">
        </div>
        <input hidden  type="text" name="monhoc" value="{{$data->monhoc}}">
        <input hidden  type="text" name="mhp" value="{{$data->mhp}}">
        <input hidden  type="text" name="giaovien" value="{{$giaovien}}">
        <input hidden  type="text" name="ramdom" value="{{$ramdom}}">
        <button type="submit" class="btn btn-primary">KIỂM TRA</button>
    </form> 
</body>
</html>


<style>
    #form_verify{
        height: 300px;
        width: 40%;
        margin-left: 30%;
        margin-right: 30%;
    }
</style>
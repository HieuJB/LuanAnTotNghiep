<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
   
    <div class="noidung">
        <div class="jumbotron">
            
            <h1 class="display-4">Chào bạn!</h1>
            
            <p class="lead">Tiêu đề:{{$data->tieude}}</p>
            <p class="lead">Nội dung:{{$data->noidung}}</p>
            <p class="lead">Hạn cuối nộp bài: {{$data->ngayhancuoi}} {{$data->giohancuoi}}</p>
            <p class="lead">File đính kèm:<a href="{{url('/download',$data->filedinhkem)}}">Download</a></p>
            <hr class="my-4">
           

           <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="nopbai_btvn" method="POST" enctype="multipart/form-data">
                    @csrf
                <label class="form-label" for="customFile">Default file input example</label>
                <input type="file" class="form-control" name="file" id="customFile" />
                <p></p>
                <p class="card-text">Đặt tên file bao gồm họ tên và lớp VD: NGUYENQUANGTRUNGHIEU_17CNTTC.docx</p>
                <p class="card-text">Vui lòng nộp bài trước thời gian quy định.</p>
                <button type="submit" class="btn btn-primary">NỘP BÀI</button>
            </form>
            </div>
            </div>
          </div>
    </div>
   
</body>
</html>


<style>
   
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<style>
    .noidung{
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
        margin-top: 2%;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    {{View::make('Navbar')}}
    <div class="container">
        <div class="header_container">
            <p></p>
            <div class="text_home">
                </div>
                <div class="info_home">
                 <p>Trang nộp bài | Tài khoản:{{Session::get('email1')}}
                     <a href="/giaovien">Trang chủ</a>
                 </p>
                </div>
        </div>
    </div>
    <P></P>
    <h1 style="text-align: center;">DANH SÁCH SINH VIÊN NỘP BÀI</h1>
    <p></p>
    <table class="table table-striped table-hover" style="width: 90%; margin-left: 5%; margin-right: 5%;">
        <thead>
            <tr>
                <th>MSV</th>
                <th>HỌ TÊN</th>
                <th>LỚP</th>
                <th>MÃ HỌC PHẦN</th>
                <th>TÊN MÔN HỌC</th>
                <th>NGÀY NỘP</th>
                <th>GIỜ NỘP</th>
                <th>ĐÚNG THỜI GIAN</th>
                <th>FILE NỘP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                <td scope="row">{{$data->msv}}</td>
                <td>{{$data->hoten}}</td>
                <td>{{$data->lop}}</td>
                <td>{{$data->mahocphan}}</td>
                <td>{{$data->tenmonhoc}}</td>
                <td>{{$data->ngayhancuoi}}</td>
                <td>{{$data->giohancuoi}}</td>
                <td>{{$data->ghichu}}</td>
                <td><a href="{{url('/download',$data->filedinhkem)}}">Download</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
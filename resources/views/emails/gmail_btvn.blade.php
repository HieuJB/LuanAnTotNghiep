<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="menu">
        <div class="menu_text">
            <h4>MAIL ĐƯỢC GỬI TỪ WEBSITE CỦA TRUNG HIẾU</h4>
            <p>Giảng viên đã ra cho bạn một bài tập</p>
            <p>Tên môn học:{{$details['tenmonhoc']}}</p>
            <p>Mã học phần:{{$details['mhp']}}</p>
            <p>Tiêu đề:{{$details['tieude']}}</p>
            <p>Nội dung:{{$details['noidung']}}</p>
            <p>Hạn cuối nộp bài:{{$details['ngayhancuoi']}}</p>
            <P>Bạn có thể nộp bài bằng cách kích vào link phía dưới.</P>
            <a href="http://172.20.10.3:9000/verify_msv_btvn/{{$details['giaovien']}}/{{$details['ramdom']}}"><button type="button" class="btn btn-primary">NỘP BÀI TẬP</button></a>
            <p></p>
            <h5>Thân ái</h5>
            <p></p>
            <h5>Hiếu JB</h5>
        </div>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<style>
  
</style>
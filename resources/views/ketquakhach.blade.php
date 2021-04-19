<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    <title>Kết quả khách</title>
</head>
<body>
    <body style="background-color: whitesmoke;">
        {{View::make('Navbar')}}
        <!-- @if(Session::has('email'))
        <h1>{{Session::get('email')}}</h1>
        @endif 
        <a href="/logout">Logout</a> -->
        <div class="container">
           <div class="header_container">
               <div class="text_home">
                <p>Hệ: Đại học CQ  NH: 2020-2021  HK: 1</p>
               </div>
               <div class="info_home">
                <p>Trang kết quả khách | Tài khoản: Khách
                    <a href="/khach">Trang chủ</a>
                </p>
               </div>
           </div>
        <div class="bd_result">
            <div class="header_results">
                <h2>KẾT QUẢ BÀI LÀM</h2>
            </div>
            <div class="details_result">
                <p id="tch">Tổng số câu hỏi </p>
                <p id="scd">Số câu đúng</p>
                <p id="scs">Số câu sai</p>
                <p>Tổng số điểm </p>
                <a href="/khach">Trang chủ</a>
            </div>
            <div class="details_result_int">
                <p id="tch">10</p>
                <p id="scd">{{$score}}</p>
                <p id="scs">{{10-$score}}</p>
                <p id="">{{$score}}</p>
            </div>
        </div>  
        <P></P>
        {{View::make('footer')}}
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
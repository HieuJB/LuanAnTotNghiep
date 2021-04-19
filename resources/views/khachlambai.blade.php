<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Trang thực hành khách</title>
    <script type="text/javascript">
        function timeout()
        {
            var hours=Math.floor(timeLeft/3600);
            var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
            var second=timeLeft%60;
            var hrs=checktime(hours);
            var mint=checktime(minute);
            var sec=checktime(second);
            if(timeLeft<=0)
            {
                clearTimeout(tm);
                document.getElementById("form1").submit();
            }
            else
            {
                document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
            }
            timeLeft--;
            var tm= setTimeout(function(){timeout()},1000);
        }
        function checktime(msg)
        {
            if(msg<10)
            {
                msg="0"+msg;
            }
            return msg;
        }
        </script>
      
</head>
<body onload="timeout()" >
    <script type="text/javascript">
        var timeLeft=1*10*60;
        </script>
    <div class="container_tcn">
        <h1 style="margin-top: 10px;">TRẮC NGHIỆM TRANG KHÁCH<div id="time"style="float:right"></div></h1>
        <form action="/ketquakhach" method="POST" id="form_quiz">
        @csrf
        <?php  $count = 1; ?>
        @foreach($question_khach as $question_show)
        <div class="question_area">
           
            <li id="que">&ensp;Câu {{$count}}: {{$question_show->question}}</li>
            <input hidden value="{{$question_show->question}}" name="q[{{$count}}]">
            <input hidden value="{{$question_show->ansa}}" name="ansa[{{$count}}]">
            <input hidden value="{{$question_show->ansb}}" name="ansb[{{$count}}]">
            <input hidden value="{{$question_show->ansc}}" name="ansc[{{$count}}]">
            <input hidden value="{{$question_show->ansd}}" name="ansd[{{$count}}]">
            <input hidden value="{{$question_show->ansCX}}" name="ansCX[{{$count}}]">
            <input hidden value="{{Session::get('email')}}" name="email[{{$count}}]">

            <input hidden value="0" name="a[{{$count}}]">
            &ensp;<input type="radio" id="male" name="a[{{$count}}]" value="a">
            &ensp;<label for="male">{{$question_show->ansa}}</label><br>
            &ensp;<input type="radio" id="male" name="a[{{$count}}]" value="b">
            &ensp;<label for="male">{{$question_show->ansb}}</label><br>
            &ensp;<input type="radio" id="male" name="a[{{$count}}]" value="c">
            &ensp;<label for="male">{{$question_show->ansc}}</label><br>
            &ensp;<input type="radio" id="male" name="a[{{$count}}]" value="d">
            &ensp;<label for="male">{{$question_show->ansd}}</label><br>
        </div>
        <?php $count++; ?>
        @endforeach
        <p></p>
        <button type="submit" class="btn btn-primary btn_nopbai">Nộp Bài</button>
    </form>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

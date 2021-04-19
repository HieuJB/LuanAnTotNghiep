<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chi tiết</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    {{View::make('Navbar')}}
    <div class="container_tcn">
        <P></P>
        <h1>CHI TIẾT BÀI LÀM</h1>
    <form action="/xoa" method="POST"  id="form_quiz">
        @csrf
        <?php  $count = 1; ?>
        @foreach($details as $question_show)
        <?php   
        if($question_show->ansCX==$question_show->ansLC){
            if($question_show->ansa==$question_show->ansLC){
                $color = '#7FFF00';
            }else{
                $color = '';
            }
            if($question_show->ansb==$question_show->ansLC){
                $color1 = '#7FFF00';
            }
            else{
                $color1 = '';
            }
            if($question_show->ansc==$question_show->ansLC){
                $color2 = '#7FFF00';
            }
            else{
                $color2 = '';
            }
            if($question_show->ansd==$question_show->ansLC){
                $color3 = '#7FFF00';
            }
            else{
                $color3 = '';
            }
        }else{
            if($question_show->ansa == $question_show->ansCX){
                $color = '#7FFF00';
            }else{
                if($question_show->ansa == $question_show->ansLC){
                $color = 'red';
               
            } else{
                    $color = '';
            }}

            if($question_show->ansb == $question_show->ansCX){
                $color1 = '#7FFF00';
            }else{
                if($question_show->ansb == $question_show->ansLC){
                $color1 = 'red';
            }else{
                $color1 = '';
            }}
            
            if($question_show->ansc == $question_show->ansCX){
                $color2 = '#7FFF00';
            }else{
                if($question_show->ansc == $question_show->ansLC){
                $color2 = 'red';
            }else{
                $color2 = '';
            }}

            if($question_show->ansd == $question_show->ansCX){
                $color3 = '#7FFF00';
            }else{
                if($question_show->ansd == $question_show->ansLC){
                $color3 = 'red';
            }else{
                $color3 = '';
            }}
        }
        ?>

        <div class="question_area">
            <li id="que">&ensp;Câu {{$count}}: {{$question_show->question}}</li>
            &ensp;&ensp;<label style="background-color:{{$color}}" for="male">{{$question_show->ansa}}</label><br>
            &ensp;&ensp;<label style="background-color:{{$color1}}" for="male">{{$question_show->ansb}}</label><br>
            &ensp;&ensp;<label style="background-color:{{$color2}}" for="male">{{$question_show->ansc}}</label><br>
            &ensp;&ensp;<label style="background-color:{{$color3}}" for="male">{{$question_show->ansd}}</label><br>
        </div>
        <?php $count++; ?>
        @endforeach
        <p></p>
    </form>
    <a href="/xoadata"><button type="button" class="btn btn-primary">TRANG CHỦ</button></a>    
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
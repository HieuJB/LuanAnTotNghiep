<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Trang thực hành</title>
    <script type="text/javascript">
        function timeout()
        {
            var btn_show=document.querySelector('.form-group1');
            var get_ramdom=document.querySelector('#get_ramdom').value;
            var ramdomip=document.querySelector('#ramdomip').value;
            var ramdom=Math.floor(Math.random() * 100000) + 10000; 
            var hours=Math.floor(timeLeft/3600);
            var minute=Math.floor((timeLeft-(hours*60*60)-00)/60);
            var second=timeLeft%60;
            var hrs=checktime(hours);
            var mint=checktime(minute);
            var sec=checktime(second);
            if(timeLeft==10){
                btn_show.style.display="";
                document.querySelector('#ramdom').innerHTML=ramdom;
                document.querySelector('#ramdomip').value=ramdom;
            }
            if(timeLeft<=0)
            {
              
                if(get_ramdom!=ramdomip){
                    alert('Bạn đã nhập sai mã nộp bài hãy thông báo với giáo viên');
                }else{
                    clearTimeout(tm);
                    document.getElementById("check_msv").submit();
                }
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
<body onload="timeout()"  >
    <script type="text/javascript">
        // var timeLeft=1*10*60;
        var timeLeft=1*0.5*60;
        </script>
    <div class="container_tcn" >
        <h5 style="margin-top: 10px; color: red; font-weight: bold;">TRẮC NGHIỆM<div id="time"style="float:right"></div></h5>
        <form action="/check_msv" method="POST" id="check_msv">
        @csrf
        <?php  $count = 1; ?>
        @foreach($data as $question_show)
        <div class="question_area">
            <div class="questssion">
            <li id="que">&ensp;Câu {{$count}}: {{$question_show->cauhoi}}</li>
            </div>
            <input hidden value="{{$question_show->cauhoi}}" name="q[{{$count}}]">
            <input hidden value="{{$question_show->ansa}}" name="ansa[{{$count}}]">
            <input hidden value="{{$question_show->ansb}}" name="ansb[{{$count}}]">
            <input hidden value="{{$question_show->ansc}}" name="ansc[{{$count}}]">
            <input hidden value="{{$question_show->ansd}}" name="ansd[{{$count}}]">
            <input hidden value="{{$question_show->caucx}}" name="anscx[{{$count}}]">
            <div class="ans">
            <!-- <input hidden value="{{$count}}" name="a[{{$count}}]"> -->
            <input hidden type="text" value="{{$question_show->buoi}}" name="buoi">
            <input hidden type="text" value="{{$question_show->mahocphan}}" name="mahocphan">
            <input hidden type="text" value="{{$question_show->monhoc}}" name="monhoc">
            <input hidden type="text" value="{{$question_show->giaovien}}" name="giaovien">
            
            <input hidden value="0" name="a[{{$count}}]">
            &ensp;<input type="radio" id="male" name="a[{{$count}}]" value="{{$question_show->ansa}}">
            &ensp;<label for="male">{{$question_show->ansa}}</label><br>
            &ensp;<input type="radio" id="male" name="a[{{$count}}]" value="{{$question_show->ansb}}">
            &ensp;<label for="male">{{$question_show->ansb}}</label><br>
            &ensp;<input type="radio" id="male" name="a[{{$count}}]" value="{{$question_show->ansc}}">
            &ensp;<label for="male">{{$question_show->ansc}}</label><br>
            &ensp;<input type="radio" id="male" name="a[{{$count}}]" value="{{$question_show->ansd}}">
            &ensp;<label for="male">{{$question_show->ansd}}</label><br>
            </div>    
        </div>
    </div>
        <?php $count++; ?>
        @endforeach

        <div style="display:none" class="form-group" style="margin-top: 30px; text-align: center;">
            <label style="color: red; font-weight: bold;" for="">NHẬP MÃ SINH VIÊN</label>
            <input style="width: 60%; margin-left: 20%; margin-right: 20%;" type="text"
              class="form-control" value="{{session('msv_check')}}" name="msv" id="" aria-describedby="helpId" placeholder="Vui lòng nhập mã sinh viên vào đây....">
          </div>
          <input hidden type="text" id="ramdomip">
          <div class="form-group1" style="display: none;margin-top: 10px;text-align: center;">
                <p style="color: red; font-weight: bold; font-size: 25px;" id="ramdom"></p>
              <label style="color: red; font-weight: bold;" for="">NHẬP MÃ NỘP BÀI</label>
              <input style="width: 60%; margin-left: 20%; margin-right: 20%;" type="text"
                class="form-control"  id="get_ramdom" aria-describedby="helpId" placeholder="Vui lòng nhập mã nộp bài vào đây....">
          </div>
    </form>
    <p></p>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<style>
    #que{
        list-style: none;
        font-size: 24px;
        font-weight: bold;
    }
    .question_area{
        -webkit-box-shadow: 18px 36px 54px -22px rgba(0,0,0,0.75);
        -moz-box-shadow: 18px 36px 54px -22px rgba(0,0,0,0.75);
        box-shadow: 18px 36px 54px -22px rgba(0,0,0,0.75);
        margin-top: 20px;
    }
    .questssion{
        width: 100%;
        height: auto;
        background-color: rgb(98, 0, 255);
        color: whitesmoke;
        -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
        -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
        box-shadow:         3px 3px 5px 6px #ccc;  
    }
    .ans{
        width: 100%;
        height: auto;
        background-color: whitesmoke;
        font-size: 17px;
        font-weight: bold;
    }
</style>
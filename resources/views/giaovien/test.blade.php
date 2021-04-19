<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/qrcode.js')}}"></script>
    <title>Document</title>
    <script type="text/javascript">
        function timeout()
        {
            var hours=Math.floor(timeLeft/3600);
            var minute=Math.floor((timeLeft-(hours*60*60)-10)/60);
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
        // var timeLeft=1*0.5*60;
        var timeLeft=1*5*60;
    </script>
    <div id="time"style="font-size:30px"></div>
    <form id="form1" method="POST" action="/delete_session">
        @csrf
        <button hidden type="submit" class="btn btn-primary">Submit</button>
    </form>





    
    <form onsubmit="generate();return false;">
        <input hidden type="text" id="qr" value="https://trunghieuit061099.000webhostapp.com/{{session('email1')}}" name="">
    </form>
    <div id="qrResult" style="height: 600px;width: 600px; width: 40%; margin-left: 30%; margin-right: 30%;">
    </div>
   <h1 style="text-align: center;font-size: 30px; color:red">QUÉT MÃ ĐỂ LÀM BÀI KIỂM TRA</h1>
    <script type="text/javascript">
           var qrcode=new QRCode(document.getElementById('qrResult'),{
            width:600,
            height:600
        })
        setTimeout(function generate(){
            var message = document.getElementById('qr');
            if(!message.value){
                alert('Input a text');
                message.focus();
                return;
            }
            qrcode.makeCode(message.value);
        },100);
    </script>
</body>
</html>
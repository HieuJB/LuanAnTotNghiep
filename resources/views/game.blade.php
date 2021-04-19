<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiếc nón kỳ diệu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('codegame/css.css')}}">
</head>

<body style="text-align: center;">
  <div class="bg" style="width: 100%; height: 100%; position: absolute; top: 0;">
    <p id="text_dung"></p>
    <div class="container"> 
        <h1 style="text-align: center; margin-top: 10px; color: whitesmoke;">CHIẾC NÓN KỲ DIỆU</h1>
       <img onclick="playmusic()" id="audio_off_area" width="40px" src="{{asset('codegame/picture/SOUND_OFF.png')}}"> <img id="audio_on_area" onclick="mutemusic()" style="display: none;" id="audio" width="40px" src="{{asset('codegame/picture/SOUND_ON.png')}}">    
        &emsp;<span>ĐIỂM SỐ:</span>&ensp;<span id="score"></span>&emsp;&emsp;&emsp;&emsp; <span>THỜI GIAN&ensp;</span><span id="time"></span>
        <div id="app">
            <img class="marker" src="{{asset('codegame/picture/marker.png')}}" />
            <img class="wheel" id="rotater" src="{{asset('codegame/picture/wheel.png')}}" />
            <img class="button" onclick="rotate()" src="{{asset('codegame/picture/button1.png')}}"/>
        </div>
  </div>

</div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">CÂU HỎI</h5>
        </div>
        <div class="modal-body">
          <img width="60px" id="tuvan" src="{{asset('codegame/picture/totuvan.png')}}">
          <img width="60px" id="quyen5050" src="{{asset('codegame/picture/5050.png')}}">
          <img width="60px" id="goidienthoai" src="{{asset('codegame/picture/goidien.png')}}">
          <img width="60px" id="doicauhoi" src="{{asset('codegame/picture/doicauhoi.png')}}">
          <h4 id="question"></h4>
            <button type="button" class="btn btn-primary da" id="ansa"></button>
            <button type="button" class="btn btn-primary da" id="ansb"></button>
            <button type="button" class="btn btn-primary da" id="ansc"></button>
            <button type="button" class="btn btn-primary da" id="ansd"></button>
            <button hidden class="btn btn-primary da" id="ansCX"></button>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
</div>
<P></P>




<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GỌI ĐIỆN THOẠI TƯ VẤN</h5>
      </div>
      <div class="modal-body">
        <H4 style="text-shadow: 2px 2px #ff0000;">BẠN MUỐN GỌI CHO AI</H4>
        <div class="solo" style="width: 100%; height: auto;">
          <img  width="120px" height="100px" id="callperson" src="{{asset('codegame/picture/ngobaochau.jpg')}}">
          <p style="text-decoration: none;">GS. Ngô Bảo Châu</p>
        </div>
        <div class="solo" style="width: 100%; height: auto;">
          <img width="120px" height="100px"  id="callperson1" src="{{asset('codegame/picture/jack.jpg')}}">
          <p style="text-decoration: none;">Nam Ca Sỹ Jack</p>
        </div>
        <div class="solo" style="width: 100%; height: auto;">
          <img width="120px" height="100px"  id="callperson2" src="{{asset('codegame/picture/doctor.jpg')}}"> 
          <p style="text-decoration: none;">Doctor Strange</p>
        </div>
        <div class="solo" style="width: 100%; height: auto;">
          <img width="120px" height="100px"  id="callperson3" src="{{asset('codegame/picture/hieujb.jpg')}}">
          <p id="testss">Người Tạo Ra Game </p>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TƯ VẤN CỦA KHÁN GIẢ</h5>
      </div>
      <div class="modal-body" style="width: 100%;">
        <div class="cot" id="cota"></div>
        <div class="cot" id="cotb"></div>
        <div class="cot" id="cotc"></div>
        <div class="cot" id="cotd"></div>
        <div class="phuongan">
          <div class="cotda"><p>A</p></div>
          <div class="cotda"><p>B</p></div>
          <div class="cotda"><p>C</p></div>
          <div class="cotda"><p>D</p></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
</body>
    
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{asset('codegame/jquery.fireworks.js')}}"></script>
<script src="{{asset('codegame/js.js')}}"></script>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
</head>

<body style="background-color: whitesmoke;" >
    {{View::make('Navbar')}}

    <div class="container">
        <div class="header_container">
            <div class="text_home">
             
            </div>
            <div class="info_home">
             <p>Trang chi tiết video | Tài khoản:ADMIN
                 <a href="/admin/themvideo">Trang khóa học</a>
             </p>
            </div>
        </div>
        <p></p>
        <div class="card">
            <div class="card-header">
              VIDEO KHÓA HỌC
            </div>
            <div class="card-body">
                <iframe width="100%" height="500" src="{{$data->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h5>{{$data->tieude}}</h5>
                <h7>{{$data->mota}}</h7>
                <input hidden id="id" type="text" value="{{$data->id}}">
            </div>
          </div>
          <p></p>
          

          <div class="card text" style="background-color: whitesmoke;">
            <div class="card-header">
              BÌNH LUẬN
            </div>
            <div class="card-body">
                <form onsubmit="return sendMessage();">
                    <div class="custom-file">
                        <input style="width: 80%; float: left;" type="text" class="form-control" placeholder="Nhập bình luận tại đây..." aria-label="Text input with dropdown button" id="cmt_bl" autocomplete="off">
                        <button style="width: 18%; margin-left: 1%; " type="submit" class="btn btn-primary">BÌNH LUẬN</button>
                    </div>
                    <P></P>
                </form>
                <P></P>
                <div id="show_cmt"></div>
            </div>
            <div class="card-footer text-muted">
            </div>
          </div>
         
    </div>    
    
</body>
</html>
<style>
    #test{
         width: 100%;
        height: auto;
        background: white;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
        border-radius: 5px 5px 5px 5px;
        -webkit-box-shadow: 10px 10px 31px -11px rgba(60,200,207,1);
        -moz-box-shadow: 10px 10px 31px -11px rgba(60,200,207,1);
        box-shadow: 10px 10px 31px -11px rgba(60,200,207,1);
        
    }
   
   
</style>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-database.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBdoBoYWntbJODY156j3Fj9BwZLYWQTuaY",
    authDomain: "binhluan-58cbd.firebaseapp.com",
    projectId: "binhluan-58cbd",
    storageBucket: "binhluan-58cbd.appspot.com",
    messagingSenderId: "423622006790",
    appId: "1:423622006790:web:05d621c3df6de25de00b87"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  var id=document.querySelector("#id").value;
  function sendMessage(){
    var cmt_bl=document.getElementById("cmt_bl").value;
      firebase.database().ref("binhluan").push().set({
          "ten":"ADMIN",
          "noidung":cmt_bl,
          "ID":id
      });
      return false;
  }
  firebase.database().ref("binhluan").on("child_added",function(snapshot){
        if(snapshot.val().ID==id){
        var html="";
        html +="<p id=test>";
            html +="🤩 "+snapshot.val().ten + ":" + snapshot.val().noidung;
        html +="</p>";
       

        document.getElementById('show_cmt').innerHTML+=html;
        }
  })    


</script>
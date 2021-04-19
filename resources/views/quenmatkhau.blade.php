<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">CẬP NHẬT MẬT KHẨU</h3>            
            <div class="card-text">
                <form action="/update_password" id="form_submit" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">MẬT KHẨU MỚI</label>
                        <input type="password" id="mk" name="mk" placeholder="Nhập mật khẩu..." class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NHẬP MẬT KHẨU MỚI</label>
                        <input type="password" id="nmk" placeholder="Nhập lại mật khẩu..." class="form-control form-control-sm">
                    </div>
                    <input  type="text" name="token" value="{{$id}}">
                    <button type="submit" class="btn btn-primary btn-block submit-btn">CẬP NHẬT</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<style>
    html,body { height: 100%; }

body{
	display: -ms-flexbox;
	display: -webkit-box;
	display: flex;
	-ms-flex-align: center;
	-ms-flex-pack: center;
	-webkit-box-align: center;
	align-items: center;
	-webkit-box-pack: center;
	justify-content: center;
	background-color: #f5f5f5;
}

form{
	padding-top: 10px;
	font-size: 13px;
	margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
	font-size: 13px;
}

.login-form{ 
	width:320px;
	margin:20px;
}

.sign-up{
	text-align:center;
	padding:20px 0 0;
}

span{
	font-size:14px;
}

.submit-btn{
	margin-top:20px;
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
// var mk=$('#mk').val();
// var nmk=$('#nmk').val();
// if(mk!==nmk){
//     alert('dsada');
// }

$( document ).ready(function() {
    $('#form_submit').submit(function(e){
var mk=$('#mk').val();
var nmk=$('#nmk').val();
if(mk!==nmk){
    e.preventDefault();
    alert('Vui lòng nhập trùng nhau');
}
if(mk==''||nmk==''){
    e.preventDefault();
    alert('Không được để trống');
}
})
});

</script>
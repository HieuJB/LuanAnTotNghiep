<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
    <script>
        truncateDecimals = function (number) {
                    return Math[number < 0 ? 'ceil' : 'floor'](number);
                };
        if('geolocation' in navigator){
            console.log('geolocation available');
            navigator.geolocation.getCurrentPosition(function(position) {
                var lat=position.coords.latitude;
                var long=position.coords.longitude;
                
    
    // Applied to Dogbert's answer:
    // var a = 5.46777777;
                lat = truncateDecimals(lat * 1000) / 1000; 
                long = truncateDecimals(long * 1000) / 1000; 
                document.getElementById('latitude').value=lat;
                document.getElementById('longitude').value=long;
                // document.getElementById('latitude').value = price_to_number(1000.021212);
                console.log(position);
            });
        }else{
            console.log('geolocation is not available');
        }
    
    
    </script>
</head>
<body>
    @if(Session::has('thatbai'))
        <div style="text-align: center;" class="alert alert-danger alert-dismissible fade show" role="alert">
            {{Session::get('thatbai')}}
        </div>
    @endif
        <form id="form_verify" action="/verify_msv" method="POST">
       

        @csrf
        <div class="form-group">
        <h5 style="text-align: center; margin-top: 20px;">VUI LÒNG NHẬP MÃ SINH VIÊN.</h5>
        <label for="">MÃ SINH VIÊN:</label>
        <input type="text"
            class="form-control" name="msv" id="" aria-describedby="helpId" placeholder="Vui lòng nhập mã sinh viên tại đây...">
            <P></P>
            <input hidden type="text" name="giaovien" value="{{$id}}">
            <P></P>
        </div>
        <button type="submit" class="btn btn-primary">KIỂM TRA</button>
    </form> 
</body>
</html>



{{--  <html>
    <head>
        <title>ZOOM-CLONE --- NIRUPAM TECH</title>
        <script src="https://meet.jit.si/external_api.js"></script>
    </head>
    <body>
        <div id="jitsi-container"></div>
        <script>
            var button = document.querySelector('#start');
            var container = document.querySelector('#jitsi-container');
            var api = null;

           
                var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                var stringLength = 30;
                function pickRandom () {
                    return possible[Math.floor() * possible.length];
                }
                var randomString = Array.apply(null,Array(stringLength)).map (pickRandom).join('');
                var domain = "meet.jit.si";
                var options = {
                    "roomName": randomString,
                    "parentNode": container,
                    "width": 900,
                    "height": 900,
                };
                api = new JitsiMeetExternalAPI(domain, options);
         
        </script>
    </body>
</html>  --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://meet.jit.si/external_api.js"></script>
    <title>Trang chủ</title>
</head>
{{View::make('Navbar')}}
<body style="background-color: #e9ecefe8;">
<!-- <a href="/logout">Logout</a> -->
    <div class="container">
       <div class="header_container">
           <div class="text_home">
            
           </div>
           <div class="info_home">
            <p>Trang học online | Tài khoản:@if(Session::has('email1'))
                {{Session::get('email1')}}
                <a href="/giaovien">Trang chủ</a>
                @endif
            </p>
           </div>
       </div>
    <h1 style="text-align: center;">TRANG HỌC TRỰC TUYẾN</h1>
    <div style="text-align: center;" id="jitsi-container"></div>
        <script>
            var container = document.querySelector('#jitsi-container');
            var ramdom=Math.floor(Math.random() * 100000000000000000) + 1;
            var api = null;
                // var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                // var stringLength = 30;
                // function pickRandom () {
                //     return possible[Math.floor() * possible.length];
                // }
                // var randomString = Array.apply(null,Array(stringLength)).map (pickRandom).join('');
                var domain = "meet.jit.si";
                var options = {
                    "roomName": ramdom,
                    "parentNode": container,
                    "width": 900,
                    "height": 900,
                };
                api = new JitsiMeetExternalAPI(domain, options);
         
        </script>
    </div>

</body>
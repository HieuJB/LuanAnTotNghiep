<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
    <title>Trang xếp hạng</title>
</head>
<body>
    {{View::make('Navbar')}}
    <div class="container">
        <div class="header_container">
            <div class="text_home">
             
            </div>
            <div class="info_home">
             <p>Trang xếp hạng | Tài khoản:ADMIN
                 <a href="/admin">Trang chủ</a>
             </p>
            </div>
        </div>
        <div class="tinhnang">
            <div class="trangcanhan" style="width: 40%;">
                <img id="img_tds" src="{{asset('img/lichsu4.png')}}">
            </div>
           <div class="table_score" style="overflow-y: auto;">
            <table class="table table-striped tb_score">
                <thead class="thead-dark" >
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">TÊN</th>
                    <th scope="col">SỐ ĐIỂM</th>
                    <th scope="col">THỜI GIAN</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $score = 1; ?>
                    @foreach ($data as $data )
                   <tr>
                       <td>{{$score}}</td>
                       <td>{{$data->name}}</td>
                       <td>{{$data->score}}</td>
                       <td>{{$data->date}}</td>
                   </tr>
                   <?php $score++ ?>
                   @endforeach
                </tbody>
              </table>
           </div>
       </div>
    </div>
    <p></p>
    {{View::make('footer')}}
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body style="background-color: whitesmoke;" >
    {{View::make('Navbar')}}
    <div class="container">
       <div class="header_container">
           <div class="text_home">
            
           </div>
            <div class="info_home">
             <p>Trang khóa học | Tài khoản:@if(Session::has('email'))
                 {{Session::get('email')}}
                 <a href="/home">Trang chủ</a>
                 @endif
             </p>
            </div>
       </div>
    </div>
    <div class="container">
    <p></p>
        <h1 style="text-align: center;">KHÓA HỌC TRỰC TUYẾN</h1>
    
        
        <div class="row">
            @foreach($data as $data)
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img style="height: 200px;" src="{{asset('img_imp/'.$data->file)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->tieude}}</h5>
                        <p class="card-text" style="height: 80px;">{{$data->mota}}</p>
                        <a href="chitietvideo/{{$data->id}}" class="btn btn-primary">XEM VIDEO</a>
                    </div>
                </div>
            </div>
            @endforeach
    
        </div>
    
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<style>
    .card{
        margin-bottom: 20px;
        -webkit-box-shadow: 10px 15px 24px -4px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 15px 24px -4px rgba(0,0,0,0.75);
        box-shadow: 10px 15px 24px -4px rgba(0,0,0,0.75);
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
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
                document.getElementById('lat').value=lat;
                document.getElementById('long').value=long;
                // document.getElementById('latitude').value = price_to_number(1000.021212);
                console.log(position);
            });
        }else{
            console.log('geolocation is not available');
        }
    
    
    </script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Trang câu hỏi</title>
</head>
<body style="background-color: #e9ecefe8;">
    {{View::make('Navbar')}}
    
    <div class="container">
      @if(Session::has('themthanhcong'))
      <div class="alert alert-success succ" role="alert">
         
      {{Session::get('themthanhcong')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif
       <div class="header_container">
           <div class="text_home">
           
           </div>
           <div class="info_home">
            <p>Trang câu hỏi | Tài khoản:@if(Session::has('email1'))
                {{Session::get('email1')}}
                <a href="/giaovien">Trang chủ</a>
                @endif
            </p>
           </div>
       </div>
       <h1 style="text-align: center;">DANH SÁCH CÂU HỎI ĐIỂM DANH</h1>
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">ĐIỂM DANH</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
          THÊM CÂU HỎI
        </button>
      <P></P>
      <form id="check_file" method="POST" enctype="multipart/form-data" action="{{route('import_cauhoi_diemdanh')}}">
          @csrf
          <div class="form-group">
              <input style="width:22%" placeholder="" id="file" type="file" name="file"  class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">THÊM BẰNG FILE</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_diemdanh">
            CHI TIẾT ĐIỂM DANH
          </button>
      </form>
      <p></p>
      <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CÂU HỎI</th>
                    <th>ĐÁP ÁN A</th>
                    <th>ĐÁP ÁN B</th>
                    <th>ĐÁP ÁN C</th>
                    <th>ĐÁP ÁN D</th>
                    <th>CHỈNH SỬA</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
      </table>
    </div>
    </div>
  </div>
</div>

 <!-- Modal THONG TIN DIEM DANH -->
 <div class="modal fade" id="exampleModal_diemdanh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LỰA CHỌN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="input-group mb-3">
              <form style="width:100%" action="/hienthi_diemdanh" method="POST">
                  @csrf
                  <label for="">MÔN HỌC</label>
                  <select name="monhoc" class="custom-select" id="inputGroupSelect01">
                      @foreach($data_tmh3 as $data_tmh3) 
                      <option >{{$data_tmh3->tenmonhoc}}</option>
                      @endforeach
                  </select>
                  <p></p>
                  <label for="">MÃ HỌC PHẦN</label>
                  <select name="mahocphan" class="custom-select" id="inputGroupSelect01">
                      @foreach($data_mhp3 as $data_mhp3) 
                      <option>{{$data_mhp3->mahocphan}}</option>
                       @endforeach
                  </select>
                  <p></p>
                  <button style="width:50%;margin-left: 25%;margin-right: 25%;" type="submit" class="btn btn-primary">ĐIỂM DANH</button>            
              </form>
            </div>
      </div>
    </div>
  </div>
</div>


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">LỰA CHỌN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="input-group mb-3">
                <form style="width:100%" id="form_lat_long"  action="/gdasjh" method="POST">
                    @csrf
                    <label for="">MÔN HỌC</label>
                    <select name="" class="custom-select" id="inputGroupSelect01">
                        @foreach($data_tmh as $data_tmh) 
                        <option >{{$data_tmh->tenmonhoc}}</option>
                        @endforeach
                    </select>
                    <p></p>
                    <label for="">MÃ HỌC PHẦN</label>
                    <select name="mahocphan" class="custom-select" id="inputGroupSelect01">
                        @foreach($data_mhp as $data_mhp) 
                        <option>{{$data_mhp->mahocphan}}</option>
                         @endforeach
                    </select>
                    <p></p>
                    <label for="">BUỔI HỌC</label>
                    <select  name="buoi_hoc" class="custom-select" id="inputGroupSelect01">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <p></p>
                    <div class="form-group">
                      <label for="">LATITUDE</label>
                      <input type="text"
                        class="form-control" name="lat" id="lat" aria-describedby="helpId" placeholder="">
                    </div>
                    <P></P>
                    <div class="form-group">
                      <label for="">LONGITUDE</label>
                      <input type="text"
                        class="form-control" name="long" id="long" aria-describedby="helpId" placeholder="">
                    </div>
                    <button style="width:50%;margin-left: 25%;margin-right: 25%;" type="submit" class="btn btn-primary">ĐIỂM DANH</button>            
                </form>
              </div>
        </div>
      </div>
    </div>
  </div>
<!-- Modal add cau hoi-->
  <div  class="modal fade bd-example-modal-lg" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div  class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="bookForm" action="/add_cauhoi_diemdanh" method="POST">
          @csrf
          <div class="form-group" style="width: 97%">
            <label for="">CÂU HỎI</label>
            <input type="text"
              class="form-control" name="cauhoi" id="cauhoi" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
            <label for="">ĐÁP ÁN A</label>
            <input type="text"
              class="form-control" name="ans" id="ansa" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
            <label for="">ĐÁP ÁN B</label>
            <input type="text"
              class="form-control" name="ansb" id="ansb" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
            <label for="">ĐÁP ÁN C</label>
            <input type="text"
              class="form-control" name="ansc" id="ansc" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
            <label for="">ĐÁP ÁN D</label>
            <input type="text"
              class="form-control" name="ansd" id="ansd" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
            <label for="">ĐÁP ÁN ĐÚNG</label>
            <input type="text"
              class="form-control" name="caucx" id="caucx" aria-describedby="helpId" placeholder="">
          </div>
          
          <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
            <label for="">BUỔI HỌC</label>
            <select class="custom-select" name="buoi" id="buoi">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
          <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
            <label for="">MÃ HỌC PHẦN</label>
            <select class="custom-select" name="mahocphan" id="mahocphan">
            @foreach($data_mhp1 as $data_mhp1)
              <option value="{{$data_mhp1->mahocphan}}">{{$data_mhp1->mahocphan}}</option>
            @endforeach
            </select>
          </div>
          <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
            <label for="">MÔN HỌC</label>
            <select class="custom-select" name="monhoc" id="monhoc">
             @foreach($data_tmh1 as $data_tmh1)
              <option value="{{$data_tmh1->tenmonhoc}}">{{$data_tmh1->tenmonhoc}}</option>
            @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>
<!-- Modal edit cau hoi-->

  <div  class="modal fade bd-example-modal-lg" id="exampleModal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div  class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="bookForm_edit">
            @csrf
            
            <input hidden type="text"
                      class="form-control" name="" id="id" aria-describedby="helpId" placeholder=""> 
            <div class="form-group" style="width: 97%">
              <label for="">CÂU HỎI</label>
              <input type="text"
                class="form-control"  id="cauhoi_edit" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
              <label for="">ĐÁP ÁN A</label>
              <input type="text"
                class="form-control"  id="ansa_edit" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
              <label for="">ĐÁP ÁN B</label>
              <input type="text"
                class="form-control"  id="ansb_edit" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
              <label for="">ĐÁP ÁN C</label>
              <input type="text"
                class="form-control"  id="ansc_edit" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
              <label for="">ĐÁP ÁN D</label>
              <input type="text"
                class="form-control"  id="ansd_edit" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
              <label for="">ĐÁP ÁN ĐÚNG</label>
              <input type="text"
                class="form-control"  id="caucx_edit" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
              <label for="">BUỔI HỌC</label>
              <select class="custom-select" id="buoi_edit">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
              <label for="">MÃ HỌC PHẦN</label>
              <select class="custom-select"  id="mahocphan_edit">
              @foreach($data_mhp2 as $data_mhp2)
                <option value="{{$data_mhp2->mahocphan}}">{{$data_mhp2->mahocphan}}</option>
              @endforeach
              </select>
            </div>
            <div class="form-group" style="width: 48%; float: left; margin-right: 1%;">
              <label for="">MÔN HỌC</label>
              <select class="custom-select"  id="monhoc_edit">
              @foreach($data_tmh2 as $data_tmh2)
                <option value="{{$data_tmh2->tenmonhoc}}">{{$data_tmh2->tenmonhoc}}</option>
              @endforeach
              </select>
              <input hidden type="text" id="giaovien_edit">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
      </div>
    </div>
  </div>
  
</body>
</html>
<script>

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax:"{{route('index.index2')}}",
        columns: [
            {data:'id', name: 'id'},
            {data:'cauhoi', name: 'cauhoi'},
            {data:'ansa', name: 'ansa'},
            {data:'ansb', name: 'ansb'},
            {data:'ansc', name: 'ansc'},
            {data:'ansd', name: 'ansd'},
            {data:'action', name: 'action', orderable: false, searchable: false},
        ],
    });

    $('#bookForm').submit(function(e){
        e.preventDefault();
        var id = $('#id').val();
        var cauhoi = $('#cauhoi').val();
        var ansa = $('#ansa').val();
        var ansb = $('#ansb').val();
        var ansc = $('#ansc').val();
        var ansd = $('#ansd').val();
        var caucx = $('#caucx').val();
        var buoi = $('#buoi').val();
        var mahocphan = $('#mahocphan').val();
        var monhoc = $('#monhoc').val();
        if(cauhoi==""||ansa==""||ansb==""||ansc==""||ansd==""||caucx==""){
          swal({ icon: 'error', title: 'Lỗi...', text: 'Vui lòng nhập đầy đủ thông tin!', })
        }else{
          $.ajax({
         url:"{{route('data1_add')}}",
         type:"POST",
         data:{
            id:id,
            cauhoi:cauhoi,
            ansa:ansa,
            ansb:ansb,
            ansc:ansc,
            ansd:ansd,
            caucx:caucx,
            buoi:buoi,
            mahocphan:mahocphan,
            monhoc:monhoc,
         },
         success:function(add_data){
             table.draw();      
              $("#bookForm")[0].reset(); 
         }})    
        }
    });

    $('#check_file').submit(function(e){
      const file=$('#file').val();
      if(file.indexOf("xls") > 0){
      }else{
        e.preventDefault();
        swal({ icon: 'error', title: 'Lỗi...', text: 'Bạn chưa nhập File hoặc định dạng không hợp lệ!!!', })
        $('#file').val('');
      }
    })

    $('body').on('click', '#edit', function () {
        var id = $(this).data('id');// lay id tu trang khac khong cung trong 1 trang
        $.get('/edit_cauhoi_diemdanh/'+id,function(edit_data_form){
            $('#id').val(edit_data_form.id);
            $('#cauhoi_edit').val(edit_data_form.cauhoi);
            $('#ansa_edit').val(edit_data_form.ansa);
            $('#ansb_edit').val(edit_data_form.ansb);
            $('#ansc_edit').val(edit_data_form.ansc);
            $('#ansd_edit').val(edit_data_form.ansd);
            $('#caucx_edit').val(edit_data_form.caucx);
            $('#buoi_edit').val(edit_data_form.buoi);
            $('#mahocphan_edit').val(edit_data_form.mahocphan);
            $('#monhoc_edit').val(edit_data_form.monhoc);
            $('#giaovien_edit').val(edit_data_form.giaovien);
            $('#exampleModal_edit').modal('show');
      });
    });

    $('#bookForm_edit').submit(function(e){
        e.preventDefault();
        var id = $('#id').val();
        var cauhoi = $('#cauhoi_edit').val();
        var ansa = $('#ansa_edit').val();
        var ansb = $('#ansb_edit').val();
        var ansc = $('#ansc_edit').val();
        var ansd = $('#ansd_edit').val();
        var caucx = $('#caucx_edit').val();
        var buoi = $('#buoi_edit').val();
        var mahocphan = $('#mahocphan_edit').val();
        var monhoc = $('#monhoc_edit').val();
        var giaovien = $('#giaovien_edit').val();
  
        $.ajax({
            url:"{{route('edit_diemdanh')}}",
            type:"PUT",
            data:{
                id:id,
                cauhoi:cauhoi,
                ansa:ansa,
                ansb:ansb,
                ansc:ansc,
                ansd:ansd,
                caucx:caucx,
                buoi:buoi,
                mahocphan:mahocphan,
                monhoc:monhoc,
                giaovien:giaovien,
            },
            success:function(suc){
                table.draw();
                $('#exampleModal_edit').modal('hide');
            }
        })
    });
    
    $('body').on('click','#remove',function(){
        var id = $(this).data('id');// lay id tu trang khac khong cung trong 1 trang
        $.ajax({
            url:"/delete_cauhoi_diemdanh/"+id,
            type:"DELETE",
            success:function(rem){
                table.draw();
            }
        })
    })
});
</script>
 
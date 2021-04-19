<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Thêm câu hỏi</title>
</head>
<body>
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
             <p>Trang thêm sinh viên | Tài khoản:{{Session::get('email1')}}
                 <a href="/giaovien">Trang chủ</a>
             </p>
            </div>
        </div>
        <h1 style="text-align: center;">DANH SÁCH SINH VIÊN</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            THÊM SINH VIÊN
        </button>

        <!-- <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            THÊM BẰNG FILE 
        </button> -->
        <P></P>
        <form id="check_file" method="POST" enctype="multipart/form-data" action="{{route('import_sv')}}">
            @csrf
            <div class="form-group">
                <input id="file" style="width:22%" placeholder="dsahgdajh" type="file" name="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">THÊM BẰNG FILE</button>
        </form>
          <p></p>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="bookForm">
                  <div class="form-group">
                    <label for="">MSV</label>
                    <input type="text"
                      class="form-control" name="" id="msv" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">HỌ TÊN</label>
                    <input type="text"
                      class="form-control" name="" id="hoten" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">LỚP</label>
                    <input type="text"
                      class="form-control" name="" id="lop" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">MÃ HỌC PHẦN</label>
                    <input type="text"
                      class="form-control" name="" id="mahocphan" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">TÊN MÔN HỌC</label>
                    <input type="text"
                      class="form-control" name="" id="tenmonhoc" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text"
                      class="form-control" name="" id="email" aria-describedby="helpId" placeholder="">
                  </div>
                  <div style="display:none" class="form-group">
                    <label for="">GIÁO VIÊN</label>
                    <input type="text"
                      class="form-control" name="" id="giaovien" aria-describedby="helpId" placeholder="">
                  </div> 
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        
    </div>
    
    <div class="modal fade" id="exampleModal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="bookForm_edit">
                <div style="display:none" class="form-group">
                    <label for="">ID</label>
                        <input type="text"
                      class="form-control" name="" id="id" aria-describedby="helpId" placeholder="">
                  </div> 
                <div class="form-group">
                    <label for="">MSV</label>
                        <input type="text"
                      class="form-control" name="" id="msv_edit" aria-describedby="helpId" placeholder="">
                </div> 
                <div class="form-group">
                    <label for="">HỌ TÊN</label>
                        <input type="text"
                      class="form-control" name="" id="hoten_edit" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">LỚP</label>
                    <input type="text"
                      class="form-control" name="" id="lop_edit" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">MÃ HỌC PHẦN</label>
                    <input type="text"
                      class="form-control" name="" id="mahocphan_edit" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">TÊN MÔN HỌC</label>
                    <input type="text"
                      class="form-control" name="" id="tenmonhoc_edit" aria-describedby="helpId" placeholder="">
                  </div> 
                  
                  <div class="form-group" style="display:none">
                    <label for="">GIÁO VIÊN</label>
                    <input type="text"
                      class="form-control" name="" id="giaovien_edit" aria-describedby="helpId" placeholder="">
                  </div> 
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Cập nhật</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th style="width:8%">STT</th>
                    <th>MSV</th>
                    <th style="width:20%">HỌ TÊN</th>
                    <th>LỚP</th>
                    <th>MÃ HỌC PHẦN</th>
                    <th>TÊN MÔN HỌC</th>
                    <th>CHỈNH SỬA</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</body>
</html>
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
        ajax:"{{route('index.index1')}}",
        columns: [
            {data:'id', name: 'id'},
            {data:'msv', name: 'msv'},
            {data:'hoten', name: 'hoten'},
            {data:'lop', name: 'lop'},
            {data:'mahocphan', name: 'mahocphan'},
            {data:'tenmonhoc', name: 'tenmonhoc'},
            {data:'action', name: 'action', orderable: false, searchable: false},
        ],
    });


    $('#bookForm').submit(function(e){
        e.preventDefault();
        var id = $('#id').val();
        var msv = $('#msv').val();
        var hoten = $('#hoten').val();
        var lop = $('#lop').val();
        var mahocphan = $('#mahocphan').val();
        var tenmonhoc = $('#tenmonhoc').val();
        var email = $('#email').val();
        var giaovien = $('#giaovien').val();
         $.ajax({
         url:"{{route('data1_add1')}}",
         type:"POST",
         data:{
            id:id,
            msv:msv,
            hoten:hoten,
            lop:lop,
            mahocphan:mahocphan,
            tenmonhoc:tenmonhoc,
            email:email,
            giaovien:giaovien,
         },
         success:function(add_data){
             table.draw();      
              $("#bookForm")[0].reset(); 
         }
     })    
    });

    $('body').on('click', '#edit', function () {
        var id = $(this).data('id');// lay id tu trang khac khong cung trong 1 trang
        $.get('/edit_sv/'+id,function(edit_data_form){
            $('#id').val(edit_data_form.id);
            $('#msv_edit').val(edit_data_form.msv);
            $('#hoten_edit').val(edit_data_form.hoten);
            $('#lop_edit').val(edit_data_form.lop);
            $('#mahocphan_edit').val(edit_data_form.mahocphan);
            $('#tenmonhoc_edit').val(edit_data_form.tenmonhoc);
            $('#giaovien_edit').val(edit_data_form.giaovien);
            $('#exampleModal_edit').modal('show');
    });
    });

    $('#bookForm_edit').submit(function(e){
        e.preventDefault();
        var id = $('#id').val();
        var msv = $('#msv_edit').val();
        var hoten = $('#hoten_edit').val();
        var lop = $('#lop_edit').val();
        var mahocphan = $('#mahocphan_edit').val();
        var tenmonhoc = $('#tenmonhoc_edit').val();
        var giaovien = $('#giaovien_edit').val();
    
        $.ajax({
            url:"{{route('edit_data_sv')}}",
            type:"PUT",
            data:{
                id:id,
                msv:msv,
                hoten:hoten,
                lop:lop,
                mahocphan:mahocphan,
                tenmonhoc:tenmonhoc,
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
            url:"/delete_sv/"+id,
            type:"DELETE",
            success:function(rem){
                table.draw();
            }
        })
    })

    $('#check_file').submit(function(e){
      const file=$('#file').val();
      if(file.indexOf("xls") > 0){
      }else{
        e.preventDefault();
        swal({ icon: 'error', title: 'Lỗi...', text: 'Bạn chưa nhập File hoặc định dạng không hợp lệ!!!', })
        $('#file').val('');
      }
    })

});
</script>

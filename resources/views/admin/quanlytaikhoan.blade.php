<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body >
    {{View::make('Navbar')}}
    <!-- <div class="container">
       <div class="header_container">
           <div class="text_home">
            
           </div>
           <div class="info_home">
            <p>Trang quản lý tài khoản | Tài khoản:ADMIN
                <a href="/admin">Trang chủ</a>
            </p>
           </div>
       </div>
      
    </div> -->
    <p></p>


    <div class="container">
      <div class="header_container">
        <div class="text_home">
         
        </div>
        <div class="info_home">
         <p>Trang quản lý tài khoản | Tài khoản:ADMIN
             <a href="/admin">Trang chủ</a>
         </p>
        </div>
    </div>
      <div class="">
        <P></P>
        <h1 style="text-align: center;">DANH SÁCH THÍ SINH TỰ DO</h1>
        <P></P>
          <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Tên tài khoản</th>
                    <th>Nghề nghiệp</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
      </div>

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
              <form id="bookForm_edit">
                <div class="form-group">
                    <label for="">ID</label>
                        <input type="text"
                      class="form-control" name="" id="id" aria-describedby="helpId" placeholder="">
                  </div> 
                <div class="form-group">
                    <label for="">Câu hỏi</label>
                        <input type="text"
                      class="form-control" name="" id="name" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án A</label>
                    <input type="text"
                      class="form-control" name="" id="email" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án B</label>
                    <input type="text"
                      class="form-control" name="" id="username" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án C</label>
                    <input type="text"
                      class="form-control" name="" id="nghenghiep" aria-describedby="helpId" placeholder="">
                  </div> 
                  
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Cập nhật</button>
              </form>
            </div>
          </div>
        </div>
      </div>


    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
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
        ajax: "{{ route('index.index_ql') }}",
        columns: [
            {data:'id', name: 'id'},
            {data:'name', name: 'name'},
            {data:'email', name: 'email'},
            {data:'username', name: 'username'},
           
            {data:'nghenghiep', name: 'nghenghiep'},
            {data:'action', name: 'action', orderable: false, searchable: false},
        ],
    });
    $('body').on('click', '#edit', function (){
      var id = $(this).data('id');
            $.get('/edit1/'+id,function(edit_data_form){
                $('#id').val(edit_data_form.id);
                $('#name').val(edit_data_form.name);
                $('#email').val(edit_data_form.email);
                $('#username').val(edit_data_form.username);
                $('#nghenghiep').val(edit_data_form.nghenghiep);
                $('#password').val(edit_data_form.password);
                $('#exampleModal').modal('show');
            });
    });
    $('#bookForm_edit').submit(function(e){
        e.preventDefault();
        var id = $('#id').val();
        var name = $('#name').val();
        var email = $('#email').val();
        var username = $('#username').val();
        var nghenghiep = $('#nghenghiep').val();
        var password = $('#password').val();
        
    
        $.ajax({
            url:"{{route('edit_data_qltk')}}",
            type:"PUT",
            data:{
                id:id,
                name:name,
                email:email,
                username:username,
                nghenghiep:nghenghiep,
                password:password,
            },
            success:function(suc){
                table.draw();
                $('#exampleModal').modal('hide');
            }
        })
    });

    $('body').on('click','#remove',function(){
        var id = $(this).data('id');// lay id tu trang khac khong cung trong 1 trang
        $.ajax({
            url:"/delete1/"+id,
            type:"DELETE",
            success:function(rem){
                table.draw();
            }
        })
    });
      });
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

    <title>Thêm câu hỏi</title>
</head>
<body>
    {{View::make('Navbar')}}
    <div class="container">
        <div class="header_container">
            <div class="text_home">
             
            </div>
            <div class="info_home">
             <p>Trang thêm câu hỏi | Tài khoản:ADMIN
                 <a href="/admin">Trang chủ</a>
             </p>
            </div>
        </div>
        <p></p>
        <h1 style="text-align: center;">DANH SÁCH CÂU HỎI TRÒ CHƠI</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            THÊM CÂU HỎI
          </button>
          <p></p>
          <P></P>
        <form id="check_file" method="POST" enctype="multipart/form-data" action="{{route('import_question_trochoi')}}">
            @csrf
            <div class="form-group">
                <input style="width:22%;" placeholder="dsahgdajh" type="file" name="file1" id="file" class="form-control">
            </div>
            <button  type="submit" class="btn btn-primary">THÊM BẰNG FILE</button>
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
                    <label for="">Câu hỏi</label>
                    <input type="text"
                      class="form-control" name="" id="question" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án A</label>
                    <input type="text"
                      class="form-control" name="" id="ansa" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án B</label>
                    <input type="text"
                      class="form-control" name="" id="ansb" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án C</label>
                    <input type="text"
                      class="form-control" name="" id="ansc" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án D</label>
                    <input type="text"
                      class="form-control" name="" id="ansd" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án đúng</label>
                    <input type="text"
                      class="form-control" name="" id="ansCX" aria-describedby="helpId" placeholder="">
                  </div> 
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Câu hỏi</th>
                    <th>Chỉnh sửa</th>
                    <th>Câu hỏi</th>
                    <th>Chỉnh sửa</th>
                    <th>Câu hỏi</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
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
                <div class="form-group">
                    <label for="">ID</label>
                        <input type="text"
                      class="form-control" name="" id="id" aria-describedby="helpId" placeholder="">
                  </div> 
                <div class="form-group">
                    <label for="">Câu hỏi</label>
                        <input type="text"
                      class="form-control" name="" id="question_edit" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án A</label>
                    <input type="text"
                      class="form-control" name="" id="ansa_edit" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án B</label>
                    <input type="text"
                      class="form-control" name="" id="ansb_edit" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án C</label>
                    <input type="text"
                      class="form-control" name="" id="ansc_edit" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án D</label>
                    <input type="text"
                      class="form-control" name="" id="ansd_edit" aria-describedby="helpId" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="">Đáp án đúng</label>
                    <input type="text"
                      class="form-control" name="" id="ansCX_edit" aria-describedby="helpId" placeholder="">
                  </div> 
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Cập nhật</button>
              </form>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
 $('#check_file').submit(function(e){
      const file=$('#file').val();
      if(file.indexOf("xls") > 0){
      }else{
        e.preventDefault();
         e.preventDefault();
        swal({ icon: 'error', title: 'Lỗi...', text: 'Bạn chưa nhập File hoặc định dạng không hợp lệ!!!', })
        $('#file').val('');
      }
    })
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('index.index_trochoi') }}",
        columns: [
            {data:'id', name: 'id'},
            {data:'question', name: 'question'},
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
        var question = $('#question').val();
        var ansa = $('#ansa').val();
        var ansb = $('#ansb').val();
        var ansc = $('#ansc').val();
        var ansd = $('#ansd').val();
        var ansCX = $('#ansCX').val();
         $.ajax({
         url:"{{route('add.data_trochoi')}}",
         type:"POST",
         data:{
            id:id,
            question:question,
            ansa:ansa,
            ansb:ansb,
            ansc:ansc,
            ansd:ansd,
            ansCX:ansCX,
         },
         success:function(add_data){
             table.draw();      
              $("#bookForm")[0].reset(); 
         }
     })    
    });

    $('body').on('click', '#edit', function () {
        var id = $(this).data('id');// lay id tu trang khac khong cung trong 1 trang
        $.get('/edit_trochoi/'+id,function(edit_data_form){
            $('#id').val(edit_data_form.id);
            $('#question_edit').val(edit_data_form.question);
            $('#ansa_edit').val(edit_data_form.ansa);
            $('#ansb_edit').val(edit_data_form.ansb);
            $('#ansc_edit').val(edit_data_form.ansc);
            $('#ansd_edit').val(edit_data_form.ansd);
            $('#ansCX_edit').val(edit_data_form.ansCX);
            $('#exampleModal_edit').modal('show');
    });
    });

    $('#bookForm_edit').submit(function(e){
        e.preventDefault();
        var id = $('#id').val();
        var question = $('#question_edit').val();
        var ansa = $('#ansa_edit').val();
        var ansb = $('#ansb_edit').val();
        var ansc = $('#ansc_edit').val();
        var ansd = $('#ansd_edit').val();
        var ansCX = $('#ansCX_edit').val();
        var ansPL = $('#ansPL_edit').val();
    
        $.ajax({
            url:"{{route('edit_data_trochoi')}}",
            type:"PUT",
            data:{
                id:id,
                question:question,
                ansa:ansa,
                ansb:ansb,
                ansc:ansc,
                ansd:ansd,
                ansCX:ansCX,
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
            url:"/delete_trochoi/"+id,
            type:"DELETE",
            success:function(rem){
                table.draw();
            }
        })
    })

});
</script>
<style>
table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {
    padding-right: 30px;
    
}
</style
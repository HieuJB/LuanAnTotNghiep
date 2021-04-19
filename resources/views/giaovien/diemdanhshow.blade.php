<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   <style>
       .buttons-html5{
          width: 100px;
          height: 40px;
          border: 1px solid blue;
          color: palegreen;
          font-weight: bold;
          background-color: royalblue;
          cursor: pointer;
       }
   </style>
   @if(Session::has('themthanhcong'))
   <div class="alert alert-success succ" role="alert">
      
   {{Session::get('themthanhcong')}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
    </button>
     </div>
     @endif
     @if(Session::has('themthatbai'))
   <div class="alert alert-danger" style="width: 40%; margin-left: 30%; margin-right: 30%; text-align: center;" role="alert">
   {{Session::get('themthatbai')}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
     </div>
     @endif
     <p></p>
   <H1 style="text-align: center;color: red;">DANH SÁCH ĐIỂM DANH</H1>
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    ĐIỂM DANH THỦ CÔNG
  </button>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/diemdanhthucong" method="POST">
            @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="">MSV</label>
            <input type="text"
              class="form-control" name="msv" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-group">
            <label for="">BUỔI HỌC</label>
            <select class="custom-select" name="buoi" id="buoi_edit">
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
          <div class="form-group">
            <label for="">ĐIỂM</label>
            <select class="custom-select" name="diem" id="buoi_edit">
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
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">ĐIỂM DANH</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  <p></p>

    <table class="table table-bordered data-table" style="width: 400%;">
        <thead>
            <tr>
                <th style="width: 2%; font-size: 12px;">STT</th>
                <th style="width: 2%; font-size: 12px;">MSV</th>
                <th style="width: 5%; font-size: 12px;">HỌ TÊN</th>
                <th style="width: 2%; font-size: 12px;">LỚP</th>
                <th style="width: 2%; font-size: 12px;">BUỔI 1</th>
                <th style="width: 2%; font-size: 12px;">ĐIỂM BUỔI 1</th>
                <th style="width: 2%; font-size: 12px;">BUỔI 2</th>
                <th style="width: 2%; font-size: 12px;">ĐIỂM BUỔI 2</th>
                <th style="width: 2%; font-size: 12px;">BUỔI 3</th>
                <th style="width: 2%; font-size: 12px;">ĐIỂM BUỔI 3</th>
                <th style="width: 2%; font-size: 12px;">BUỔI 4</th>
                <th style="width: 2%; font-size: 12px;">ĐIỂM BUỔI 4</th>
                <th style="width: 2%; font-size: 12px;">BUỔI 5</th>
                <th style="width: 2%; font-size: 12px;">ĐIỂM BUỔI 5</th>
                <th style="width: 2%; font-size: 12px;">BUỔI 6</th>
                <th style="width: 2%; font-size: 12px;">ĐIỂM BUỔI 6</th>
                <th style="width: 2%; font-size: 12px;">BUỔI 7</th>
                <th style="width: 2%; font-size: 12px;">ĐIỂM BUỔI 7</th>
                <th style="width: 2%; font-size: 12px;">BUỔI 8</th>
                <th style="width: 2%; font-size: 12px;">ĐIỂM BUỔI 8</th>
                <th style="width: 2%; font-size: 12px;">BUỔI 9</th>
                <th style="width: 2%; font-size: 12px;">ĐIỂM BUỔI 9</th>
                <th style="width: 2%; font-size: 12px;">BUỔI 10</th>
                <th style="width: 2%; font-size: 12px;">ĐIỂM BUỔI 10</th>
                <th style="width: 2%; font-size: 12px;">MÃ HỌC PHẦN</th>
                <th style="width: 2%; font-size: 12px;">MÔN HỌC</th>
                <th>CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
  </table>



  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/update_diemdanh" method="POST">
          @csrf
        <div class="modal-body">
          <div style="display: none;" class="form-group" style="width: 28%; float: left; margin-right: 1%;">
            <label for="">ID</label>
            <input  type="text"
              class="form-control"  id="id" name="id" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-group" style="width: 32%; float: left; margin-right: 1%;">
            <label for="">MSV</label>
            <input  type="text"
              class="form-control"  id="msv_edit" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-group" style="width: 32%; float: left; margin-right: 1%;">
            <label for="">HỌ TÊN</label>
            <input type="text"
              class="form-control"  id="hoten_edit" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-group" style="width: 32%; float: left; margin-right: 1%;">
            <label for="">LỚP</label>
            <input type="text"
              class="form-control"  id="lop_edit" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-group" style="width: 49%; float: left; margin-right: 1%;">
            <label for="">BUỔI 1</label>
            <select class="custom-select" name="buoi_edit_diemdanh" id="buoi_edit">
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
          <div class="form-group" style="width: 49%; float: left; margin-right: 1%;">
            <label for="">ĐIỂM </label>
            <select class="custom-select" name="diem_edit_diemdanh" id="buoi_edit">
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
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">CẬP NHẬT</button>
      </div>
    </form>
    </div>
  </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
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
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
        processing: true,
        serverSide: true,
        ajax:"{{route('show_diemdanh')}}",
        columns: [
            {data:'id', name: 'id'},
            {data:'msv', name: 'msv'},
            {data:'hoten', name: 'hoten'},
            {data:'lop', name: 'lop'},
            {data:'buoi1', name: 'buoi1'},
            {data:'diembuoi1', name: 'diembuoi1'},
            {data:'buoi2', name: 'buoi2'},
            {data:'diembuoi2', name: 'diembuoi2'},
            {data:'buoi3', name: 'buoi3'},
            {data:'diembuoi3', name: 'diemuoi3'},
            {data:'buoi4', name: 'buoi4'},
            {data:'diembuoi4', name: 'diembuoi4'},
            {data:'buoi5', name: 'buoi5'},
            {data:'diembuoi5', name: 'diembuoi5'},
            {data:'buoi6', name: 'buoi6'},
            {data:'diembuoi6', name: 'diembuoi6'},
            {data:'buoi7', name: 'buoi7'},
            {data:'diembuoi7', name: 'diembuoi7'},
            {data:'buoi8', name: 'buoi8'},
            {data:'diembuoi8', name: 'diembuoi8'},
            {data:'buoi9', name: 'buoi9'},
            {data:'diembuoi9', name: 'diembuoi9'},
            {data:'buoi10', name: 'buoi10'},
            {data:'diembuoi10', name: 'diembuoi10'},
            {data:'mahocphan', name: 'mahocphan'},
            {data:'monhoc', name: 'monhoc'},
            {data:'action', name: 'action', orderable: false, searchable: false},
        ],
    });

    $('body').on('click', '#edit', function () {
          var id = $(this).data('id');// lay id tu trang khac khong cung trong 1 trang
          $.get('/edit_sinhvien_diemdanh/'+id,function(edit_data_form){
              $('#id').val(edit_data_form.id);
              $('#msv_edit').val(edit_data_form.msv);
              $('#hoten_edit').val(edit_data_form.hoten);
              $('#lop_edit').val(edit_data_form.lop);
              $('#buoi1_edit').val(edit_data_form.buoi1);
              $('#diembuoi1_edit').val(edit_data_form.diembuoi1);
              $('#buoi2_edit').val(edit_data_form.buoi2);
              $('#diembuoi2_edit').val(edit_data_form.diembuoi2);
              $('#buoi3_edit').val(edit_data_form.buoi3);
              $('#diembuoi3_edit').val(edit_data_form.diembuoi3);
              $('#buoi4_edit').val(edit_data_form.buoi4);
              $('#diembuoi4_edit').val(edit_data_form.diembuoi4);
              $('#buoi5_edit').val(edit_data_form.buoi5);
              $('#diembuoi5_edit').val(edit_data_form.diembuoi5);
              $('#buoi6_edit').val(edit_data_form.buoi6);
              $('#diembuoi6_edit').val(edit_data_form.diembuoi6);
              $('#buoi7_edit').val(edit_data_form.buoi7);
              $('#diembuoi7_edit').val(edit_data_form.diembuoi7);
              $('#buoi8_edit').val(edit_data_form.buoi8);
              $('#diembuoi8_edit').val(edit_data_form.diembuoi8);
              $('#buoi9_edit').val(edit_data_form.buoi9);
              $('#diembuoi9_edit').val(edit_data_form.diembuoi9);
              $('#buoi10_edit').val(edit_data_form.buoi10);
              $('#diembuoi10_edit').val(edit_data_form.diembuoi10);
              $('#mahocphan_edit').val(edit_data_form.mahocphan);
              $('#monhoc_edit').val(edit_data_form.monhoc);
              $('#giaovien_edit').val(edit_data_form.giaovien);
              $('.bd-example-modal-lg').modal('show');
      });
    });

    $('body').on('click','#remove',function(){
        var id = $(this).data('id');// lay id tu trang khac khong cung trong 1 trang
        $.ajax({
            url:"/delete_diemdanh/"+id,
            type:"DELETE",
            success:function(rem){
                table.draw();
            }
        })
    })


});

</script>
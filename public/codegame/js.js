const nhacnen = new Audio();
nhacnen.src = "codegame/audio/nhacnen.mp3";
const vongquay = new Audio();
vongquay.src = "codegame/audio/vongquay4.mp3";
const nhacchienthang = new Audio();
nhacchienthang.src = "codegame/audio/nhacwin1.mp3";
const nhacthua = new Audio();
nhacthua.src="codegame/audio/nhacthua1.mp3";
//
let rotateAngle = 3000;
const imgage = document.querySelector('#rotater');
var modal = document.querySelector('#exampleModal');
var data = ['sdadsad','dsad']
var audio_off_area = document.querySelector('#audio_off_area');
var audio_on_area = document.querySelector('#audio_on_area');
var i = -1;
var score = 0;
var check5050 = 0;
var checkdoicauhoi = 0;
var checkgoidienthoai = 0;
var checktuvan = 0;



//
$('#score').html(score);
// truyen du lieu cau hoi game
var url = 'http://127.0.0.1:8000/api/posts';



//ramdom
function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

//endramdomso%trogiup


//cac quyen tro giup
$('#quyen5050').click(function(){
  var ansCX = $('#ansCX').html();
  $('#quyen5050').attr("src","codegame/picture/5050dasudung.png")
  if(check5050==0){
    if(ansCX=='a'){
      $('#ansb').html('');
      $('#ansd').html('');
    }
    if(ansCX=='b'){
      $('#ansa').html('');
      $('#ansc').html('');
    }
    if(ansCX=='c'){
      $('#ansb').html('');
      $('#ansd').html('');
    }
    if(ansCX=='d'){
      $('#ansa').html('');
      $('#ansc').html('');
    }
  }else{
    Swal.fire('Bạn đã sử dụng quyền trợ giúp này rồi!!!')
  }
  check5050++;
})
//tuvan
$('#tuvan').click(function(){
  if(checktuvan=='0'){
    var ansCX = $('#ansCX').html();
    $('#exampleModal2').modal({backdrop: 'static', keyboard: false}) 
    var phantramnhat = getRndInteger(50,70);
    var phantramnhi1 = getRndInteger(5,10);
    var phantramnhi2 = getRndInteger(5,10);
    var phantramnhi3 = parseInt(100)-parseInt(phantramnhat)-parseInt(phantramnhi1)-parseInt(phantramnhi2);
    if(ansCX=='a'){
      $('#cota').html(phantramnhat+'%');
     
      var chieucaonhat = parseInt(phantramnhat)/parseInt(100)*parseInt(450);
      var margtopnhat = parseInt(400) - parseInt(chieucaonhat);
      $('#cota').css('height',chieucaonhat);
      $('#cota').css('marginTop',margtopnhat);
      
      $('#cotb').html(phantramnhi1+'%');
      var chieucaonhi1 = parseInt(phantramnhi1)/parseInt(100)*parseInt(450);
      var margtopnhi1 = parseInt(400) - parseInt(chieucaonhi1);
      $('#cotb').css('height',chieucaonhi1);
      $('#cotb').css('marginTop',margtopnhi1);
  
      $('#cotc').html(phantramnhi2+'%');
      var chieucaonhi2 = parseInt(phantramnhi2)/parseInt(100)*parseInt(450);
      var margtopnhi2 = parseInt(400) - parseInt(chieucaonhi2);
      $('#cotc').css('height',chieucaonhi2);
      $('#cotc').css('marginTop',margtopnhi2);
  
      $('#cotd').html(phantramnhi3+'%');
      var chieucaonhi3 = parseInt(phantramnhi3)/parseInt(100)*parseInt(450);
      var margtopnhi3 = parseInt(400) - parseInt(chieucaonhi3);
      $('#cotd').css('height',chieucaonhi3);
      $('#cotd').css('marginTop',margtopnhi3);
    }
    if(ansCX=='b'){
      $('#cotb').html(phantramnhat+'%');
      var chieucaonhat = parseInt(phantramnhat)/parseInt(100)*parseInt(450);
      var margtopnhat = parseInt(400) - parseInt(chieucaonhat);
      $('#cotb').css('height',chieucaonhat);
      $('#cotb').css('marginTop',margtopnhat);
  
      $('#cota').html(phantramnhi1+'%');
      var chieucaonhi1 = parseInt(phantramnhi1)/parseInt(100)*parseInt(450);
      var margtopnhi1 = parseInt(400) - parseInt(chieucaonhi1);
      $('#cota').css('height',chieucaonhi1);
      $('#cota').css('marginTop',margtopnhi1);
  
      $('#cotc').html(phantramnhi2+'%');
      var chieucaonhi2 = parseInt(phantramnhi2)/parseInt(100)*parseInt(450);
      var margtopnhi2 = parseInt(400) - parseInt(chieucaonhi2);
      $('#cotc').css('height',chieucaonhi2);
      $('#cotc').css('marginTop',margtopnhi2);
  
      $('#cotd').html(phantramnhi3+'%');
      var chieucaonhi3 = parseInt(phantramnhi3)/parseInt(100)*parseInt(450);
      var margtopnhi3 = parseInt(400) - parseInt(chieucaonhi3);
      $('#cotd').css('height',chieucaonhi3);
      $('#cotd').css('marginTop',margtopnhi3);
    }
    if(ansCX=='c'){
      $('#cotc').html(phantramnhat+'%');
      var chieucaonhat = parseInt(phantramnhat)/parseInt(100)*parseInt(450);
      var margtopnhat = parseInt(400) - parseInt(chieucaonhat);
      $('#cotc').css('height',chieucaonhat);
      $('#cotc').css('marginTop',margtopnhat);
  
      $('#cotb').html(phantramnhi1+'%');
      var chieucaonhi1 = parseInt(phantramnhi1)/parseInt(100)*parseInt(450);
      var margtopnhi1 = parseInt(400) - parseInt(chieucaonhi1);
      $('#cotb').css('height',chieucaonhi1);
      $('#cotb').css('marginTop',margtopnhi1);
  
      $('#cota').html(phantramnhi2+'%');
      var chieucaonhi2 = parseInt(phantramnhi2)/parseInt(100)*parseInt(450);
      var margtopnhi2 = parseInt(400) - parseInt(chieucaonhi2);
      $('#cota').css('height',chieucaonhi2);
      $('#cota').css('marginTop',margtopnhi2);
  
      $('#cotd').html(phantramnhi3+'%');
      var chieucaonhi3 = parseInt(phantramnhi3)/parseInt(100)*parseInt(450);
      var margtopnhi3 = parseInt(400) - parseInt(chieucaonhi3);
      $('#cotd').css('height',chieucaonhi3);
      $('#cotd').css('marginTop',margtopnhi3);
    }
    if(ansCX=='d'){
      $('#cotd').html(phantramnhat+'%');
      var chieucaonhat = parseInt(phantramnhat)/parseInt(100)*parseInt(450);
      var margtopnhat = parseInt(400) - parseInt(chieucaonhat);
      $('#cotd').css('height',chieucaonhat);
      $('#cotd').css('marginTop',margtopnhat);
  
      $('#cotb').html(phantramnhi1+'%');
      var chieucaonhi1 = parseInt(phantramnhi1)/parseInt(100)*parseInt(450);
      var margtopnhi1 = parseInt(400) - parseInt(chieucaonhi1);
      $('#cotb').css('height',chieucaonhi1);
      $('#cotb').css('marginTop',margtopnhi1);
  
      $('#cotc').html(phantramnhi2+'%');
      var chieucaonhi2 = parseInt(phantramnhi2)/parseInt(100)*parseInt(450);
      var margtopnhi2 = parseInt(400) - parseInt(chieucaonhi2);
      $('#cotc').css('height',chieucaonhi2);
      $('#cotc').css('marginTop',margtopnhi2);
  
      $('#cota').html(phantramnhi3+'%');
      var chieucaonhi3 = parseInt(phantramnhi3)/parseInt(100)*parseInt(450);
      var margtopnhi3 = parseInt(400) - parseInt(chieucaonhi3);
      $('#cota').css('height',chieucaonhi3);
      $('#cota').css('marginTop',margtopnhi3);
    } 
  }else{
    Swal.fire('Bạn đã sử dụng quyền trợ giúp này rồi!!!')
  }
  $('#tuvan').attr("src","codegame/picture/totuvandasudung.png")
  checktuvan++;
})



//endtuvan
//goidienthoai
$('#goidienthoai').click(function(){
  $('#goidienthoai').attr("src","codegame/picture/goidiendasudung.png")
  if(checkgoidienthoai==0){
    $('#exampleModal1').modal({backdrop: 'static', keyboard: false}) 
  }else{
    Swal.fire('Bạn đã sử dụng quyền trợ giúp này rồi!!!')
  }
  checkgoidienthoai++;
})

//endgoidienthoai



//endtrogiup
function rotate() {
    // $('#demo').attr("id","demoss")
    i++;
    var questi = parseInt(i)+parseInt(1);
    console.log(i);
    vongquay.play();
    imgage.setAttribute("style", "transform: rotate(" + rotateAngle + "deg)");
    console.log(rotateAngle);
    rotateAngle = rotateAngle - (Math.floor(Math.random() * 3800) + 2000);
 
    setTimeout(function(){
        $('#exampleModal').modal({backdrop: 'static', keyboard: false})  
    }, 3050);

    //lau cau hoi tu json
    $.getJSON(url, function(data){
      $('#exampleModalLabel').html('Câu hỏi số: '+ questi);
      $('#question').html(data.data[i].question);
      $('#ansa').html(data.data[i].ansa);
      $('#ansb').html(data.data[i].ansb);
      $('#ansc').html(data.data[i].ansc);
      $('#ansd').html(data.data[i].ansd);
      $('#ansCX').html(data.data[i].ansCX);
    })
    //doi cau hoi
    $('#doicauhoi').click(function(){
      $('#doicauhoi').attr('src','codegame/picture/doicauhoidasudung.png');
      if(checkdoicauhoi==0){
        i++;
        console.log(i);
        $.getJSON(url, function(data){
          $('#question').html(data.data[2].question);
          $('#ansa').html( data.data[2].ansa);
          $('#ansb').html(data.data[2].ansb);
          $('#ansc').html(data.data[2].ansc);
          $('#ansd').html(data.data[2].ansd);
          $('#ansCX').html(data.data[2].ansCX);
        })
      }else{
        Swal.fire('Bạn đã sử dụng quyền trợ giúp này rồi!!!')
      }
      checkdoicauhoi++;
    })
    //end doi cau hoi
    // chon nguoi de goi dien thoai
      $('#callperson').click(function(){
        var ansCX = $('#ansCX').html();
        Swal.fire('Tôi khuyên bạn nên chọn đáp án:'+ ansCX);
        $('#exampleModal1').modal('hide');
      })
      $('#callperson1').click(function(){
        var ansCX = $('#ansCX').html();
        Swal.fire('Tôi khuyên bạn nên chọn đáp án:'+ ansCX);
        $('#exampleModal1').modal('hide');
      })
      $('#callperson2').click(function(){
        var ansCX = $('#ansCX').html();
        Swal.fire('Tôi khuyên bạn nên chọn đáp án:'+ ansCX);
        $('#exampleModal1').modal('hide');
      })
      $('#callperson3').click(function(){
        var ansCX = $('#ansCX').html();
        Swal.fire('Tôi khuyên bạn nên chọn đáp án:'+ ansCX);
        $('#exampleModal1').modal('hide');
      })
      //end
}





//check dung dap an A
$('#ansa').click(function(){
    var dapancheck = 'a';
    var dapanCX = $('#ansCX').html();
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: 'CẢNH BÁO',
        text: "Bạn đã chắc chắn với phương án của mình chưa?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Chắc chắn rồi',
        cancelButtonText: 'Chọn lại đáp án',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
                if(dapancheck==dapanCX){
                  $('#exampleModal').modal('hide');
                  score++;
                  $('#score').html(score);
                  $('#text_dung').html('CHÍNH XÁC')
                  nhacchienthang.play();
                //anhienphaohoa
                $('div.bg').fireworks()
                  $('div.bg').css('background-color', 'black');
                  $('div.bg').css('position', 'absolute');
                  jQuery('div.bg').css('opacity', '0.9');
              setTimeout(function(){
                  $('#text_dung').html('')
                  $('div.bg').fireworks('destroy');
                  $('div.bg').css('background-color', '');
                  jQuery('div.bg').css('opacity', '');
              }, 3000);
            }else{
              $('#ansa').css('pointer-events','none');
              $('#ansb').css('pointer-events','none');
              $('#ansc').css('pointer-events','none');
              $('#ansd').css('pointer-events','none');
              if(dapanCX=='b'){
                $('#ansb').css({
                 background:'linear-gradient( #283c86, #45a247)'
              });
              }
              if(dapanCX=='c'){
                $('#ansc').css({
                 background:'linear-gradient( #283c86, #45a247)'
              });
              }
              if(dapanCX=='d'){
                $('#ansd').css({
                 background:'linear-gradient( #283c86, #45a247)'
              });
              }
              $('#ansa').css({
               background:'linear-gradient(to right, #1a2a6c, #b21f1f, #fdbb2d)'
            });
              nhacthua.play();
              $('#text_dung').html('SAI RỒI');
              setTimeout(function(){
                $('#ansa').css('pointer-events','');
                $('#ansb').css('pointer-events','');
                $('#ansc').css('pointer-events','');
                $('#ansd').css('pointer-events','');
                $('#ansa').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
                $('#ansb').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
                $('#ansc').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
                $('#ansd').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
                $('#exampleModal').modal('hide');
                $('#text_dung').html('')
                $('div.bg').fireworks('destroy');
                $('div.bg').css('background-color', '');
                jQuery('div.bg').css('opacity', '');
            }, 3000);
            }
        } else if (
          result.dismiss === Swal.DismissReason.cancel
        ){}
      })
})


//CHECK DAP AN B
$('#ansb').click(function(){
  var dapancheck = 'b';
  var dapanCX = $('#ansCX').html();
  const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })
    
    swalWithBootstrapButtons.fire({
      title: 'CẢNH BÁO',
      text: "Bạn đã chắc chắn với phương án của mình chưa?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Chắc chắn rồi',
      cancelButtonText: 'Chọn lại đáp án',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
              if(dapancheck==dapanCX){
                $('#exampleModal').modal('hide');
                score++;
                $('#score').html(score);
                $('#text_dung').html('CHÍNH XÁC')
                nhacchienthang.play();
              //anhienphaohoa
              $('div.bg').fireworks()
                $('div.bg').css('background-color', 'black');
                $('div.bg').css('position', 'absolute');
                jQuery('div.bg').css('opacity', '0.9');
            setTimeout(function(){
                $('#text_dung').html('')
                $('div.bg').fireworks('destroy');
                $('div.bg').css('background-color', '');
                jQuery('div.bg').css('opacity', '');
            }, 3000);
          }else{
              $('#ansa').css('pointer-events','none');
              $('#ansb').css('pointer-events','none');
              $('#ansc').css('pointer-events','none');
              $('#ansd').css('pointer-events','none');
              if(dapanCX=='a'){
                $('#ansa').css({
                  background:'linear-gradient( #283c86, #45a247)'
               });
              }
              if(dapanCX=='c'){
                $('#ansc').css({
                  background:'linear-gradient( #283c86, #45a247)'
               });
              }
              if(dapanCX=='d'){
                $('#ansd').css({
                  background:'linear-gradient( #283c86, #45a247)'
               });
              }
              $('#ansb').css({
                background:'linear-gradient(to right, #1a2a6c, #b21f1f, #fdbb2d)'
             });
            nhacthua.play();
            $('#text_dung').html('SAI RỒI');
            setTimeout(function(){
              $('#ansa').css('pointer-events','');
              $('#ansb').css('pointer-events','');
              $('#ansc').css('pointer-events','');
              $('#ansd').css('pointer-events','');
              $('#ansa').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#ansb').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#ansc').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#ansd').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#exampleModal').modal('hide');
              $('#text_dung').html('')
              $('div.bg').fireworks('destroy');
              $('div.bg').css('background-color', '');
              jQuery('div.bg').css('opacity', '');
          }, 3000);
          }
      } else if (
        result.dismiss === Swal.DismissReason.cancel
      ){}
    })
})
// dap an C
$('#ansc').click(function(){
  var dapancheck = 'c';
  var dapanCX = $('#ansCX').html();
  const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })
    
    swalWithBootstrapButtons.fire({
      title: 'CẢNH BÁO',
      text: "Bạn đã chắc chắn với phương án của mình chưa?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Chắc chắn rồi',
      cancelButtonText: 'Chọn lại đáp án',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
              if(dapancheck==dapanCX){
                $('#exampleModal').modal('hide');
                score++;
                $('#score').html(score);
                $('#text_dung').html('CHÍNH XÁC')
                nhacchienthang.play();
              //anhienphaohoa
              $('div.bg').fireworks()
                $('div.bg').css('background-color', 'black');
                $('div.bg').css('position', 'absolute');
                jQuery('div.bg').css('opacity', '0.9');
            setTimeout(function(){
                $('#text_dung').html('')
                $('div.bg').fireworks('destroy');
                $('div.bg').css('background-color', '');
                jQuery('div.bg').css('opacity', '');
            }, 3000);
          }else{
              $('#ansa').css('pointer-events','none');
              $('#ansb').css('pointer-events','none');
              $('#ansc').css('pointer-events','none');
              $('#ansd').css('pointer-events','none');
              if(dapanCX=='a'){
                $('#ansa').css({
                  background:'linear-gradient( #283c86, #45a247)'
               });
              }
              if(dapanCX=='b'){
                $('#ansb').css({
                  background:'linear-gradient( #283c86, #45a247)'
               });
              }
              if(dapanCX=='d'){
                $('#ansd').css({
                  background:'linear-gradient( #283c86, #45a247)'
               });
              }
              $('#ansc').css({
                background:'linear-gradient(to right, #1a2a6c, #b21f1f, #fdbb2d)'
             });
            nhacthua.play();
            $('#text_dung').html('SAI RỒI');
            setTimeout(function(){
              $('#ansa').css('pointer-events','');
              $('#ansb').css('pointer-events','');
              $('#ansc').css('pointer-events','');
              $('#ansd').css('pointer-events','');
              $('#ansa').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#ansb').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#ansc').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#ansd').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#text_dung').html('')
              $('#exampleModal').modal('hide');
              $('div.bg').fireworks('destroy');
              $('div.bg').css('background-color', '');
              jQuery('div.bg').css('opacity', '');
          }, 3000);
          }
      } else if (
        result.dismiss === Swal.DismissReason.cancel
      ){}
    })
})
// check dap an D
$('#ansd').click(function(){
  var dapancheck = 'd';
  var dapanCX = $('#ansCX').html();
  const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })
    
    swalWithBootstrapButtons.fire({
      title: 'CẢNH BÁO',
      text: "Bạn đã chắc chắn với phương án của mình chưa?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Chắc chắn rồi',
      cancelButtonText: 'Chọn lại đáp án',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
              if(dapancheck==dapanCX){
                $('#exampleModal').modal('hide');
                score++;
                $('#score').html(score);
                $('#text_dung').html('CHÍNH XÁC')
                nhacchienthang.play();
              //anhienphaohoa
                $('div.bg').fireworks()
                $('div.bg').css('background-color', 'black');
                $('div.bg').css('position', 'absolute');
                jQuery('div.bg').css('opacity', '0.9');
            setTimeout(function(){
                $('#text_dung').html('')
                $('div.bg').fireworks('destroy');
                $('div.bg').css('background-color', '');
                jQuery('div.bg').css('opacity', '');
            }, 3000);
          }else{
             $('#ansa').css('pointer-events','none');
              $('#ansb').css('pointer-events','none');
              $('#ansc').css('pointer-events','none');
              $('#ansd').css('pointer-events','none');
              if(dapanCX=='a'){
                $('#ansa').css({
                  background:'linear-gradient( #283c86, #45a247)'
               });
              }
              if(dapanCX=='b'){
                $('#ansb').css({
                  background:'linear-gradient( #283c86, #45a247)'
               });
              }
              if(dapanCX=='c'){
                $('#ansc').css({
                  background:'linear-gradient( #283c86, #45a247)'
               });
              }
              $('#ansd').css({
                background:'linear-gradient(to right, #1a2a6c, #b21f1f, #fdbb2d)'
             });
            nhacthua.play();
            $('#text_dung').html('SAI RỒI');
            setTimeout(function(){
              $('#ansa').css('pointer-events','');
              $('#ansb').css('pointer-events','');
              $('#ansc').css('pointer-events','');
              $('#ansd').css('pointer-events','');
              $('#ansa').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#ansb').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#ansc').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#ansd').css("background","linear-gradient(to right, #36d1dc, #5b86e5)");
              $('#exampleModal').modal('hide');
              $('#text_dung').html('')
              $('div.bg').fireworks('destroy');
              $('div.bg').css('background-color', '');
              jQuery('div.bg').css('opacity', '');
          }, 3000);
          }
      } else if (
        result.dismiss === Swal.DismissReason.cancel
      ){}
    })
})







  






















// nhac nen
function playmusic(){
    nhacnen.play();
    audio_off_area.style.display="none";
    audio_on_area.style.display="";
}
function mutemusic(){
    audio_off_area.style.display="";
    audio_on_area.style.display="none";
    nhacnen.pause();
}
// het nhac nen

//dong ho
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 30,
    display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};


//het dong ho


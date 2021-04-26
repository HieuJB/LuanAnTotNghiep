<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Question_Controller;
use App\Http\Controllers\sinhvien_Controller;
use App\Http\Controllers\import_sinhvien;
use App\Http\Controllers\FullCalenderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->middleware('check_session');
Route::view('/index','index')->middleware('check_session');
Route::post('/dangky',[loginController::class,'dangky']);
Route::post('/dangnhap',[loginController::class,'xulydangnhap']);
Route::get('/home',[loginController::class,'phanloai'])->middleware('auth_login');
Route::get('/logout',[loginController::class,'dangxuat']);
Route::get('/home/trangcanhan',[loginController::class,'thongtin_canhan']);
Route::post('/updatecanhan',[loginController::class,'capnhat']);
Route::post('/show_phanloai',[loginController::class,'show_question']);
// Route::get('/home/thuchanh',[loginController::class,'show_question']);
Route::view('/home/thuchanh','trangthuchanh');
Route::post('/luudapan',[loginController::class,'SaveAns']);
Route::get('/ketqua',[loginController::class,'results']);
Route::get('/chitiet',[loginController::class,'chitietbailam']);
Route::get('xoadata',[loginController::class,'xoahistory']);
Route::get('home/trangdiemso',[loginController::class,'show_score']);
//quenmatkahu
Route::post('/quenmatkhau',[loginController::class,'quenmatkhau2']);
Route::get('/quenmatkhau/{id}',[loginController::class,'xuly_datlai']);
Route::post('/update_password',[loginController::class,'update_password']);
//khoahoc
Route::get('/home/khoahoc',[loginController::class,'khoahoc']);
Route::get('home/chitietvideo/{id}',[loginController::class,'chitietvideo']);









//admin
Route::view('/admin','admin.admin');
Route::get('/admin/quanlytaikhoan',[loginController::class,'quanlytaikhoan_admin'])->name('index.index_ql');
Route::get('/edit1/{id}',[loginController::class,'find_id_edit']);
Route::put('/dasdsa',[loginController::class,'edit_data_form'])->name('edit_data_qltk');
Route::delete('delete1/{id}',[loginController::class,'remove_data_form']);
// Route::view('/admin/themcauhoi','admin.themcauhoi');
Route::get('/admin/themcauhoi',[Question_Controller::class,'index'])->name('index.index');
Route::post('ss',[Question_Controller::class,'add_data'])->name('add.data');
Route::get('/edit/{id}',[Question_Controller::class,'find_id_edit']);
Route::put('/ss',[Question_Controller::class,'edit_data'])->name('edit_data');
Route::delete('delete/{id}',[Question_Controller::class,'remove_data']);
Route::get('/admin/trangxephang',[loginController::class,'lay_data_xephang']);
Route::post('/adminlogin',[loginController::class,'adminlogin']);
Route::post('/post_question',[Question_Controller::class,'import_question'])->name('import_question');
Route::get('/khach',[loginController::class,'show_phanloai']);
Route::post('/khach/khachlambai',[loginController::class,'show_id_soHL']);
Route::post('/ketquakhach',[loginController::class,'ketquakhach']);
//
Route::get('/admin/trochoi',[Question_Controller::class,'trochoi'])->name('index.index_trochoi');
Route::post('/ssss',[Question_Controller::class,'add_data_trochoi'])->name('add.data_trochoi');
Route::get('/edit_trochoi/{id}',[Question_Controller::class,'find_id_edit_trochoi']);
Route::put('/sswww',[Question_Controller::class,'edit_data_trochoi'])->name('edit_data_trochoi');
Route::delete('delete_trochoi/{id}',[Question_Controller::class,'remove_data_trochoi']);
Route::post('/post_questionss',[Question_Controller::class,'import_question_trochoi'])->name('import_question_trochoi');
//quanlyvideo
Route::get('admin/themvideo',[Question_Controller::class,'show_khoahoc']);
Route::post('/themkhoahoc',[Question_Controller::class,'themkhoahoc']);
Route::get('/admin/themvideo/{id}',[Question_Controller::class,'chitiet_khoahoc']);

















//giaovien
Route::view('/giaovien','giaovien.index')->middleware('check_session_gv');
Route::get('/giaovien/sinhvien',[sinhvien_Controller::class,'index'])->name('index.index1');
Route::post('/import',[import_sinhvien::class,'import_sinhvien'])->name('import_sv');
Route::post('/sssd',[import_sinhvien::class,'import_cus_sv'])->name('data1_add1');
Route::get('/edit_sv/{id}',[import_sinhvien::class,'find_id_edit_sv']);
Route::put('/edit_details_sv',[import_sinhvien::class,'edit_details_sv'])->name('edit_data_sv');
Route::delete('/delete_sv/{id}',[import_sinhvien::class,'remove_data_sv']);
Route::get('giaovien/themcauhoi',[import_sinhvien::class,'getdata_monhoc'])->name('index.index2');
Route::post('gdasjh',[import_sinhvien::class,'laythongtin_diemdanh']);
Route::view('/okmen','giaovien.test');
Route::get('/check_msv/{id}',[import_sinhvien::class,'check_msv']);
// Route::get('/check_msv/{id}',[import_sinhvien::class,'hienthi_nhapsv']);

Route::get('/showquestion_diemdanh/{id}',[import_sinhvien::class,'showquestion_diemdanh']);
Route::post('/delete_session',[import_sinhvien::class,'xoa_db_session']);
Route::post('/check_msv',[import_sinhvien::class,'check_msv']);
Route::post('/add_cauhoi_diemdanh',[import_sinhvien::class,'add_cauhoi_diemdanh'])->name('data1_add');
Route::post('/import_cauhoi_diemdanh',[import_sinhvien::class,'excel_cauhoidiemdanh'])->name('import_cauhoi_diemdanh');
Route::get('/edit_cauhoi_diemdanh/{id}',[import_sinhvien::class,'get_cauhoi_diemdanh']);
Route::put('/edit_data_cauhoi_diemdanh',[import_sinhvien::class,'cauhoi_diemdanh'])->name('edit_diemdanh');
Route::delete('/delete_cauhoi_diemdanh/{id}',[import_sinhvien::class,'remove_data_diemdanh']);
Route::post('/hienthi_diemdanh',[import_sinhvien::class,'hienthi_diemdanh']);
Route::get('/giaovien/diemdanhshow',[import_sinhvien::class,'hienthi_danhsach'])->name('show_diemdanh')->middleware('check_session_gv');;
Route::post('/diemdanhthucong',[import_sinhvien::class,'diemdanhthucong']);
Route::get('/edit_sinhvien_diemdanh/{id}',[import_sinhvien::class,'get_info_svdiemdanh']);
Route::post('/update_diemdanh',[import_sinhvien::class,'edit_info_diemdanh']);
Route::delete('delete_diemdanh/{id}',[import_sinhvien::class,'remove_info_diemdanh']);

Route::view('/game','game');
Route::get('/verify_msv/{id}',[import_sinhvien::class,'get_check_msv']);
Route::post('/verify_msv',[import_sinhvien::class,'check_msv_lat_long']);
//hoconline
Route::view('giaovien/hoc_online','giaovien.hoconline');

//GMAIL
Route::get('xacthuc/{id}',[loginController::class,'xacthuc_gmail']);


//btvn
// Route::view('/btvn','giaovien.btvn');
Route::get('/giaovien/btvn',[import_sinhvien::class,'show_btvn']);
Route::post('/yeucau_btnvn',[import_sinhvien::class,'yeucau_btvn']);
Route::get('/download/{file}',[import_sinhvien::class,'download']);
Route::get('/verify_msv_btvn/{giaovien}/{ramdom}',[import_sinhvien::class,'verify_msv_btvn']);
Route::post('/verify_msv_btvn',[import_sinhvien::class,'show_btvn_verify_msv']);
Route::get('/noidung_btvn',[import_sinhvien::class,'noidung_btvn']);
// Route::view('/noidung_btvn','giaovien.noidung_btvn');
Route::post('/nopbai_btvn',[import_sinhvien::class,'nopbai_btvn']);
Route::post('/bt_dagiao',[import_sinhvien::class,'bt_dagiao']);
Route::get('giaovien/show_bt_dagiao',[import_sinhvien::class,'show_bt_dagiao']);

//calender
Route::get('full-calender', [FullCalenderController::class, 'index']);
Route::post('full-calender/action', [FullCalenderController::class, 'action']);
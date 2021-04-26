<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use App\Models\model_question;
use App\Models\Model_history;
use App\Models\Model_score;
use App\Models\Model_admin;
use App\Models\phanloai;
use App\Models\model_khoahoc;
use App\Mail\Gmail;
use App\Mail\quenmatkhau;
use DataTables;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Hash;
use Session;


class loginController extends Controller
{
    public function dangky(Request $req){
        $data_get = userModel::where('username',$req->tendangnhap)->orwhere('email',$req->email)->first();
        if($req->hoten==""){
            return back()->with('fail1','Vui lòng nhập đầy đủ thông tin');
        }
        if($req->email==""){
            return back()->with('fail1','Vui lòng nhập đầy đủ thông tin');
        }
        if($req->tendangnhap==""){
            return back()->with('fail1','Vui lòng nhập đầy đủ thông tin');
        }
        if($req->matkhau==""){
            return back()->with('fail1','Vui lòng nhập đầy đủ thông tin');
        }
        $req->validate([
            'email'=>'required|email',
            'matkhau'=>'required|max:12|min:5',
        ]);
        if($data_get){
            return back()->with('fail','database dang gap loi');
        }else{
            $data_dangky = new userModel;

            $length = 20;
            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $data_checkss=substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
            $data_name=$req->hoten;

            $data_dangky->nghenghiep = $req->nghenghiep;
            $data_dangky->name = $req->hoten;
            $data_dangky->email = $req->email;
            $data_dangky->username = $req->tendangnhap;
            $data_dangky->password = Hash::make($req->matkhau);
            $data_dangky->token=$data_checkss;
            $data_dangky->xacthuc='0';
            // $data_dangky = new userModel;
            // $data_dangky->nghenghiep = "";
            // $data_dangky->name = "";
            // $data_dangky->email = "";
            // $data_dangky->username = "";
            // $data_dangky->password = "";
            // $data_dangky->password = "sdhagd";
            $noti = $data_dangky->save();
            if($noti){
                $details = [
                    'name' => $data_name,
                    'email' =>$data_checkss,
                ];
                Mail::to($req->email)->send(new Gmail($details));
                return back()->with('thanhcong','Đăng kí thành công vui lòng xác nhận Mail trước khi đăng nhập.');
            }
            else{
                return back()->with('fail','dsa');
            }
        }
    }
    public function phanloai(){
        $data_phanloai=model_question::distinct()->get('ansPL');
        return view('home',compact('data_phanloai'));
    }
    
    public function xacthuc_gmail($id){
        $data=userModel::where('token',$id)->first();
        if($data){
            $data->xacthuc='1';
            $data->save();
            return redirect('index')->with('thanhcong_xacthuc','XÁC THỰC GMAIL THÀNH CÔNG.');
        }else {
            return redirect('index')->with('Saimk','XÁC THỰC GMAIL KHÔNG THÀNH CÔNG.');

        }
    }

    public function xulydangnhap(Request $req){
        $users = userModel::where('username','=',$req->tendangnhap)->first();
        if(!$users||!Hash::check($req->matkhau,$users->password)){
            return back()->with('Saimk','Sai mật khẩu');
        }
        else{
            if($users->xacthuc=='0'){
                return back()->with('Saimk','BẠN CHƯA XÁC THỰC GMAIL.');
            }else{
                $users_check=$users['nghenghiep'];
                if($users_check=='gv'){
                session()->put('email1',$req->tendangnhap);
                return redirect('giaovien')->with('tendangnhap',$req->tendangnhap);
                }else{
                    session()->put('email',$req->tendangnhap);
                    return redirect('home')->with('tendangnhap',$req->tendangnhap);
                }
            }
        }
    }


    public function dangxuat(){
        session()->forget('email');
        session()->forget('email1');
        return redirect('index');
    }
    public function thongtin_canhan(){
        $userss = userModel::where('username','=',session('email'))->first();
        return view('trangcanhan',compact('userss'));
    }
    public function capnhat(Request $req){
        if(!Hash::check($req->nhapmatkhaucu,$req->matkhaucu)){
            return back()->with('thatbai','Vui lòng nhập đúng mật khẩu');
        }else{
            $data_update = userModel::find($req->id);
            $data_update->name = $req->name;
            $data_update->email = $req->email;
            $data_update->password = Hash::make($req->matkhau);
            $data_update->save();
            return back()->with('thanhcong','Cật nhập thông tin thành công');
        }
    }
    public function show_question(Request $req){
        
        $question_show = model_question::all()->where('ansPL','=',$req->phanloai)->random(10);
        return view('trangthuchanh',compact('question_show'));
        // return response()->json($question_show);
        
    }
    public function SaveAns(Request $req){

        // $data2=[];
        for($i=1;$i<=count($req->q);$i++){
          
            $data2[] = [
                'question'=>$req->q[$i],
                'ansa'=>$req->ansa[$i],
                'ansb'=>$req->ansb[$i],
                'ansc'=>$req->ansc[$i],
                'ansd'=>$req->ansd[$i],
                'ansCX'=>$req->ansCX[$i],
                'ansLC'=>$req->a[$i],
                'session'=>$req->email[$i],
            ];
        };
        Model_history::insert($data2);
        return redirect('ketqua');      
    }
    public function results(){
        $score_result = Model_history::all()->where('session','=',session('email'));
        $score = 0;
        foreach($score_result as $i=>$score_results){
            if($score_results->ansCX == $score_results->ansLC){
                $score++;
            }
        }
        session()->put('score',$score);
        return view('results',compact('score'));
    }
    public function chitietbailam(){
        $details = Model_history::all()->where('session','=',session('email'));
        return view('chitietbailam',compact('details'));
    }
    public function xoahistory(){
        $data = new Model_score;
        $data->name = session('email');
        $data->score = session('score');
        $data->date = now();
        $data->save();
        Model_history::truncate()->where('session','=',session('email'));
        return redirect('home');
    }
    public function show_score(){
        $data_score = Model_score::all()->where('name','=',session('email'));
        return view('trangdiemso',compact('data_score'));
    }
    public function quanlytaikhoan_admin(Request $request){
        // $data = userModel::all();
        // return view('admin.quanlytaikhoan',compact('data'));
        $books = userModel::all();
        if($request->ajax()){
            $data = userModel::all();
            return DataTables::of($data)->addIndexColumn()->addColumn('action',function($row){
                $btn = '<a href="javascript:void(0)"  data-toggle="tooltip" id="edit" data-id="'.$row->id.'" data-original-title="Edit"  class="edit btn btn-primary btn-sm editBook">Edit</a>';
                $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip" id="remove"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.quanlytaikhoan',compact('books'));
    }
    public function find_id_edit(Request $req){
        $Data_find = userModel::find($req->id);
        return Response()->json($Data_find);
    }
    public function edit_data_form(Request $req){
        $Data_edit = userModel::find($req->id);
        $Data_edit->name = $req->name;
        $Data_edit->email = $req->email;
        $Data_edit->username = $req->username;
        $Data_edit->password = Hash::make($req->password);
        $Data_edit->save();
        return Response()->json($Data_edit);
    }
    public function remove_data_form(Request $req){
        $Data_remove = userModel::find($req->id);
        $Data_remove->delete();
        return Response()->json($Data_remove);
    }
    public function lay_data_xephang(){
        $data = Model_score::all()->sortByDESC('score');
        return view('admin.trangxephang',compact('data'));
    }
    public function adminlogin(Request $req){
        $data_admin = Model_admin::where('password','=',$req->matkhau)->first();
        if($data_admin){
            return redirect('admin');
        }
    }
    public function show_phanloai(){
        $data = phanloai::all();
        return view('khach',compact('data'));
    }
    public function show_id_soHL(Request $req){
        $data = $req->id_soHL;
        $question_khach = model_question::all()->where('ansPL','=',$data)->random(10);
        return view('khachlambai',compact('question_khach'));
    }
    public function ketquakhach(Request $req){
        $score = 0;
        for($i=1;$i<=count($req->q);$i++){
            if($req->a[$i]==$req->ansCX[$i]){
                $score++;
            }
        };
        return view('ketquakhach',compact('score'));
    }

    //quenmatkhau
    public function quenmatkhau2(Request $req){
        $data=userModel::where('email',$req->email_quenmatkhau)->first();
        if($data){
            $details = [
                        'email' =>$data->token,
                    ];
                    Mail::to($req->email_quenmatkhau)->send(new quenmatkhau($details));
                    return back()->with('thanhcong','Link đặt lại mật khẩu đã gửi đến email của bạn.');
        }else{
            return back()->with('thatbai','Không tìm thấy email!!!');
        }
    }
    public function xuly_datlai($id){
        return view('quenmatkhau',compact('id'));
    }
    public function update_password(Request $req){
        $data=userModel::where('token',$req->token)->first();
        $data->password=Hash::make($req->mk);
        $data->save();
        return redirect('/index');
    }
    public function khoahoc(){
        $data=model_khoahoc::all();
        return view('khoahoc',compact('data'));
    }
    public function chitietvideo($id){
        $data=model_khoahoc::where('id',$id)->first();
        return view('chitietvideo',compact('data'));
    }
}

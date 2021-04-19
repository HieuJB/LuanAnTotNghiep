<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_question;
use DataTables;
use Session;
use App\Models\model_sinhvien;
class sinhvien_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books=model_sinhvien::where('giaovien',session('email1'))->get();
        if($request->ajax()){
            $data = model_sinhvien::where('giaovien',session('email1'))->get();
            return DataTables::of($data)->addIndexColumn()->addColumn('action',function($row){
                $btn = '<a href="javascript:void(0)"  data-toggle="tooltip" id="edit" data-id="'.$row->id.'" data-original-title="Edit"  class="edit btn btn-primary btn-sm editBook">Edit</a>';
                $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip" id="remove"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('giaovien.sinhvien',compact('books'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

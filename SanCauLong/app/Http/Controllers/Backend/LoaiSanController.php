<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\LoaiSan;
use Illuminate\Http\Request;

class LoaiSanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaisan= LoaiSan::all();
        return view('backend/LoaiSan/index')
        ->with('LoaiSan',$loaisan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/LoaiSan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loaisan = new LoaiSan();
        $loaisan->LS_ten        = $request->LS_ten;
        $loaisan->LS_chieudai   = $request->LS_chieudai;
        $loaisan->LS_chieurong  = $request->LS_chieurong;
        $loaisan->LS_duongcheo  = $request->LS_duongcheo;
        $loaisan->LS_mota       = $request->LS_mota;
        $loaisan->save();
        return redirect()->route('backend.LoaiSan.index');

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
        $loaiSanBanDau  = LoaiSan::find($id);
        return view('backend/LoaiSan/edit')
        ->with('LoaiSanSua',$loaiSanBanDau);
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
        $loaisan = LoaiSan::find($id);
        $loaisan->LS_ten        = $request->LS_ten;
        $loaisan->LS_chieudai   = $request->LS_chieudai;
        $loaisan->LS_chieurong  = $request->LS_chieurong;
        $loaisan->LS_duongcheo  = $request->LS_duongcheo;
        $loaisan->LS_mota       = $request->LS_mota;
        $loaisan->save();
        return redirect()->route('backend.LoaiSan.index');
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

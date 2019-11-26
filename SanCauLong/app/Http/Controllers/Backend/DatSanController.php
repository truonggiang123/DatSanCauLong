<?php

namespace App\Http\Controllers\Backend;

use App\San;
use App\DatSan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatSanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datsan = DatSan::all();
        return view('backend/DatSan/index')
        ->with('DatSan',$datsan);
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
        // thêm các thông tin người dùng nhập vào 
        $datSanNew = new DatSan();
        $datSanNew->DS_hinhthucthanhtoan   =  $request->hinhthucthanhtoan;
        $datSanNew->DS_ten_khach_hang      =  $request->DS_ten;
        $datSanNew->DS_SDT                 =  $request->DS_SDT;
        $datSanNew->masan                  =  $request->masan;
        $datSanNew->save();
        // sửa đổi trạng thái sân được đặt thành 0 là đã được đặt
        $sanDat = San::find($request->masan);
        $sanDat->S_tinhtrangsan = 0;
        $sanDat->save();
        return redirect()->route('Frontend.user.datsanthanhcong');
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

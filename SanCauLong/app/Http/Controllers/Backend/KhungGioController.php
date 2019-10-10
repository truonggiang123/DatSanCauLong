<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\KhungGio;
use App\Ngay;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class KhungGioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khunggio = KhungGio::all();
        return view('backend/KhungGio/index')
        ->with('KhungGio',$khunggio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ngay = Ngay::all();
        return view('backend/KhungGio/create')
        ->with('Ngay',$ngay);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $khunggio = new KhungGio();
        $khunggio->kg_gioBD  = $request->kg_gioBD;
        $khunggio->kg_gioKT  = $request->kg_gioKT;
        $khunggio->mangay_id = $request->mangay_id;
        $khunggio->save();
        return redirect()->route('backend.KhungGio.index');

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
        // tìm ra đc dửa liệu tương ứng với id khi người dùng xử lí gửi lên
        $ngay           = Ngay::all();
        $khungGioBanDau = KhungGio::find($id);
        // dd($khungGioBanDau);
        return view('backend/KhungGio/edit')
        ->with('khungGio',$khungGioBanDau)
        ->with('Ngay',$ngay);

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
        $khungGioBanDau = KhungGio::find($id);
        $khungGioBanDau->kg_gioBD    = $request->kg_gioBD;
        $khungGioBanDau->kg_gioKT    = $request->kg_gioKT;
        $khungGioBanDau->mangay_id   = $request->mangay_id;
        $khungGioBanDau->save();
        return redirect()-> route('backend.KhungGio.index');

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

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\KhungGio;
use App\Ngay;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NgayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ngay= Ngay::all();
        return view('backend/Ngay/index')
        ->with('Ngay',$ngay);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/Ngay/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ngay = new Ngay();
        $ngay->N_Ngay = $request->N_Ngay;
        $ngay->save();
        return redirect()->route('backend.Ngay.index');
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
        $idNgay = Ngay::find($id);
        return view('backend/Ngay/edit')
        ->with('ngayChinhSua',$idNgay);
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
        $ngayBanDau = Ngay::find($id);
        $ngayBanDau->N_Ngay   =  $request->N_Ngay;
        // save lại các sửa đổi
        $ngayBanDau->save();
        // chuyển về trang index
        return redirect() -> route('backend.Ngay.index');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  Schema::enableForeignKeyConstraints()
        Ngay::find($id)->delete();
        return redirect()->route('backend.Ngay.index');
    }
}

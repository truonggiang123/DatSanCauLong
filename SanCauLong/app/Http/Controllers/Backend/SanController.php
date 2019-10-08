<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\KhungGio;
use App\LoaiSan;
use App\San;
use Illuminate\Http\Request;

class SanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $san= San::all();
        return view('backend/San/index')
        ->with('San',$san);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $khunggio = KhungGio::all();
        $loaisan  = LoaiSan::all();
        return view('backend/San/create')
        ->with('KG',$khunggio)
        ->with('LoaiSan',$loaisan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $san = new San();
        $san->S_ten             = $request->S_ten;
        $san->S_tinhtrangsan    = $request->S_tinhtrangsan;
        $san->mota              = $request->mota;
        $san->ma_loai_san       = $request->ma_loai_san;
        $san->ma_KG             = $request->ma_KG;
        if($request->hasFile('hinhanhsan'))
        {
            $file = $request->hinhanhsan;
            $san->hinhanhsan = $file->getClientOriginalName();
            $fileSaved = $file->storeAs('public/uploads', $san->hinhanhsan);

        }
        $san->save();
        return redirect()->route('backend.San.index');

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

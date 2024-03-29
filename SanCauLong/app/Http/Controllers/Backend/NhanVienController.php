<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhanvien= NhanVien::all();
        return view('backend/NhanVien/index')
        ->with('NhanVien',$nhanvien);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/Nhanvien/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nhanvien = new NhanVien();
        $nhanvien->NV_ten          = $request->NV_ten;
        $nhanvien->NV_diachi       = $request->NV_diachi;
        $nhanvien->NV_gioitinh     = $request->NV_gioitinh;
        $nhanvien->NV_sodienthoai  = $request->NV_sodienthoai;
        if($request->hasfile('NV_hinhanh'))
        {   
            // lấy file từ người dùng nhập vào
            $file = $request->NV_hinhanh;
            // gán tên file vào cơ sở dử liệu
            $nhanvien->NV_hinhanh = $file->getClientOriginalName();
            // lưu file vào thư mục public/storage/
            $fileSaved = $file->storeAs('public/uploads', $nhanvien->NV_hinhanh);
        }
        $nhanvien->save();
        return redirect()->route('backend.NhanVien.index');

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
        $nhanvien = NhanVien::find($id);
        return view('backend/NhanVien/edit')
        ->with('NhanVien',$nhanvien);
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
        $nhanvien = NhanVien::find($id);
        $nhanvien->NV_ten          = $request->NV_ten;
        $nhanvien->NV_diachi       = $request->NV_diachi;
        $nhanvien->NV_gioitinh     = $request->NV_gioitinh;
        $nhanvien->NV_sodienthoai  = $request->NV_sodienthoai;
        // nếu người dùng có thay đổi ở mục hình ảnh thì gán vào và xử lí như bình thường nếu ko thì vẫn giử lại giá trị của
        if(!empty($request->NV_hinhanh))
            $nhanvien->NV_hinhanh = $request->NV_hinhanh;
        
        if($request->hasfile('NV_hinhanh'))
        {   
            // nếu tìm được file rác thì xóa file rác
            Storage::delete('public/uploads/'. $nhanvien->Nv_hinhanh);
            // lấy file từ người dùng nhập vào
            $file = $request->NV_hinhanh;
            // gán tên file vào cơ sở dử liệu
            $nhanvien->NV_hinhanh = $file->getClientOriginalName();
            // lưu file vào thư mục public/storage/
            $fileSaved = $file->storeAs('public/uploads', $nhanvien->NV_hinhanh);
        }
    
        $nhanvien->save();
        return redirect()->route('backend.NhanVien.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NhanVien::find($id)->delete();
        return redirect()->route('backend.NhanVien.index');
    }
}

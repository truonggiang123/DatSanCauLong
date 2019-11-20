<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Ngay;
use App\KhungGio;
use App\LoaiSan;
use App\San;

class TimSanController extends Controller
{
    
    public function timSan(Request $request){
        $ngay     = Ngay::find($request->ngay);
        $khunggio = KhungGio::find($request->khunggio);
        $loaisan  = LoaiSan::find($request->loaisan);
        $sql = "SELECT * FROM scl_san s WHERE s.ma_KG = $request->khunggio and s.ma_loai_san = $request->loaisan and s.S_tinhtrangsan = 1 ";
        $sanduoctim = DB::select($sql);
        if($sanduoctim==null)
        {
            return view('frontend/LichDat/KoTimDuocSan');
        }
        else
        {
            return view('frontend/LichDat/SanTimDuoc')
        ->with('Sankq',$sanduoctim)
        ->with('Ngaykq',$ngay)
        ->with('Khunggiokq',$khunggio)
        ->with('loaisankq',$loaisan);
        }
    }
    public function datSan(Request $request,$id){
             $santimduoc = San::find($id);
             return view('frontend.LichDat.index')
             ->with('santimduoc',$santimduoc);
                
        }
        
}

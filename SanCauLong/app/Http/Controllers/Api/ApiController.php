<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ApiController extends Controller
{
    public function chonkhunggio(){
    $sql = "SELECT id,kg_gioBD, kg_gioKT  FROM scl_khung_gio WHERE mangay_id=".$_POST["ngay"];
    $khunggiotheongay = DB::select($sql);
    // viết ra câu lệnh hiển thị select từ khung giờ cho trước đó
    foreach($khunggiotheongay as $kg)
    echo '<option value="'.$kg->id.'">'.$kg->kg_gioBD.' '.' đến '.' '.$kg->kg_gioKT.'</option>';
    }
}

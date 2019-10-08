<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{

    protected $table         = "scl_nhan_vien";
    protected $fillable      = ['NV_ten', 'NV_diachi', 'NV_hinhanh', 'NV_gioitinh', 'NV_sodienthoai'];
    protected $guarded       = ["id"];
    protected $primaryKey    = "id";
    public $timestamps = false;
}

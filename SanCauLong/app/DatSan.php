<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatSan extends Model
{
    protected $table         = "scl_dat_san";
    protected $fillable      = ['DS_hinhthucthanhtoan', 'DS_ten_khach_hang', 'DS_SDT', 'ma_san', 'nhan_vien_quan_li'];
    protected $guarded       = ["id"];
    protected $primaryKey    = "id";


    public function chitietdatsan()
    {
        return $this->hasMany('App\ChitietDS', 'dat_san_id', 'id');
    }
    public function nhanvien()
    {
        return $this->belongsTo('App\NhanVien', 'nhan_vien_quan_li', 'id');
    }
}

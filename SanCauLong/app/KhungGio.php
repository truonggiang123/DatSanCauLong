<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhungGio extends Model
{
    protected $table      = "scl_khung_gio";
    protected $fillable   = ['kg_gioBD', 'kg_gioKT', 'mangay_id'];
    protected $guarded    = ["id"];
    protected $primaryKey = "id";
    public $timestamps =false;

    public function ngay(){
        return $this->belongsTo('App\Ngay', 'mangay_id', 'id');
    }

    public function san(){
        return $this->hasMany('App\San', 'ma_KG', 'id');
    }
}

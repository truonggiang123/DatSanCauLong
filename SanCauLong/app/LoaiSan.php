<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSan extends Model
{
    protected $table         = "scl_loai_san";
    protected $fillable      = ['LS_ten', 'LS_chieudai', 'LS_chieurong', 'LS_duongcheo', 'LS_mota'];
    protected $guarded       = ["id"];
    protected $primaryKey    = "id";
    public $timestamps = false;

    public function san(){
        return $this->hasMany('App\San', 'ma_loai_san', 'id');
    }

}

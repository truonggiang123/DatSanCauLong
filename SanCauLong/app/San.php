<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class San extends Model
{
    protected $table         = "scl_san";
    protected $fillable      = ['S_ten', 'S_tinhtrangsan', 'hinhanhsan', 'mota', 'ma_loai_san', 'ma_KG'];
    protected $guarded       = ["id"];
    protected $primaryKey    = "id";

    public function khunggio()
    {
        return $this->belongsTo('App\KhungGio', 'ma_KG', 'id');
    }

    public function loaisan()
    {
        return $this->belongsTo('App\LoaiSan', 'ma_loai_san', 'id');
    }


    public function datsan()
    {
        return $this->belongsTo('App\DatSan', 'ma_san', 'id');
    }
}

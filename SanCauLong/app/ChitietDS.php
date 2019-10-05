<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChitietDS extends Model
{
    protected $table         = "scl_chitiet_datsan";
    protected $fillable      = [];
    protected $guarded       = ["dat_san_id","san_id"];
    protected $primaryKey    = 'dat_san_id, san_id';
    public function datsan()
    {
        return $this->belongsTo('App\DatSan', 'dat_san_id', 'id');
    }
    public function san()
    {
        return $this->belongsTo('App\San', 'san_id', 'id');
    }

}

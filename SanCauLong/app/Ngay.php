<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ngay extends Model
{
    protected $table         = "scl_ngay";
    protected $fillable      = ["N_Ngay"];
    protected $guarded       = ["id"];
    protected $primaryKey    = "id";
    public $timestamps = false;

    public function khunggio(){
        return $this->hasMany('App\KhungGio', 'mangay_id', 'id');
    }
    
}


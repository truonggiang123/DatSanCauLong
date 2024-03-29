<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSclNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scl_nhan_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NV_ten',200);
            $table->string('NV_diachi',200);
            $table->text('NV_hinhanh');
            $table->string('NV_gioitinh',4);
            $table->string('NV_sodienthoai',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scl_nhan_vien');
    }
}

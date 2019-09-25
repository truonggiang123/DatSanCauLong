<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSclDatSanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scl_dat_san', function (Blueprint $table) {
            $table->increments('id');
            $table->text('DS_hinhthucthanhtoan');
            $table->string('DS_ten_khach_hang',200);
            $table->text('DS_SDT');
 
            $table->integer('ma_san')->unsigned();
            $table->foreign('ma_san')->references('id')->on('scl_san');   
            
            $table->integer('nhan_vien_quan_li')->unsigned();
            $table->foreign('nhan_vien_quan_li')->references('id')->on('scl_nhan_vien');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scl_dat_san');
    }
}

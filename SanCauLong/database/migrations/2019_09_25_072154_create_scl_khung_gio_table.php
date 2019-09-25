<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSclKhungGioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scl_khung_gio', function (Blueprint $table) {
            $table->increments('id');
            $table->time('kg_gioBD');
            $table->time('kg_gioKT');

            $table->integer('mangay_id')->unsigned();
            $table->foreign('mangay_id')->references('id')->on('scl_ngay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scl_khung_gio');
    }
}

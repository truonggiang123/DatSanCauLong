<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSclChitietDatsanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scl_chitiet_datsan', function (Blueprint $table) {
            $table->integer('dat_san_id')->unsigned();
            $table->foreign('dat_san_id')->references('id')->on('scl_dat_san');   
            
            $table->integer('san_id')->unsigned();
            $table->foreign('san_id')->references('id')->on('scl_san');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scl_chitiet_datsan');
    }
}

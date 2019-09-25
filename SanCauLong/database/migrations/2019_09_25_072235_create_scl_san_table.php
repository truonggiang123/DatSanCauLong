<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSclSanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scl_san', function (Blueprint $table) {
            $table->increments('id');
            $table->string('S_ten',200);
            $table->tinyInteger('S_tinhtrangsan')->nullable();
            $table->text('hinhanhsan')->nullable();
            $table->string('mota',255)->nullable();
             
            $table->integer('ma_loai_san')->unsigned();
            $table->foreign('ma_loai_san')->references('id')->on('scl_loai_san');

            $table->integer('ma_KG')->unsigned();
            $table->foreign('ma_KG')->references('id')->on('scl_khung_gio');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scl_san');
    }
}

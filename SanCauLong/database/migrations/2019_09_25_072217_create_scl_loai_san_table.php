<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSclLoaiSanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scl_loai_san', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LS_ten',200);
            $table->float('LS_chieudai', 8, 2);
            $table->float('LS_chieurong', 8, 2);
            $table->float('LS_duongcheo', 8, 2);
            $table->text('LS_mota')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scl_loai_san');
    }
}

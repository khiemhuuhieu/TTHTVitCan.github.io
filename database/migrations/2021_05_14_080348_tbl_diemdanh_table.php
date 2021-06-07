<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDiemdanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_diemdanh', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('MaCaHoc');
            $table->String('MaHV');
            $table->String('DiemDanh');
            $table->Integer('SoBuoiVang');
            $table->String('GhiChu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_diemdanh');
    }
}

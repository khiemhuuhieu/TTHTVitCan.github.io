<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_diem', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('MaHocVien');
            $table->String('TenHocVien');
            $table->String('GK');
            $table->String('TH');
            $table->String('CK');
            $table->String('TB');
            $table->String('XepLoai');
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
        Schema::dropIfExists('tbl_diem');
    }
}

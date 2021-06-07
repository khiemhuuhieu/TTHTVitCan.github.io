<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBangLuongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bangluong', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('MaNhanVien');
            $table->String('TenNhanVien');
            $table->String('ChucVu');
            $table->String('LuongCung');
            $table->String('Tru');
            $table->String('Cong');
            $table->String('GhiChu');
            $table->String('Email');
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
        Schema::dropIfExists('tbl_bangluong');
    }
}

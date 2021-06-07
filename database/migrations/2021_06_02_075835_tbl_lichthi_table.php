<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblLichthiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lichthi', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('MaLop');
            $table->String('TenLop');
            $table->String('NgayThi');
            $table->String('GioThi');
            $table->String('PhongThi');
            $table->String('Giám thị');
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
        Schema::dropIfExists('tbl_lichthi');
    }
}

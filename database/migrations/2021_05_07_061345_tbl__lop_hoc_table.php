<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblLopHocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lop_hoc', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('MaLop');
            $table->String('TenLop');
            $table->String('MaGV');
            $table->String('TinhTrang');
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
        Schema::dropIfExists('tbl_lop_hoc');
    }
}

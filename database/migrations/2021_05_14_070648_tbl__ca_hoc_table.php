<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCaHocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cahoc', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('MaCaHoc');
            $table->String('MaLop');
            $table->String('MaGV');
            $table->String('Ngay');
            $table->String('Gio');
            $table->String('PhongHoc');
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
        Schema::dropIfExists('tbl_cahoc');
    }
}

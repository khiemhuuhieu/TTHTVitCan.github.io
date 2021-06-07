<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDaotaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_daotao', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('TieuDe');
            $table->String('Slug');
            $table->String('ChiTiet');
            $table->String('danhmuc_id');
            $table->String('HienThi');
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
        Schema::dropIfExists('tbl_daotao');
    }
}

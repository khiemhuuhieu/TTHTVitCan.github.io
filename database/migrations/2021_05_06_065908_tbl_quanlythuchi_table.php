<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblQuanlythuchiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_thu_chi', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('NgayThang');
            $table->string('ThuChi');
            $table->string('Loai');
            $table->string('NguoiThu');
            $table->string('NoiDung');
            $table->string('SoTienThu');
            $table->string('SoTiennChi');
            $table->string('GhiChu');
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
        Schema::dropIfExists('tbl_thu_chi');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_students', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('MaHocVien');
            $table->string('TenHocVien');
            $table->date('NgaySinh');
            $table->string('Lop');
            $table->string('Diachi');
            $table->string('GhiChu');
            $table->string('TinhTrang');
            $table->Integer('SDT');
            $table->string('MaPH');
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
        Schema::dropIfExists('tbl_students');
    }
}

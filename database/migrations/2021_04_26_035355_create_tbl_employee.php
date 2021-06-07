<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_employee', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('TenNhanVien');
            $table->String('MaNhanVien');            
            $table->String('DiaChi');
            $table->Integer('SDT');
            $table->String('Email');
            $table->String('TrinhDo');
            $table->String('ChucVu');
            $table->date('NgaySinh');
            $table->string('HinhAnh');
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
        Schema::dropIfExists('tbl_employee');
    }
}

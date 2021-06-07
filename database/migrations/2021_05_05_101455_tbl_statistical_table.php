<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblStatisticalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_statistical', function (Blueprint $table) {
            $table->Increments('statistical_id');
            $table->string('order_date');
            $table->string('tuition');
            $table->String('clasfit');
            $table->Integer('quantity');
            $table->Integer('total_order');
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
        Schema::dropIfExists('tbl_statistical');
    }
}

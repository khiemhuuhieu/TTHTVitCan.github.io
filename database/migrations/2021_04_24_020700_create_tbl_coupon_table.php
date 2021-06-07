<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_coupon', function (Blueprint $table) {
            $table->Increments('coupon_id');
            $table->string('coupon_name');
            $table->Integer('coupon_time');
            $table->string('coupon_condition');
            $table->Integer('coupon_number');
            $table->string('coupon_code');
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
        Schema::dropIfExists('tbl_coupon');
    }
}

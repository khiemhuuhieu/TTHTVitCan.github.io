<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblNotifiCateTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_notifi_cate', function (Blueprint $table) {
            $table->Increments('noti_cate_id');
            $table->string('noti_cate_name');
            $table->string('noti_cate_status');
            $table->string('noti_cate_slug');
            $table->string('noti_cate_desc');
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
        Schema::dropIfExists('tbl_notifi_cate');
    }
}

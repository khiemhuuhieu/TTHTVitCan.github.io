<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblNotificationPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_noti_post', function (Blueprint $table) {
            $table->Increments('noti_post_id');
            $table->string('noti_post_title');
            $table->string('noti_post_slug');
            $table->string('noti_post_desc');
            $table->string('noti_post_content');
            $table->Integer('noti_post_status');
            $table->string('noti_post_document');
            $table->Integer('noti_cate_id');
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
        Schema::dropIfExists('tbl_notification_post');
    }
}

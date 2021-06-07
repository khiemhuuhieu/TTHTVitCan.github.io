<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPostNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_news_category', function (Blueprint $table) {
            $table->Increments('news_cate_id');
            $table->string('news_cate_name');
            $table->Integer('news_cate_status');
            $table->string('news_cate_slug');
            $table->string('news_cate_desc');
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

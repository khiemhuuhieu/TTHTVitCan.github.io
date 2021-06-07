<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_news_post', function (Blueprint $table) {
            $table->Increments('news_post_id');
            $table->string('news_post_title');
            $table->string('news_post_slug');
            $table->string('news_post_desc');
            $table->string('news_post_content');
            $table->string('news_post_meta');
            $table->string('news_post_keyword');
            $table->Integer('news_post_status');
            $table->string('news_post_image');
            $table->Integer('news_cate_id');
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
        Schema::dropIfExists('tbl_news_post');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProgramminglanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_programminglanguage', function (Blueprint $table) {
            $table->Increments('language_id');
            $table->string('language_name');
            $table->text('language_desc');
            $table->string('language_keywords');
            $table->Integer('language_status');
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
        Schema::dropIfExists('tbl_programminglanguage');
    }
}

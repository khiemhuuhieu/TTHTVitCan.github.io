<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_class', function (Blueprint $table) {
            $table->Increments('class_id');
            $table->string('class_name');
            $table->string('class_image');
            $table->Integer('thematic_id');
            $table->Integer('language_id');
            $table->date('opending_day');
            $table->string('schedule_day');
            $table->Integer('study_time');
            $table->float('tuition');
            $table->string('address_class');
            $table->text('class_desc');
            $table->string('class_keywords');
            $table->string('teacher');
            $table->Integer('student_number');
            $table->Integer('class_status');
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
        Schema::dropIfExists('tbl_class');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferedCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offered_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('degree');
            $table->string('semester');
            $table->string('section');
            $table->string('Course_name');
            $table->string('course_type');
            $table->string('course_status');
            $table->string('credit_hours');
            $table->string('course_incharge');
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
        Schema::dropIfExists('offered_courses');
    }
}

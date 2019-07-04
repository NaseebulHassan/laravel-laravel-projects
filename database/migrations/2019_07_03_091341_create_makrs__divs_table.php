<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakrsDivsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makrs__divs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mid');
            $table->integer('assignment');
            $table->integer('final');
            $table->integer('practical');
            $table->integer('total');
            $table->string('marks_scheme');
            $table->string('credit_hours')->unique();

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
        Schema::dropIfExists('makrs__divs');
    }
}

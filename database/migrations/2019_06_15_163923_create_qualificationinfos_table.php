<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualificationinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('st_id')->usigned();
            $table->string('degree')->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->string('institute_attended')->nullable();
            $table->string('uni_board')->nullable();
            $table->integer('obtain_marks')->nullable();
            $table->integer('total_marks')->nullable();
            $table->float('percentage')->nullable();
            $table->char('grade')->nullable();
            $table->float('cgpa')->nullable();
            $table->string('marit')->nullable();
            $table->string('doc_checklist')->nullable();
            $table->integer('copies')->nullable();
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
        Schema::dropIfExists('qualificationinfos');
    }
}

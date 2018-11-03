<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardianStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardian_student', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('guardian_id')->unsigned();
            $table->integer('relationship_id')->unsigned();
            $table->timestamps();

            $table->foreign('guardian_id')->references('id')->on('guardians');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('relationship_id')->references('id')->on('relationships');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guidance_student');
    }
}

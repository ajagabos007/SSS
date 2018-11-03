<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecuritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('securities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->unsigned();
            $table->integer('security_organisation_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('security_organisation_id')->references('id')->on('security_organisations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('securities');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('title_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->integer('staff_id')->nullable()->unsigned();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('staff_id')->references('id')->on('staffs');
            $table->foreign('title_id')->references('id')->on('titles');
            $table->foreign('gender_id')->references('id')->on('genders');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guardians');
    }
}

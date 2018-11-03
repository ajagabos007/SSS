<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guardian_id')->unsigned()->nullable();
            $table->integer('staff_id')->unsigned()->nullable();
            $table->integer('pta_role_id')->unsigned();
            $table->timestamps();

            $table->foreign('guardian_id')->references('id')->on('guardians');
            $table->foreign('staff_id')->references('id')->on('staffs');
            $table->foreign('pta_role_id')->references('id')->on('pta_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pta');
    }
}

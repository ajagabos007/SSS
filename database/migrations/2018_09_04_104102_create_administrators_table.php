<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag_id')->nullable()->unique();
            $table->integer('title_id')->unsigned();
            $table->string('surname');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->integer('gender_id')->unsigned();
            $table->date('date_of_birth')->nullable();
            $table->integer('staff_role_id')->unsigned()->nullable();
            $table->integer('class_id')->nullable()->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('lga_id')->unsigned();
            $table->integer('religion_id')->unsigned();
            $table->string('address');
            $table->string('phone_number');

           
            $table->integer('next_of_kin_title_id')->unsigned();
            $table->string('next_of_kin_name');
            $table->string('next_of_kin_address');
            $table->integer('next_of_kin_relationship_id')->unsigned();
            $table->string('next_of_kin_phone_number')->unique();
            $table->string('next_of_kin_email')->unique()->nullable();
            
        
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('title_id')->references('id')->on('titles');
            $table->foreign('staff_role_id')->references('id')->on('staff_roles');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('country_id')->references('id')->on('countries');  
            $table->foreign('state_id')->references('id')->on('states');     
            $table->foreign('lga_id')->references('id')->on('lgas');
            $table->foreign('religion_id')->references('id')->on('religions');
            $table->foreign('next_of_kin_title_id')->references('id')->on('titles');
            $table->foreign('next_of_kin_relationship_id')->references('id')->on('relationships');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrators');
    }
}

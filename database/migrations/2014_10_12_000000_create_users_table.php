<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('First_Name')->nullable();
            $table->string('Last_Name')->nullable();
            $table->string('Email');
            $table->integer('Country_Id')->nullable();
            $table->integer('State_Id')->nullable();
            $table->integer('City_id')->nullable();
            $table->dateTime('Registration_Date')->nullable();
            $table->integer('Status_Id')->nullable();
            $table->integer('User_Type_Id')->nullable();
            $table->boolean('Is_Log_In')->nullable();
            $table->rememberToken();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

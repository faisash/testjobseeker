<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Job_Seekers', function (Blueprint $table) {


            $table->increments('id');
            $table->string('Mobile_No')->nullable();
            $table->date('DOB')->nullable();
            $table->char('Gender')->nullable();
            $table->char('Merital_Status')->nullable();
            $table->integer('Resume_Id')->nullable();
            $table->string('Picture')->nullable();
            $table->integer('Nationality_Id')->nullable();
            $table->boolean('Driving_License')->nullable();
            $table->boolean('Relocate')->nullable();
            $table->integer('User_Id')->nullable();
            $table->string('token')->nullable();
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
        //
        Schema::dropIfExists('Job_Seekers');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginCredentialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Login_Credentials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('User_Name');
            $table->string('Password');
            $table->integer('User_Id');
            $table->string('IP_Address')->nullable();
            $table->string('Terminal_Name')->nullable();
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
        Schema::dropIfExists('Login_Credentials');
    }
}

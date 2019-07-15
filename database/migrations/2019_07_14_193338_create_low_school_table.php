<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('low_school', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id')->unsigned()->nullable();
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('school_name');
            $table->string('date_graduated');
            $table->string('month_graduated');
            $table->string('year_graduated');
            $table->string('gender');
            $table->string('first_language');
            $table->string('second_language');
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
        Schema::dropIfExists('low_school');
    }
}

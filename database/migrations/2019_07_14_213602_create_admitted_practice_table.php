<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmittedPracticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admitted_practice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('admitted_id')->unsigned()->nullable();
            $table->foreign('admitted_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('admitted_month');
            $table->string('admitted_date');
            $table->string('admitted_year');
            $table->string('supreme_court');
            $table->string('registration_number');
            $table->string('registration_date');

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
        Schema::dropIfExists('admitted_practice');
    }
}

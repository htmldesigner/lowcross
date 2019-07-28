<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('prefix');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('registration_number');
            $table->string('phone_int');
            $table->string('phone_pref');
            $table->string('phone_num');
            $table->string('fax_int')->nullable();
            $table->string('fax_pref')->nullable();
            $table->string('fax_num')->nullable();
            $table->string('mobile_int')->nullable();
            $table->string('mobile_pref')->nullable();
            $table->string('mobile_num')->nullable();
            $table->string('website')->nullable();
            $table->string('primary_contact');
            $table->string('description_profile')->nullable();
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
        Schema::dropIfExists('organizations');
    }
}

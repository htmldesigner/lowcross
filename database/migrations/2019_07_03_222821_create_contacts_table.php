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
            $table->unsignedBigInteger('contact_id')->unsigned()->nullable();
            $table->foreign('contact_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('prefix');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('registration_number');
            $table->string('phone_int');
            $table->string('phone_pref');
            $table->string('phone_num');
            $table->string('fax_int');
            $table->string('fax_pref');
            $table->string('fax_num');
            $table->string('mobile_int');
            $table->string('mobile_pref');
            $table->string('mobile_num');
            $table->string('website');
            $table->string('primary_contact');
            $table->string('description_profile');
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

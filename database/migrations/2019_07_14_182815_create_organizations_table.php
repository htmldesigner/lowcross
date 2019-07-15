<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('org_id')->unsigned()->nullable();
            $table->foreign('org_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('organization_name');
            $table->string('country');
            $table->string('street_name');
            $table->string('suite');
            $table->string('city');
            $table->string('states');
            $table->string('province');
            $table->string('zip_code');
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

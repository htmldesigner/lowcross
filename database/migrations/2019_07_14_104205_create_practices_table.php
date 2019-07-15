<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('administrative_law');
            $table->string('adoptions');
            $table->string('appellate_practice');
            $table->string('bankruptcy');
            $table->string('business_law');
            $table->string('civil_practice');
            $table->string('civil_rights');
            $table->string('class_actions');
            $table->string('constitutional_law');
            $table->string('contracts');
            $table->string('copyrights');
            $table->string('corporate_law');
            $table->string('arbitration');
            $table->string('entertainment_law');
            $table->string('patents');
            $table->string('divorce');
            $table->string('education_law');
            $table->string('employment_law');
            $table->string('estate_litigation');
            $table->string('family_law');
            $table->string('government_law');
            $table->string('general_practice');
            $table->string('health_law');
            $table->string('immigration_law');
            $table->string('import_and_export_law');
            $table->string('intellectual_property_law');
            $table->string('internet_law');
            $table->string('collections');
            $table->string('identity_theft');
            $table->string('torts');
            $table->string('landlord_and_tenant_law');
            $table->string('malpractice');
            $table->string('mergers_and_acquisitions');
            $table->string('personal_injury');
            $table->string('products_liability');
            $table->string('real_estate');
            $table->string('securities_law');
            $table->string('sports_law');
            $table->string('trade_law');
            $table->string('trademarks');
            $table->string('traffic_violations');
            $table->string('trusts_and_estates');
            $table->string('criminal_law');
            $table->string('international_law');
            $table->string('wills_and_probation');
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
        Schema::dropIfExists('practice');
    }
}

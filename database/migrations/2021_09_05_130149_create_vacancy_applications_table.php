<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancyApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('applicant_name');
            $table->string('post_applying_for');
            $table->string('applicant_present_address');
            $table->string('applicant_age');
            $table->string('applicant_gender');
            $table->string('applicant_phone');
            $table->string('status');
            $table->longText('form_data');
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
        Schema::dropIfExists('vacancy_applications');
    }
}

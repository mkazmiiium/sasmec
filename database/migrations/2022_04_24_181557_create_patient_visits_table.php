<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_visits', function (Blueprint $table) {
            $table->id();
            $table->string('patientname')->nullable();
            $table->string('ward')->nullable();
            $table->date('referreddate')->nullable();
            $table->date('attendeddate')->nullable();
            $table->string('reason')->nullable();
            $table->string('background')->nullable();
            $table->string('currentcondiiton')->nullable();
            $table->string('problem')->nullable();
            $table->string('intervention')->nullable();
            $table->string('casestatus')->nullable();
            $table->string('followup')->nullable();
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
        Schema::dropIfExists('patient_visits');
    }
}

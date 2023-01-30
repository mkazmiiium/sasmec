<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlomonthlyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slomonthly', function (Blueprint $table) {
            $table->id();
            $table->integer('slo_id')->nullable();
            $table->string('slo_name')->nullable();
            $table->string('dept')->nullable();
            $table->string('month')->nullable();
            $table->date('date')->nullable();
            $table->string('report_details')->nullable();
            $table->string('correctiveaction')->nullable();
            $table->integer('scu_id')->nullable();
            $table->string('suggestion')->nullable();
            $table->date('review_date')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('slomonthly');
    }
}

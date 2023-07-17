<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_monitorings', function (Blueprint $table) {
            $table->id();
            
            $table->integer('user_id');
            $table->string('activity_name');
            $table->string('department_info');
            $table->string('representative_dep');
            $table->string('representative_shariah');
            $table->string('Q1');
            $table->string('Q1_remarks')->nullable();
            $table->string('Q2');
            $table->string('Q2_remarks')->nullable();
            $table->string('Q3');
            $table->string('Q3_remarks')->nullable();
            $table->string('Q4');
            $table->string('Q4_remarks')->nullable();
            $table->string('Q5');
            $table->string('Q5_remarks')->nullable();
            $table->string('corrective_action')->nullable();
            $table->string('discussion_point')->nullable();
            $table->string('suggestion')->nullable();
            $table->string('next_follow')->nullable();
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_monitorings');
    }
}



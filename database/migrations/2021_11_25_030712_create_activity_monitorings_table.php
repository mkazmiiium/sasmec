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
            $table->string('activity_name');
            $table->integer('user_id');
            $table->string('pic');
            $table->string('department');
            $table->string('shariah_critical_point')->nullable();
            $table->string('shariah_non_conformity')->nullable();
            $table->string('corrective_action')->nullable();
            $table->string('discussion_point')->nullable();
            $table->string('suggestion')->nullable();
            $table->string('next_follow')->nullable();
            $table->date('created_date');
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

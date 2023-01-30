<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceptancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceptances', function (Blueprint $table) {
            $table->id();
            $table->string('program')->nullable();
            $table->date('date')->nullable();
            $table->string('name')->nullable();
            $table->string('institution')->nullable();
            $table->string('acceptance')->nullable();
            $table->string('job')->nullable();
            $table->string('others')->nullable();
            $table->string('acceptance2')->nullable();
            $table->string('resources')->nullable();
            $table->string('others2')->nullable();
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
        Schema::dropIfExists('acceptances');
    }
}

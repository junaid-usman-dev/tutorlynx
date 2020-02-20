<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availabilities', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->nullable();
            // $table->dateTime('start_time')->nullable();
            // $table->dateTime('end_time')->nullable();

            $table->string('pre_1200am')->nullable();
            $table->dateTime('1200pm_to_500pm')->nullable();
            $table->dateTime('after_500pm')->nullable();


            $table->dateTime('monday')->nullable();
            $table->dateTime('tuesday')->nullable();
            $table->dateTime('wednesday')->nullable();
            $table->dateTime('thursday')->nullable();
            $table->dateTime('friday')->nullable();
            $table->dateTime('saturday')->nullable();
            $table->dateTime('sunday')->nullable();

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
        Schema::dropIfExists('availabilities');
    }
}

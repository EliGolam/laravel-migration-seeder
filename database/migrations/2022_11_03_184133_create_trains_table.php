<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("companies", 50)->nullable();
            $table->string("departure_stations", 100);
            $table->string("arrival_stations", 100);
            $table->dateTime("departure_times");
            $table->dateTime("arrival_times");
            $table->string("train_codes", 10)->nullable();
            $table->tinyInteger("num_compartments")->unsigned()->nullable();
            $table->boolean("is_in_time");
            $table->boolean("cancelled");
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
        Schema::dropIfExists('trains');
    }
}

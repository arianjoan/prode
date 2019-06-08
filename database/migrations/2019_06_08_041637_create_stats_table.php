<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_teamA');
            $table->bigInteger('id_teamB');
            $table->bigInteger('id_result');
            $table->unsignedInteger('scoreA');
            $table->unsignedInteger('scoreB');
            $table->timestamps();
        });

        Schema::table('stats', function(Blueprint $table) {
            $table->foreign('id_teamA')->references('id')->on('teams');
            $table->foreign('id_teamB')->references('id')->on('teams');
            $table->foreign('id_result')->references('id')->on('results');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_match')->unsigned();
            $table->bigInteger('id_fixture')->unsigned();
            $table->bigInteger('id_teamA')->unsigned();
            $table->bigInteger('id_teamB')->unsigned();
            $table->unsignedInteger('scoreA');
            $table->unsignedInteger('scoreB');
            $table->timestamps();
        });

        Schema::table('results', function (Blueprint $table) {
            $table->foreign('id_match')->references('id')->on('matches');
            $table->foreign('id_fixture')->references('id')->on('fixtures');
            $table->foreign('id_teamA')->references('id')->on('teams');
            $table->foreign('id_teamB')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_teamA')->unsigned();
            $table->bigInteger('id_teamB')->unsigned();
            $table->datetime('dateMatch')->default('2000-01-01 00:00:00');
            $table->string('name', 2);
            $table->timestamps();
        });

        Schema::table('matches', function (Blueprint $table) {
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
        Schema::dropIfExists('matches');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_id');
            $table->integer('lvl_1')->default('0');
            $table->integer('lvl_2')->default('0');
            $table->integer('lvl_3')->default('0');
            $table->integer('lvl_4')->default('0');
            $table->integer('lvl_5')->default('0');
            $table->integer('lvl_6')->default('0');
            $table->integer('lvl_7')->default('0');
            $table->integer('lvl_8')->default('0');
            $table->integer('lvl_9')->default('0');
            $table->integer('lvl_10')->default('0');
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
        Schema::dropIfExists('scores');
    }
}

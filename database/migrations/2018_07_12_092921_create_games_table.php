<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_id');
            $table->longText('a_1')->nullable();
            $table->longText('q_2_1')->nullable();
            $table->longText('q_2_2')->nullable();
            $table->longText('q_2_3')->nullable();
            $table->longText('a_2')->nullable();
            $table->longText('a_3')->nullable();
            $table->longText('q_4_1')->nullable();
            $table->longText('q_4_2')->nullable();
            $table->longText('q_4_3')->nullable();
            $table->longText('q_4_4')->nullable();
            $table->longText('q_4_5')->nullable();
            $table->longText('q_4_6')->nullable();
            $table->longText('q_4_7')->nullable();
            $table->longText('q_4_8')->nullable();
            $table->longText('q_4_9')->nullable();
            $table->longText('q_4_10')->nullable();
            $table->longText('q_4_11')->nullable();
            $table->longText('q_4_12')->nullable();
            $table->longText('q_4_13')->nullable();
            $table->longText('q_4_14')->nullable();
            $table->longText('q_4_15')->nullable();
            $table->longText('q_4_16')->nullable();
            $table->longText('a_4')->nullable();
            $table->longText('a_5')->nullable();
            $table->longText('a_6')->nullable();
            $table->longText('q_7')->nullable();
            $table->longText('a_7')->nullable();
            $table->longText('q_8')->nullable();
            $table->longText('a_8')->nullable();
            $table->longText('a_9')->nullable();
            $table->longText('q_10')->nullable();
            $table->longText('a_10_1')->nullable();
            $table->longText('a_10_2')->nullable();
            $table->longText('a_10_3')->nullable();
            $table->longText('a_10_4')->nullable();
            $table->longText('a_10_5')->nullable();
            $table->longText('a_10_6')->nullable();
            $table->longText('a_10_7')->nullable();
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
        Schema::dropIfExists('games');
    }
}

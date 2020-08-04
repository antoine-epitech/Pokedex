<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pokemon_id')->unsigned();
            $table->integer('hp')->nullable();
            $table->integer('attack')->nullable();
            $table->integer('defense')->nullable();
            $table->integer('sp_attack')->nullable();
            $table->integer('sp_defense')->nullable();
            $table->integer('speed')->nullable();
            $table->foreign('pokemon_id')
                    ->references('pok_id')
                    ->on('pokedex')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');

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
        Schema::dropIfExists('stats');
    }
}

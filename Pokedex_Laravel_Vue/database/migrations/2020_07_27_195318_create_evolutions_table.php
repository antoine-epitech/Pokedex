<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evolutions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pok_base')->unsigned();
            $table->integer('id_pok_evol')->unsigned();
            $table->integer('lvl_evol_pok');
            $table->foreign('id_pok_base')
            ->references('pok_id')
            ->on('pokedex')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->foreign('id_pok_evol')
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
        Schema::dropIfExists('evolutions');
    }
}

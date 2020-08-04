<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaknessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weaknesses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pokedex_id')->unsigned();
            $table->float('bug')->nullable();
            $table->float('dragon')->nullable();
            $table->float('electric')->nullable();
            $table->float('fairy')->nullable();
            $table->float('fight')->nullable();
            $table->float('fire')->nullable();
            $table->float('flying')->nullable();
            $table->float('ghost')->nullable();
            $table->float('grass')->nullable();
            $table->float('ground')->nullable();
            $table->float('ice')->nullable();
            $table->float('normal')->nullable();
            $table->float('poison')->nullable();
            $table->float('psychic')->nullable();
            $table->float('rock')->nullable();
            $table->float('steel')->nullable();
            $table->float('water')->nullable();
            $table->foreign('pokedex_id')
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
        Schema::dropIfExists('weaknesses');
    }
}

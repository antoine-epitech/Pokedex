<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('pok_id')->unsigned();
            $table->string('name');
            $table->timestamps();
            $table->primary(['user_id', 'pok_id']);
            $table->foreign('pok_id')
                    ->references('pok_id')
                    ->on('Pokedex')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team');
    }
}

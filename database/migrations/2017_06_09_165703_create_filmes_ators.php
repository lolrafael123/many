<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmesAtors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ator_filme', function (Blueprint $table) {
            
            $table->integer('filme_id')->unsigned();
            $table->foreign('filme_id')->references('id')->on('filmes');

            $table->integer('ator_id')->unsigned();
            $table->foreign('ator_id')->references('id')->on('ators');

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
        Schema::dropIfExists('filme_ator');
    }
}

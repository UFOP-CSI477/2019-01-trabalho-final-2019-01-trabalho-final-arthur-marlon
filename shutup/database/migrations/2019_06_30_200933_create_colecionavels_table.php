<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColecionavelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colecionavels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('linha');
            $table->string('tema');
            $table->string('edicao');
            $table->string('status_prod');
            $table->string('cor_cabelo');
            $table->string('cor_olhos');
            $table->string('cor_vestimentas');
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
        Schema::dropIfExists('colecionavels');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
//            $table->bigIncrements('id');
            $table->bigInteger('colecionavel_id');
            $table->bigInteger('user_id');
            $table->float('valor');
            $table->string('estado');
            $table->date('data_limite');
            $table->string('negociavel');
            $table->primary(['colecionavel_id', 'user_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('colecionavel_id')->references('id')->on('colecionavels');
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
        Schema::dropIfExists('compras');
    }
}

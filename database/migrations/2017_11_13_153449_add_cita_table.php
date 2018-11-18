<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha');
            $table->integer('tecnico_id')->unsigned();
            $table->integer('maquina_id')->unsigned();
            $table->foreign('tecnico_id')->references('id')->on('tecnico')->onDelete('cascade');
            $table->foreign('maquina_id')->references('id')->on('maquina')->onDelete('cascade');
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
        Schema::dropIfExists('cita');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMantenimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hora');
            $table->string('dia');
            $table->integer('maquina_id')->unsigned();
            $table->foreign('maquina_id')->references('id')->on('maquina')->onDelete('cascade');
            $table->integer('tecnico_id')->unsigned();
            $table->foreign('tecnico_id')->references('id')->on('tecnico')->onDelete('cascade');
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
        Schema::dropIfExists('mantenimiento');
    }
}

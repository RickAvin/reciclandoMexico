<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReparacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mantenimiento_id')->unsigned();
            $table->integer('pieza_id')->unsigned();
            $table->foreign('mantenimiento_id')->references('id')->on('mantenimiento')->onDelete('cascade');
            $table->foreign('pieza_id')->references('id')->on('pieza')->onDelete('cascade');
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
        Schema::dropIfExists('reparacion');
    }
}

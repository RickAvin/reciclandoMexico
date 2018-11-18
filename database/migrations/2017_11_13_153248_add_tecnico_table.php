<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTecnicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('fechaNac');
            $table->string('rfc');
            $table->integer('empresa_id')->unsigned();
            $table-> foreign('empresa_id')->references('id')->on('empresa')->onDelete('cascade');
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
        Schema::dropIfExists('tecnico');
    }
}

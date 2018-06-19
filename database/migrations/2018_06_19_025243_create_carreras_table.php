<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nivel_id')->unsigned()->nullable();
            $table->integer('mension_id')->unsigned()->nullable();
            $table->string('nombre');
            $table->string('resolucion');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('nivel_id')->references('id')->on('nivels')->onDelete('set null');
            $table->foreign('mension_id')->references('id')->on('mensions')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carreras');
    }
}

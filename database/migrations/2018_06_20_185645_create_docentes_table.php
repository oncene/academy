<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personal_id')->unsigned()->nullable();
            $table->string('especialidad');
            $table->string('historial_academico');
            $table->string('experiencia');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('personal_id')->references('id')->on('personals')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}

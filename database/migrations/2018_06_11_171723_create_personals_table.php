<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('imagen',50)->default('user.jpg')->nullable();
            $table->integer('ci');
            $table->string('expedido',20);
            $table->string('nombres',20);
            $table->string('paterno',10);
            $table->string('materno',10)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('sexo',10);
            $table->text('direccion');
            $table->text('ocupacion')->nullable();
            $table->string('estado_civil',20)->nullable();
            $table->string('email',50)->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('celular')->nullable();
            $table->text('historial_academico')->nullable();
            $table->string('red_facebook',150)->nullable();
            $table->string('red_twitter',150)->nullable();
            $table->string('red_instagram',150)->nullable();
            $table->string('red_google',150)->nullable();
            $table->string('especialidad',150)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
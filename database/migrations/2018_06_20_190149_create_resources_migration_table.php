<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrera_nivels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrera_id')->unsigned()->nullable();
            $table->integer('nivel_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('set null');
            $table->foreign('nivel_id')->references('id')->on('nivels')->onDelete('set null');
        });

        Schema::create('carrniv_semestres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrniv_id')->unsigned()->nullable();
            $table->integer('semestre_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrniv_id')->references('id')->on('carrera_nivels')->onDelete('set null');
            $table->foreign('semestre_id')->references('id')->on('semestres')->onDelete('set null');
        });

        Schema::create('carrnivsem_materias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrnivsem_id')->unsigned()->nullable();
            $table->integer('materia_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrnivsem_id')->references('id')->on('carrniv_semestres')->onDelete('set null');
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('set null');
        });

        Schema::create('carrniv_docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrniv_id')->unsigned()->nullable();
            $table->integer('docente_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrniv_id')->references('id')->on('carrera_nivels')->onDelete('set null');
            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('set null');
        });

        Schema::create('carrnivsemmat_docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrnivsemmat_id')->unsigned()->nullable();
            $table->integer('docente_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrnivsemmat_id')->references('id')->on('carrnivsem_materias')->onDelete('set null');
            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('set null');
        });

        Schema::create('carrnivsemmat_aulas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrnivsemmat_id')->unsigned()->nullable();
            $table->integer('aula_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrnivsemmat_id')->references('id')->on('carrnivsem_materias')->onDelete('set null');
            $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('set null');
        });

        Schema::create('carrnivsem_paralelos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrnivsem_id')->unsigned()->nullable();
            $table->integer('paralelo_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrnivsem_id')->references('id')->on('carrniv_semestres')->onDelete('set null');
            $table->foreign('paralelo_id')->references('id')->on('paralelos')->onDelete('set null');
        });

        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrnivsemmat_id')->unsigned()->nullable();
            $table->integer('carrnivsemmatdoce_id')->unsigned()->nullable();
            $table->integer('carrnivsemmataula_id')->unsigned()->nullable();
            $table->integer('carrnivsemparal_id')->unsigned()->nullable();
            $table->integer('hora_id')->unsigned()->nullable();
            $table->integer('dia_id')->unsigned()->nullable();
            $table->string('gestion')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrnivsemmat_id')->references('id')->on('carrnivsem_materias')->onDelete('set null');
            $table->foreign('carrnivsemmatdoce_id')->references('id')->on('carrnivsemmat_docentes')->onDelete('set null');
            $table->foreign('carrnivsemmataula_id')->references('id')->on('carrnivsemmat_aulas')->onDelete('set null');
            $table->foreign('carrnivsemparal_id')->references('id')->on('carrnivsem_paralelos')->onDelete('set null');
            $table->foreign('hora_id')->references('id')->on('horas')->onDelete('set null');
            $table->foreign('dia_id')->references('id')->on('dias')->onDelete('set null');
        });

        Schema::create('inscribirs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrniv_id')->unsigned()->nullable();
            $table->integer('estudiante_id')->unsigned()->nullable();
            $table->string('gestion')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrniv_id')->references('id')->on('carrera_nivels')->onDelete('set null');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('set null');
        });

        Schema::create('vencidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrnivsem_id')->unsigned()->nullable();
            $table->integer('carrnivsemmat_id')->unsigned()->nullable();
            $table->integer('inscribir_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrnivsem_id')->references('id')->on('carrniv_semestres')->onDelete('set null');
            $table->foreign('carrnivsemmat_id')->references('id')->on('carrnivsem_materias')->onDelete('set null');
            $table->foreign('inscribir_id')->references('id')->on('inscribirs')->onDelete('set null');
        });

        Schema::create('matriculacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrnivsemmat_id')->unsigned()->nullable();
            $table->integer('carrnivsemparal_id')->unsigned()->nullable();
            $table->integer('inscribir_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('carrnivsemmat_id')->references('id')->on('carrnivsem_materias')->onDelete('set null');
            $table->foreign('carrnivsemparal_id')->references('id')->on('carrnivsem_paralelos')->onDelete('set null');
            $table->foreign('inscribir_id')->references('id')->on('inscribirs')->onDelete('set null');
        });

        Schema::create('calificacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matriculacion_id')->unsigned()->nullable();
            $table->integer('parcial_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('matriculacion_id')->references('id')->on('matriculacions')->onDelete('set null');
            $table->foreign('parcial_id')->references('id')->on('parcials')->onDelete('set null');
        });

        Schema::create('nota_finals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matriculacion_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('matriculacion_id')->references('id')->on('matriculacions')->onDelete('set null');
        });
    }
/*
$table->integer('color_id')->unsigned()->nullable();
$table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_finals');
        Schema::dropIfExists('calificacions');
        Schema::dropIfExists('matriculacions');
        Schema::dropIfExists('vencidos');
        Schema::dropIfExists('inscribirs');
        Schema::dropIfExists('horarios');
        Schema::dropIfExists('carrnivsem_paralelos');
        Schema::dropIfExists('carrnivsemmat_aulas');
        Schema::dropIfExists('carrnivsemmat_docentes');
        Schema::dropIfExists('carrniv_docentes');
        Schema::dropIfExists('carrnivsem_materias');
        Schema::dropIfExists('carrniv_semestres');
        Schema::dropIfExists('carrera_nivels');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ci');
            $table->string('expedido',20);
            $table->string('nombres',20);
            $table->string('paterno',10);
            $table->string('materno',10)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('sexo',2);
            $table->string('dir_provincia',100)->nullable();
            $table->string('dir_zona',100)->nullable();
            $table->string('dir_calle',100)->nullable();
            $table->string('dir_nro',100)->nullable();
            $table->string('estado_civil',20)->nullable();
            $table->text('ocupacion')->nullable();
            $table->string('email',50)->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('celular')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutors');
    }
}

<?php

use Illuminate\Database\Seeder;

class DocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Docente::create([
            'personal_id'  => '3',
            'especialidad'  => 'QUIMICA',
            'historial_academico'  => 'LICENCIADO EN INFORMATICA',
            'experiencia'  => '2 AÑOS EN EL CAMPO LABORAL',
        ]);
    }
}

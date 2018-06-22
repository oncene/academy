<?php

use Illuminate\Database\Seeder;

class MateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Materia::create([
            'nombre'  => 'QUIMICA',
            'sigla'  => 'QUI-110',
            'carga_horaria'  => '80',
        ]);
        \App\Model\Materia::create([
            'nombre'  => 'FISICA',
            'sigla'  => 'FIS-210',
            'carga_horaria'  => '90',
        ]);
    }
}

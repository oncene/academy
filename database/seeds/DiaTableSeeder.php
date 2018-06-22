<?php

use Illuminate\Database\Seeder;

class DiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Dia::create([
            'nombre'  => 'LUNES',
        ]);
        \App\Model\Dia::create([
            'nombre'  => 'MARTES',
        ]);
        \App\Model\Dia::create([
            'nombre'  => 'MIERCOLES',
        ]);
        \App\Model\Dia::create([
            'nombre'  => 'JUEVES',
        ]);
        \App\Model\Dia::create([
            'nombre'  => 'VIERNES',
        ]);
        \App\Model\Dia::create([
            'nombre'  => 'SABADO',
        ]);
    }
}

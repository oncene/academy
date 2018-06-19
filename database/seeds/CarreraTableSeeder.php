<?php

use Illuminate\Database\Seeder;

class CarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Carrera::create([
            'nombre'  => 'Electronica',
            'resolucion' => '213MC2',
        ]);
        \App\Model\Carrera::create([
            'nombre'  => 'Economia',
            'resolucion' => 'E13MC2',
        ]);
        \App\Model\Carrera::create([
            'nombre'  => 'Comercial',
            'resolucion' => 'C5CCR2',
        ]);
    }
}

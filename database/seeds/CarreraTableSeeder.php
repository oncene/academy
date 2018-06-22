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
            'mension_id' => '1',
            'nombre'  => 'INGENIERIA ELECTRONICA',
            'resolucion' => '213MC2',
        ]);
        \App\Model\Carrera::create([
            'nombre'  => 'CIENCIAS DE LA ECONOMIA',
            'resolucion' => 'E13MC2',
        ]);
        \App\Model\Carrera::create([
            'mension_id' => '2',
            'nombre'  => 'INGENIERIA COMERCIAL',
            'resolucion' => 'C5CCR2',
        ]);
    }
}

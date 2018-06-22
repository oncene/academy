<?php

use Illuminate\Database\Seeder;

class SemestreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Semestre::create([
            'nombre'  => 'PRIMER SEMESTRE',
        ]);
        \App\Model\Semestre::create([
            'nombre'  => 'SEGUNDO SEMESTRE',
        ]);
        \App\Model\Semestre::create([
            'nombre'  => 'TERCER SEMESTRE',
        ]);
        \App\Model\Semestre::create([
            'nombre'  => 'CUARTO SEMESTRE',
        ]);
        \App\Model\Semestre::create([
            'nombre'  => 'QUINTO SEMESTRE',
        ]);
        \App\Model\Semestre::create([
            'nombre'  => 'SEXTO SEMESTRE',
        ]);
        \App\Model\Semestre::create([
            'nombre'  => 'SEPTIMO SEMESTRE',
        ]);
        \App\Model\Semestre::create([
            'nombre'  => 'OCTAVO SEMESTRE',
        ]);
        \App\Model\Semestre::create([
            'nombre'  => 'NOVENO SEMESTRE',
        ]);
        \App\Model\Semestre::create([
            'nombre'  => 'DECIMO SEMESTRE',
        ]);
    }
}

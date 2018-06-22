<?php

use Illuminate\Database\Seeder;

class MedioComunicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\MedioComunicacion::create([
            'nombre'  => 'INTERNET',
        ]);
        \App\Model\MedioComunicacion::create([
            'nombre'  => 'RADIO',
        ]);
        \App\Model\MedioComunicacion::create([
            'nombre'  => 'PERIODICO',
        ]);
        \App\Model\MedioComunicacion::create([
            'nombre'  => 'VOZ POR TERCEROS',
        ]);
    }
}

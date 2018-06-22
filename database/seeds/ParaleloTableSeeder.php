<?php

use Illuminate\Database\Seeder;

class ParaleloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Paralelo::create([
            'nombre'  => 'PRIMERO A',
        ]);
        \App\Model\Paralelo::create([
            'nombre'  => 'PRIMERO B',
        ]);
        \App\Model\Paralelo::create([
            'nombre'  => 'PRIMERO C',
        ]);
        \App\Model\Paralelo::create([
            'nombre'  => 'SEGUNDO A',
        ]);
        \App\Model\Paralelo::create([
            'nombre'  => 'SEGUNDO B',
        ]);
        \App\Model\Paralelo::create([
            'nombre'  => 'SEGUNDO C',
        ]);
        \App\Model\Paralelo::create([
            'nombre'  => 'TERCERO A',
        ]);
        \App\Model\Paralelo::create([
            'nombre'  => 'CUARTO A',
        ]);
    }
}

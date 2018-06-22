<?php

use Illuminate\Database\Seeder;

class ParcialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Parcial::create([
            'nombre'  => 'PRIMER PARCIAL',
        ]);
        \App\Model\Parcial::create([
            'nombre'  => 'SEGUNDO PARCIAL',
        ]);
        \App\Model\Parcial::create([
            'nombre'  => 'TERCER PARCIAL',
        ]);
    }
}

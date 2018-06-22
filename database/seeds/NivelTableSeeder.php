<?php

use Illuminate\Database\Seeder;

class NivelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Nivel::create([
            'nombre'  => 'TECNICO MEDIO',
        ]);
        \App\Model\Nivel::create([
            'nombre'  => 'TECNICO SUPERIOR',
        ]);
        \App\Model\Nivel::create([
            'nombre'  => 'LICENCIATURA',
        ]);
    }
}

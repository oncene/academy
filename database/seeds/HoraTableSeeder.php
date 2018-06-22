<?php

use Illuminate\Database\Seeder;

class HoraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Hora::create([
            'hora_inicio'  => '8:00',
            'hora_fin'  => '9:30',
            'turno'  => 'MAÑANA',
        ]);
        \App\Model\Hora::create([
            'hora_inicio'  => '9:30',
            'hora_fin'  => '11:00',
            'turno'  => 'MAÑANA',
        ]);
        \App\Model\Hora::create([
            'hora_inicio'  => '11:00',
            'hora_fin'  => '12:30',
            'turno'  => 'MAÑANA',
        ]);
        \App\Model\Hora::create([
            'hora_inicio'  => '12:30',
            'hora_fin'  => '2:00',
            'turno'  => 'TARDE',
        ]);
        \App\Model\Hora::create([
            'hora_inicio'  => '2:00',
            'hora_fin'  => '3:30',
            'turno'  => 'TARDE',
        ]);
        \App\Model\Hora::create([
            'hora_inicio'  => '3:30',
            'hora_fin'  => '5:00',
            'turno'  => 'TARDE',
        ]);
        \App\Model\Hora::create([
            'hora_inicio'  => '5:00',
            'hora_fin'  => '6:30',
            'turno'  => 'TARDE',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class HabilitarParcialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\HabilitarParcial::create([
            'parcial_id'  => '1',
            'fecha_inicio'  => '2018-06-21 8:00',
            'fecha_fin'  => '2018-06-25 8:00',
        ]);
    }
}

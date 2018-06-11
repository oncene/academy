<?php

use Illuminate\Database\Seeder;

class ConfiguracionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Configuracion::create([
            'user_id'  => '1',
            'color_id' => '2',
        ]);
        \App\Model\Configuracion::create([
            'user_id'  => '2',
            'color_id' => '4',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Color::create([
            'descripcion'  => 'purple',
            'color' => '#6572b8',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'blue',
            'color' => '#60bafd',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'cyan',
            'color' => '#00cfd1',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'green',
            'color' => '#50d38a',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'orange',
            'color' => '#ffc323',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'blush',
            'color' => '#ff758e',
        ]);
    }
}

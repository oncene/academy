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
            'descripcion'  => 'bg-primary',
            'color' => '#666EE8',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-primary bg-darken-2',
            'color' => '#535BE2',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-danger',
            'color' => '#FF4961',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-danger bg-lighten-2',
            'color' => '#FF8090',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-success',
            'color' => '#28D094',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-success bg-darken-3',
            'color' => '#18BE77',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-warning',
            'color' => '#FF9149',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-warning bg-lighten-2',
            'color' => '#FFB280',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-warning bg-darken-3',
            'color' => '#FF7431',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-info',
            'color' => '#1E9FF2',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-blue bg-darken-2',
            'color' => '#1976D2',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-red',
            'color' => '#F44336',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-red bg-darken-2',
            'color' => '#D32F2F',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-pink',
            'color' => '#E91E63',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-pink bg-darken-2',
            'color' => '#C2185B',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-purple',
            'color' => '#9C27B0',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-purple bg-darken-2',
            'color' => '#7B1FA2',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-cyan',
            'color' => '#00BCD4',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-cyan bg-darken-2',
            'color' => '#0097A7',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-teal',
            'color' => '#009688',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-teal bg-darken-2',
            'color' => '#00796B',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-yellow bg-darken-2',
            'color' => '#FBC02D',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-yellow bg-darken-3',
            'color' => '#F9A825',
        ]);
        \App\Model\Color::create([
            'descripcion'  => 'bg-yellow bg-darken-4',
            'color' => '#F57F17',
        ]);
    }
}

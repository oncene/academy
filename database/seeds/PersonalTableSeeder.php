<?php

use Illuminate\Database\Seeder;

class PersonalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Personal::create([
            'user_id'  => 1,
            'ci'  => '6589658',
            'expedido'  => 'LP',
            'nombres'  => 'Brigite',
            'paterno'  => 'Cardoso',
            'materno'  => 'Rocabado',
            'fecha_nacimiento'  => '2000-04-04',
            'sexo'  => 'F',
            'estado_civil'  => 'SOLTERO',
            'email'  => 'admin@gmail.com',
            'telefono'  => '8985698',
            'celular'  => '6589658',
            'red_facebook'  => 'http://facebook/brigite',
            'red_twitter'  => 'http://twitter/brigite',
            'red_instagram'  => 'http://instagram/brigite',
            'red_google'  => 'http://google/brigite',
        ]);

    }
}

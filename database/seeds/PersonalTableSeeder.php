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

        \App\Model\Personal::create([
            'user_id'  => 2,
            'ci'  => '6985478',
            'expedido'  => 'LP',
            'nombres'  => 'JUAN GABRIEL',
            'paterno'  => 'TORREZ',
            'materno'  => 'PUÑO',
            'fecha_nacimiento'  => '1970-04-04',
            'sexo'  => 'M',
            'estado_civil'  => 'SOLTERO',
            'email'  => '1@gmail.com',
            'telefono'  => '8985698',
            'celular'  => '6589658',
        ]);

        \App\Model\Personal::create([
            'user_id'  => 3,
            'ci'  => '1124568',
            'expedido'  => 'LP',
            'nombres'  => 'BRANDON',
            'paterno'  => 'NOGALES',
            'materno'  => 'ORTUÑO',
            'fecha_nacimiento'  => '1980-04-04',
            'sexo'  => 'M',
            'estado_civil'  => 'SOLTERO',
            'email'  => '2@gmail.com',
            'telefono'  => '898238',
            'celular'  => '65897452',
            'red_facebook'  => 'http://facebook/ortuño',
            'red_twitter'  => 'http://twitter/ortuño',
            'red_instagram'  => 'http://instagram/ortuño',
            'red_google'  => 'http://google/ortuño',
        ]);

        \App\Model\Personal::create([
            'ci'  => '5687548',
            'expedido'  => 'LP',
            'nombres'  => 'JHANNETH',
            'paterno'  => 'NOGALES',
            'materno'  => 'TEJADA',
            'fecha_nacimiento'  => '2000-04-04',
            'sexo'  => 'F',
            'estado_civil'  => 'SOLTERO/A',
            'email'  => '4@gmail.com',
            'telefono'  => '8589658',
            'celular'  => '69896986',
            'red_facebook'  => 'http://facebook/janneth',
            'red_twitter'  => 'http://twitter/janneth',
            'red_instagram'  => 'http://instagram/janneth',
            'red_google'  => 'http://google/janneth',
        ]);

    }
}

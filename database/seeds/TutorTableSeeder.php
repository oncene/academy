<?php

use Illuminate\Database\Seeder;

class TutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Tutor::create([
            'ci'  => '2356896',
            'expedido'  => 'LP',
            'nombres'  => 'BRUNO JOSE',
            'paterno'  => 'VILLEGAS',
            'materno'  => 'MARTINEZ',
            'fecha_nacimiento'  => '1990-10-10',
            'sexo'  => 'M',
            'dir_provincia'  => 'LA PAZ EL ALTO',
            'dir_zona'  => '16 DE JULIO',
            'dir_calle'  => 'AVIEDO 19 DE MARZO',
            'dir_nro'  => '75',
            'estado_civil'  => 'SOLTERO',
            'ocupacion'  => 'CHOFER',
            'celular'  => '6589658',
        ]);
    }
}

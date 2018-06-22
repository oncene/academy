<?php

use Illuminate\Database\Seeder;

class EstudianteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Estudiante::create([
            'personal_id'  => '4',
            'profesion_futuro'  => 'QUIERO SER ASTRONAUTA',
        ]);
    }
}

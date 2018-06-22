<?php

use Illuminate\Database\Seeder;

class AdministrativoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Administrativo::create([
            'personal_id'  => '2',
            'ocupacion_institucion'  => 'SECRETARIO EJECUTIVO',
            'historial_academico'  => 'LICENCIADO EN IDIOMAS',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class AulaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Aula::create([
            'nombre'  => 'SALON 403',
            'tipo_aula'  => '1',
        ]);
        \App\Model\Aula::create([
            'nombre'  => 'LABORATORIO DE QUIMICA 51',
            'tipo_aula'  => '2',
        ]);
        \App\Model\Aula::create([
            'nombre'  => 'LABORATORIO DE FISICA 33',
            'tipo_aula'  => '2',
        ]);
        \App\Model\Aula::create([
            'nombre'  => 'AUDITORIO',
            'tipo_aula'  => '3',
        ]);
    }
}

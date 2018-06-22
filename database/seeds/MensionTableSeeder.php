<?php

use Illuminate\Database\Seeder;

class MensionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Mension::create([
            'nombre'  => 'INFORMATICA',
        ]);
        \App\Model\Mension::create([
            'nombre'  => 'COMERCIAL',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'  => 'Brigite Cardoso Rocabado',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        \App\User::create([
            'name'  => 'Juan Gagriel',
            'email' => '1@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        \App\User::create([
            'name'  => 'Brandon Nogales',
            'email' => '2@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}

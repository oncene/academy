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
            'name'  => 'BRIGITE CARDOSO',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        \App\User::create([
            'name'  => 'JUAN GABRIEL',
            'email' => '1@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        \App\User::create([
            'name'  => 'BRANDON NOGALES',
            'email' => '2@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}

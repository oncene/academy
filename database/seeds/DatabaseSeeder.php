<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
//         $this->call(CalendarioTableSeeder::class);
         $this->call(ColorTableSeeder::class);
         $this->call(ConfiguracionTableSeeder::class);
         $this->call(PermissionTableSeeder::class);
    }
}

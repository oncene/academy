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
         $this->call(PersonalTableSeeder::class);
         $this->call(MensionTableSeeder::class);
         $this->call(CarreraTableSeeder::class);
         $this->call(NivelTableSeeder::class);
         $this->call(SemestreTableSeeder::class);
         $this->call(MateriaTableSeeder::class);
         $this->call(TutorTableSeeder::class);
         $this->call(AdministrativoTableSeeder::class);
         $this->call(MedioComunicacionTableSeeder::class);
         $this->call(ParaleloTableSeeder::class);
         $this->call(AulaTableSeeder::class);
         $this->call(HoraTableSeeder::class);
         $this->call(DiaTableSeeder::class);
         $this->call(DocenteTableSeeder::class);
         $this->call(EstudianteTableSeeder::class);
         $this->call(ParcialTableSeeder::class);
         $this->call(HabilitarParcialTableSeeder::class);

         $this->call(ResourcesTableSeeder::class);
    }
}

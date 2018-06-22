<?php

use Illuminate\Database\Seeder;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\CarreraNivel::create([
            'carrera_id'  => '1',
            'nivel_id'  => '1',
        ]);
        \App\Model\CarreraNivel::create([
            'carrera_id'  => '1',
            'nivel_id'  => '2',
        ]);
        \App\Model\CarreraNivel::create([
            'carrera_id'  => '2',
            'nivel_id'  => '2',
        ]);


        \App\Model\CarrnivSemestre::create([
            'carrniv_id'  => '1',
            'semestre_id'  => '1',
        ]);
        \App\Model\CarrnivSemestre::create([
            'carrniv_id'  => '1',
            'semestre_id'  => '2',
        ]);
        \App\Model\CarrnivSemestre::create([
            'carrniv_id'  => '1',
            'semestre_id'  => '3',
        ]);
        \App\Model\CarrnivSemestre::create([
            'carrniv_id'  => '2',
            'semestre_id'  => '1',
        ]);


        \App\Model\CarrnivsemMateria::create([
            'carrnivsem_id'  => '1',
            'materia_id'  => '1',
        ]);
        \App\Model\CarrnivsemMateria::create([
            'carrnivsem_id'  => '1',
            'materia_id'  => '2',
        ]);
        \App\Model\CarrnivsemMateria::create([
            'carrnivsem_id'  => '2',
            'materia_id'  => '2',
        ]);


        \App\Model\CarrnivDocente::create([
            'carrniv_id'  => '1',
            'docente_id'  => '1',
        ]);


        \App\Model\CarrnivsemmatDocente::create([
            'carrnivsemmat_id'  => '1',
            'docente_id'  => '1',
        ]);


        \App\Model\CarrnivsemmatAula::create([
            'carrnivsemmat_id'  => '1',
            'aula_id'  => '1',
        ]);
        \App\Model\CarrnivsemmatAula::create([
            'carrnivsemmat_id'  => '1',
            'aula_id'  => '2',
        ]);


        \App\Model\CarrnivsemParalelo::create([
            'carrnivsem_id'  => '1',
            'paralelo_id'  => '1',
        ]);


        \App\Model\Horario::create([
            'carrnivsemmat_id'  => '1',
            'carrnivsemmatdoce_id'  => '1',
            'carrnivsemmataula_id'  => '1',
            'carrnivsemparal_id'  => '1',
            'hora_id'  => '1',
            'dia_id'  => '1',
            'gestion'  => '2018',
        ]);


        \App\Model\Inscribir::create([
            'carrniv_id'  => '1',
            'estudiante_id'  => '1',
            'fecha'  => '2018-06-25',
        ]);


        \App\Model\Matriculacion::create([
            'carrnivsemmat_id'  => '1',
            'carrnivsemparal_id'  => '1',
            'inscribir_id'  => '1',
            'fecha'  => '2018-06-25',
        ]);

        \App\Model\NotaFinal::create([
            'matriculacion_id'  => '1',
            'fecha'  => '2018-06-25',
            'parcial_primero'  => '20',
            'parcial_segundo'  => '30',
            'parcial_tercero'  => '30',
            'nota_final'  => '80',
            'estado'  => 'APROBADO',
        ]);







    }
}

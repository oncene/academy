<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permission list
        Permission::create(['name' => 'administracion.privilegios.listar']);
        Permission::create(['name' => 'administracion.privilegios.crear']);
        Permission::create(['name' => 'administracion.privilegios.editar']);
        Permission::create(['name' => 'administracion.privilegios.eliminar']);

        //Admin
        $admin = Role::create(['name' => 'Administrador']);

//        $admin->givePermissionTo([
//            'products.index',
//            'products.edit',
//            'products.show',
//            'products.create',
//            'products.destroy'
//        ]);
        //$admin->givePermissionTo('products.index');
        $admin->givePermissionTo(Permission::all());

        //Secretario
        $sec = Role::create(['name' => 'Secretariado']);

        $sec->givePermissionTo([
            'administracion.privilegios.listar',
        ]);

        //User Admin
        $user = User::find(1);
        $user->assignRole('Administrador');

        $user2 = User::find(2);
        $user2->assignRole('Secretariado');

    }
}

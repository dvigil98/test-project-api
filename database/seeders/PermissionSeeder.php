<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Src\Roles\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'id' => 1,
                'code' => 'ver_dashboard',
                'name' => 'Ver dashboard'
            ],
            [
                'id' => 2,
                'code' => 'listar_roles',
                'name' => 'Listar roles'
            ],
            [
                'id' => 3,
                'code' => 'agregar_roles',
                'name' => 'Agregar roles'
            ],
            [
                'id' => 4,
                'code' => 'editar_roles',
                'name' => 'Editar roles'
            ],
            [
                'id' => 5,
                'code' => 'eliminar_roles',
                'name' => 'Eliminar roles'
            ],
            [
                'id' => 6,
                'code' => 'ver_detalles_roles',
                'name' => 'Ver detalles de roles'
            ],
            [
                'id' => 7,
                'code' => 'asignar_permisos_roles',
                'name' => 'Asignar permisos a roles'
            ],
            [
                'id' => 8,
                'code' => 'listar_usuarios',
                'name' => 'Listar usuarios'
            ],
            [
                'id' => 9,
                'code' => 'agregar_usuarios',
                'name' => 'Agregar usuarios'
            ],
            [
                'id' => 10,
                'code' => 'editar_usuarios',
                'name' => 'Editar usuarios'
            ],
            [
                'id' => 11,
                'code' => 'eliminar_usuarios',
                'name' => 'Eliminar usuarios'
            ],
            [
                'id' => 12,
                'code' => 'ver_detalles_usuarios',
                'name' => 'Ver detalles de usuarios'
            ],
            [
                'id' => 13,
                'code' => 'listar_empleados',
                'name' => 'Listar empleados'
            ],
            [
                'id' => 14,
                'code' => 'agregar_empleados',
                'name' => 'Agregar empleados'
            ],
            [
                'id' => 15,
                'code' => 'editar_empleados',
                'name' => 'Editar empleados'
            ],
            [
                'id' => 16,
                'code' => 'eliminar_empleados',
                'name' => 'Eliminar empleados'
            ],
            [
                'id' => 17,
                'code' => 'ver_detalles_empleados',
                'name' => 'Ver detalles de empleados'
            ],
            [
                'id' => 18,
                'code' => 'listar_clientes',
                'name' => 'Listar clientes'
            ],
            [
                'id' => 19,
                'code' => 'agregar_clientes',
                'name' => 'Agregar clientes'
            ],
            [
                'id' => 20,
                'code' => 'editar_clientes',
                'name' => 'Editar clientes'
            ],
            [
                'id' => 21,
                'code' => 'eliminar_clientes',
                'name' => 'Eliminar clientes'
            ],
            [
                'id' => 22,
                'code' => 'ver_detalles_clientes',
                'name' => 'Ver detalles de clientes'
            ],
            [
                'id' => 23,
                'code' => 'listar_vehiculos',
                'name' => 'Listar vehiculos'
            ],
            [
                'id' => 24,
                'code' => 'agregar_vehiculos',
                'name' => 'Agregar vehiculos'
            ],
            [
                'id' => 25,
                'code' => 'editar_vehiculos',
                'name' => 'Editar vehiculos'
            ],
            [
                'id' => 26,
                'code' => 'eliminar_vehiculos',
                'name' => 'Eliminar vehiculos'
            ],
            [
                'id' => 27,
                'code' => 'ver_detalles_vehiculos',
                'name' => 'Ver detalles de vehiculos'
            ],
            [
                'id' => 28,
                'code' => 'listar_rentas_vehiculos',
                'name' => 'Listar rentas de vehiculos'
            ],
            [
                'id' => 29,
                'code' => 'agregar_rentas_vehiculos',
                'name' => 'Agregar rentas de vehiculos'
            ],
            [
                'id' => 30,
                'code' => 'editar_rentas_vehiculos',
                'name' => 'Editar rentas de vehiculos'
            ],
            [
                'id' => 31,
                'code' => 'eliminar_rentas_vehiculos',
                'name' => 'Eliminar rentas de vehiculos'
            ],
            [
                'id' => 32,
                'code' => 'ver_rentas_vehiculos',
                'name' => 'Ver rentas de vehiculos'
            ]
        ];

        foreach ($permissions as $p) {
            $permission = new Permission();
            $permission->id = $p['id'];
            $permission->code = $p['code'];
            $permission->name = $p['name'];
            $permission->save();
        }
    }
}

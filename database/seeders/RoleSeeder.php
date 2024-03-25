<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Src\Roles\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'Administrador'
            ]
        ];

        foreach ($roles as $r) {
            $role = new Role();
            $role->id = $r['id'];
            $role->name = $r['name'];
            $role->save();
        }
    }
}

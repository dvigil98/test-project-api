<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Src\Users\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'role_id' => 1,
                'code' => 0,
                'name' => 'David Vigil',
                'email' => 'david@email.com',
                'password' => 'password',
                'active' => true
            ],
            [
                'id' => 2,
                'role_id' => 1,
                'code' => 0,
                'name' => 'Enrique Vigil',
                'email' => 'kike@email.com',
                'password' => 'password',
                'active' => false
            ]
        ];

        foreach ($users as $u) {
            $user = new User();
            $user->id = $u['id'];
            $user->role_id = $u['role_id'];
            $user->code = $u['code'];
            $user->name = $u['name'];
            $user->email = $u['email'];
            $user->password = Hash::make($u['password']);
            $user->active = $u['active'];
            $user->save();
        }
    }
}

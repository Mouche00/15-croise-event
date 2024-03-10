<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    static $roleNames = [
        'admin',
        'organizer',
        'client'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach(self::$roleNames as $roleName) {

            $role = Role::create([
                'name' => $roleName
            ]);

            User::factory()->create([
                'email' => $role->name . '@example.net',
                'role_id' => $role->id
            ]);
        }
    }
}

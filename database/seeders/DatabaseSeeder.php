<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $roleNames = ['admin', 'organizer', 'client'];

        foreach($roleNames as $roleName) {

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

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        // Create roles
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        // Create permissions
        $createPost = Permission::create(['name' => 'create-posts']);

        // Assign permission to role
        $admin->givePermissionTo($createPost);

        // Assign role to user (Example: Admin user with ID 1)
        $user = \App\Models\User::find(1);
        $user->assignRole('admin');
    }
}

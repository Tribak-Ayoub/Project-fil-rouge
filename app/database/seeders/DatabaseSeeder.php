<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(RoleSeeder::class);
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'test1@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'apprenant',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'test2@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'apprenant',
            ],
            [
                'name' => 'Samuel Johnson',
                'email' => 'test3@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'apprenant',
            ],
        ];
    
        // Create users
        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
            ]);

            // Assign role to user
            $user->assignRole($userData['role']);
        }
        
        $this->call([
            ReglesDeSanctionsSeeder::class,
            SeancesSeeder::class,
            AbsencesSeeder::class,
            JustificationAbsencesSeeder::class,
            SanctionAbsencesSeeder::class,
            NotificationsSeeder::class,
        ]);
    }
}

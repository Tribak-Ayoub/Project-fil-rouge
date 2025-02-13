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

        $users = [
            [
                'name' => 'John Doe',
                'email' => 'test1@gmail.com',
                'password' => bcrypt('password'), // Ensure the password is hashed
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'test2@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Samuel Johnson',
                'email' => 'test3@gmail.com',
                'password' => bcrypt('password'),
            ],
        ];
    
        // Create users
        foreach ($users as $user) {
            User::create($user);
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

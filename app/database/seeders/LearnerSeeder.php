<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            Learner::create([
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
            ]);
        }
    }
}

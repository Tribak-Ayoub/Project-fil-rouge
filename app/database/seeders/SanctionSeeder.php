<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            Sanction::create([
                'category' => $faker->word,
                'startDate' => $faker->date(),
                'endDate' => $faker->date(),
                'status' => $faker->randomElement(['Pending', 'Applied', 'Completed']),
                'learner_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
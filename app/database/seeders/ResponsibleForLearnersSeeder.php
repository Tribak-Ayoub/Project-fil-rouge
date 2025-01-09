<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResponsibleForLearnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 3) as $index) {
            ResponsibleForLearners::create([
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
            ]);
        }
    }
}

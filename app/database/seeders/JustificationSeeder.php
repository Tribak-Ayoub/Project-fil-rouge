<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JustificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            Justification::create([
                'document' => $faker->url,
                'submissionDate' => $faker->date(),
                'approved' => $faker->boolean,
                'absence_id' => $faker->numberBetween(1, 20),
            ]);
        }
    }
}

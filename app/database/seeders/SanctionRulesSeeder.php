<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanctionRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            SanctionRules::create([
                'title' => $faker->word,
                'description' => $faker->sentence,
                'maxAbsences' => $faker->numberBetween(1, 5),
                'penalty' => $faker->word,
                'notificationThreshold' => $faker->numberBetween(1, 3),
                'Duration' => $faker->numberBetween(7, 30),
                'EffectiveDate' => $faker->date(),
            ]);
        }
    }
}

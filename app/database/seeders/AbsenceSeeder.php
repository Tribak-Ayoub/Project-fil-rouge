<?php

namespace Database\Seeders;

use App\Models\Absence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AbsenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 20) as $index) {
            Absence::create([
                'justified' => $faker->boolean,
                'learner_id' => $faker->numberBetween(1, 10),
                'session_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
